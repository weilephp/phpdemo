<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
<!--
body {
  margin-left: 3px;
  margin-top: 0px;
  margin-right: 3px;
  margin-bottom: 0px;
}
.STYLE1 {
  color: #e1e2e3;
  font-size: 12px;
}
.STYLE2{
  color:#000;
  font-size:14px;
}
.STYLE6 {color: #000000; font-size: 12; width:20%;}
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
  color: #000;
  font-size:16px;
  font-weight:bold;
}
.STYLE21 {
  font-size: 12px;
  color: #3b6375;
}
.STYLE22 {
  font-size: 12px;
  color: #295568;
}
.lstTop{
  text-decoration: none;
  color:#fff;
}
.lstTop:hover{
  color:red;
}
.add td{
  padding:8px;
}
.add td input:not([type="file"]){
  width:220px;
  height:25px;
  border-radius:5px;
  border:1px solid #aaa;
}
.add td input[type="checkbox"]{
  width:20px;
  height:20px;
}
.STYLE2 input{
  margin-left:20px;
}
input[type="submit"],#back{
  border:none;
  background: blue;
  color:#fff;
  border-radius:5px;
  cursor:pointer;
  margin-left:50px;
  font-size: 16px;
  
}
input[type="submit"]:hover,#back:hover{
  background: #fff;
  border:1px solid blue;
  color:blue;
}
-->
</style>
<script type="text/javascript" src="http://localhost/weile/chuangyi/Application/Admin/Public/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="http://localhost/weile/chuangyi/Application/Admin/Public/ueditor/ueditor.all.min.js"></script>
<script type="text/javascript" src="http://localhost/weile/chuangyi/Application/Admin/Public/ueditor/lang/zh-cn/zh-cn.js"></script>
<script>
var  highlightcolor='#d5f4fe';
//此处clickcolor只能用win系统颜色代码才能成功,如果用#xxxxxx的代码就不行,还没搞清楚为什么:(
var  clickcolor='#51b2f6';
/*function  changeto(){
source=event.srcElement;
  if  (source.tagName=="TR"||source.tagName=="TABLE")
  return;
  while(source.tagName!="TD")
  source=source.parentElement;
  source=source.parentElement;
  cs  =  source.children;
  //alert(cs.length);
  if  (cs[1].style.backgroundColor!=highlightcolor&&source.id!="nc"&&cs[1].style.backgroundColor!=clickcolor)
  for(i=0;i<cs.length;i++){
    cs[i].style.backgroundColor=highlightcolor;
  }
}

function  changeback(){
  if  (event.fromElement.contains(event.toElement)||source.contains(event.toElement)||source.id=="nc")
  return
  if  (event.toElement!=source&&cs[1].style.backgroundColor!=clickcolor)
  //source.style.backgroundColor=originalcolor
  for(i=0;i<cs.length;i++){
    cs[i].style.backgroundColor="";
  }
}*/

function  clickto(){
source=event.srcElement;
if  (source.tagName=="TR"||source.tagName=="TABLE")
return;
while(source.tagName!="TD")
source=source.parentElement;
source=source.parentElement;
cs  =  source.children;
//alert(cs.length);
if  (cs[1].style.backgroundColor!=clickcolor&&source.id!="nc")
for(i=0;i<cs.length;i++){
  cs[i].style.backgroundColor=clickcolor;
}
else
for(i=0;i<cs.length;i++){
  cs[i].style.backgroundColor="";
}
}
</script>


</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="24" bgcolor="#353c44"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="6%" height="19" valign="bottom"><div align="center"><img src="http://localhost/weile/chuangyi/Application/Admin/Public/images/tb.gif" width="14" height="14" /></div></td>
                <td width="94%" valign="bottom"><span class="STYLE1"> 添加文章</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">
              <input type="checkbox" name="checkbox11" id="checkbox11" />
              全选      &nbsp;&nbsp;<img src="http://localhost/weile/chuangyi/Application/Admin/Public/images/add.gif" width="10" height="10" /><a href="/weile/chuangyi/index.php/Admin/Article/add" class="lstTop"> 添加</a>   &nbsp; <img src="http://localhost/weile/chuangyi/Application/Admin/Public/images/del.gif" width="10" height="10" /> 删除    &nbsp;&nbsp;<img src="http://localhost/weile/chuangyi/Application/Admin/Public/images/edit.gif" width="10" height="10" /> 编辑   &nbsp;</span><span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>
    <form method="post" action="" enctype="multipart/form-data">
      <input type="hidden" value="<?php echo ($artres["ar_id"]); ?>" name="ar_id">
      <table class="add" width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce">
        <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">文章标题</span></div></td>
          <td height="20" bgcolor="#FFFFFF" align="left"><input type="text" name="ar_title" value="<?php echo ($artres["ar_title"]); ?>"></td>
        </tr>
        <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">文章作者</span></div></td>
          <td height="20" bgcolor="#FFFFFF" align="left"><input type="text" name="ar_author" value="<?php echo ($artres["ar_author"]); ?>"></td>
        </tr>
        <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">是否推荐</span></div></td>
          <td height="20" bgcolor="#FFFFFF" align="left"><input type="checkbox" name="ar_rem" value="1" <?php if($artres['ar_rem'] == 1): ?>checked="checked"<?php endif; ?>></td>
        </tr>
        <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">缩略图</span></div></td>
          <td height="20" bgcolor="#FFFFFF" align="left"><input type="file" name="ar_pic">
              <?php if($artres['ar_pic'] != ''): ?><img src="/weile/chuangyi/<?php echo ($artres["ar_pic"]); ?>" height="30px"><?php endif; ?>
          </td>
        </tr>
        <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">所属栏目</span></div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19" align="left">
              <select name="ar_cateid">
                  <option selected="selected" hidden>请选择栏目</option>
                  <?php if(is_array($cateres)): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["cate_id"]); ?>" <?php if($artres['ar_cateid'] == $vo['cate_id']): ?>selected="selected"<?php endif; ?>><?php echo str_repeat("&nbsp;",$vo['level']*3); echo ($vo["cate_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
              </select>
          </td>
        </tr>
        <tr>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="right"><span class="STYLE19">文章内容</span></div></td>
          <td height="20" bgcolor="#FFFFFF" align="left"><textarea id="content" name="ar_content"><?php echo ($artres["ar_content"]); ?></textarea></td>
        </tr>
        <tr>
          <td bgcolor="#FFFFFF" colspan="2" align="center"><input type="submit" name="submit" value="保存修改"><input type="button" name="back" value="返回" id="back"></td>
        </tr>
    </table></form></td>
  </tr>
  <script type="text/javascript">
      UE.getEditor('content',{initialFrameWidth:800,initialFrameHeight:300,});
      document.getElementById("back").onclick = function(){
        window.location = history.back();
      }
  </script>
</table>
</body>
</html>