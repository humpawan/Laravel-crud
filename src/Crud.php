<?php

namespace hum\crud;

class Crud
{
    public function testgreet(String $sName)
    {
        return 'Hello Welcome ' . $sName . '! How are you doing today?';
    }
}