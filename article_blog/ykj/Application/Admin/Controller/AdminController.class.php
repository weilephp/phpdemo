<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends CommonController{
	public function lst(){
		$admin = D("Admin");
		$list = $admin -> select();
		$this -> assign("list",$list);
		$this -> display();
	}

	public function add(){
		$admin = D("Admin");
		$data['username'] = I('username');
		$data['password'] = md5(I('password'));
		if(IS_POST){
			if(!$admin->create($data)){
				$this -> error($admin->getError());
			}else{
				if($admin->add()){
					$this -> success("栏目添加成功！",U("Admin/Admin/lst"));
				}else{
					$this -> error("栏目添加失败！");
				}
				return;
			}
		}
		$this -> display();
	}

	public function edi(){
		$admin = D("Admin");
		if(IS_POST){
			$admins = $admin -> find(I('id'));
			if(I('password')==''){
				$data['password'] = $admins['password'];
			}else{
				$data['password'] = md5(I('password'));
			}
			$data["id"] = I("id");
			$data["username"] = I("username");
			if($admin->create($data)){
				if($admin->save()){
					$this -> success("修改成功",U("Admin/Admin/lst"));
				}else{
					$this -> error("修改失败");
				}
			}else{
				$this->error($admin->getError());
			}
			return;
		}
		$data = $admin -> find(I("id"));
		$this -> assign(data,$data);
		$this -> display();
	}

	public function del(){
		$admin = D("Admin");
		$data = $admin -> find(I('id'));
		if($data['username']!='admin'){
			$result = $admin -> delete(I("id"));
			if($result){
				$this -> success("删除成功",U("Admin/Admin/lst"));
			}else{
				$this -> error("删除失败");
			}
		}else{
			$this -> error("最高管理员不能删除！");
		}
	}

}