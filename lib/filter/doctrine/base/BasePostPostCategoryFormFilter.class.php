<?php

/**
 * PostPostCategory filter form base class.
 *
 * @package    poomtshak
 * @subpackage filter
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePostPostCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Post_Id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Post'), 'add_empty' => true)),
      'PostCategory_Id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PostCategory'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'Post_Id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Post'), 'column' => 'Id')),
      'PostCategory_Id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PostCategory'), 'column' => 'Id')),
    ));

    $this->widgetSchema->setNameFormat('post_post_category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PostPostCategory';
  }

  public function getFields()
  {
    return array(
      'Id'              => 'Number',
      'Post_Id'         => 'ForeignKey',
      'PostCategory_Id' => 'ForeignKey',
    );
  }
}
