<?php

/**
 * AlbumPhoto form base class.
 *
 * @method AlbumPhoto getObject() Returns the current form's model object
 *
 * @package    poomtshak
 * @subpackage form
 * @author     PoUpA
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAlbumPhotoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'Id'       => new sfWidgetFormInputHidden(),
      'Album_Id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Album'), 'add_empty' => false)),
      'Photo_Id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Photo'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'Id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('Id')), 'empty_value' => $this->getObject()->get('Id'), 'required' => false)),
      'Album_Id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Album'))),
      'Photo_Id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Photo'))),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'AlbumPhoto', 'column' => array('Id')))
    );

    $this->widgetSchema->setNameFormat('album_photo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AlbumPhoto';
  }

}
