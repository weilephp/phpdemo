<?php
namespace Home\Controller;
use Think\Controller;
class PageController extends CommonController {
    public function index(){
    	$cate = D('Category');
    	$cateid = I('cate_id');
    	$cateself = $cate -> find($cateid);
    	$catecontent = htmlspecialchars_decode($cateself['cate_content']);
    	$this -> assign('catecontent',$catecontent);
        $this -> display();
    }
}