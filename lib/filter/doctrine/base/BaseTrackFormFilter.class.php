<?php

/**
 * Track filter form base class.
 *
 * @package    poomtshak
 * @subpackage filter
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTrackFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Name'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ArtistName' => new sfWidgetFormFilterInput(),
      'StartTime'  => new sfWidgetFormFilterInput(),
      'Comment'    => new sfWidgetFormFilterInput(),
      'Link'       => new sfWidgetFormFilterInput(),
      'Mix_Id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mix'), 'add_empty' => true)),
      'Artist_Id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Artist'), 'add_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'Name'       => new sfValidatorPass(array('required' => false)),
      'ArtistName' => new sfValidatorPass(array('required' => false)),
      'StartTime'  => new sfValidatorPass(array('required' => false)),
      'Comment'    => new sfValidatorPass(array('required' => false)),
      'Link'       => new sfValidatorPass(array('required' => false)),
      'Mix_Id'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mix'), 'column' => 'Id')),
      'Artist_Id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Artist'), 'column' => 'Id')),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('track_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Track';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'Name'       => 'Text',
      'ArtistName' => 'Text',
      'StartTime'  => 'Text',
      'Comment'    => 'Text',
      'Link'       => 'Text',
      'Mix_Id'     => 'ForeignKey',
      'Artist_Id'  => 'ForeignKey',
      'created_at' => 'Date',
      'updated_at' => 'Date',
    );
  }
}
