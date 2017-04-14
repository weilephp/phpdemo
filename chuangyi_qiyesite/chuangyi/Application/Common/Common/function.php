<?php

function getsub($pid){
	$cate = D('Category');
	$where['parentid'] = array('eq',$pid);
	$cateres = $cate -> where($where) -> select();
	return $cateres;
}
