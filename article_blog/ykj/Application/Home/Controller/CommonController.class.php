<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller{
	public function _initialize(){
		$this -> catelst();
		$this -> articlelst();
		$this -> linklst();
	}

	public function catelst(){
		$cate = D('Cate');
		$cateres = $cate -> order("sort") -> select();
		$this -> assign("cateres",$cateres);
	}

	public function articlelst(){
		$article = D('Article');
		$articleres = $article ->order("time desc") ->limit(8) -> select();
		$this -> assign('articleres',$articleres);
	}

	public function linklst(){
		$link = D("Link");
		$linkres = $link -> select();
		$this -> assign("linkres",$linkres);
	}
}