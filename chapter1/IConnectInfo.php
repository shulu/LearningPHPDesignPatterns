<?php

interface IConnectInfo
{
    const HOST = "localhost";
    const UNAME = "root";
    const PW = "password";
    const DBNAME = "mydb";
    function testConnection();
}
