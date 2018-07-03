/*H-ui.admin.doc.js date:15:42 2015-04-29 by:guojunhui*/
/*----------公用部分------------------*/
function comm_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
function comm_add(w,h,title,url){
	layer_show(w,h,title,url);
}
/*----------公用全屏添加弹窗------------------*/

function comm_all_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*----------公用全屏编辑弹窗------------------*/
function comm_all_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*----------公用删除------------------*/
function comm_del(obj,id,url){
	layer.confirm('确认要删除吗？',function(index){
            $.ajax({
                type:"GET",
                url:url,
                success:function(msg){
					if(msg==1){
						$(obj).parents("tr").remove();
						layer.msg('已删除!',{icon:1,time:1000});
					}else{
						layer.msg('删除失败!',{icon:2,time:1000});
					}
                }
            });
			

	});
}

/*----------图片列表删除------------------*/
function img_del(obj,id,url){
	layer.confirm('确认要删除吗？',function(index){
            $.ajax({
                type:"GET",
                url:url,
                success:function(msg){
					if(msg==1){
						$(obj).parents("span").remove();
						layer.msg('已删除!',{icon:1,time:1000});
					}else{
						layer.msg('删除失败!',{icon:2,time:1000});
					}
                }
            });

	});
}
/*----------批量删除------------------*/
function all_del(obj,url){
 	var checkedNum = $("input[name='delall']:checked").length; 
	if(checkedNum == 0) { 
	alert("请选择至少一项！"); 
	return;
	}
		var checkedList = new Array(); 
		$("input[name='delall']:checked").each(function() { 
		checkedList.push($(this).val()); 
		}); 
		//alert(checkedList);

	layer.confirm('确认要删除所选吗？',function(index){
			$.ajax({
				type : "POST",
				url  : url,
				data : {
					id  : checkedList
				},
				success : function (msg) {
					if(msg==1){
						$(obj).parents("tr").remove();
						layer.msg('已删除!',{icon:1,time:1000});
						window.location.reload(); 
					}else{
						layer.msg('删除失败!',{icon:2,time:1000});
					}
				}

			});

	});
}

/*----------公用状态变化------------------*/
function comm_down(obj,id,url,on,off){
layer.confirm('您确定要'+off+'吗？',function(index){
	$.ajax({ 
           type: "post", 
           url: url, 
           dataType: "json",
		   
    });
	$(obj).parents("tr").find(".comm-manage").prepend('<a style="text-decoration:none" onClick="comm_up(this,\'10001\')" href="javascript:;" title="'+off+'"><i class="icon-hand-up"></i></a>');
	$(obj).parents("tr").find(".comm-status").html('<span class="label radius">已'+off+'</span>');
	$(obj).remove();
	layer.msg('已'+off+'!',{icon:5,time:1000});
	window.location.reload(); //刷新页面
	});
}
/*----------公用状态变化------------------*/
function comm_up(obj,id,url,on,off){
layer.confirm('您确定要'+on+'吗？',function(index){
	$.ajax({ 
           type: "post", 
           url: url, 
           dataType: "json", 
    });
	$(obj).parents("tr").find(".comm-manage").prepend('<a style="text-decoration:none" onClick="comm_down(this,\'10001\')" href="javascript:;" title="'+on+'"><i class="icon-hand-down"></i></a>');
	$(obj).parents("tr").find(".comm-status").html('<span class="label label-success radius">已'+on+'</span>');
	$(obj).remove();
	layer.msg('已'+on+'!',{icon:6,time:1000});
	window.location.reload(); //刷新页面
	});
}





/*------------系统管理--------------*/
$(function(){
	/*返回顶部调用*/
	$(window).on("scroll",$backToTopFun);
	$backToTopFun();
});