<?php

class ServicesortAction extends CommonAction{

	public function index () {
		$sort=D('servicesort');
		$list=$sort->field('id,name')->select();
		//dump($list);
		$this->assign('alist',$list);
		$flag='active';
		$this->assign('serviceactive',$flag);
		$this->assign('flag_3',$flag);

		$this->display();
	}

	public function add () {
		$sort=M('servicesort');
		$vo=$sort->create();
		if ($vo) {
			if ($sort->add()) {
				$this->success('添加成功！');
			}else {
				$this->error('添加失败！');
			}
		}else {
			$this->error($sort->getError());
		}
	}

	public function del () {
		$sort = M('servicesort');
		$id=$_POST['id'];

		$result=$sort->where("id=$id")->delete();

		if($result){
			$this->success('删除成功！');
		}else {
			$this->error('删除失败！');
		}
	}

	public function update () {
		$sort = M('servicesort');
		$id=$_POST['id'];
		$name['name']=$_POST['name'];
		//dump($name);
		$result=$sort->where("id=$id")->save($name);
		if($result){
			$this->success('编辑成功！');
		}else{
			$this->error('编辑失败！');
		}
	}
}
?>