<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {

    public function index(){
    	//abc();
    	//新闻信息
    	$new=M('service');
    	$listnew=$new->limit(1)->order('id desc')->select();
    	$this->assign('listnew',$listnew);

    	$flagindex='on';
    	$this->assign('flagindex',$flagindex);

		//美食信息
		$food=M('food');
		$foodlist = $food->limit(5)->order('id desc')->select();
		$this->assign('foodlist',$foodlist);

		//安徽名菜
		$id=3;
		$ahlist=$food->where("pid=$id")->limit(8)->order('showtime desc')->select();
		$this->assign('ahlist',$ahlist);
		//dump($ahlist);

		//滁州商家联盟
		$cz=M('axoa.Business','axoav5_');
		$photochzu=M('axoa.Business_data','axoav5_');

		//全椒商家联盟
		$qj=M('axoaqj.business','axoav5_');
		$photoqj=M('axoaqj.business_data','axoav5_');


		//新店开张
		$listcz=$cz->limit(6)->order('id desc')->select();
		$i=1;
		foreach($listcz as $li){
			$id=$li['id'];
			//$imgurl=$photochzu->field('firstpic')->where("id=$id")->order('id desc')->select();
			//$imgcz[$i++]=$imgurl['0']['firstpic'];

			$url=$photochzu->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgcz[$i++]=$a['3'];
		}
		/*全椒
		$listqj=$qj->limit(3)->order('id desc')->select();
		$i=1;
		foreach($listqj as $li){
			$id=$li['id'];
			$url=$photoqj->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgqj[$i++]=$a['3'];
		}

		$this->assign('listqj',$listqj);
		$this->assign('imgqj',$imgqj);*/

		$this->assign('listcz',$listcz);
		$this->assign('imgcz',$imgcz);

		//星级酒店-宾馆
		$listcz13 = $cz->where('catid=13')->limit(3)->order('id desc')->select();
		$i=1;
		foreach($listcz13 as $li){
			$id=$li['id'];
			$url=$photochzu->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgcz13[$i++]=$a['3'];
			//$imgcz13[$i++]=$imgurl['0']['firstpic'];

		}

		$listqj13 = $qj->where('catid=13')->limit(3)->order('id desc')->select();
		$i=1;
		foreach($listqj13 as $li){
			$id=$li['id'];
			$url=$photoqj->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgqj13[$i++]=$a['3'];
			//$imgqj13[$i++]=$imgurl['0']['firstpic'];
		}

		$this->assign('listcz13',$listcz13);
		$this->assign('imgcz13',$imgcz13);
		$this->assign('listqj13',$listqj13);
		$this->assign('imgqj13',$imgqj13);

		/*
		//中餐厅   土菜馆
		$listcz26 = $cz->where('catid=26')->limit(2)->order('id desc')->select();
		$i=1;
		foreach($listcz26 as $li){
			$id=$li['id'];
			$url=$photochzu->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgcz26[$i++]=$a['3'];
			//$imgcz26[$i++]=$imgurl['0']['firstpic'];

		}

		$listqj26 = $qj->where('catid=26')->limit(2)->order('id desc')->select();
		$i=1;
		foreach($listqj26 as $li){
			$id=$li['id'];
			$url=$photoqj->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgqj26[$i++]=$a['3'];
			//$imgqj26[$i++]=$imgurl['0']['firstpic'];
		}

		$this->assign('listcz26',$listcz26);
		$this->assign('imgcz26',$imgcz26);
		$this->assign('listqj26',$listqj26);
		$this->assign('imgqj26',$imgqj26);

		//特色小吃
		$listcz24 = $cz->where('catid=24')->limit(2)->order('id desc')->select();
		$i=1;
		foreach($listcz24 as $li){
			$id=$li['id'];
			$url=$photochzu->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgcz24[$i++]=$a['3'];
			//$imgcz24[$i++]=$imgurl['0']['firstpic'];

		}

		$listqj24 = $qj->where('catid=24')->limit(2)->order('id desc')->select();
		$i=1;
		foreach($listqj24 as $li){
			$id=$li['id'];
			$url=$photoqj->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgqj24[$i++]=$a['3'];
			//$imgqj24[$i++]=$imgurl['0']['firstpic'];
		}

		$this->assign('listcz24',$listcz24);
		$this->assign('imgcz24',$imgcz24);
		$this->assign('listqj24',$listqj24);
		$this->assign('imgqj24',$imgqj24);

		//火锅自助
		$listcz25 = $cz->where('catid=25')->limit(2)->order('id desc')->select();
		$i=1;
		foreach($listcz25 as $li){
			$id=$li['id'];
			$url=$photochzu->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgcz25[$i++]=$a['3'];
			//$imgcz25[$i++]=$imgurl['0']['firstpic'];

		}

		$listqj25 = $qj->where('catid=25')->limit(2)->select();
		$i=1;
		foreach($listqj25 as $li){
			$id=$li['id'];
			$url=$photoqj->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgqj25[$i++]=$a['3'];
			//$imgqj25[$i++]=$imgurl['0']['firstpic'];
		}

		$this->assign('listcz25',$listcz25);
		$this->assign('imgcz25',$imgcz25);
		$this->assign('listqj25',$listqj25);
		$this->assign('imgqj25',$imgqj25);

		//烧烤烤肉	外卖送餐	日韩料理
		$listcz28 = $cz->where('catid=28')->limit(2)->order('id desc')->select();
		$i=1;
		foreach($listcz28 as $li){
			$id=$li['id'];
			$url=$photochzu->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgcz28[$i++]=$a['3'];
			//$imgcz28[$i++]=$imgurl['0']['firstpic'];

		}

		$listqj28 = $qj->where('catid=28')->limit(2)->order('id desc')->select();
		$i=1;
		foreach($listqj28 as $li){
			$id=$li['id'];
			$url=$photoqj->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgqj28[$i++]=$a['3'];
			//$imgqj28[$i++]=$imgurl['0']['firstpic'];
		}

		$this->assign('listcz28',$listcz28);
		$this->assign('imgcz28',$imgcz28);
		$this->assign('listqj28',$listqj28);
		$this->assign('imgqj28',$imgqj28);

		//蛋糕房
		$listcz14 = $cz->where('catid=14')->limit(2)->order('id desc')->select();
		$i=1;
		foreach($listcz14 as $li){
			$id=$li['id'];
			$url=$photochzu->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgcz14[$i++]=$a['3'];
			//$imgcz14[$i++]=$imgurl['0']['firstpic'];

		}

		$listqj14 = $qj->where('catid=14')->limit(2)->select();
		$i=1;
		foreach($listqj14 as $li){
			$id=$li['id'];
			$url=$photoqj->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgqj14[$i++]=$a['3'];
			//$imgqj14[$i++]=$imgurl['0']['firstpic'];
		}

		$this->assign('listcz14',$listcz14);
		$this->assign('imgcz14',$imgcz14);
		$this->assign('listqj14',$listqj14);
		$this->assign('imgqj14',$imgqj14);

		//咖啡菜馆
		$listcz27 = $cz->where('catid=27')->limit(2)->order('id desc')->select();
		$i=1;
		foreach($listcz27 as $li){
			$id=$li['id'];
			$url=$photochzu->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgcz27[$i++]=$a['3'];
			//$imgcz27[$i++]=$imgurl['0']['firstpic'];

		}

		$listqj27 = $qj->where('catid=27')->limit(2)->order('id desc')->select();
		$i=1;
		foreach($listqj27 as $li){
			$id=$li['id'];
			$url=$photoqj->field('slide_show')->where("id=$id")->order('id desc')->select();
			$arr=array($url['0']['slide_show']);
			$a=explode("'",$url['0']['slide_show']);
			$imgqj27[$i++]=$a['3'];
			//$imgqj27[$i++]=$imgurl['0']['firstpic'];
		}

		$this->assign('listcz27',$listcz27);
		$this->assign('imgcz27',$imgcz27);
		$this->assign('listqj27',$listqj27);
		$this->assign('imgqj27',$imgqj27);*/

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