<?php

class SearchAction extends Action{
	public function index () {
		$this->showlink();

		$q=$_GET['q'];
		$food = M('food');

		$map['name']=array('like',"%$q%");
		//dump($map);
		$serch=$food->where($map)->select();
		//dump($serch);

		$this->assign('listq',$serch);

		$this->display();
	}

	//显示友情链接
	public function showlink() {
		$link=M('link');
		$listlink=$link->select();
		$this->assign('listlink',$listlink);

	}
}
?>