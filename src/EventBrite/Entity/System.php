<?php

namespace EventBrite\Entity;

/**
 * Class System.
 *
 * @package EventBrite\Entity
 */
class System extends Entity {

  /**
   * {@inheritdoc}
   */
  public function getEntityApiType() {
    return 'system';
  }

  /**
   * Load entity.
   *
   * @param string $property
   *   An array of conditions.
   *
   * @return Entity
   *   An entity instance.
   */
  public function load($property = '')  {
    return parent::load($property);
  }

}
