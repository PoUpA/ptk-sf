<?php

/**
 * BaseUserUserGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $Id
 * @property integer $User_id
 * @property integer $UserGroup_id
 * @property PtkUser $PtkUser
 * @property UserGroup $UserGroup
 * 
 * @method integer       getId()           Returns the current record's "Id" value
 * @method integer       getUserId()       Returns the current record's "User_id" value
 * @method integer       getUserGroupId()  Returns the current record's "UserGroup_id" value
 * @method PtkUser       getPtkUser()      Returns the current record's "PtkUser" value
 * @method UserGroup     getUserGroup()    Returns the current record's "UserGroup" value
 * @method UserUserGroup setId()           Sets the current record's "Id" value
 * @method UserUserGroup setUserId()       Sets the current record's "User_id" value
 * @method UserUserGroup setUserGroupId()  Sets the current record's "UserGroup_id" value
 * @method UserUserGroup setPtkUser()      Sets the current record's "PtkUser" value
 * @method UserUserGroup setUserGroup()    Sets the current record's "UserGroup" value
 * 
 * @package    poomtshak
 * @subpackage model
 * @author     PoUpA
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserUserGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_user_group');
        $this->hasColumn('Id', 'integer', null, array(
             'primary' => true,
             'unique' => true,
             'type' => 'integer',
             'autoincrement' => true,
             ));
        $this->hasColumn('User_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('UserGroup_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('PtkUser', array(
             'local' => 'User_id',
             'foreign' => 'id'));

        $this->hasOne('UserGroup', array(
             'local' => 'UserGroup_id',
             'foreign' => 'id'));
    }
}