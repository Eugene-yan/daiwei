<?php
namespace app\index\controller;

class HelloWorld
{
    public function index($name = 'world')
    {
        return 'Hello2,' . $name .'!';
    }
    public function Aaa($name = 'World')
    {
        return 'Hello3,' . $name .'!';
    }
}