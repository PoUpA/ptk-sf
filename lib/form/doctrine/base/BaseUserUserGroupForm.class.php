<?php

/**
 * UserUserGroup form base class.
 *
 * @method UserUserGroup getObject() Returns the current form's model object
 *
 * @package    poomtshak
 * @subpackage form
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserUserGroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Id'           => new sfWidgetFormInputHidden(),
      'User_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PtkUser'), 'add_empty' => false)),
      'UserGroup_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'Id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('Id')), 'empty_value' => $this->getObject()->get('Id'), 'required' => false)),
      'User_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PtkUser'))),
      'UserGroup_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'))),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'UserUserGroup', 'column' => array('Id')))
    );

    $this->widgetSchema->setNameFormat('user_user_group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserUserGroup';
  }

}
