<?php

class MeishiAction extends Action{

	public function index() {
		$food=M('food');


		//安徽名菜
		$id=3;
		$mingcai=$food->where("pid=$id")->limit('11')->order('id desc')->select();
		$pmingcai=$food->where("pid=$id")->limit('7')->order('showtime desc')->select();


		//安徽小吃
		$id=3;
		$xiaochi=$food->where("pid=$id")->limit('11')->order('id desc')->select();
		$pxiaochi=$food->where("pid=$id")->limit('7')->order('showtime desc')->select();

		//徽味土产
		$id=3;
		$tuchan=$food->where("pid=$id")->limit('11')->order('id desc')->select();
		$ptuchan=$food->where("pid=$id")->limit('7')->order('showtime desc')->select();

		$this->assign('pmingcai',$pmingcai);
		$this->assign('mingcai',$mingcai);
		$this->assign('xiaochi',$xiaochi);
		$this->assign('pxiaochi',$pxiaochi);
		$this->assign('tuchan',$tuchan);
		$this->assign('ptuchan',$ptuchan);

    	$flag='on';
    	$this->assign('flagmeishi',$flag);

		$this->display();
	}

	//美食更多展示
	public function more() {
		$food=M('food');
		$sort=M('foodsort');

		$index=A('Index');
		$index->showlink();

		$pid=$_GET['pid'];

		import("@.ORG.Util.Page");
		$count = $food->where("pid=$pid")->count();
		$Page = new Page($count,6);

		$Page->setConfig('theme','%upPage% %linkPage% %downPage% ');

		$show = $Page->show();

		$foodmore=$food->where("pid=$pid")->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
		$foodsort=$sort->where("id=$pid")->select();

		//dump($foodmore);

		$this->assign('foodmore',$foodmore);
		$this->assign('foodsort',$foodsort);
		$this->assign('page',$show);

    	$flag='on';
    	$this->assign('flagmeishi',$flag);

		$this->showlink();

		$this->display();

	}

	//展示美食方法
	public function showmeishi(){
		$food=M('food');
		$sort=M('foodsort');

		$pid=$_GET['pid'];
		$id=$_GET['id'];

		$list=$food->where("id=$id")->select();

		//更新浏览次数
		$show=$list['0']['showtime']+1;
		$showtime=array('showtime'=>$show);
		$result=$food->where("id=$id")->save($showtime);

		//获取要获得的数据
		$aboutfood=$food->where("pid=$pid")->limit('8')->order('id desc')->select();
		$pfood=$food->where("pid=$pid")->limit('7')->order('showtime desc')->select();
		$foodsort=$sort->where("id=$pid")->select();


		$this->assign('list',$list);
		$this->assign('aboutfood',$aboutfood);
		$this->assign('pfood',$pfood);
		$this->assign('foodsort',$foodsort);

    	$flag='on';
    	$this->assign('flagmeishi',$flag);
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