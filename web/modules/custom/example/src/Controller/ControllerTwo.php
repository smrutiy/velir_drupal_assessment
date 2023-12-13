<?php

namespace Drupal\example\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\example\Controller\ControllerOne;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Defines controller two
 */
class ControllerTwo {

    /**
   * The controller one output string.
   *
   * @var \Drupal\example\Controller\ControllerOne
   */
  protected $controllerOneOutput;

  
  public function __construct() {
    $this->controllerOneOutput =  \Drupal::service('example.json_object');
  }

  /**
   * @return JsonResponse
   */
  public function textInJson(){
    $params = array();
    $content = $this->controllerOneOutput->simpleText()['#markup'];
    if (!empty($content)) {
      $params[] = [
        "text" => $content,
      ];
    }
    return new JsonResponse([ 'data' => $params, 'method' => 'GET', 'status'=> 200]);
  }
}

?>