<?php 
/** 遍历所有文件，清除utf8+bom 0xEF 0xBB 0xBF 
*  Date:  2013-03-21 
*  Author: fdipzone 
*  Ver:  1.0 
*/
class UnsetBom extends FindFile{ 
  
  private $filetype = array(); // 需要处理的文件类型 
  
  // 初始化 
  public function __construct($filetype=array()){ 
    if($filetype){ 
      $this->filetype = $filetype; 
    } 
  } 
  
  /** 重写FindFile handle方法 
  *  @param String $file 文件路径 
  */
  protected function handle($file){ 
    if($this->check_ext($file) && $this->check_utf8bom($file)){ // utf8+bom 
      $this->clear_utf8bom($file);    // clear 
      array_push($this->files, $file);  // save log 
    } 
  } 
  
  /** 检查文件是否utf8+bom 
  *  @param String $file 文件路径 
  *  @return boolean 
  */
  private function check_utf8bom($file){ 
    $content = file_get_contents($file); 
    return ord(substr($content,0,1))===0xEF && ord(substr($content,1,1))===0xBB && ord(substr($content,2,1))===0xBF; 
  } 
  
  /** 清除utf8+bom 
  *  @param String $file 文件路径 
  */
  private function clear_utf8bom($file){ 
    $content = file_get_contents($file); 
    file_put_contents($file, substr($content,3), true); // 去掉头三个字节 
  } 
  
  /** 检查文件类型 
  *  @param String $file 文件路径 
  *  @return boolean 
  */
  private function check_ext($file){ 
    $file_ext = strtolower(array_pop(explode('.',basename($file)))); 
    if(in_array($file_ext, $this->filetype)){ 
      return true; 
    }else{ 
      return false; 
    } 
  } 
} 
?> 