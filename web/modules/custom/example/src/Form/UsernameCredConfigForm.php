<?php

namespace Drupal\example\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class UsernameCredConfigForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'username_admin_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
        'example.setting',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('example.setting');
    $form['first_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First name'),
      '#default_value' => $config->get('first_name'),
    ];

    $form['last_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Last name'),
      '#default_value' => $config->get('last_name'),
      ];
    
      return parent::buildForm($form, $form_state);
  }

   /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('example.setting')
      ->set('first_name', $form_state->getValue('first_name'))
      ->set('last_name', $form_state->getValue('last_name'))
      ->save();
      parent::submitForm($form, $form_state);
  }

}