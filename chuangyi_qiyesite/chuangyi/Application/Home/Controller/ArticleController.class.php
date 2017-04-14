<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function index(){
    	$article = D('Article');
    	$artdata = $article -> find(I('ar_id'));
    	$this -> assign('artdata',$artdata);
        $this -> display();
    }
}