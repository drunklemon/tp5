<?php
namespace app\index\controller;

use think\Controller;

class Tijiao       extends Controller
{
    public function index()
    {
        return  $this->fetch('Tijiao');    
    }
}
