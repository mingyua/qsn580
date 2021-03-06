<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="__LAYUI__/css/layui.css"/>
	</head>
	<style type="text/css">
		.text-center{text-align: center;}
		.pd{padding: 50px 10px;}
		.c-white{color:#FFFFFF}
 .pagination {
  margin: 20px 0;
	text-align:center;
}
.pagination ul {
  display: inline-block;
  list-style:none;
  *display: inline;
  /* IE7 inline-block hack */
  *zoom: 1;
  margin-left: 0;
  margin-bottom: 0;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}
.pagination ul > li {
  display: inline;
}
.pagination ul > li > a,
.pagination ul > li > span,
.pagination #lastspan {
  float: left;
  padding: 4px 12px;
  line-height: 20px;
  text-decoration: none;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  margin:0 3px;
}
.pagination ul > li > a:hover,
.pagination ul > li > a:focus,
.pagination ul > .active > a,
.pagination ul > .active > span {
  background-color: #f5f5f5;
}
.pagination ul > .active > a,
.pagination ul > .active > span {
  color: #999999;
  cursor: default;
}
.pagination ul > .disabled > span,
.pagination ul > .disabled > a,
.pagination ul > .disabled > a:hover,
.pagination ul > .disabled > a:focus {
  color: #999999;
  background-color: transparent;
  cursor: default;
}
.pagination ul > li:first-child > a,
.pagination ul > li:first-child > span {
  border-left-width: 1px;
  -webkit-border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
  border-top-left-radius: 4px;
  -webkit-border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
  border-bottom-left-radius: 4px;
}
.pagination ul > li:last-child > a,
.pagination ul > li:last-child > span,
.pagination #lastspan {
  -webkit-border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
  border-top-right-radius: 4px;
  -webkit-border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
  border-bottom-right-radius: 4px;
}
.pagination-centered {
  text-align: center;
}
.pagination-right {
  text-align: right;
}
.pagination-large ul > li > a,
.pagination-large ul > li > span,
.pagination-large #lastspan{
  padding: 11px 19px;
  font-size: 17.5px;
}
.pagination-large ul > li:first-child > a,
.pagination-large ul > li:first-child > span {
  -webkit-border-top-left-radius: 6px;
  -moz-border-radius-topleft: 6px;
  border-top-left-radius: 6px;
  -webkit-border-bottom-left-radius: 6px;
  -moz-border-radius-bottomleft: 6px;
  border-bottom-left-radius: 6px;
}
.pagination-large ul > li:last-child > a,
.pagination-large ul > li:last-child > span,
.pagination-large #lastspan {
  -webkit-border-top-right-radius: 6px;
  -moz-border-radius-topright: 6px;
  border-top-right-radius: 6px;
  -webkit-border-bottom-right-radius: 6px;
  -moz-border-radius-bottomright: 6px;
  border-bottom-right-radius: 6px;
}
.pagination-mini ul > li:first-child > a,
.pagination-small ul > li:first-child > a,
.pagination-mini ul > li:first-child > span,
.pagination-small ul > li:first-child > span {
  -webkit-border-top-left-radius: 3px;
  -moz-border-radius-topleft: 3px;
  border-top-left-radius: 3px;
  -webkit-border-bottom-left-radius: 3px;
  -moz-border-radius-bottomleft: 3px;
  border-bottom-left-radius: 3px;
}
.pagination-mini ul > li:last-child > a,
.pagination-small ul > li:last-child > a,
.pagination-mini ul > li:last-child > span,
.pagination-small ul > li:last-child > span {
  -webkit-border-top-right-radius: 3px;
  -moz-border-radius-topright: 3px;
  border-top-right-radius: 3px;
  -webkit-border-bottom-right-radius: 3px;
  -moz-border-radius-bottomright: 3px;
  border-bottom-right-radius: 3px;
}
.pagination-small ul > li > a,
.pagination-small ul > li > span {
  padding: 2px 10px;
  font-size: 11.9px;
}
.pagination-mini ul > li > a,
.pagination-mini ul > li > span {
  padding: 0 6px;
  font-size: 10.5px;
}
.pagination .current{color:#FFF ;font-weight: bold; background: #2DC3E8}		
	</style>
	<body>
		<div class="layui-row">
			<!--<div class="layui-col-sm6 layui-col-xs6 text-center ">
				<p class="layui-bg-blue pd"><a href="" class="c-white">文章管理</a></p>
			</div>
			<div class="layui-col-sm6 layui-col-xs6 text-center ">
				<p class="pd layui-bg-orange"><a href="" class="c-white">单页管理</a></p>
			</div>-->
		</div>
		<div class="layui-col-sm12" style="margin-top: 20px;">
			<form action="" method="get" class="layui-form ">  
			<div class="layui-form-item">
			    <div class="layui-input-inline">
			      <select name="cate">
			      	<option value="">请选择</option>
				   <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($v["id"] == $cid ): ?>selected<?php endif; ?> <?php if($v["pid"] == 0 ): ?>disabled<?php endif; ?> ><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
			      </select>
			    </div>
			    <div class="layui-input-inline">
			      <input name="title" autocomplete="off" placeholder="关键词" class="layui-input" type="text">
			    </div>
			    <div class="layui-input-inline">
					 <button class="layui-btn"><i class="layui-icon layui-icon-search"></i>搜索</button>			    	
			    </div>
			</div>	
			
			</form>
			<table class="layui-table">				
				<tr>
					<th>ID</th>
					<th>标题</th>
					<th>所属分类</th>
					<th width="200">操作</th>
				</tr>
				<?php if(is_array($article)): foreach($article as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["title"]); ?></td>
					<td><?php echo ($v["cate"]); ?></td>
					<td class="layui-form">					    
					    <input name="wap" title="显示"  lay-filter="wap" value="<?php echo U('menage/wap',array('id'=>$v['id']));?>"  <?php if($v[wap] == 1): ?>checked<?php endif; ?>  type="checkbox">
					    <input name="hots" title="推荐" lay-filter="hots" value="<?php echo U('menage/hots',array('id'=>$v['id']));?>" <?php if($v[hots] == 1): ?>checked<?php endif; ?>  type="checkbox">					      					    										
					</td>
				</tr><?php endforeach; endif; ?>
			</table>
			<div class="pagination"><?php echo ($page); echo ($tip); ?></div>
		</div>
	</body>
	<script src="__LAYUI__/layui.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		layui.use(['form', 'layedit', 'laydate','jquery'], function(){
		  var $=layui.jquery 
		  ,form = layui.form
		  ,layer = layui.layer
		  ,layedit = layui.layedit
		  ,laydate = layui.laydate;
		  
			form.on('checkbox(wap)', function(data){
				//alert(data.value);
				var wap;
				if(data.elem.checked===true){
					wap=1;
				}else{
					wap=0;
				}
				$.ajax({
					type:'post',
					url:data.value,
					data:{wap:wap},
					success:function(res){
						//alert(res.msg);
						layer.msg(res.msg,{icon:res.status});						
					}
				});
			});        		  
			form.on('checkbox(hots)', function(data){
				//alert(data.value);
				var hots;
				if(data.elem.checked===true){
					hots=1;
				}else{
					hots=0;
				}
				$.ajax({
					type:'post',
					url:data.value,
					data:{hots:hots},
					success:function(res){
						//alert(res.msg);
						layer.msg(res.msg,{icon:res.status});						
					}
				});
			});        		  
		  
		});
	</script>
</html>