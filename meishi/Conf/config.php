<?php
include ('/config.inc.php');
$arr2 = array(
	//'配置项'=>'配置值'
	TMPL_PARSE_STRING=>array(
		'__TPUBLIC__'=>'/meishi/meishi/Tpl/Public',
		'__IPUBLIC__'=>'/meishi/Public/upload/image'
	),
);

return $arr2+$arr1;
?>