<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends CommonController{
	
	public function lst(){
		$link = D("ArticleView");
		$count = $link -> count();
		$page = new \Think\Page($count,6);
		$show = $page -> show();
		$list = $link -> order("id") -> limit($page->firstRow.",".$page->listRows) -> select();
		$this -> assign("list",$list);
		$this -> assign("show",$show);
		$this -> display();
	}

	public function add(){
		$article = D("Article");
		$pic = '';
		if(IS_POST){
			if($_FILES['pic']['tmp_name']!=""){
				$upload = new \Think\Upload;
				$upload -> maxSize = 3145728;
				$upload -> exts = array("jpg","gif","jpeg","png",);
				$upload -> rootPath = "./";
				$upload -> savePath = "Public/upLoad/";
				$info = $upload -> upload();
				if(!$info){
					$this -> error($upload->getError());
				}else{
					$pic = $info['pic']['savepath'].$info['pic']['savename'];
				}
			}
			if(!$article->create()){
				$this -> error($article->getError());
			}else{
				$article -> time = time();
				$article -> pic = $pic;
				if($article->add()){
					$this -> success("栏目添加成功！",U("Admin/article/lst"));
				}else{
					$this -> error("栏目添加失败！");
				}
			}
			return;
		}
		$cate = D("Cate");
		$catename = $cate -> field("catename,id") -> select();
		$this -> assign("catename",$catename);
		$this -> display();
	}

	public function edi(){
		$article = D("Article");
		if(IS_POST){
			$data["id"] = I("id");
			$data["title"] = I("title");
			$data["content"] = I("content");
			$data["descr"] = I("descr");
			$data["cateid"] = I("cateid");
			$data["time"] = time();
			if($_FILES['pic']['tmp_name']!=""){
				$upload = new \Think\Upload;
				$upload -> maxSize = 3145728;
				$upload -> exts = array("jpg","gif","jpeg","png",);
				$upload -> rootPath = "./";
				$upload -> savePath = "Public/upLoad/";
				$info = $upload -> upload();
				if(!$info){
					$this -> error($upload->getError());
				}else{
					$data['pic'] = $info['pic']['savepath'].$info['pic']['savename'];
				}
			}
			if($article->create($data)){
				if($article->save()){
					$this -> success("修改成功",U("Admin/article/lst"));
				}else{
					$this -> error("修改失败");
				}
			}else{
				$this->error($article->getError());
			}
			return;
		}
		$data = $article -> find(I("id"));
		$this -> assign(data,$data);
		$cate = D("Cate");
		$catename = $cate -> field("catename,id") -> select();
		$this -> assign("catename",$catename);
		$this -> display();
	}

	public function del(){
		$article = D("Article");
		$result = $article -> delete(I("id"));
		if($result){	
			$this -> success("删除成功",U("Admin/article/lst"));
		}else{
			$this -> error("删除失败");
		}
	}

	/*public function sort(){
		$link = D("Link");
		foreach ($_POST as $id => $sort) {
			$link -> where(array("id"=>$id)) -> setField("sort",$sort);
		}
		$this -> success("排序成功",U("Admin/link/lst"));
		
	}*/
}