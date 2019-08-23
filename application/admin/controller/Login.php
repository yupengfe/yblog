<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;

class Login extends Controller{
    public function login(){
        return $this->fetch();
    }
}
