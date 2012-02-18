<?php

/**
 * BasePostPostCategory
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $Id
 * @property integer $Post_Id
 * @property integer $PostCategory_Id
 * @property Post $Post
 * @property PostCategory $PostCategory
 * 
 * @method integer          getId()              Returns the current record's "Id" value
 * @method integer          getPostId()          Returns the current record's "Post_Id" value
 * @method integer          getPostCategoryId()  Returns the current record's "PostCategory_Id" value
 * @method Post             getPost()            Returns the current record's "Post" value
 * @method PostCategory     getPostCategory()    Returns the current record's "PostCategory" value
 * @method PostPostCategory setId()              Sets the current record's "Id" value
 * @method PostPostCategory setPostId()          Sets the current record's "Post_Id" value
 * @method PostPostCategory setPostCategoryId()  Sets the current record's "PostCategory_Id" value
 * @method PostPostCategory setPost()            Sets the current record's "Post" value
 * @method PostPostCategory setPostCategory()    Sets the current record's "PostCategory" value
 * 
 * @package    poomtshak
 * @subpackage model
 * @author     PoUpA
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePostPostCategory extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('post_post_category');
        $this->hasColumn('Id', 'integer', null, array(
             'primary' => true,
             'unique' => true,
             'type' => 'integer',
             'autoincrement' => true,
             ));
        $this->hasColumn('Post_Id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('PostCategory_Id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Post', array(
             'local' => 'Post_Id',
             'foreign' => 'id'));

        $this->hasOne('PostCategory', array(
             'local' => 'PostCategory_Id',
             'foreign' => 'id'));
    }
}