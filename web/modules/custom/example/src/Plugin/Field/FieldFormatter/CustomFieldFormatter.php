<?php

namespace Drupal\example\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;


/**
 * Define the "custom field formatter".
 * 
 * @FieldFormatter(
 *   id = "custom_field_formatter",
 *   label = @Translation("Custom Field Formatter"),
 *   description = @Translation("Desc for Custom Field Formatter"),
 *   field_types = {
 *     "string"
 *   }
 * )
 */


class CustomFieldFormatter extends FormatterBase {

    /**
     * {@inheritdoc}
     */
    public static function defaultSettings() {
        return [
            'field_subtitle' => 'Capitalized input string ',
        ] + parent::defaultSettings();
    }

    

    /**
     * {@inheritdoc}
     */
    public function settingsSummary() {
        $summary = [];
        $summary[] = $this->t("@field_subtitle", ["@field_subtitle" => $this->getSetting('field_subtitle')]);
        return $summary;
    }

    /**
     * {@inheritdoc}
     */

     public function viewElements(FieldItemListInterface $items, $langcode) {
        $element = [];
    
        foreach ( $items as $delta => $item) {
            $element[$delta] = [
                '#markup' => mb_strtoupper($item->value),
            ];
        }
        return $element;
     }

}
