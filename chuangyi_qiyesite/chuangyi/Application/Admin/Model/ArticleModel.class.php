<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model{
	protected $_validate = array(
		array('ar_title','require','文章标题不得为空',0,'regex',3),
		//array('cate_name','','栏目名称不得重复',0,'unique',3),
		array('ar_title','','文章标题不得重复！',0,'unique',3),
	);

}