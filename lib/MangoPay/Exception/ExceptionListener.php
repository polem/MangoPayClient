<?php

namespace MangoPay\Exception;

use Guzzle\Common\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Class ExceptionListener 
 * @author 
 */
class ExceptionListener implements EventSubscriberInterface
{
    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array('request.error' => array('onRequestError', -1));
    }

    /**
     * Throws a more meaningful request exception if available
     *
     * @param Event $event Event emitted
     */
    public function onRequestError(Event $event)
    {
        echo $event['response'];
        $error = json_decode((string) $event['response']->getBody(), true);
        $message = sprintf("Technical Message: %s\nUser Message: %s", $error['TechnicalMessage'], $error['UserMessage']);
        $exceptionClassName = sprintf("MangoPay\Exception\%sException", $error['Type']);
        $e = new $exceptionClassName($message);
        $event->stopPropagation();
        throw $e;
    }
}


