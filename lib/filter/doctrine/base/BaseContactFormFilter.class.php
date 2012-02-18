<?php

/**
 * Contact filter form base class.
 *
 * @package    poomtshak
 * @subpackage filter
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseContactFormFilter extends ContentObjectFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('contact_filters[%s]');
  }

  public function getModelName()
  {
    return 'Contact';
  }
}
