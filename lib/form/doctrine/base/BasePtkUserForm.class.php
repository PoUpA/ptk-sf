<?php

/**
 * PtkUser form base class.
 *
 * @method PtkUser getObject() Returns the current form's model object
 *
 * @package    poomtshak
 * @subpackage form
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePtkUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'Username'    => new sfWidgetFormInputText(),
      'Email'       => new sfWidgetFormInputText(),
      'Password'    => new sfWidgetFormInputText(),
      'Firstname'   => new sfWidgetFormInputText(),
      'Lastname'    => new sfWidgetFormInputText(),
      'Address'     => new sfWidgetFormTextarea(),
      'Address2'    => new sfWidgetFormTextarea(),
      'City'        => new sfWidgetFormInputText(),
      'Zip'         => new sfWidgetFormInputText(),
      'Country'     => new sfWidgetFormInputText(),
      'IsPtkMember' => new sfWidgetFormInputCheckbox(),
      'Image'       => new sfWidgetFormInputText(),
      'website'     => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'Username'    => new sfValidatorString(array('max_length' => 255)),
      'Email'       => new sfValidatorString(array('max_length' => 255)),
      'Password'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Firstname'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Lastname'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Address'     => new sfValidatorString(array('max_length' => 3000, 'required' => false)),
      'Address2'    => new sfValidatorString(array('max_length' => 3000, 'required' => false)),
      'City'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Zip'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'Country'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'IsPtkMember' => new sfValidatorBoolean(array('required' => false)),
      'Image'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'website'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(),
      'updated_at'  => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'PtkUser', 'column' => array('id'))),
        new sfValidatorDoctrineUnique(array('model' => 'PtkUser', 'column' => array('Username'))),
        new sfValidatorDoctrineUnique(array('model' => 'PtkUser', 'column' => array('Email'))),
      ))
    );

    $this->widgetSchema->setNameFormat('ptk_user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PtkUser';
  }

}
