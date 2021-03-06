<?php

/**
 * BasePost
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property Doctrine_Collection $PostPostCategory
 * @property Doctrine_Collection $Comment
 * 
 * @method Doctrine_Collection getPostPostCategory() Returns the current record's "PostPostCategory" collection
 * @method Doctrine_Collection getComment()          Returns the current record's "Comment" collection
 * @method Post                setPostPostCategory() Sets the current record's "PostPostCategory" collection
 * @method Post                setComment()          Sets the current record's "Comment" collection
 * 
 * @package    poomtshak
 * @subpackage model
 * @author     PoUpA
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePost extends ContentObject
{
    public function setUp()
    {
        parent::setUp();
        $this->hasMany('PostPostCategory', array(
             'local' => 'id',
             'foreign' => 'Post_Id'));

        $this->hasMany('Comment', array(
             'local' => 'id',
             'foreign' => 'Post_Id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}