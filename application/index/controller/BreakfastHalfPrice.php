<?php
namespace app\index\controller;

use think\Controller;

class BreakfastHalfPrice       extends Controller
{
    public function index()
    {
        return  $this->fetch('BreakfastHalfPrice');    
    }
}
