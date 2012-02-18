<?php

/**
 * BaseTrack
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $Name
 * @property string $ArtistName
 * @property string $StartTime
 * @property string $Comment
 * @property string $Link
 * @property integer $Mix_Id
 * @property integer $Artist_Id
 * @property Mix $Mix
 * @property Artist $Artist
 * 
 * @method string  getName()       Returns the current record's "Name" value
 * @method string  getArtistName() Returns the current record's "ArtistName" value
 * @method string  getStartTime()  Returns the current record's "StartTime" value
 * @method string  getComment()    Returns the current record's "Comment" value
 * @method string  getLink()       Returns the current record's "Link" value
 * @method integer getMixId()      Returns the current record's "Mix_Id" value
 * @method integer getArtistId()   Returns the current record's "Artist_Id" value
 * @method Mix     getMix()        Returns the current record's "Mix" value
 * @method Artist  getArtist()     Returns the current record's "Artist" value
 * @method Track   setName()       Sets the current record's "Name" value
 * @method Track   setArtistName() Sets the current record's "ArtistName" value
 * @method Track   setStartTime()  Sets the current record's "StartTime" value
 * @method Track   setComment()    Sets the current record's "Comment" value
 * @method Track   setLink()       Sets the current record's "Link" value
 * @method Track   setMixId()      Sets the current record's "Mix_Id" value
 * @method Track   setArtistId()   Sets the current record's "Artist_Id" value
 * @method Track   setMix()        Sets the current record's "Mix" value
 * @method Track   setArtist()     Sets the current record's "Artist" value
 * 
 * @package    poomtshak
 * @subpackage model
 * @author     PoUpA
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTrack extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('track');
        $this->hasColumn('Name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('ArtistName', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('StartTime', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('Comment', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('Link', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('Mix_Id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('Artist_Id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Mix', array(
             'local' => 'Mix_Id',
             'foreign' => 'id'));

        $this->hasOne('Artist', array(
             'local' => 'Artist_Id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}