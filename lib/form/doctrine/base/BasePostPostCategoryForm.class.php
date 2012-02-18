<?php

/**
 * PostPostCategory form base class.
 *
 * @method PostPostCategory getObject() Returns the current form's model object
 *
 * @package    poomtshak
 * @subpackage form
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePostPostCategoryForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Id'              => new sfWidgetFormInputHidden(),
      'Post_Id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Post'), 'add_empty' => false)),
      'PostCategory_Id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PostCategory'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'Id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->get('Id')), 'empty_value' => $this->getObject()->get('Id'), 'required' => false)),
      'Post_Id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Post'))),
      'PostCategory_Id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PostCategory'))),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'PostPostCategory', 'column' => array('Id')))
    );

    $this->widgetSchema->setNameFormat('post_post_category[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'PostPostCategory';
  }

}
