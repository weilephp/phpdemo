<?php
namespace Admin\Model;
use Think\Model;
class ArticleModel extends Model{
	protected $_validate = array(
		array('title','require','文章名称必须！',1,'regex'),
		array('cateid','require','文章分类必须！','1','regex'),
		array('title','','文章名称不得重复！',0,'unique',1),
		array('content','require','文章内容必须!',0,'regex'),
		//array('sort','require','栏目排序必须！',1,'regex'),
	);

	/*protected $_link = array(
		'Cate' => array(
			"mapping_type" => self::BELONGS_TO,
			"class_name" => "Cate",
			"mapping_name" => "Cate",
			"foreign_key" => "cateid",
			"mapping_fields" => array("catename"),
		),		
	);*/
	/*public $viewFields = array(
		'Article' => array('id','title','pic','descr','_type'=>'LEFT'),
		'Cate' => array('catename','_on'=>'Article.cateid=Cate.id'),
	);*/
}