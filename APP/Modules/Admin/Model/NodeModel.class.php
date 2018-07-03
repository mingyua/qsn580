<?php
/*
*用户与角色关联模型
*
*/
class NodeModel extends RelationModel{
	//定义关联关系
	Protected $_link=array(
		'Node' => array(    
			'mapping_type'  => HAS_MANY,    
			'mapping_name'  => 'node',    
			'mapping_order' => 'sort',
			'parent_key'    => 'pid' ,   
		)
	);
	}
?>