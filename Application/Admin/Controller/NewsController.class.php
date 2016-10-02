<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
        $this->show('新闻管理列表','utf-8');
    }
}