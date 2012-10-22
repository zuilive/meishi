<?php

class ServiceAction extends Action{

    function index() {
    	$service = M('service');
		$id=$_GET['id'];

		import("@.ORG.Util.Page");
		if (isset($id)) {
			$count=$service->where("pid=$id")->count();
		}else {
			$count = $service->count();
		}

		$Page = new Page($count,3);

		//自定义分页
		$Page->setConfig('theme','%upPage% %linkPage% %downPage%');

		$show = $Page->show();

		if (isset($id)) {
    		$list=$service->where("pid=$id")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		}else {
			$list=$service->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		}

    	$this->assign('list',$list);
    	$this->assign('page',$show);

    	$flag='on';
    	$this->assign('flagservice',$flag);
		$this->showlink();

    	$this->display();
    }

    function show(){
    	$service=M('service');

    	$id=$_GET['id'];
    	$list=$service->where("id=$id")->select();

		//更新浏览次数
		$readtime=$list['0']['readtime']+1;
		$readtime=array('readtime'=>$readtime);
		$result=$service->where("id=$id")->save($readtime);


		$list['0']['date']= date("Y-m-d H:i:s",$list['0']['date']);

		$this->assign('list',$list);

		$flag='on';
    	$this->assign('flagservice',$flag);
		$this->showlink();

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