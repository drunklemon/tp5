<?php
namespace app\index\controller;

use think\Controller;

class Cart       extends Controller
{
    public function index()
    {
        return  $this->fetch('Cart');    
    }
}
