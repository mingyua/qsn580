<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台登录</title>
<meta name="author" content="DeathGhost" />
<link href="__PUBLIC__/css/H-ui.login.css" rel="stylesheet" type="text/css" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script type="text/javascript" src="__PUBLIC__/lib/jquery.min.js"></script> 
<script src="__PUBLIC__/Particleground.js" tppabs="__PUBLIC__/Particleground.js"></script>
<script type="text/javascript">
function change_code(obj){
	var verifyURL='<?php echo U(GROUP_NAME."/login/verify",'','');?>';
	$("#code").attr("src",verifyURL + '/' +Math.random());
	return false;
	}
</script>
<script>
$(document).ready(function() {
  //粒子背景特效
  $('body').particleground({
	density:1e4,
    dotColor: '#5cbdaa',
    lineColor: '#5cbdaa'
  });
  //验证码
});
</script>
</head>
<body>
<dl class="admin_login">
 <dt>
  <strong>站点后台管理系统</strong>
  <em>Management System</em>
 </dt>
 <dd class="user_icon">
  <input type="text" id="username" name="username" placeholder="账号" class="login_txtbx" value="" />
 </dd>
 <dd class="pwd_icon">
  <input id="password" name="password" type="password" placeholder="密码" class="login_txtbx"/>
 </dd>
 <dd class="val_icon">
  <div class="checkcode">
    <input type="text" id="J_codetext" name="code" placeholder="验证码" maxlength="4" class="login_txtbx">
    <canvas class="J_codeimg" id="myCanvas"></canvas>
  </div>
  <input type="button" value="验证码核验" class="ver_btn" onClick="javascript:void(change_code('#code'));">
  <img id="code" src="<?php echo U(GROUP_NAME.'/Login/verify','','');?>" onclick="javascript:void(change_code(this));" class="img" />
 </dd>
 <dd>
  <input type="button" value="立即登陆" class="submit_btn"/> 

 </dd>
 <dd>
  <p>© 2016-2018 wxappjz.com 版权所有</p>
  <p>黔ICP备13000105号</p>
 <div class="tip"></div>
 </dd>

 </dl>
 
<script>
$(document).keyup(function(event){
   if(event.keyCode ==13){
     $(".submit_btn").trigger("click");
   }
 });
$(function(){

 $('.submit_btn').click(function(){
	var username=$('#username').val();
	var password=$('#password').val();
	var code=$('#J_codetext').val();
		$.post("<?php echo U(GROUP_NAME.'/login/login','','');?>",{'code':code,'username':username,'password':password},function(data){
			if(data==1){
					$('.tip').show().css('color','#00A000').html('登录成功，正在跳转...').fadeToggle(3000);
					window.location.href="<?php echo U(GROUP_NAME.'/index/index','','');?>";
				}else{
					$('.tip').show().html(data).fadeToggle(3000);
				}
		});
	
	});
});

</script>

</body>
</html>