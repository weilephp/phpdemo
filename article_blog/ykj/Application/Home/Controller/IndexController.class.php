<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	$this -> lst();
        $this -> display();
    }

    public function lst(){
    	$article = D('Article');
    	$count = $article -> count();
    	$page = new \Think\Page($count,4);
    	$page -> setConfig("prev","上一页");
    	$page -> setConfig("next","下一页");
    	$show = $page -> show();
    	$list = $article -> limit($page->firstRow.",".$page->listRows) -> select();
    	$this -> assign("show",$show);
    	$this -> assign("list",$list);
    }
}