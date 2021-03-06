<?php

/**
 * BasePostCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property Doctrine_Collection $PostPostCategory
 * 
 * @method Doctrine_Collection getPostPostCategory() Returns the current record's "PostPostCategory" collection
 * @method PostCategory        setPostPostCategory() Sets the current record's "PostPostCategory" collection
 * 
 * @package    poomtshak
 * @subpackage model
 * @author     PoUpA
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePostCategory extends ContentObject
{
    public function setUp()
    {
        parent::setUp();
        $this->hasMany('PostPostCategory', array(
             'local' => 'id',
             'foreign' => 'PostCategory_Id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}