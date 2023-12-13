<?php

namespace Drupal\example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Welcome/Login' Block.
 *
 * @Block(
 *   id = "welcome_block",
 *   admin_label = @Translation("Welcome block"),
 *   category = @Translation("Welcome block"),
 * )
 */
class WelcomeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $is_active = \Drupal::currentUser()->id();
    if($is_active){
      $user = \Drupal\user\Entity\User::load($is_active);
      $name = $user->getAccountName();
      $block_text = 'Welcome, '.$name.'!';
    }
    else{
      $block_text = 'Log in';
    }
    return [
      '#markup' => $this->t($block_text),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheMaxAge() {
    return -1;
  }

}