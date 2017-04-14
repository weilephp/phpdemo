<?php
namespace Admin\Model;
use Think\Model;
class ConfModel extends Model{
	protected $_validate = array(
		array('cf_name','require','配置名称不得为空',0,'regex',3),
		//array('cate_name','','栏目名称不得重复',0,'unique',3),
		array('cf_name','','配置名称不得重复！',0,'unique',3),
	);

	public function xiugai($res){
		foreach ($res as $key => $value) {
			$this -> execute("update ar_conf set cf_value = '{$value}' where cf_ename = '{$key}'");
		}
	}
}