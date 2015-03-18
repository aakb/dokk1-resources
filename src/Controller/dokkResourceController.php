<?php
/**
 * @file
 * Contains \Drupal\dokk_resource\Controller\DokkResourceController.
 */

namespace Drupal\dokk_resource\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * DemoController.
 */
class DokkResourceController extends ControllerBase  {
  /**
   * Generates an example page.
   */
  public function requests() {
    return array(
      '#markup' => t('Hello World1!'),
    );
  }
  /**
   * Generates an example page.

  public function accepted() {
    return array(
      '#markup' => t('Hello World2!'),
    );
  }
   *    */
  /**
   * Generates an example page.
   */
  public function denied() {
    return array(
      '#markup' => t('Hello World3!'),
    );
  }
  /**
   * Generates an example page.
   */
  public function history() {
    return array(
      '#markup' => t('Hello World4!'),
    );
  }
}