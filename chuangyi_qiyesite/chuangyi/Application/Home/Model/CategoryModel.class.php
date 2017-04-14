<?php
namespace Home\Model;
use Think\Model;
class CategoryModel extends Model{
	public function getparents($cateid){
		while($cateid!=0){
			$result = $this -> find($cateid);
			$arr[] = array(
				'cate_name' => $result['cate_name'],
				'cate_id' => $result['cate_id'],
				'cate_type' => $result['cate_type']
			);
			$cateid = $result['parentid'];
		}
		return array_reverse($arr);
	}
}