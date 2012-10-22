<?php
/*
 * 美食分类管理模块
 */
?>
<?php

class FoodsortAction extends CommonAction{
	public function index () {
		$show=$this->show();
		$this->assign('alist',$show);

		$flag='active';
		$this->assign('foodactive',$flag);
		$this->assign('flag_3',$flag);

		$this->display();
	}
	public function show() {
			$product=D('foodsort');

			$list=$product->field("id,name,pid,path,concat(path,'-',id) as bpath")->order('bpath')->select();
			foreach($list as $key=>$value){
				$list[$key]['count']=count(explode('-',$value['bpath']));
			}

			return $list;
	}

	public function add() {
		$product = D('foodsort');

		if($vo=$product->create()){
			if ($product->add()) {
				$this->success('添加成功！');
			}else{
				$this->error('添加分类失败！');
			}
		}else {
			$this->error($product->getError());
		}
	}

	public function del() {
			$product=M('foodsort');
			$id=$_POST['pid'];

			//删除子分类
			$sid=$product->where("pid=$id")->select();
			if ($sid) {
				foreach($sid as $key=>$productid){
					$proid=$productid['id'];

					$result=$product->where("id=$proid")->delete();

					if(!$result){
						$this->error('删除失败！');
					}
				}
			}


			//删除这个父分类
			$result=$product->where("id=$id")->delete();

				if($result){
					$this->success('删除成功！');
				}else {
					$this->error('删除失败！');
				}
	}

	public function edit() {
		$food = D('foodsort');
		$id=$_POST['id'];
		$name['name']=$_POST['name'];
		//dump($name);
		$result=$food->where("id=$id")->save($name);
		if($result){
			$this->success('编辑成功！');
		}else{
			$this->error('编辑失败！');
		}
	}

}
?>