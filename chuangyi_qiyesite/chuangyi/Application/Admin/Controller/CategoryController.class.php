<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller{
	//栏目列表显示
	public function lst(){
		$cate = D('Category');
		//$cateres = $cate -> order("cate_id") -> select();
		$cateres = $cate -> catetree();
		$this -> assign('cateres',$cateres);
		$this -> display();
	}

	//栏目添加
	public function add(){
		$cate = D("Category");
		//如果有数据提交，则进行操作
		if(IS_POST){
			$data['cate_name'] = I('cate_name');
			$data['cate_ename'] = I('cate_ename');
			$data['cate_descr'] = I('cate_descr');
			$data['cate_keywords'] = I('cate_keywords');
			$data['cate_type'] = I('cate_type');
			$data['cate_content'] = I('cate_content');
			$data['parentid'] = I('parentid');
			//先判断有没有文件上传，有则进行文件上传移动，没有就不执行
			if($_FILES['cate_pic']['tmp_name']){
				$upload = new \Think\Upload();
				$upload -> maxSize = 3145728; 
				$upload -> exts = array('jpg', 'gif', 'png', 'jpeg');
				$upload -> rootPath = './';
				$upload -> savePath = 'Public/Upload/';
				$info = $upload -> upload();
				if(!info){
					$this -> error($upload->getError());
				}else{
					//将文件上传路径保存到$data[]数组变量中
					$data['cate_pic'] = $info['cate_pic']['savepath'].$info['cate_pic']['savename'];
				}
			}
			//创建数组data对象;
			if($cate->create($data)){
				if($cate->add($data)){
					$this -> success('栏目添加成功！',U('lst'));
				}else{
					$this -> error('添加栏目失败！');
				}
			}else{
				$this -> error($cate->getError());
			}
			return;
		}
		$cateres = $cate -> catetree();
		$this -> assign('cateres',$cateres);
		$this -> display();
	}

	//栏目修改
	public function edit(){
		$cate = D('Category');
		if(IS_POST){
			$data['cate_id'] = I('id');
			$data['cate_name'] = I('cate_name');
			$data['cate_ename'] = I('cate_ename');
			$data['cate_descr'] = I('cate_descr');
			$data['cate_keywords'] = I('cate_keywords');
			$data['cate_type'] = I('cate_type');
			$data['cate_content'] = I('cate_content');
			$data['parentid'] = I('parentid');
			if($_FILES['cate_pic']['tmp_name']){
				$upload = new \Think\Upload();
				$upload -> maxSize = 3145728;
				$upload -> exts = array('jpg', 'gif', 'png', 'jpeg');
				$upload -> rootPath = './';
				$upload -> savePath = 'Public/Upload/';
				$info = $upload -> upload();
				if(!info){
					$this -> error($upload->getError());
				}else{
					$data['cate_pic'] = $info['cate_pic']['savepath'].$info['cate_pic']['savename'];
				}
			}
			if($cate->create($data)){
				if($cate->save($data)){
					$this -> success('修改栏目成功！',U('lst'));
				}else{
					$this -> error('修改栏目失败！');
				}
			}else{
				$this -> error($cate->getError());
			}
			return;
		}
		$data = $cate -> catetree();
		$this -> assign('data',$data);
		$cateres = $cate -> find(I('cate_id'));
		$this -> assign('cateres',$cateres);
		$this -> display();
	}

	//删除操作
	public function del(){
		$cate = D('Category');
		if($cate -> delete(I('cate_id'))){
			$this -> success("删除成功！");
		}else{
			$this -> error("删除失败！");
		}
	}

	public function delall(){
		$cate = D('Category');
		$id = I('id');
		$str_id = implode(',',$id);
		if($cate->delete($str_id)){
			$data['code'] = 1;
			$data['msg'] = "删除成功！";
		}else{
			$data['code'] = 0;
			$data['msg'] = "删除失败！";
		}
		$this -> ajaxReturn($data);
	}
}