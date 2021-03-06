<?php

/**
 * EventLocation filter form base class.
 *
 * @package    poomtshak
 * @subpackage filter
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEventLocationFormFilter extends ContentObjectFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('event_location_filters[%s]');
  }

  public function getModelName()
  {
    return 'EventLocation';
  }
}
