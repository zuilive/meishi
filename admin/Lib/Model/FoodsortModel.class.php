<?php

class FoodsortModel extends Model{
	protected $_auto=array(
		array('path','tclm',3,'callback'),
	);

	function tclm() {
		$pid=isset($_POST['pid'])?(int)$_POST['pid']:0;
		if($pid==0){
			return 0;
		}

		$list=$this->where("id=$pid")->find();

		$data=$list['path'].'-'.$list['id'];

		return $data;
	}
}
?>