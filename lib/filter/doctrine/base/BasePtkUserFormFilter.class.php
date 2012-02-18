<?php

/**
 * PtkUser filter form base class.
 *
 * @package    poomtshak
 * @subpackage filter
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePtkUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Username'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Email'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'Password'    => new sfWidgetFormFilterInput(),
      'Firstname'   => new sfWidgetFormFilterInput(),
      'Lastname'    => new sfWidgetFormFilterInput(),
      'Address'     => new sfWidgetFormFilterInput(),
      'Address2'    => new sfWidgetFormFilterInput(),
      'City'        => new sfWidgetFormFilterInput(),
      'Zip'         => new sfWidgetFormFilterInput(),
      'Country'     => new sfWidgetFormFilterInput(),
      'IsPtkMember' => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'Image'       => new sfWidgetFormFilterInput(),
      'website'     => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'Username'    => new sfValidatorPass(array('required' => false)),
      'Email'       => new sfValidatorPass(array('required' => false)),
      'Password'    => new sfValidatorPass(array('required' => false)),
      'Firstname'   => new sfValidatorPass(array('required' => false)),
      'Lastname'    => new sfValidatorPass(array('required' => false)),
      'Address'     => new sfValidatorPass(array('required' => false)),
      'Address2'    => new sfValidatorPass(array('required' => false)),
      'City'        => new sfValidatorPass(array('required' => false)),
      'Zip'         => new sfValidatorPass(array('required' => false)),
      'Country'     => new sfValidatorPass(array('required' => false)),
      'IsPtkMember' => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'Image'       => new sfValidatorPass(array('required' => false)),
      'website'     => new sfValidatorPass(array('required' => false)),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('ptk_user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PtkUser';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'Username'    => 'Text',
      'Email'       => 'Text',
      'Password'    => 'Text',
      'Firstname'   => 'Text',
      'Lastname'    => 'Text',
      'Address'     => 'Text',
      'Address2'    => 'Text',
      'City'        => 'Text',
      'Zip'         => 'Text',
      'Country'     => 'Text',
      'IsPtkMember' => 'Boolean',
      'Image'       => 'Text',
      'website'     => 'Text',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
