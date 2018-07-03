<?php
/*
*文章 分类 关联 模型
*
*/
class ArticleRelationModel extends RelationModel{
	//定义主表名称
	Protected $tableName='article';
	
	//定义关联关系
	//如果关联模型时调不出数据，则没有设置关联主键
	Protected $_link=array(
		'attr'   => array(
			'mapping_type'  => MANY_TO_MANY, //多对多关系 
			'foreign_key'  => 'bid',     //主表id
			'relation_foreign_key'  => 'aid',    //副表id
			'relation_table'  => 'think_ap_attr', //中间表名称
			'mapping_fields'  =>'id,name,color' //定义显示指定字段
		),
		'cate'=> array(
			'mapping_type'  =>BELONGS_TO, //多对多关系 
			'foreign_key'  => 'kinds',     //主表、中间表中的字段名称
			'mapping_fields' =>"name,id",   //只读取数组中的name字段
			'as_fields'  =>'id:kid,name:cate' //让它加入到上面的数组中，面不是分开的数组。name后面的“ :cate ”是为了避免字段重名所以把 name 改成 cate
									//array('id'=>'4','title'=>'标题','name'=>'分类名称')
									//									^^^^^^^^^^^^^
									//									上面这个是加入到数组中的字段
									//array('cate'=>'分类'，'name'=>'分类名称'.....)
		)
			);
	
	
	}
?>