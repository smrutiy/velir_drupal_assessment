<?php

namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines controller one
 */
class ControllerOne extends ControllerBase{

    public function simpleText(){
        $uid = \Drupal::currentUser()->id();
        if($uid!=NULL){
            $user = \Drupal\user\Entity\User::load($uid);
            $name = $user->getAccountName();
        }
        else{
            $name = 'Anonymous';
        }
        
        $build = [
            '#markup' => $this->t('Hello, my name is '.$name),
        ];
        return $build;
    }
}

?>