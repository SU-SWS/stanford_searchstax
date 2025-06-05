<?php
/**
 * @file
 * Contains \Drupal\stanford_searchstax\Form\StanfordSearchstaxSettingsForm.
 */

namespace Drupal\stanford_searchstax\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class StanfordSearchstaxSettingsForm extends ConfigFormBase {
  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['stanford_searchstax.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'stanford_searchstax_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('stanford_searchstax.settings');
    $form['endpoint'] = [
      '#type' => 'textfield',
      '#title' => $this->t('SearchStax Endpoint'),
      '#default_value' => $config->get('endpoint'),
      '#description' => $this->t('Enter the SearchStax endpoint URL.'),
      '#required' => TRUE,
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('stanford_searchstax.settings')
      ->set('endpoint', $form_state->getValue('endpoint'))
      ->save();
    parent::submitForm($form, $form_state);
  }
}
