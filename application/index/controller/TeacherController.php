<?php
namespace app\index\controller;
//use think\Db;
use think\Controller;
use app\common\model\Teacher;

class TeacherController extends Controller
{
    public function index(){
//        echo 'hello Teacher';
        $Teacher = new Teacher;
        $Teachers = $Teacher->select();
//        $teacher = $teachers[0]->getData('name');

        $this->assign('teachers',$Teachers);
        $htmls = $this->fetch();
        return $htmls;
    }
}
