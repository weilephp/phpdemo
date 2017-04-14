<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller{
	public function lst(){
		$article = D('ArticleView');
		$count = $article -> count('ar_id');
		$page = new \Think\Page($count,2);
		$list = $article -> order('ar_id asc') -> limit($page->firstRow.','.$page->listRows) -> select();
		$page -> setConfig('header','<span class="rows">共 %TOTAL_ROW% 篇文章</span>');
		$page -> setConfig('prev','上一页');
		$page -> setConfig('next','下一页');
		$page -> setConfig('theme','%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		$show = $page -> show();
		$this -> assign("list",$list);
		$this -> assign("show",$show); 
		$this -> display();
	}

	public function add(){
		$article = D('Article');
		$cate = D('Category');
		if(IS_POST){
			$data['ar_title'] = I('ar_title');
			$data['ar_author'] = I('ar_author');
			$data['ar_rem'] = I('ar_rem');
			//$data['ar_pic'] = I('ar_pic');
			$data['ar_cateid'] = I('ar_cateid');
			$data['ar_content'] = I('ar_content');
			$data['ar_time'] = time();
			if($_FILES['ar_pic']['tmp_name']){
				$upload = new \Think\Upload();
				$upload -> maxSize = 3145728;
				$upload -> exts = array('jpg', 'gif', 'png', 'jpeg');
				$upload -> rootPath = './';
				$upload -> savePath = 'Public/Upload/';
				$info = $upload -> upload();
				if(!info){
					$this -> error($upload -> getError());
				}else{
					$data['ar_pic'] = $info['ar_pic']['savepath'].$info['ar_pic']['savename'];
				}
			}

			if($article -> create($data)){
				if($article -> add()){
					$this -> success('添加文章成功！',U('lst'));
				}else{
					$this -> error('添加文章失败！');
				}
			}else{
				$this -> error($article -> getError());
			}

			return;
		}

		$cateres = $cate -> catetree();
		$this -> assign('cateres',$cateres);
		$this -> display();
	}

	public function edit(){
		$article = D('Article');
		if(IS_POST){
			$data['ar_id'] = I('ar_id');
			$data['ar_title'] = I('ar_title');
			$data['ar_author'] = I('ar_author');
			$data['ar_rem'] = I('ar_rem');
			//$data['ar_pic'] = I('ar_pic');
			$data['ar_cateid'] = I('ar_cateid');
			$data['ar_content'] = I('ar_content');
			if($_FILES['ar_pic']['tmp_name']){
				$upload = new \Think\Upload();
				$upload -> maxSize = 3145728;
				$upload -> exts = array('jpg', 'gif', 'png', 'jpeg');
				$upload -> rootPath = './';
				$upload -> savePath = 'Public/Upload/';
				$info = $upload -> upload();
				if(!info){
					$this -> error($upload -> getError());
				}else{
					$data['ar_pic'] = $info['ar_pic']['savepath'].$info['ar_pic']['savename'];
				}
			}

			if($article -> create($data)){
				if($article -> save($data)){
					$this -> success('修改文章成功！',U('lst'));
				}else{
					$this -> error('修改文章失败！');
				}
			}else{
				$this -> error($article -> getError());
			}

			return;
		}
		$id = I('ar_id');
		$artres = $article -> find($id);
		$this -> assign('artres',$artres);
		$cate = D('Category');
		$cateres = $cate -> catetree();
		$this -> assign('cateres',$cateres);
		$this -> display();
	}

	public function del(){
		$article = D('Article');
		$id = I('ar_id');
		if($article -> delete($id)){
			$this -> success("删除文章成功！",U('lst'));
		}else{
			$this -> error("删除文章失败！");
		}
	}

	public function delall(){
		$article = D('Article');
		$id = I('id');
		$strid = implode(',',$id);
		if($article -> delete($strid)){
			$data['code'] = 1;
			$data['msg'] = "删除成功！";
		}else{
			$data['code'] = 0;
			$data['msg'] = "删除失败！";
		}
		$this -> ajaxReturn($data);
	}
}