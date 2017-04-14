<?php
namespace Home\Controller;
use Think\Controller;
class ListController extends CommonController {
    public function index(){
    	$article = D('Article');
    	$cateid = I('cate_id');
    	$where['ar_cateid'] = array('eq',$cateid);
    	$articles = $article -> where($where) -> select();
    	$this -> assign('articles',$articles);
        $this -> display();
    }
}