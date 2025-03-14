<?php

require_once('ContextStrategy.php.php');

class ClientStrategy
{
    public function insertData()
    {
        $secure = new SecureData();
        $context = new ContextStrategy(new DataEntry());
        $secure->enterData();
        $context->algorithm($secure->setEntry());
    }

    public function findData()
    {
        $secure = new SecureData();
        $context = new ContextStrategy(new SearchData());
        $secure->enterData();
        $context->algorithm($secure->setEntry());
    }

    public function ShowAll()
    {
        $secure = new SecureData();
        $context = new ContextStrategy(new DisplayData());
        $secure->enterData();
        $context->algorithm($secure->setEntry());
    }

    public function changeData()
    {
        $secure = new SecureData();
        $context = new ContextStrategy(new UpdateData());
        $secure->enterData();
        $context->algorithm($secure->setEntry());
    }

    public function deleteData()
    {
        $secure = new SecureData();
        $context = new ContextStrategy(new DeleteRecord());
        $secure->enterData();
        $context->algorithm($secure->setEntry());
    }
}
