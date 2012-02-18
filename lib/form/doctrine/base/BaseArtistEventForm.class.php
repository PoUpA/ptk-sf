<?php

/**
 * ArtistEvent form base class.
 *
 * @method ArtistEvent getObject() Returns the current form's model object
 *
 * @package    poomtshak
 * @subpackage form
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseArtistEventForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Id'        => new sfWidgetFormInputHidden(),
      'Artist_Id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Artist'), 'add_empty' => false)),
      'Event_Id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Event'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'Id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('Id')), 'empty_value' => $this->getObject()->get('Id'), 'required' => false)),
      'Artist_Id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Artist'))),
      'Event_Id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Event'))),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'ArtistEvent', 'column' => array('Id')))
    );

    $this->widgetSchema->setNameFormat('artist_event[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArtistEvent';
  }

}
