<?php

/**
 * base actions.
 *
 * @package    poomtshak
 * @subpackage base
 * @author     PoUpA
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class baseActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->content_objects = Doctrine_Core::getTable('ContentObject')->getPrimaryContentOjects();
  }
}
