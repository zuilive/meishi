<?php
/*
 * 美食食品详细编辑模块
 */
?>
<?php

class FoodAction extends CommonAction{
	public function index () {
		//$textarea = '';

		if(@$_GET['id']){
			$food=M('food');
			$id=$_GET['id'];
			$list=$food->where("id=$id")->select();
			$this->assign('list',$list);
			$this->assign('id',$id);
			//$textarea = "<textarea name=\"info\" id=\"editor_id\" >$list['0']['info'];</textarea>";
			//dump();
		}
		$flag='active';
		$this->assign('foodactive',$flag);
		$this->assign('flag_2',$flag);
		$show=$this->show();
		$this->assign('alist',$show);
		//$this->assign('textarea',$textarea);
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
		$food=D('food');
		import("@.ORG.Net.UploadFile");
		import("@.ORG.Util.Image");
		$upload = new UploadFile();
		$upload->maxSize = 50000000;
		$upload->allowExts = array('jpg','gif','png','jpeg');
		$upload->allowTypes=array('image/png','image/jpg','image/pjpeg','image/gif','image/jpeg');  //检测mime类型

		//如果没有文件夹，则创建
		$ymd = date("Ymd");
		$save_path .=  "./Public/upload/image/";
		if (!file_exists($save_path)) {
			mkdir($save_path);
		}


		$upload->uploadReplace=true;
		$upload->savePath=$save_path;

		//缩略图设置
		$upload->thumb=true;
		$upload->thumbMaxHeight='160,380';
		$upload->thumbMaxWidth='160,380';

		$upload->thumbPrefix='m_,s_';
		$upload->saveRule=uniqid;
		$upload->thumbRemoveOrigin=1;

		if(!$upload->upload()){
			$this->error($upload->getErrorMsg());
		}else{
			$info = $upload->getUploadFileInfo();
		}

		//传递image的值
		$_POST['image']=$info['0']['savename'];
		$id=$_GET['id'];

		if ($id) {
			if ($vo=$food->create()) {

				if ($food->where("id=$id")->save()) {
					$this->success('编辑成功！');
				}else {
					$this->error('编辑失败！');
				}
			}else {
				$this->error($food->getError());
			}
		}else{
			if ($vo=$food->create()) {
				if ($food->add()) {
					$this->success('添加成功！');
				}else{
					$this->error('添加失败！');
				}
				}else {
					$this->error($food->getError());
				}
		}

	}

	//编辑方法
	public function edit() {
		$food = M('food');
		import('@.ORG.Util.Page');

			//$ph=$photo->where("pid=$id")->select();

			$list=$food->field("id,name")->select();

			$count=count($list);
			$page=new Page($count,15);
			$show=$page->show();

			$pho=$food->limit($page->firstRow.','.$page->listRows)->order('id desc')->select();




		$flag='active';
		$this->assign('foodactive',$flag);
		$this->assign('flag_1',$flag);

		$this->assign('list',$pho);
		$this->assign('page',$show);
		$this->display();
	}

	//删除方法
	public function del () {
		$food = M('food');
		$id=$_GET['id'];

		$result=$food->where("id=$id")->delete();
		if ($result) {
			$this->success('删除成功！');
		}else {
			$this->error('删除失败！');
		}
	}

}
?>