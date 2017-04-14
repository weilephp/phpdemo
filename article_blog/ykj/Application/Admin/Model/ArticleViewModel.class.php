<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class ArticleViewModel extends ViewModel{
	/*protected $_link = array(
		'Cate' => array(
			"mapping_type" => self::BELONGS_TO,
			"class_name" => "Cate",
			"mapping_name" => "Cate",
			"foreign_key" => "cateid",
			"mapping_fields" => array("catename"),
		),		
	);*/
	public $viewFields = array(
		'Article' => array('id','title','pic','descr','_type'=>'LEFT'),
		'Cate' => array('catename','_on'=>'Article.cateid=Cate.id'),
	);
}