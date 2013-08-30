<?php

namespace MangoPay\Plugin;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Guzzle\Common\Event;

/**
 * Class MangoPaySecurityPlugin
 */
class MangoPaySecurityPlugin implements EventSubscriberInterface
{
    /**
     * privateKey
     *
     * @var resource
     */
    private $privateKey;

    /**
     * __construct
     *
     * @param string $privateKeyPath
     * @param string $privateKeyPassPhrase
     */
    public function __construct($privateKeyPath, $privateKeyPassPhrase = '')
    {
        $this->privateKey = openssl_pkey_get_private($privateKeyPath, $privateKeyPassPhrase);
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array('request.before_send' => 'onBeforeSend');
    }

    /**
     * {@inheritdoc}
     */
    public function onBeforeSend(Event $event)
    {
        $ts = time();

        $request = $event['request'];

        // add ts query parameter;
        $url = $request->getUrl(true);
        $url->setQuery('ts=' . $ts);
        $request->setUrl($url);

        // build data sring to sign
        $data = sprintf('%s|%s|', $request->getMethod(), str_replace($url->getScheme() . '://' . $url->getHost(), '', (string) $url));

        if(in_array($request->getMethod(), array('POST', 'PUT'))) {
            $body = $request->getBody();
            $data .= $body->read($body->getSize()) . '|';
        }

        // sign data string
        openssl_sign($data, $signedData, $this->privateKey, OPENSSL_ALGO_SHA1);
        $signedData = base64_encode($signedData);

        // add request header
        $request->setHeader('X-Leetchi-Signature', $signedData);
    }
}

