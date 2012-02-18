<?php

/**
 * BaseUserGroup
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $Name
 * @property string $Description
 * @property integer $id
 * @property Doctrine_Collection $UserUserGroup
 * @property Doctrine_Collection $VisibilityRestriction
 * @property Doctrine_Collection $EditPermission
 * 
 * @method string              getName()                  Returns the current record's "Name" value
 * @method string              getDescription()           Returns the current record's "Description" value
 * @method integer             getId()                    Returns the current record's "id" value
 * @method Doctrine_Collection getUserUserGroup()         Returns the current record's "UserUserGroup" collection
 * @method Doctrine_Collection getVisibilityRestriction() Returns the current record's "VisibilityRestriction" collection
 * @method Doctrine_Collection getEditPermission()        Returns the current record's "EditPermission" collection
 * @method UserGroup           setName()                  Sets the current record's "Name" value
 * @method UserGroup           setDescription()           Sets the current record's "Description" value
 * @method UserGroup           setId()                    Sets the current record's "id" value
 * @method UserGroup           setUserUserGroup()         Sets the current record's "UserUserGroup" collection
 * @method UserGroup           setVisibilityRestriction() Sets the current record's "VisibilityRestriction" collection
 * @method UserGroup           setEditPermission()        Sets the current record's "EditPermission" collection
 * 
 * @package    poomtshak
 * @subpackage model
 * @author     PoUpA
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserGroup extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_group');
        $this->hasColumn('Name', 'string', 255, array(
             'unique' => true,
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('Description', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('id', 'integer', null, array(
             'primary' => true,
             'unique' => true,
             'type' => 'integer',
             'autoincrement' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('UserUserGroup', array(
             'local' => 'id',
             'foreign' => 'UserGroup_id'));

        $this->hasMany('VisibilityRestriction', array(
             'local' => 'id',
             'foreign' => 'UserGroup_id'));

        $this->hasMany('EditPermission', array(
             'local' => 'id',
             'foreign' => 'UserGroup_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}