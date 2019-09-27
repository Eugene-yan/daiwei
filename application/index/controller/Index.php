<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        var_dump(Db::name('teacher')->find());
//        return 'Hello,World!111';
    }
}
