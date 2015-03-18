<?php
/**
 * @file
 * Contains Drupal\dokk_resource\Form\BookingSettingsForm.
 */

namespace Drupal\dokk_resource\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class DokkResourceSettingsForm.
 * @package Drupal\dokk_resource\Form
 * @ingroup dokk_resource
 */
class BookingSettingsForm extends FormBase {
  /**
   * Returns a unique string identifying the form.
   *
   * @return string
   *   The unique string identifying the form.
   */
  public function getFormId() {
    return 'dokk_resource_settings';
  }

  /**
   * Form submission handler.
   *
   * @param FormStateInterface $form
   *   An associative array containing the structure of the form.
   * @param array $form_state
   *   An associative array containing the current state of the form.
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Empty implementation of the abstract submit class.
  }


  /**
   * Define the form used for DokkResourceExample settings.
   * @return array
   *   Form definition array.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param FormStateInterface $form_state
   *   An associative array containing the current state of the form.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['booking_settings']['#markup'] = 'Settings form for Dokk resource. Manage field settings here.';
    return $form;
  }
}
