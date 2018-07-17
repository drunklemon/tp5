<?php
namespace app\index\controller;

use think\Controller;

class Afternoon_tea       extends Controller
{
    public function index()
    {
        return  $this->fetch('Afternoon_tea');    
    }
}
