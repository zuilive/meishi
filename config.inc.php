<?php
/*
 * Created on 2012-10-9
 *
 * By zuihuanxiang@gmail.com
 * Last change 2012-10-9
 *
 * 共有的项目配置
 */
?>
<?php
	$arr1=array(
		'DB_DEPLOY_TYPE'=>1,

		'URL_MODEL'=>1,
			'DB_TYPE' => 'mysql',	//数据库类型
			'DB_HOST' => 'localhost',	//服务器地址
			'DB_NAME' => 'meishi',	//数据库名
			'DB_USER' => 'root',	//数据库用户名
			'DB_PWD' => '',		//数据库密码
			'DB_PORT' => 3306,		//端口
			'DB_CHARSET'=>'utf8',
			'DB_PREFIX' => 'meishi_', //数据库表前缀
		//更改模板引擎的左右标签
		'TMPL_L_DELIM'=>'<{',
		'TMPL_R_DELIM'=>'}>',
	);

?>