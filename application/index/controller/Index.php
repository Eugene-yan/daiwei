<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return 'Hello,World!';
    }
}
class HelloWorld
{
    public function index($name = 'World')
    {
        return 'Hello2,' . $name .'!';
    }
}
