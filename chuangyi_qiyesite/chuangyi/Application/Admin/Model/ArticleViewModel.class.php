<?php
namespace Admin\Model;
use Think\Model\ViewModel;
class ArticleViewModel extends ViewModel{
	public $viewFields = array(
		'Article' => array('ar_id','ar_title','ar_author','ar_pic','ar_rem','_type'=>'LEFT'),
		'Category' => array('cate_name','_on'=>'Article.ar_cateid=Category.cate_id'),
	);
}