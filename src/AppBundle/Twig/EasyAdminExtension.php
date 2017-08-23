<?php
namespace AppBundle\Twig;

class EasyAdminExtension extends \Twig_Extension{
  public function getFilters() {
    return [
      new \Twig_SimpleFilter(
        'filter_admin_actions',
        [$this, 'filterActions']
      )
    ];
  }
  
  public function filterActions(array $itemActions, $item){
    if ($item instanceof \AppBundle\Entity\Genus && $item->getIsPublished()){
      unset($itemActions['delete']);
    }
    
    return $itemActions;
  }
}
