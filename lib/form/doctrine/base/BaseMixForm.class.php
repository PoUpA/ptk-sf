<?php

/**
 * Mix form base class.
 *
 * @method Mix getObject() Returns the current form's model object
 *
 * @package    poomtshak
 * @subpackage form
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMixForm extends ContentObjectForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('mix[%s]');
  }

  public function getModelName()
  {
    return 'Mix';
  }

}
