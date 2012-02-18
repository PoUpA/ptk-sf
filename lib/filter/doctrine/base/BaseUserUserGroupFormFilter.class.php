<?php

/**
 * UserUserGroup filter form base class.
 *
 * @package    poomtshak
 * @subpackage filter
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserUserGroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'User_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PtkUser'), 'add_empty' => true)),
      'UserGroup_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UserGroup'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'User_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PtkUser'), 'column' => 'id')),
      'UserGroup_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UserGroup'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('user_user_group_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserUserGroup';
  }

  public function getFields()
  {
    return array(
      'Id'           => 'Number',
      'User_id'      => 'ForeignKey',
      'UserGroup_id' => 'ForeignKey',
    );
  }
}
