<?php
/*
 * 服务大厅模块
 */
?>

<?php

class ServiceAction extends CommonAction{
	public function index() {
		if (isset($_GET['id'])) {
			$service = M('service');
			$id=$_GET['id'];
			$list = $service->field('id,title,from,content,pid')->where("id=$id")->select();
			$this->assign('list',$list);
			$this->assign('id',$id);
			//dump($list);
		}

		$sort=M('servicesort');
		$sort=$sort->select();
		$this->assign('sort',$sort);
		$flag='active';
		$this->assign('serviceactive',$flag);
		$this->assign('flag_2',$flag);

		$this->display();
	}

	//添加新闻方法
	public function add () {
		$service = D('service');





			if ($vo=$service->create()) {
				$id=$_GET['id'];
				if ($id){

					if ($service->where("id=$id")->save()) {
						$this->success('编辑成功！');
					}else {
						$this->error('编辑失败！');
					}
				}else {
					if ($service->add()) {
						$this->success('添加成功！');
					}else{
						$this->error('添加分类失败！');
					}
				}

			}else {
				$this->error($service->getError());
			}


	}

	//新闻管理
	public function manage(){
		$service=M('service');
		import('@.ORG.Util.Page');


		$list=$service->field('id,title')->order('id desc')->select();

		$count=count($list);
		$page=new Page($count,2);
		$show=$page->show();

		$pho=$service->limit($page->firstRow.','.$page->listRows)->order('id desc')->select();

		$flag='active';
		$this->assign('serviceactive',$flag);
		$this->assign('list',$pho);
		$this->assign('page',$show);
		$this->assign('flag_1',$flag);
		$this->display();
		//dump($list);
	}

	//删除新闻
	public function del() {
		$service = M('service');
		$id=$_GET['id'];

		$result=$service->where("id=$id")->delete();
		if ($result) {
			$this->success('删除成功！');
		}else {
			$this->error('删除失败！');
		}
	}

}
?>