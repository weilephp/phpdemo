<?php
namespace Admin\Model;
use Think\Model;
class CategoryModel extends Model{
	protected $_validate = array(
		array('cate_name','require','栏目名称不得为空',0,'regex',3),
		//array('cate_name','','栏目名称不得重复',0,'unique',3),
	);

	//无限极分类树，用来排列元素
	public function catetree(){
		$data = $this -> order('cate_id asc') -> select();
		return $this -> resort($data);
	}

	private function resort($data,$parentid=0,$level=0){
		static $res = array();
		foreach($data as $key => $val){
			if($val['parentid']==$parentid){
				$val['level'] = $level;
				$res[] = $val;
				$this -> resort($data,$val['cate_id'],$level+1);
			}
		}

		return $res;
	}


	/**
	 * [delChildrens 删除子类树,用来查找所有被传递过来id下面的子类]
	 * @param  [string] $cate_id [要查找的id]
	 * @return [array]          [返回包含所有子元素的数组]
	 */
	private function delChildrens($cate_id){
		$data = $this -> select();
		return $this -> getChildrens($data,$cate_id);
	}


	/**
	 * [getChildrens 获得传入id的子元素，id为一个]
	 * @param  [array] $data     [分类表的所有数据]
	 * @param  [string] $parentid [父id]
	 * @return [array]           [返回包含所有子元素的数组]
	 */
	private function getChildrens($data,$parentid){
		static $result = array();
		foreach ($data as $key => $value) {
			if($value['parentid'] == $parentid){
				$result[] = $value['cate_id'];
				$this -> getChildrens($data,$value['cate_id']);
			}
		}
		return $result;
	}


	/**
	 * [_before_delete 执行delete()方法之前需要执行的操作.]
	 * @param  [array] $option [是一个数组，包含传递给delete方法的参数，$option['where']['cate_id'][1]的值就是批量删除传过来的id字符串]
	 */
	public function _before_delete($option){

		//如果传多来的id是一个数组，则执行批量删除
		if(is_array($option['where']['cate_id'])){
			$arr = explode(",",$option['where']['cate_id'][1]);		//将字符串分割成数组
			$arr1 = array();	//声明空数组变量，用来存放遍历所得的子元素
			foreach ($arr as $key => $value) {
				$arr2 = $this -> delChildrens($value);
				$arr1 = array_merge($arr1,$arr2);
			}
			//去除重复的数组元素，原因在于循环的时候传过来的id包含子类，那么会将子类也用删除树查找子类，这样就出现重复
			$childArr = array_unique($arr1);
			$childStr = implode(",",$childArr);
		}else{
			$childArr = $this -> delChildrens(I('cate_id'));
			$childStr = implode(",",$childArr);
		}

		if($childStr){
			//这里不能用delete()方法进行删除，因为这个方法本身就是在删除前执行的操作，如果这里再用delete()方法进行删除，会进入死循环
			$this -> execute("DELETE FROM `ar_category` WHERE `cate_id` IN ({$childStr})");
		}
	}
}