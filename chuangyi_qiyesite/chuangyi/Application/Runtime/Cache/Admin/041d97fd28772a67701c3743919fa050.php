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
.STYLE6 {color: #000000; font-size: 14px; }
.STYLE10 {color: #000000; font-size: 14px; }
.STYLE19 {
  color: #344b50;
  font-size: 14px;
  padding:5px;
}
.STYLE21 a{
  font-size: 14px;
  color: blue;
  text-decoration: none;
}
.STYLE21 a:hover{
  color: red;
}
.STYLE22 {
  font-size: 12px;
  color: #295568;
}
.lstTop{
  text-decoration: none;
  color:white;
}
.lstTop:hover{
  color:red;
}
.current{
  color:red;
  width:15px;
  display:inline-block;

}
.num{
  width:15px;
  display: inline-block;
}
.rows{
  color:blue;
}
-->
</style>
<script type="text/javascript" src="http://localhost/weile/chuangyi/Application/Admin/Public/js/jquery-3.1.0.min.js"></script>
<script>
var  highlightcolor='#d5f4fe';
//此处clickcolor只能用win系统颜色代码才能成功,如果用#xxxxxx的代码就不行,还没搞清楚为什么:(
var  clickcolor='#51b2f6';
function  changeto(){
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
}

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
                <td width="94%" valign="bottom"><span class="STYLE1"> 配置列表显示</span></td>
              </tr>
            </table></td>
            <td><div align="right"><span class="STYLE1">
              <input type="checkbox" name="checkbox11" id="checkbox11" />
              全选      &nbsp;&nbsp;<img src="http://localhost/weile/chuangyi/Application/Admin/Public/images/add.gif" width="10" height="10" /><a href="/weile/chuangyi/index.php/Admin/Conf/add" class="lstTop"> 添加</a>   &nbsp; <img src="http://localhost/weile/chuangyi/Application/Admin/Public/images/del.gif" width="10" height="10" /><a href="#" class="lstTop" id="deleteAll"> 删除 </a>   &nbsp;&nbsp;<img src="http://localhost/weile/chuangyi/Application/Admin/Public/images/edit.gif" width="10" height="10" /> 编辑   &nbsp;</span><span class="STYLE1"> &nbsp;</span></div></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#a8c7ce" onmouseover="changeto()"  onmouseout="changeback()">
      <tr>
        <td width="4%" height="20" bgcolor="d3eaef" class="STYLE10"><div align="center">
          <input type="checkbox" name="checkbox" id="selall" />
        </div></td>
        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">配置id</span></div></td>
        <td width="10%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">配置名称</span></div></td>
        <td width="15%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">配置英文名</span></div></td>
        <td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">配置类型</span></div></td>
        <td width="16%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">可选值</span></div></td>
        <td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">默认值</span></div></td>
        <td width="14%" height="20" bgcolor="d3eaef" class="STYLE6"><div align="center"><span class="STYLE10">基本操作</span></div></td>
      </tr>
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
          <td height="20" bgcolor="#FFFFFF"><div align="center">
            <input type="checkbox" name="delall" class="selall" value="<?php echo ($vo["cf_id"]); ?>" />
          </div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE6"><div align="center"><span class="STYLE19"><?php echo ($vo["cf_id"]); ?></span></div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo ($vo["cf_name"]); ?></div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo ($vo["cf_ename"]); ?></div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo ($vo["cf_type"]); ?></div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo ($vo["cf_values"]); ?></div></td>
          <td height="20" bgcolor="#FFFFFF" class="STYLE19"><div align="center"><?php echo ($vo["cf_value"]); ?></div></td>
          <td height="20" bgcolor="#FFFFFF"><div align="center" class="STYLE21"><a href="/weile/chuangyi/index.php/Admin/Conf/edit/cf_id/<?php echo ($vo["cf_id"]); ?>">修改</a> | <a href="/weile/chuangyi/index.php/Admin/Conf/del/cf_id/<?php echo ($vo["cf_id"]); ?>" onclick="return confirm('确定要删除此配置？');">删除</a></div></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table></td>
  </tr>
</table>
</body>
</html>
<script type="text/javascript">
    $("#selall").click(function(){
        if(this.checked){ 
            $(".selall").attr("checked","checked");
        }else{
            $(".selall").removeAttr("checked");
        } 
    });
    $("#deleteAll").click(function(){
        var flag = confirm("确定要删除选中配置？");
        if(flag){
          var obj = document.getElementsByName("delall");
          var id = new Array();
          for(i=0;i<obj.length;i++){
            if(obj[i].checked){
              id.push(obj[i].value);
            }
          }
          $.ajax({
              url:'/weile/chuangyi/index.php/Admin/Conf/delall',
              method:'post',
              dataType:'json',
              data:{'id':id},
              tradition:true,
              success:function(data){
                  alert(data.msg);
                  window.location.reload();
              },
          });
        }else{
          return;
        }
      });
</script>