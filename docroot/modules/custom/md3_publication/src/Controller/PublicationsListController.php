<?php

namespace Drupal\md3_publication\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * @file
 * Contollder for Publications list page.
 */

class PublicationsListController extends ControllerBase {

  /**
   * Build the Publications list page.
   */
  public function content() {
    $build = [
      '#markup' => $this->t('Hello World!'),
    ];
    return $build;
  }

}
