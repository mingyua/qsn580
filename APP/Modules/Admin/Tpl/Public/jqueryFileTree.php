<?php
$_POST['dir'] = urldecode($_POST['dir']);
$root="";
if( file_exists($root . $_POST['dir']) ) {
	$files = scandir($root . $_POST['dir']);
	natcasesort($files);
	if( count($files) > 2 ) { /* The 2 accounts for . and .. */
		echo "<ul  class=\"jqueryFileTree\" style=\"display: block;\">";
		// All dirs
		foreach( $files as $file ) {
			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && is_dir($root . $_POST['dir'] . $file) ) {
				echo "<li style='width:100%;clear:both;height:30px;' class=\"directory collapsed\"><a href=\"#\" rel=\"" . htmlentities($_POST['dir'] . $file) . "/\">" . htmlentities($file) . "</a></li>";
			}
		}
		// All files
		foreach( $files as $file ) {
			if( file_exists($root . $_POST['dir'] . $file) && $file != '.' && $file != '..' && !is_dir($root . $_POST['dir'] . $file) ) {
				$ext = preg_replace('/^.*\./', '', $file);
				$url=str_replace('../','',$_POST['dir']);
				echo "<li style='float:left;width:100px;height:130px;'><div style='width:100px;height:100px;overflow:hidden'><img src='" .$url.$file . " ' style='max-width:100px;width:expression(document.body.clientWidth>100?'100px':'auto');'></div><p><span class='copyurl mr-5' data-url='".$url.$file ."'>复制链接</span><span id='delimg' class='delimg' file-url='".$url.$file."'>删除</span></p></li>";
			}
		}
		echo "</ul>";	
	}
}

?>