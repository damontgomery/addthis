<?php

/**
 * @file
 * Contains \Drupal\addthis\Element\AddThisElement
 */
namespace Drupal\addthis\Element;

use Drupal\Core\Render\Element\RenderElement;
use Drupal\Core\Template\Attribute;

/**
 * Class AddThisElement
 *
 * @RenderElement("addthis_element")
 */
class AddThisElement extends RenderElement {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    $class = get_class($this);
    return [
      '#theme' => 'addthis_element',
      '#value' => '',
      '#tag' => '',
      '#pre_render' => [
        [$class, 'preRenderAddThisElement'],
      ]
    ];
  }


  /**
   * Implements preRenderAddThisElement()
   *  - Defines consistent markup for new render type of addthis_element.
   * @param $element
   * @return mixed
   */
  public static function preRenderAddThisElement($element) {
    $element['content'] = $element['#value'];
    return $element;
  }

}