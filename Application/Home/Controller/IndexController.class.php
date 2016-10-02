<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "Index的控制器的index方法<br>";
    }
    public function show(){
    	echo 'Index控制器的show方法<br>';
    }
}