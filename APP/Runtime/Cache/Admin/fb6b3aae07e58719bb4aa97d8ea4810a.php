<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title><?php echo ($hd["langUAGE"]["error_html_title"]); ?></title>
            <style type="text/css">
                *{margin:0px; padding:0px;}
                body{background-color:#EAEAEA;}
                 .hd_error_html{
					vertical-align:middle;
                    width:500px;
					margin:10% auto;
                    background-color:#F2F2F2;
                    height:auto;
					overflow:hidden; 
                    border-radius: 3px;
					box-shadow: 3px 3px 3px #aaa;
                }
                .hd_error_html h2{ height: 28px; color:#fff;background-color:#333;font-size:16px; font-weight: bold; text-indent: 10px; line-height: 1.8em;}
                .hd_error_html div{padding:10px; font-size:14px; font-weight: bold;color:#333;}
                .hd_error_html div a{color:royalblue;}
                .hd_error_html div p{ border-bottom: solid 1px #dcdcdc;padding-bottom: 10px; margin-bottom: 10px;}
                .hd_error_html div span {color:#999; font-weight: normal;}
                .hd_error_html div span a{color:#999;}
                #time{color:#F57E1D;font-size:14px;padding:3px;}
            </style>
            <script type="text/javascript">
                window.setTimeout("location.href='<?php echo ($jumpUrl); ?>'",3*1000);
            </script>
    </head>
    <body>
        <div class="hd_error_html">
            <h2>操作提示</h2>
            <div>
			<?php if(isset($message)): ?><h1>:)</h1>
			<p class="success"><?php echo($message); ?></p>
			<?php else: ?>
			<h1>:(</h1>
			<p class="error"><?php echo($error); ?></p><?php endif; ?>                
                <span><span id="time">3</span>后自动跳转
                    <a href="<?php echo ($jumpUrl); ?>"></a>
                    如不能跳转，请点出此处<a href="<?php echo ($jumpUrl); ?>">立即跳转</a></span>
            </div>
        </div>
        <script type="text/javascript">
            var time=document.getElementById("time").innerHTML;
            function revTime(){
                time--;
                if(time>0){
                    document.getElementById("time").innerHTML=time;
                }
            }
            setInterval("revTime()",1000);
        </script>
    </body>
</html>