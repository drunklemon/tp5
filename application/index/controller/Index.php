<?php
namespace app\index\controller;

use think\Controller;

class Index       extends Controller
{
    public function index()
    {
        return  $this->fetch();    
    }


    public function Afternoon_tea()
    {
        return  $this->fetch('Afternoon_tea');    
    }

}
