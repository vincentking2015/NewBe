<?php
/**
 * Created by PhpStorm.
 * User: vince
 * Date: 2017/9/9
 * Time: 11:40
 */

namespace app\index\controller;

use core\Controller;

class Index extends Controller
{
    public function index(){

        $model = new \app\index\model\Index();

        $this->display("index.index",$this->assigns);

    }
}