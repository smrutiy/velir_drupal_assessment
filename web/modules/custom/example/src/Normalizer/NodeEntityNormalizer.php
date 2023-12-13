<?php

namespace Drupal\example\Normalizer;

use Drupal\serialization\Normalizer\ContentEntityNormalizer;
use Drupal\Core\Datetime\DrupalDateTime;

/**
 * Converts the Drupal entity object structures to a normalized array.
 */
class NodeEntityNormalizer extends ContentEntityNormalizer {
  /**
   * The interface or class that this Normalizer supports.
   *
   * @var string
   */
  protected $supportedInterfaceOrClass = 'Drupal\node\NodeInterface';

  /**
   * {@inheritdoc}
   */
  public function normalize($entity, $format = NULL, array $context = array()) {
    $attributes = parent::normalize($entity, $format, $context);
    $attributes['velir'] = '212';

    // Return the $attributes with our new values.
    return $attributes;
  }
}