<?php

/**
 * VisibilityRestriction form base class.
 *
 * @method VisibilityRestriction getObject() Returns the current form's model object
 *
 * @package    poomtshak
 * @subpackage form
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVisibilityRestrictionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ID'               => new sfWidgetFormInputHidden(),
      'ContentObject_Id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ContentObject'), 'add_empty' => false)),
      'UserGroup_id'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'add_empty' => false)),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'ID'               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('ID')), 'empty_value' => $this->getObject()->get('ID'), 'required' => false)),
      'ContentObject_Id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ContentObject'))),
      'UserGroup_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'))),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'VisibilityRestriction', 'column' => array('ID')))
    );

    $this->widgetSchema->setNameFormat('visibility_restriction[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VisibilityRestriction';
  }

}
