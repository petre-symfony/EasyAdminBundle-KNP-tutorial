<?php
namespace AppBundle\Controller\EasyAdmin;

use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use AppBundle\Entity\User;

class UserController extends BaseAdminController {
  /**
   * 
   * @param User $entity
   */
  protected function preUpdateEntity($entity) {
    $entity->setUpdatedAt(new \DateTime());
  }
}
