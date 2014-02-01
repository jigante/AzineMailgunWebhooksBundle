<?php
namespace Azine\MailgunWebhooksBundle\Tests;

use Azine\MailgunWebhooksBundle\Entity\MailgunWebhookEvent;
use Azine\MailgunWebhooksBundle\Entity\MailgunEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EventSubscriberMock implements EventSubscriberInterface {

    public static function getSubscribedEvents() {
        return array(
            MailgunEvent::CREATE_EVENT => 'handleCreate',
        );
    }

    public function handleCreate(MailgunWebhookEvent $event){

    }

}