<?php

namespace Drupal\example\Normalizer;

use Drupal\serialization\Normalizer\ContentEntityNormalizer;
use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\node\NodeInterface;

/**
 * Converts the Drupal entity object structures to a normalized array.
 */
class ArticleNodeEntityNormalizer extends ContentEntityNormalizer {
  /**
   * The interface or class that this Normalizer supports.
   *
   * @var string
   */
  protected $supportedInterfaceOrClass = 'Drupal\node\NodeInterface';

  /**
   * {@inheritdoc}
   */
  public function supportsNormalization($data, $format = NULL) {
    // If we aren't dealing with an object or the format is not supported return
    // now.
    if (!is_object($data) || !$this->checkFormat($format)) {
      return FALSE;
    }
    // This custom normalizer should be supported for "Article" nodes.
    if ($data instanceof NodeInterface && $data->getType() == 'article') {
      return TRUE;
    }
    // Otherwise, this normalizer does not support the $data object.
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function normalize($entity, $format = NULL, array $context = array()) {
    $attributes = parent::normalize($entity, $format, $context);

    $attributes['velir'] = '212';

    // Return the $attributes with our new value.
    return $attributes;
  }
}