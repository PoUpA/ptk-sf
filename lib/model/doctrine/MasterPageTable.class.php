<?php

/**
 * MasterPageTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class MasterPageTable extends ContentObjectTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object MasterPageTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('MasterPage');
    }
}