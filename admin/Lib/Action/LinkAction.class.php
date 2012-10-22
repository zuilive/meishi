<?php

class LinkAction extends CommonAction{

	public function index () {
		$flag='active';
		$this->assign('linkactive',$flag);

		$link=M('link');
		$listlink=$link->select();

		$this->assign('listlink',$listlink);

		$id=$_GET['id'];
		if ($id) {
			$lk=$link->where("id=$id")->select();
			$this->assign('lk',$lk);
		}

		$this->display();
	}

	public function add() {
		$id=$_GET['id'];
		$link=M('link');

		$vo=$link->create();
		if ($vo) {
			if ($id) {
				$result=$link->where("id=$id")-save();
				if ($result) {
					$this->success('编辑成功!');
				}else {
					$this->error('编辑失败！');
				}

			}else {
				$result=$link->add();
				if ($result) {
					$this->success('添加成功！');
				}else {
					$this->error('添加失败！');
				}
			}

		}else {
			$this->error($link->getErrorMsg());
		}

	}

	public function del () {
		$id=$_GET['id'];
		$link=M('link');

		$result=$link->where("id=$id")->delete();
		if ($result) {
			$this->success('删除成功！');
		}else {
			$this->error('删除失败！');
		}
	}
}
?>