<?php
/**
 * @file
 * Contains \Drupal\stanford_searchstax\Controller\StanfordSearchstaxController.
 */

namespace Drupal\stanford_searchstax\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StanfordSearchstaxController extends ControllerBase {
  /**
   * Returns a simple search form and results placeholder.
   */
  public function searchPage() {
    $form = [
      '#markup' => '<div id="stanford-searchstax-search-form">SearchStax search form will go here.</div>',
    ];
    $results = [
      '#markup' => '<div id="stanford-searchstax-search-results">SearchStax results will go here.</div>',
    ];
    return [
      $form,
      $results,
    ];
  }
}
