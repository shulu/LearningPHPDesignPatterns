<?php

interface IConnectInfo
{
    const HOST = "localhost";
    const UNAME = "alpha";
    const PW = "beta";
    const DBNAME = "gamma";

    public static function doConnect();
}
