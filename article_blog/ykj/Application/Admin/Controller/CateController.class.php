<?php
namespace Admin\Controller;
use Think\Controller;
class CateController extends CommonController{
	public function lst(){
		$cate = D("Cate");
		$list = $cate -> order("sort") -> select();
		$this -> assign("list",$list);
		$this -> display();
	}

	public function add(){
		$cate = D("Cate");
		if(IS_POST){
			if(!$cate->create()){
				$this -> error($cate->getError());
			}else{
				if($cate->add()){
					$this -> success("栏目添加成功！",U("Admin/Cate/lst"));
				}else{
					$this -> error("栏目添加失败！");
				}
				return;
			}
		}
		$this -> display();
	}

	public function edi(){
		$cate = D("Cate");
		if(IS_POST){
			$data["id"] = I("id");
			$data["catename"] = I("catename");
			$data["sort"] = I("sort");
			if($cate->create($data)){
				if($cate->save()){
					$this -> success("修改成功",U("Admin/Cate/lst"));
				}else{
					$this -> error("修改失败");
				}
			}else{
				$this->error($cate->getError());
			}
			return;
		}
		$data = $cate -> find(I("id"));
		$this -> assign(data,$data);
		$this -> display();
	}

	public function del(){
		$cate = D("Cate");
		$result = $cate -> delete(I("id"));
		if($result){
			$this -> success("删除成功",U("Admin/Cate/lst"));
		}else{
			$this -> error("删除失败");
		}
	}

	public function sort(){
		$cate = D("Cate");
		foreach ($_POST as $id => $sort) {
			$result[] = $cate -> where(array("id"=>$id)) -> setField("sort",$sort);
		}
		if(in_array(1,$result)){
			$this -> success("排序成功",U("Admin/Cate/lst"));
		}
	}
}