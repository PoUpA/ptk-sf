<?php

/**
 * EditPermission form base class.
 *
 * @method EditPermission getObject() Returns the current form's model object
 *
 * @package    poomtshak
 * @subpackage form
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEditPermissionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Id'               => new sfWidgetFormInputHidden(),
      'ContentObject_Id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ContentObject'), 'add_empty' => false)),
      'UserGroup_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'add_empty' => false)),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'Id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('Id')), 'empty_value' => $this->getObject()->get('Id'), 'required' => false)),
      'ContentObject_Id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ContentObject'))),
      'UserGroup_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'))),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'EditPermission', 'column' => array('Id')))
    );

    $this->widgetSchema->setNameFormat('edit_permission[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EditPermission';
  }

}
