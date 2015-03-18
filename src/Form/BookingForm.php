<?php
/**
 * @file
 * Contains Drupal\dokk_resource\Form\BookingForm.
 */

namespace Drupal\dokk_resource\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Language\Language;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the dokk_resource entity edit forms.
 *
 * @ingroup dokk_resource
 */
class BookingForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\dokk_resource\Entity\Booking */
    $form = parent::buildForm($form, $form_state);
    $entity = $this->entity;

    $form['langcode'] = array(
      '#title' => $this->t('Language'),
      '#type' => 'language_select',
      '#default_value' => $entity->getUntranslated()->language()->getId(),
      '#languages' => Language::STATE_ALL,
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $form_state->setRedirect('entity.dokk_resource_booking.collection');
    $entity = $this->getEntity();
    $entity->save();
  }
}
