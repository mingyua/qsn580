<?php 
class FindFile{
    public $dirarray;
    function __construct($dirpath=".") {
        $this->dirarray=$this->dirscan($dirpath);//遍历所有目录
    }
    /**
     * 遍历目录
     * @param string $dirname 目录路径
     * @return array 
     */
    function dirscan($dirname = ".") {
        $dirarray = array();
        $d = dir($dirname);
        if (!chdir($dirname)){
            return FALSE;
        }
        while ($fname = $d->read()) {
            if ($fname == "." || $fname == "..") {
                continue;
            }

            if (is_dir($fname)) {
                $dirarray[] = array($fname, $this->dirscan($fname));
            } else {
				$str=str_replace(__ROOT__."/uploads/..",'',__ROOT__."/uploads/".$dirname); 
                $dirarray[] =$str."/".$fname;
            }
        }
        chdir("..");
        $d->close();
        return $dirarray;
    }
    
    /**
     * 生成树形字符串 
     */
    function buildtree($arr=array()){
        $str="";
        if(!$arr){
            $arr=$this->dirarray?$this->dirarray:array();
        }
        foreach($arr as $v){
            if(is_array($v)){
                $str.="<div class='file_bg'><p id='filename' title='".$v[0]."'>".$v[0]."</p></div>";
                if(is_array($v[1])){
					   $str.=$this->buildtree($v[1]);
                }
			$str.="<div class='cl'></div>";
            }else{				
                $str.='<div class="file_img"><div class="img"><img src="'.$v.'"></div><p><input type="text" name="url" value="'.$v.'"></p><p><a>复制</a><a>删除</a></p></div>';
            }
        }
        return $str;
    }
    
}
?> 