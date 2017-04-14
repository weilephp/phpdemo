<?php
namespace Admin\Controller;
use Think\Controller;
class ConfController extends Controller{
	public function lst(){
		$conf = D('Conf');
		$list = $conf -> order('cf_id asc') -> select();
		$this -> assign('list',$list);
		$this -> display();
	}

	public function add(){
		$conf = D('Conf');
		if(IS_POST){
			if($conf -> create()){
				if($conf -> add()){
					$this -> success("配置项添加成功！",U('lst'));
				}else{
					$this -> error("配置项添加失败！");
				}
			}else{
				$this -> error($conf->getError());
			}

			return;
		}
		$this -> display();
	}

	public function edit(){
		$conf = D('Conf');
		if(IS_POST){
			$data['cf_id'] = I('id');
			$data['cf_name'] = I('cf_name');
			$data['cf_ename'] = I('cf_ename');
			$data['cf_type'] = I('cf_type');
			$data['cf_values'] = I('cf_values');
			$data['cf_value'] = I('cf_value');
			if($conf -> create($data)){
				if($conf -> save()){
					$this -> success("修改成功！",U('lst'));
				}else{
					$this -> error("修改失败！");
				}
			}else{
				$this -> error($conf->getError());
			}

			return;
		}
		$confres = $conf -> find(I('cf_id'));
		$this -> assign('confres',$confres);
		$this -> display();
	}

	public function del(){
		$conf = D('Conf');
		$id = I('cf_id');
		if($conf -> delete($id)){
			$this -> success("删除成功！",U('lst'));
		}else{
			$this -> error("删除失败！");
		}
	}

	public function delall(){
		$conf = D('Conf');
		$id = I('id');
		$strid = implode(',',$id);
		if($strid){
			if($conf -> delete($strid)){
				$data['code'] = 1;
				$data['msg'] = "删除成功！";
			}else{
				$data['code'] = 0;
				$data['msg'] = "删除失败！";
			}
			$this -> ajaxReturn($data);
		}
	}

	public function conf(){
		$conf = D('Conf');
		$res = array();
		if(IS_POST){
			$res = I();
			$conf -> xiugai($res);
			$this -> success("已保存！",U('conf'));
			return;
		}
		$confres = $conf -> order("cf_id asc") -> select();
		$this -> assign('confres',$confres);
		$this -> display();
	}

}	