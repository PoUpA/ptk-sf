<?php

/**
 * PhotoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PhotoTable extends ContentObjectTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object PhotoTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Photo');
    }
}