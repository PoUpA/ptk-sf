<?php

/**
 * masterpage actions.
 *
 * @package    poomtshak
 * @subpackage masterpage
 * @author     PoUpA
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class masterpageActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->master_page = Doctrine_Core::getTable('MasterPage')->getFirstMasterPage();
  }
}
