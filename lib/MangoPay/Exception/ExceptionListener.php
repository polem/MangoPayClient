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
        $e = new Exception($event['response']);
        $event->stopPropagation();
        throw $e;
    }
}


