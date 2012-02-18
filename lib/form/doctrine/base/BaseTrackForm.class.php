<?php

/**
 * Track form base class.
 *
 * @method Track getObject() Returns the current form's model object
 *
 * @package    poomtshak
 * @subpackage form
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTrackForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'Name'       => new sfWidgetFormInputText(),
      'ArtistName' => new sfWidgetFormInputText(),
      'StartTime'  => new sfWidgetFormInputText(),
      'Comment'    => new sfWidgetFormInputText(),
      'Link'       => new sfWidgetFormInputText(),
      'Mix_Id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mix'), 'add_empty' => true)),
      'Artist_Id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Artist'), 'add_empty' => true)),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Name'       => new sfValidatorString(array('max_length' => 255)),
      'ArtistName' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'StartTime'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Comment'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Link'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Mix_Id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mix'), 'required' => false)),
      'Artist_Id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Artist'), 'required' => false)),
      'created_at' => new sfValidatorDateTime(),
      'updated_at' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('track[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Track';
  }

}
