<?php

namespace MangoPay;

use Guzzle\Service\Client as GuzzleClient;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Common\Event;

use MangoPay\Plugin\MangoPaySecurityPlugin;

/**
 * Class: Client
 *
 * @see GuzzleClient
 */
class Client extends GuzzleClient
{
    private $partnerId;
    private $version;

    /**
     * factory
     *
     * @param array $config
     */
    public static function factory($config = array()) {

        $baseUrl = sprintf('%s/%s/partner/%s/', $config['url'], $config['version'], $config['partner_id']);

        $options = array(
            'redirect.disable' => true,
            'curl.options'     => array(
                'CURLOPT_SSL_VERIFYHOST' => false,
                'CURLOPT_SSL_VERIFYPEER' => false,
            )
        );

        $client = new Client($baseUrl, $options);

        $securityPlugin = new MangoPaySecurityPlugin($config['private_key_path'], $config['private_key_pass_phrase']);
        $client->addSubscriber($securityPlugin);

        return $client;
    }

    public function __construct($baseUrl, $config = null) {
        $description = ServiceDescription::factory(__DIR__ . '/Resources/api.json');
        $this->setDescription($description);

        parent::__construct($baseUrl, $config);
    }
}


