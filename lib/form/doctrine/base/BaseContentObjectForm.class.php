<?php

/**
 * ContentObject form base class.
 *
 * @method ContentObject getObject() Returns the current form's model object
 *
 * @package    poomtshak
 * @subpackage form
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseContentObjectForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Id'               => new sfWidgetFormInputHidden(),
      'Pid'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ContentObject'), 'add_empty' => true)),
      'PublishStart'     => new sfWidgetFormDate(),
      'PublishEnd'       => new sfWidgetFormDate(),
      'ObjectType'       => new sfWidgetFormInputText(),
      'User_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PtkUser'), 'add_empty' => true)),
      'Content'          => new sfWidgetFormInputText(),
      'Name'             => new sfWidgetFormInputText(),
      'Address'          => new sfWidgetFormTextarea(),
      'Address2'         => new sfWidgetFormTextarea(),
      'City'             => new sfWidgetFormInputText(),
      'Zip'              => new sfWidgetFormInputText(),
      'Email'            => new sfWidgetFormInputText(),
      'CCPNumber'        => new sfWidgetFormInputText(),
      'Facebook'         => new sfWidgetFormInputText(),
      'Twitter'          => new sfWidgetFormInputText(),
      'Title'            => new sfWidgetFormInputText(),
      'FbContentLink'    => new sfWidgetFormInputText(),
      'FbImportDate'     => new sfWidgetFormInputText(),
      'Description'      => new sfWidgetFormTextarea(),
      'Comment'          => new sfWidgetFormInputText(),
      'Post_Id'          => new sfWidgetFormInputText(),
      'Album_Id'         => new sfWidgetFormInputText(),
      'Photo_Id'         => new sfWidgetFormInputText(),
      'Mix_Id'           => new sfWidgetFormInputText(),
      'Image'            => new sfWidgetFormInputText(),
      'ImageThumb'       => new sfWidgetFormInputText(),
      'ImageHeight'      => new sfWidgetFormInputText(),
      'ImageWidth'       => new sfWidgetFormInputText(),
      'ImageThumbWidth'  => new sfWidgetFormInputText(),
      'ImageThumbHeight' => new sfWidgetFormInputText(),
      'Artist_Id'        => new sfWidgetFormInputText(),
      'Website'          => new sfWidgetFormInputText(),
      'MySpace'          => new sfWidgetFormInputText(),
      'ContactInfo'      => new sfWidgetFormInputText(),
      'AudioUrl'         => new sfWidgetFormInputText(),
      'Start'            => new sfWidgetFormDate(),
      'End'              => new sfWidgetFormDate(),
      'EventLocation_Id' => new sfWidgetFormInputText(),
      'Phone'            => new sfWidgetFormInputText(),
      'MapUrl'           => new sfWidgetFormInputText(),
      'LocationImage'    => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'Id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('Id')), 'empty_value' => $this->getObject()->get('Id'), 'required' => false)),
      'Pid'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ContentObject'), 'required' => false)),
      'PublishStart'     => new sfValidatorDate(array('required' => false)),
      'PublishEnd'       => new sfValidatorDate(array('required' => false)),
      'ObjectType'       => new sfValidatorString(array('max_length' => 255)),
      'User_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PtkUser'), 'required' => false)),
      'Content'          => new sfValidatorString(array('max_length' => 255)),
      'Name'             => new sfValidatorString(array('max_length' => 255)),
      'Address'          => new sfValidatorString(array('max_length' => 3000)),
      'Address2'         => new sfValidatorString(array('max_length' => 3000, 'required' => false)),
      'City'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Zip'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Email'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'CCPNumber'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Facebook'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Twitter'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Title'            => new sfValidatorString(array('max_length' => 255)),
      'FbContentLink'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'FbImportDate'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Description'      => new sfValidatorString(array('max_length' => 4000)),
      'Comment'          => new sfValidatorString(array('max_length' => 255)),
      'Post_Id'          => new sfValidatorInteger(array('required' => false)),
      'Album_Id'         => new sfValidatorInteger(array('required' => false)),
      'Photo_Id'         => new sfValidatorInteger(array('required' => false)),
      'Mix_Id'           => new sfValidatorInteger(array('required' => false)),
      'Image'            => new sfValidatorString(array('max_length' => 255)),
      'ImageThumb'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ImageHeight'      => new sfValidatorInteger(array('required' => false)),
      'ImageWidth'       => new sfValidatorInteger(array('required' => false)),
      'ImageThumbWidth'  => new sfValidatorInteger(array('required' => false)),
      'ImageThumbHeight' => new sfValidatorInteger(array('required' => false)),
      'Artist_Id'        => new sfValidatorInteger(array('required' => false)),
      'Website'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'MySpace'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ContactInfo'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'AudioUrl'         => new sfValidatorString(array('max_length' => 255)),
      'Start'            => new sfValidatorDate(),
      'End'              => new sfValidatorDate(array('required' => false)),
      'EventLocation_Id' => new sfValidatorInteger(array('required' => false)),
      'Phone'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'MapUrl'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'LocationImage'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'ContentObject', 'column' => array('Id'))),
        new sfValidatorDoctrineUnique(array('model' => 'ContentObject', 'column' => array('Title'))),
        new sfValidatorDoctrineUnique(array('model' => 'ContentObject', 'column' => array('Photo_Id'))),
      ))
    );

    $this->widgetSchema->setNameFormat('content_object[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ContentObject';
  }

}
