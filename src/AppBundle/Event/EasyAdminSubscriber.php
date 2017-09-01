<?php
namespace AppBundle\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use JavierEguiluz\Bundle\EasyAdminBundle\Event\EasyAdminEvents;
use Symfony\Component\EventDispatcher\GenericEvent;

class EasyAdminSubscriber implements EventSubscriberInterface {
  public static function getSubscribedEvents() {
    return [
      EasyAdminEvents::PRE_UPDATE => 'onPreUpdate'
    ];
  }
  
  public function onPreUpdate(GenericEvent $event){
    dump($event);die();  
  }
}