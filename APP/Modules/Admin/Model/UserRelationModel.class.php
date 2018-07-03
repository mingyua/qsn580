<?php
/*
*用户与角色关联模型
*
*/
class UserRelationModel extends RelationModel{
	//定义主表名称
	Protected $tableName='user';
	
	//定义关联关系
	Protected $_link=array(
		'role'   => array(
			'mapping_type'  => MANY_TO_MANY, //多对多关系 
			'foreign_key'  => 'user_id',     //主表,中间表中的字段名称
			'relation_key'  => 'role_id',    //副表在中间表中的字段名称
			'relation_table'  => 'think_role_user', //中间表名称
			'mapping_fields'  =>'id,name,remark' //定义显示指定字段
		)
	);
	}
?>