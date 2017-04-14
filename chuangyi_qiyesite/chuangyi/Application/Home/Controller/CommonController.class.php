<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function _initialize(){
    	//动态调用二级栏目
    	$cate = D('Category');
    	$where['parentid'] = array('eq',0);
    	$cateres = $cate -> where($where) -> select();
    	$this -> assign('cateres',$cateres);

    	//当前位置显示
    	//$cate = D('Category');因为文章页面也需要知道cate_id就是当前页面对应的cate_id，但是文章传递过来的参数是ar_id，所以需要判断
    	if(I('cate_id')){
    		$cateid = I('cate_id');
    	}elseif(I('ar_id')){
    		$arid = I('ar_id');
    		$article = D('Article');
    		$where['ar_id'] = array('eq',$arid);
    		$artcurent = $article -> where($where) -> find();
    		$cateid = $artcurent['ar_cateid'];
    	}
    	$data = $cate -> getparents($cateid);
    	$this -> assign('data',$data);

    	//网站首页显示高亮
    	$this -> assign('flag',false);

    	//获取当前位置
    	$cateself = $cate -> find($cateid);
    	$this -> assign('cateself',$cateself);

    	//顶级栏目显示
    	if($cateself){
	    	if($cateself['parentid']!=0){
	    		$parentid = $cateself['parentid'];
	    		$where['cate_id'] = array('eq',$parentid);
	    		$catetop = $cate -> where($where) -> find();
	    		$topid = $catetop['cate_id'];
	    		$subs = $cate -> where("parentid = {$topid}") -> select();
	    		$this -> assign('subs',$subs);	
	    	}else{
	    		$catetop = $cateself;
	    		$topid = $catetop['cate_id'];
	    		$subs = $cate -> where("parentid = {$topid}") -> select();
	    		$this -> assign('subs',$subs);
	    	}
	    	$this -> assign('catetop',$catetop);
    	}
    }
}