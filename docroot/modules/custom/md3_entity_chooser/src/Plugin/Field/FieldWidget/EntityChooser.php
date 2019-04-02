<?php

namespace Drupal\md3_entity_chooser\Plugin\Field\EntityChooser;

use Drupal\Core\Field\WidgetInterface;
use Drupal\Core\Field\WidgetBase;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * MD3 - Entity Chooser.
 *
 * @FieldWidget(
 *   id = "md3_entity_chooser",
 *   label = @Translation("MD3 - Entity Chooser"),
 *   field_types = {
 *     "entity_reference",
 *   }
 * )
 */
class EntityChooser extends WidgetBase implements WidgetInterface {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = [];

    $element['value'] = $element + array(
      '#type' => 'select',
      '#options' => $countries,
      '#empty_value' => '',
      '#default_value' => (isset($items[$delta]->value) && isset($countries[$items[$delta]->value])) ? $items[$delta]->value : NULL,
      '#description' => t('Select a country'),
    );

    return $element;
  }

}
