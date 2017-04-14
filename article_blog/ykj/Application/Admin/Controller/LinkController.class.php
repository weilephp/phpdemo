<?php
namespace Admin\Controller;
use Think\Controller;
class LinkController extends CommonController{
	
	public function lst(){
		$link = D("Link");
		$count = $link -> count();
		$page = new \Think\Page($count,4);
		$show = $page -> show();
		$list = $link -> order("id") -> limit($page->firstRow.",".$page->listRows) -> select();
		$this -> assign("list",$list);
		$this -> assign("show",$show);
		$this -> display();
	}

	public function add(){
		$link = D("Link");
		if(IS_POST){
			if(!$link->create()){
				$this -> error($link->getError());
			}else{
				if($link->add()){
					$this -> success("栏目添加成功！",U("Admin/link/lst"));
				}else{
					$this -> error("栏目添加失败！");
				}
				return;
			}
		}
		$this -> display();
	}

	public function edi(){
		$link = D("Link");
		if(IS_POST){
			$data["id"] = I("id");
			$data["title"] = I("title");
			$data["url"] = I("url");
			$data["descr"] = I("descr");
			if($link->create($data)){
				if($link->save()){
					$this -> success("修改成功",U("Admin/link/lst"));
				}else{
					$this -> error("修改失败");
				}
			}else{
				$this->error($link->getError());
			}
			return;
		}
		$data = $link -> find(I("id"));
		$this -> assign(data,$data);
		$this -> display();
	}

	public function del(){
		$link = D("Link");
		$result = $link -> delete(I("id"));
		if($result){
			$this -> success("删除成功",U("Admin/link/lst"));
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