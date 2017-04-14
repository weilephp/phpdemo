<?php
namespace Home\Controller;
use Think\Controller;
class CateController extends CommonController {
    public function index(){
    	$cateid = I('id');
		$this -> assign('cateid',$cateid);
		$this -> lst($cateid);
  		$this -> display();
    }

    public function lst($id){
    	$article = D('Article');
    	$count = $article -> where(array("cateid" => $id)) -> count();
    	$page = new \Think\Page($count,8);
    	$page -> setConfig("prev","上一页");
    	$page -> setConfig("next","下一页");
    	$show = $page -> show();
    	$list = $article -> where(array("cateid" => $id)) -> limit($page->firstRow.",".$page->listRows) -> select();
    	$this -> assign("show",$show);
    	$this -> assign("list",$list);
    }
}