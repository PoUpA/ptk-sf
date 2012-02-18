<?php

/**
 * ContentObject filter form base class.
 *
 * @package    poomtshak
 * @subpackage filter
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseContentObjectFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Pid'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ContentObject'), 'add_empty' => true)),
      'PublishStart'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'PublishEnd'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'ObjectType'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'User_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PtkUser'), 'add_empty' => true)),
      'Content'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Name'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Address'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Address2'         => new sfWidgetFormFilterInput(),
      'City'             => new sfWidgetFormFilterInput(),
      'Zip'              => new sfWidgetFormFilterInput(),
      'Email'            => new sfWidgetFormFilterInput(),
      'CCPNumber'        => new sfWidgetFormFilterInput(),
      'Facebook'         => new sfWidgetFormFilterInput(),
      'Twitter'          => new sfWidgetFormFilterInput(),
      'Title'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'FbContentLink'    => new sfWidgetFormFilterInput(),
      'FbImportDate'     => new sfWidgetFormFilterInput(),
      'Description'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Comment'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Post_Id'          => new sfWidgetFormFilterInput(),
      'Album_Id'         => new sfWidgetFormFilterInput(),
      'Photo_Id'         => new sfWidgetFormFilterInput(),
      'Mix_Id'           => new sfWidgetFormFilterInput(),
      'Image'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ImageThumb'       => new sfWidgetFormFilterInput(),
      'ImageHeight'      => new sfWidgetFormFilterInput(),
      'ImageWidth'       => new sfWidgetFormFilterInput(),
      'ImageThumbWidth'  => new sfWidgetFormFilterInput(),
      'ImageThumbHeight' => new sfWidgetFormFilterInput(),
      'Artist_Id'        => new sfWidgetFormFilterInput(),
      'Website'          => new sfWidgetFormFilterInput(),
      'MySpace'          => new sfWidgetFormFilterInput(),
      'ContactInfo'      => new sfWidgetFormFilterInput(),
      'AudioUrl'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Start'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'End'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'EventLocation_Id' => new sfWidgetFormFilterInput(),
      'Phone'            => new sfWidgetFormFilterInput(),
      'MapUrl'           => new sfWidgetFormFilterInput(),
      'LocationImage'    => new sfWidgetFormFilterInput(),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'Pid'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ContentObject'), 'column' => 'Id')),
      'PublishStart'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'PublishEnd'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'ObjectType'       => new sfValidatorPass(array('required' => false)),
      'User_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PtkUser'), 'column' => 'id')),
      'Content'          => new sfValidatorPass(array('required' => false)),
      'Name'             => new sfValidatorPass(array('required' => false)),
      'Address'          => new sfValidatorPass(array('required' => false)),
      'Address2'         => new sfValidatorPass(array('required' => false)),
      'City'             => new sfValidatorPass(array('required' => false)),
      'Zip'              => new sfValidatorPass(array('required' => false)),
      'Email'            => new sfValidatorPass(array('required' => false)),
      'CCPNumber'        => new sfValidatorPass(array('required' => false)),
      'Facebook'         => new sfValidatorPass(array('required' => false)),
      'Twitter'          => new sfValidatorPass(array('required' => false)),
      'Title'            => new sfValidatorPass(array('required' => false)),
      'FbContentLink'    => new sfValidatorPass(array('required' => false)),
      'FbImportDate'     => new sfValidatorPass(array('required' => false)),
      'Description'      => new sfValidatorPass(array('required' => false)),
      'Comment'          => new sfValidatorPass(array('required' => false)),
      'Post_Id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Album_Id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Photo_Id'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Mix_Id'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Image'            => new sfValidatorPass(array('required' => false)),
      'ImageThumb'       => new sfValidatorPass(array('required' => false)),
      'ImageHeight'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ImageWidth'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ImageThumbWidth'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'ImageThumbHeight' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Artist_Id'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Website'          => new sfValidatorPass(array('required' => false)),
      'MySpace'          => new sfValidatorPass(array('required' => false)),
      'ContactInfo'      => new sfValidatorPass(array('required' => false)),
      'AudioUrl'         => new sfValidatorPass(array('required' => false)),
      'Start'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'End'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'EventLocation_Id' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'Phone'            => new sfValidatorPass(array('required' => false)),
      'MapUrl'           => new sfValidatorPass(array('required' => false)),
      'LocationImage'    => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('content_object_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContentObject';
  }

  public function getFields()
  {
    return array(
      'Id'               => 'Number',
      'Pid'              => 'ForeignKey',
      'PublishStart'     => 'Date',
      'PublishEnd'       => 'Date',
      'ObjectType'       => 'Text',
      'User_id'          => 'ForeignKey',
      'Content'          => 'Text',
      'Name'             => 'Text',
      'Address'          => 'Text',
      'Address2'         => 'Text',
      'City'             => 'Text',
      'Zip'              => 'Text',
      'Email'            => 'Text',
      'CCPNumber'        => 'Text',
      'Facebook'         => 'Text',
      'Twitter'          => 'Text',
      'Title'            => 'Text',
      'FbContentLink'    => 'Text',
      'FbImportDate'     => 'Text',
      'Description'      => 'Text',
      'Comment'          => 'Text',
      'Post_Id'          => 'Number',
      'Album_Id'         => 'Number',
      'Photo_Id'         => 'Number',
      'Mix_Id'           => 'Number',
      'Image'            => 'Text',
      'ImageThumb'       => 'Text',
      'ImageHeight'      => 'Number',
      'ImageWidth'       => 'Number',
      'ImageThumbWidth'  => 'Number',
      'ImageThumbHeight' => 'Number',
      'Artist_Id'        => 'Number',
      'Website'          => 'Text',
      'MySpace'          => 'Text',
      'ContactInfo'      => 'Text',
      'AudioUrl'         => 'Text',
      'Start'            => 'Date',
      'End'              => 'Date',
      'EventLocation_Id' => 'Number',
      'Phone'            => 'Text',
      'MapUrl'           => 'Text',
      'LocationImage'    => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
    );
  }
}
