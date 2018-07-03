<?php
//header('Content-type:text/html; charset=utf-8');
//Header("Content-type: application/octet-stream");
//header("Content-Disposition:attachment; filename=".date( 'YmdHis ').".sql");
class DatabaseAction extends CommonAction
{
 	public $config = '';                                                        //相关配置
    public $model = '';                                                         //实例化一个model
    public $content;                                                            //内容
    public $dbName = '';                                                        //数据库名
    public $dir_sep = '/';                                                      //路径符号
    //初始化数据
    function _initialize() {
        parent::_initialize();
        header("Content-type: text/html;charset=utf-8");
        set_time_limit(0);                                                      //不超时
        ini_set('memory_limit','500M');
        $this->config = array(
            'path' =>C('DB_BACKUP'),                                           //备份文件存在哪里
            'isCompress' => 0,                                                  //是否开启gzip压缩      【未测试】
            'isDownload' => 0                                                   //备份完成后是否下载文件 【未测试】
        );
        $this->dbName = C('DB_NAME');                                           //当前数据库名称
        $this->model = new Model();
        //$sql = 'set interactive_timeout=24*3600';                             //空闲多少秒后 断开链接
        //$this->model>execute($sql);
    }
	   
	   
	   	 private function trimPath($path) {
           return str_replace(array('/', '\\', '//', '\\\\'), $this->dir_sep, $path);
       }
  //数据表列表
	public function index()
	{
		$dbName=C('DB_NAME');
		$re=M()->query('SHOW TABLE STATUS FROM '.$dbName);
		$this->assign("re",$re);
		$this->display();
	  
	}
	//数据备份	
	public function back()
	 {
		 
		 if(empty($_POST['tablearr']))
		 {
		$table=$this->getTable();
		 }else
		 {
		$table=explode(",",$_POST['tablearr']);
		 }
		  $struct=$this->bakStruct($table);
		  $record=$this->bakRecord($table);
		  $sqls=$struct.$record;
		  $dir=$this->config['path'].date("y-m-d").".sql";//文件路径基于think3.1.3
		  file_put_contents($dir,$sqls);
		  //导入压缩类文件
		  import("ORG.Util.PclZip");
		  $archive = new PclZip($this->config['path'].date("y-m-d").'.zip');
		  $v_list = $archive->create($dir);
		  if(file_exists($dir)&&$v_list != 0)
		  {
			$this->success("备份成功&&压缩成功");
		  }else
		  {
			die("Error : ".$archive->errorInfo(true));
			$this->error("备份失败");
		  }
	}
	//获取全部的数据表
	protected function getTable()
	{
	  $dbName=C('DB_NAME');
	  $result=M()->query('show tables from '.$dbName);
	  foreach ($result as $v){
		  $tbArray[]=$v['Tables_in_'.C('DB_NAME')];
	  }
	  return $tbArray;
	}
	//对表结构进行备份
	protected function bakStruct($array)
	{
	  foreach ($array as $v){
	   $tbName=$v;
	   $result=M()->query('show columns from '.$tbName);

	   $sql.="--\r\n";
	   $sql.="-- 数据表结构: `$tbName`\r\n";
	   $sql.="--\r\n\r\n";
	   $sql.="DROP TABLE IF EXISTS `$tbName`;\r\n";
	   $sql.="create table `$tbName` (\r\n";
	   $rsCount=count($result);
	   foreach ($result as $k=>$v){
			   $field  =       $v['Field'];
			   $type   =       $v['Type'];
			   $default=       $v['Default'];
			   $extra  =       $v['Extra'];
			   $null   =       $v['Null'];
		 if(!($default=='')){
		  $default='default '.$default;
		 }      
			   if($null=='NO'){
				   $null='not null';
			   }else{
				   $null="null";
			   }          
			   if($v['Key']=='PRI'){
					   $key    =       'primary key';
			   }else{
					   $key    =       '';
			   }
		 if($k<($rsCount-1)){
		  $sql.="`$field` $type $null $default $key $extra ,\r\n";
		 }else{
		  //最后一条不需要","号
		  $sql.="`$field` $type $null $default $key $extra \r\n";
		 }


	   }
	   $sql.=") ENGINE=MyISAM DEFAULT CHARSET=utf8;\r\n\r\n";
	  }
	  return str_replace(',)',')',$sql);
	}
	//备份表中的数据
	protected function bakRecord($array)
	{
	 
		 foreach ($array as $v){
	  
	   $tbName=$v;
		  
		  $rs=M()->query('select * from '.$tbName);
		 
		  if(count($rs)<=0){
			  continue;
		  }

	   $sql.="--\r\n";
	   $sql.="-- 数据表中的数据: `$tbName`\r\n";
	   $sql.="--\r\n\r\n";

		  foreach ($rs as $k=>$v){

			  $sql.="INSERT INTO `$tbName` VALUES (";
		   foreach ($v as $key=>$value){
			   if($value==''){
				   $value='';
			   }
			   $type=gettype($value);
			   if($type=='string'){
				   $value="'".addslashes($value)."'";
			   }
			   $sql.="$value," ;
		   }
		   $sql.=");\r\n\r\n";
			 }
	  }
	  return str_replace(',)',')',$sql);
	}
	//对数据表进行优化、修复、查看表结构
	public function click()
	{
//		$url=explode("&",$_GET['zhi']);
//		$do=$url[0];
//		$table=$url[1];
		$do=$_GET['do'];
		$table=$_GET['table'];
		switch($do)
		{
			case optimize://优化
				$rs =M()->Query("OPTIMIZE TABLE `$table` ");
				if($rs)
				{
				$this->success('优化表成功!');
				}
				else
				{
					echo "执行优化表： $table  失败，原因是：".M()->GetError();
				}
				break;
			case repair://修复
				$rs = M()->Query("REPAIR TABLE `$table` ");
				if($rs)
				{
				$this->success('修复表成功!');
				}
				else
				{
					echo "修复表： $table  失败，原因是：".M()->GetError();
				}
				break;
			default://结构
				$dsql=M()->Query("SHOW CREATE TABLE ".$table);
				foreach($dsql as $k=>$v)
				{
					foreach($v as $k1=>$v1)
					{
						$rs=$v1;
					}
				}
				echo trim($rs);
			}	
	}
	//查看备份的数据文件
	public function backfile()
	{
        $path =$this->config['path'];
        $fileArr = $this->MyScandir($path);
        foreach ($fileArr as $key => $value) {
            if ($key > 1) {
                //获取文件创建时间
                $fileTime = date('Y-m-d H:i:s', filemtime($path . '/' . $value));
                $fileSize = filesize($path . '/' . $value) / 1024;
                //获取文件大小
                $fileSize = $fileSize < 1024 ? number_format($fileSize, 2) . ' KB' :
                        number_format($fileSize / 1024, 2) . ' MB';
                //构建列表数组
                $files[] = array(
                    'name' => $value,
                    'time' => $fileTime,
                    'size' => $fileSize
                );
            }
        }
		$this->assign("files",$files);
		$this->display();
    }
    /* -
     * +------------------------------------------------------------------------
     * * @ 获取 目录下文件数组
     * +------------------------------------------------------------------------
     * * @ $FilePath 目录路径
     * * @ $Order    排序
     * +------------------------------------------------------------------------
     * * @ 获取指定目录下的文件列表，返回数组
     * +------------------------------------------------------------------------
     */
    private function MyScandir($FilePath = './', $Order = 0) {
        $FilePath = opendir($FilePath);
        while ($filename = readdir($FilePath)) {
            $fileArr[] = $filename;
        }
        $Order == 0 ? sort($fileArr) : rsort($fileArr);
        return $fileArr;
    }
    /*     * ******************************************************************************************** */
    /* -
     * +------------------------------------------------------------------------
     * * @ 读取备份文件
     * +------------------------------------------------------------------------
     * * @ $fileName 文件名
     * +------------------------------------------------------------------------
     */
    private function getFile($fileName) {
        $this->content = '';
        $fileName = $this->trimPath($this->config['path'] . $fileName);
        if (is_file($fileName)) {
            $ext = strrchr($fileName, '.');
            if ($ext == '.sql') {
                $this->content = file_get_contents($fileName);
            } elseif ($ext == '.gz') {
                $this->content = implode('', gzfile($fileName));
            } else {
                $this->error('无法识别的文件格式!');
            }
        } else {
            $this->error('文件不存在!');
        }
    }
    //删除数据备份
 function deletebak() {
	 $path =$this->config['path'];
	 if (unlink($path. $_GET['file'])) {
            $this->success('删除备份成功！');
        } else {
            $this->error('删除备份失败！');
        }
    }    /* -
     * +------------------------------------------------------------------------
     * * @ 下载备份文件
     * +------------------------------------------------------------------------
     */
    function downloadBak() {
        $file_name = $_GET['file'];
        $file_dir =$this->config['path'];
        if (!file_exists($file_dir . "/" . $file_name)) { //检查文件是否存在
            return false;
            exit;
        } else {
            $file = fopen($file_dir . "/" . $file_name, "r"); // 打开文件
            // 输入文件标签
            header('Content-Encoding: none');
            header("Content-type: application/octet-stream");
            header("Accept-Ranges: bytes");
            header("Accept-Length: " . filesize($file_dir . "/" . $file_name));
            header('Content-Transfer-Encoding: binary');
            header("Content-Disposition: attachment; filename=" . $file_name);  //以真实文件名提供给浏览器下载
            header('Pragma: no-cache');
            header('Expires: 0');
            //输出文件内容
            echo fread($file, filesize($file_dir . "/" . $file_name));
            fclose($file);
            exit;
        }
	}
   //还原数据库
	function restore($file) {
		$sqlfile=C("DB_BACKUP").$file;

		// 检测文件是否存在
		if (! file_exists ( $sqlfile )) {
			exit ( "文件不存在！请检查" );
		}
		$this->lock ( C("DB_NAME") );
		// 获取数据库存储位置
		$sqlpath = pathinfo ( $sqlfile );
	//	$this->sqldir = $sqlpath ['dirname'];
		// 检测是否包含分卷，将类似20120516211738_all_v1.sql从_v分开,有则说明有分卷
		$volume = explode ( "_v", $sqlfile );
		$volume_path = $volume [0];
		$msg .= "<div style='position:relative; height:500px; margin:20px;padding;20px; border:1px dotted #d3d3d3;text-align:center;font-size:12px; line-height:22px;'>请勿刷新及关闭浏览器以防止程序被中止，如有不慎！将导致数据库结构受损<br />";
		$msg .= "<p>正在导入备份数据，请稍等！</p><br />";
		if (empty ( $volume [1] )) {
			 $msg .= "<p>正在导入sql：<span style='color:#f00;'>" . $sqlfile . '</span></p><br />';
			// 没有分卷
			if ($this->_import ( $sqlfile )) {
			echo	$msg .= "<p>数据库导入成功！<a href='javascript:history.go(-1)'>点击返回</a></p></div>";
				//$msg.="<p></p>"
		//$this->success("数据库导入成功！");
			} else {
				$this->error('数据库导入失败！' );
			}
		} else {
			// 存在分卷，则获取当前是第几分卷，循环执行余下分卷
			$volume_id = explode ( ".sq", $volume [1] );
			// 当前分卷为$volume_id
			$volume_id = intval ( $volume_id [0] );
			while ( $volume_id ) {
				$tmpfile = $volume_path . "_v" . $volume_id . ".sql";
				// 存在其他分卷，继续执行
				if (file_exists ( $tmpfile )) {
					// 执行导入方法
					$msg .= "正在导入分卷 $volume_id ：<span style='color:#f00;'>" . $tmpfile . '</span><br />';
					if ($this->_import ( $tmpfile )) {

					} else {
						$volume_id = $volume_id ? $volume_id :1;
						exit ( "导入分卷：<span style='color:#f00;'>" . $tmpfile . '</span>失败！可能是数据库结构已损坏！请尝试从分卷1开始导入' );
					}
				} else {
					$msg .= "此分卷备份全部导入成功！<br />";
					echo $msg;
				}
				$volume_id ++;
			}
		}
	}
	/**
	 * 将sql导入到数据库（普通导入）
	 *
	 * @param string $sqlfile        	
	 * @return boolean
	 */
	private function _import($sqlfile) {
		// sql文件包含的sql语句数组
		$sqls = array ();
		$f = fopen ( $sqlfile, "rb" );
		// 创建表缓冲变量
		$create_table = '';
		while ( ! feof ( $f ) ) {
			// 读取每一行sql
			$line = fgets ( $f );
			// 这一步为了将创建表合成完整的sql语句
			// 如果结尾没有包含';'(即为一个完整的sql语句，这里是插入语句)，并且不包含'ENGINE='(即创建表的最后一句)
			if (! preg_match ( '/;/', $line ) || preg_match ( '/ENGINE=/', $line )) {
				// 将本次sql语句与创建表sql连接存起来
				$create_table .= $line;
				// 如果包含了创建表的最后一句
				if (preg_match ( '/ENGINE=/', $create_table)) {
			        //执行sql语句创建表
					$this->_insert_into($create_table);
					// 清空当前，准备下一个表的创建
					$create_table = '';
				}
				// 跳过本次
				continue;
			}
			//执行sql语句
			$this->_insert_into($line);
		}
		fclose ( $f );
		return true;
	}
	//插入单条sql语句
	private function _insert_into($sql){
		$M=M();
		if (! $M->query( trim ( $sql ) )) {
			$msg .= mysql_error ();
			return false;
		}
	}
		// 锁定数据库，以免备份或导入时出错
	private function lock($tablename, $op = "WRITE") {
		$M=M();
		if ($M->query( "lock tables " . $tablename . " " . $op ))
			return true;
		else
			return false;
	}

	// 解锁
	private function unlock() {
		$M=M();
		if ($M->query ( "unlock tables" ))
			return true;
		else
			return false;
	}
	
}
?>