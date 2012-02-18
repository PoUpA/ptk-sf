<?php

/**
 * ArtistEvent filter form base class.
 *
 * @package    poomtshak
 * @subpackage filter
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseArtistEventFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Artist_Id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Artist'), 'add_empty' => true)),
      'Event_Id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Event'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'Artist_Id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Artist'), 'column' => 'Id')),
      'Event_Id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Event'), 'column' => 'Id')),
    ));

    $this->widgetSchema->setNameFormat('artist_event_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ArtistEvent';
  }

  public function getFields()
  {
    return array(
      'Id'        => 'Number',
      'Artist_Id' => 'ForeignKey',
      'Event_Id'  => 'ForeignKey',
    );
  }
}
