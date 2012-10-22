<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//w3c//dtd xhtml 1.0 transitional//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="content-type" content="text/html; charset=UTF-8"><title>E网易购美食-安徽美食<?php echo ($list['0']['name']); ?></title><link rel="stylesheet" type="text/css" href="__TPUBLIC__/css/main.css"><link rel="stylesheet" type="text/css" href="__TPUBLIC__/css/ie.css"></head><body><div id="f_top"><div style="width:980px;" class="href color"><span style="float:right;line-height: 19px;"><a href="http://www.51googo.com/">返回首页<lb>&nbsp;&nbsp;|</lb></a><a onclick="this.style.behavior=’url(#default#homepage)’;this.setHomePage(’http://www.51googo.com’);" href="http://www.51googo.com/">设为首页<lb>&nbsp;&nbsp;|</lb></a><a href="javascript:window.external.addFavorite('http://www.51googo.com','《e网易购》')">加入收藏夹</a></span><div class="clear"></div></div></div><div class="part2"><div style="width:980px;"><div style="float:left"><img src="__TPUBLIC__/image/logo.jpg"></div><div style="background:url(__TPUBLIC__/image/index6.png) no-repeat;width:328px;height:72px;float:right;"><form action="__APP__/search" method="get"><input type="text" name="q" class="input"><input type="submit" value="" class="submit"></form></div><div class="clear"></div></div></div><div class="part3" ><div style="width:980px;"><div id="f_dh"><a href="__APP__" class="<?php echo ($flagindex); ?>">首页</a><a href="">地方名店</a><a href="">打折优惠</a><a href="__URL__/../service" class="<?php echo ($flagservice); ?>">服务大厅</a><a href="http://www.51googo.com/hutong/forum.php?mod=forumdisplay&fid=87">餐饮论坛</a><div class="clear"></div></div></div></div><div style="width:980px;text-align:left"><div class="part1"></div><div class="food_first" ><ul id="nav"><li ><a href="">牛华绿缘麻辣烫诚邀加盟</a></li><li><a href="">牛华绿缘麻辣烫诚邀加盟招收学员</a></li><li><a href="">美食分享厨艺交流尽在食尚社区</a></li><li><a href="">美食分享厨艺交流尽在食尚社区</a></li><li><a href="" style="color: #ff0000">张记全鱼诚邀连锁加盟</a></li><li><a href=""style="color: #ff0000">美食分享厨艺交流尽在食尚社区</a></li><li><a href=""style="color: #ff0000">张记全鱼诚邀连锁加盟</a></li><li><a href=""style="color: #ff0000">张记全鱼诚邀连锁加盟</a></li><li><a href="">美食分享厨艺交流尽在食尚社区</a></li><li><a href="">美食分享厨艺交流尽在食尚社区</a></li><li><a href="">美食分享厨艺交流尽在食尚社区</a></li><li><a href="">美食分享厨艺交流尽在食尚社区</a></li></ul><div class="clear"></div></div><script language="javascript" type="text/javascript" src="__TPUBLIC__/js/jquery-1.4.4.min.js"></script><script language="javascript" type="text/javascript" src="__TPUBLIC__/js/jquery.smallslider.js"></script><script language="javascript" type="text/javascript" src="__TPUBLIC__/js/dedeajax2.js"></script><script>	$(document).ready(function() {
		$(function(){
			$('#slide').smallslider({
				time:3000,
				onImageStop:true,
				switchTime:1000,
				textSwitch:2,
				switchMode:'click',
				switchEffect:'ease'
			});
			$('#slide2').smallslider({
				time:3000,
				onImageStop:true,
				switchTime:1000,
				textSwitch:2,
				switchMode:'click',
				switchEffect:'ease'
			});

			$('#slide3').smallslider({
				time:3000,
				onImageStop:true,
				switchTime:1000,
				textSwitch:2,
				switchMode:'click',
				switchEffect:'ease'
			});

			$('#slide4').smallslider({
				time:3000,
				onImageStop:true,
				switchTime:1000,
				textSwitch:2,
				switchMode:'click',
				switchEffect:'ease'
			});
			/*
			*安徽美食点击切换DIV事件
			*同时切换标签样式
			*
			**/
			$('.m_food img').height("66px").width("70px");
			$('.b_info img').height("170px").width("170px");
			$('.c_img img').height("90px").width("125px");
			$('.info img').height("90px").width("90px");

			$('#m_menu a:eq(0)').mouseover(function(){
				$('#m_menu a').removeClass('act');
				$(this).addClass('act');
				$('.m_food').hide();
				$('.m_food:eq(0)').show();
			})
			$('#m_menu a:eq(1)').mouseover(function(){
				$('#m_menu a').removeClass('act');
				$(this).addClass('act');
				$('.m_food').hide();
				$('.m_food:eq(1)').show();
			})
			$('#m_menu a:eq(2)').mouseover(function(){
				$('#m_menu a').removeClass('act');
				$(this).addClass('act');
				$('.m_food').hide();
				$('.m_food:eq(2)').show();
			})
			/**
			 *查询事件
			*/
			$('form input').focus(function(){this.value = ""});


			$(function($) {
			function ScrollAction(listObj, listElem, speed, isSeries) { //listObj为需要滚动的列表， speed为滚动速度
				var pos, top, aniTop, height;
				var id = ''; //记录setInterval的标记id
				pos = listObj.position();
				top = pos.top; //列表的top
				aniTop = top; //记录当前运动时的top
				height = listObj.height(); //列表的高度
				var scrollUp = function() {
					aniTop--;
					if(!isSeries) { //isSeries变量控制是否连续滚动，false不连续，true连续
						if(aniTop == -height) { //不连续，滚动玩重新滚动
							listObj.css({'top': top});
							aniTop = top;
						};
					} else {
						if(aniTop == -listObj.children().eq(0).height()) { //连续滚动
							var firstItem = '<' + listElem +'>' + listObj.children().eq(0).html() + '</' + listElem +'>';
							listObj.children().eq(0).remove();
							listObj.append(firstItem);
							aniTop = 4;
						};
					};
					listObj.css({'top': aniTop + 'px'});
				};
				var hover = function(id) {
					listObj.hover(function() {
						clearInterval(id);
					}, function() {
						id = setInterval(scrollUp, speed);
					});
				};
				this.start = function() {
					id = setInterval(scrollUp, speed);
					hover(id);
				};
				};
				var sa = new ScrollAction($('.noticeList'), 'li', 40, true);
				sa.start();
			});
		});
    });
</script><div class="food_second "><div  class="left bor" style="height: 337px;_height:344px;"><div style="margin:2px;"><div id="slide" class="smallslider"><ul><?php if(is_array($foodlist)): $i = 0; $__LIST__ = $foodlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>"><img src="__IPUBLIC__/s_<?php echo ($vo['image']); ?>" alt="<?php echo ($vo['name']); ?>"/></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="clear"></div></div><div class="food_fw"><img src="__TPUBLIC__/image/title.png"/>服务大厅</div><div ><img src="__TPUBLIC__/image/title2.png" border="0" usemap="#planetmap"><map name="planetmap" id="planetmap"><area href ="/example/html/1.html" target ="_blank" coords="0,0,59,78" ><area href ="/example/html/2.html" target ="_blank" coords="59,0,117,78" ><area href ="/example/html/3.html" target ="_blank" coords="117,0,176,78" ><area href ="/example/html/4.html" target ="_blank" coords="176,0,235,78" ><area href ="/example/html/5.html" target ="_blank" coords="235,0,294,78" ></map></div></div><div class="left bor" style="margin:0px 5px;width:407px"><div class="title1" ><a href="__APP__/service/show?id=<?php echo ($listnew['0']['id']); ?>"><h3><?php echo ($listnew['0']['title']); ?></h3></a><div class="content"><?php echo ($listnew['0']['content']); ?></div></div><div class="biaoti"><div>==</div><a href="">安徽名菜</a><div>==</div><div>==</div><a href="" class="b">安徽小吃</a><div>==</div><div>==</div><a href="" class="c">安徽土产</a><div>==</div><span class="clear"></span></div><div style="padding-top: 10px;display:block" class="m_food"><?php if(is_array($ahlist)): $i = 0; $__LIST__ = $ahlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="display" ><div class="bor"><img width="77" height="77" src="__IPUBLIC__/m_<?php echo ($vo['image']); ?>"></div><div><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>"><?php echo ($vo['name']); ?></a></div></div><?php endforeach; endif; else: echo "" ;endif; ?><div class="clear"></div></div></div><div style="float:left"><div class="bor" style="height:221px;width: 250px;background-color:#FFFFF8;_height:218px;"><div style="color:#00669A;font-weight: 900;margin-top:7px;margin-bottom: 5px;font-size:13px"><img src="__TPUBLIC__/image/dazhe1.gif" style="margin:7px 10px 0px 10px;">打折优惠</div><div id="y_info"><ul class="noticeList"><li><img src="__TPUBLIC__/image/dazhe2.gif" style="margin:7px 10px 0px 10px;"><a href="#">香辣盛宴干锅主题酒店优惠劵1</a></li><li><img src="__TPUBLIC__/image/dazhe2.gif" style="margin:7px 10px 0px 10px;"><a href="#">香辣盛宴干锅主题酒店优惠劵2</a></li><li><img src="__TPUBLIC__/image/dazhe2.gif" style="margin:7px 10px 0px 10px;"><a href="#">香辣盛宴干锅主题酒店优惠劵3</a></li><li><img src="__TPUBLIC__/image/dazhe2.gif" style="margin:7px 10px 0px 10px;"><a href="#">香辣盛宴干锅主题酒店优惠劵4</a></li><li><img src="__TPUBLIC__/image/dazhe2.gif" style="margin:7px 10px 0px 10px;"><a href="#">香辣盛宴干锅主题酒店优惠劵5</a></li><li><img src="__TPUBLIC__/image/dazhe2.gif" style="margin:7px 10px 0px 10px;"><a href="#">香辣盛宴干锅主题酒店优惠劵6</a></li><li><img src="__TPUBLIC__/image/dazhe2.gif" style="margin:7px 10px 0px 10px;"><a href="#">香辣盛宴干锅主题酒店优惠劵7</a></li><li><img src="__TPUBLIC__/image/dazhe2.gif" style="margin:7px 10px 0px 10px;"><a href="#">香辣盛宴干锅主题酒店优惠劵8</a></li></ul></div></div><div style="margin-top:4px" class="bor"><img src="__TPUBLIC__/image/dazhe3.gif"></div><div style="margin-top:4px" class="bor"><img src="__TPUBLIC__/image/dazhe4.gif"></div></div><div class="clear"></div></div><div class="fd_third" style="margin-top:5px;"><div  class="block_first"><div class="back_ground"><div class="left ipad" ><img src="__TPUBLIC__/image/xindian.gif" style="margin: 7px 7px 0px 7px;">最新加盟</div><div class="right href"><a href="http://51googo.com/pc/index.php?m=content&c=index&a=lists&catid=9">更多</a></div><div class="clear"></div></div><div><?php if(is_array($listcz)): $i = 0; $__LIST__ = $listcz;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="display2" ><div class="bor"><img src="<?php echo ($imgcz["$i"]); ?>"></div><div><a href="<?php echo ($vo['url']); ?>"><?php echo ($vo['title']); ?></a></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div></div><div class="block_second"><div class="back_ground" ><div class="left ipad" ><img src="__TPUBLIC__/image/xjjd.gif" style="margin: 7px 7px 0px 7px;">星级酒店-宾馆</div><div class="right href"><a href="http://51googo.com/pc/index.php?m=content&c=index&a=lists&catid=13">更多</a></div><div class="clear"></div></div><div><?php if(is_array($listcz13)): $i = 0; $__LIST__ = $listcz13;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="display2" ><div class="bor"><img src="<?php echo ($imgcz13["$i"]); ?>"></div><div><a href="<?php echo ($vo['url']); ?>"><?php echo ($vo['title']); ?></a></div></div><?php endforeach; endif; else: echo "" ;endif; if(is_array($listqj13)): $i = 0; $__LIST__ = $listqj13;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="display2" ><div class="bor"><img src="<?php echo ($imgqj13["$i"]); ?>"></div><div><a href="<?php echo ($vo['url']); ?>"><?php echo ($vo['title']); ?></a></div></div><?php endforeach; endif; else: echo "" ;endif; ?></div></div><div class="clear"></div></div><div class="ah_title"><img src="__TPUBLIC__/image/1f.gif"></div><div style="height:330px;margin-top: 5px;" class="bor1"><div style="float:left"><div style="margin:2px;"><div id="slide4" class="smallslider" style="height:326px;width:280px;"><ul><?php if(is_array($mingcai)): $i = 0; $__LIST__ = array_slice($mingcai,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>"><img src="__IPUBLIC__/s_<?php echo ($vo['image']); ?>" style="height:326px;width:280px;" alt="<?php echo ($vo['name']); ?>"/></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="clear"></div></div></div><div style="width:486px;float:left;margin-top: 2px;"><?php if(is_array($mingcai)): $i = 0; $__LIST__ = array_slice($mingcai,5,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="ah_display_f"><div style="float:left;" class="ah_dis_f"><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>"><img src="__IPUBLIC__/s_<?php echo ($vo['image']); ?>"></a><div class="ah_dis_t"><?php echo ($vo['name']); ?></div></div></div><?php endforeach; endif; else: echo "" ;endif; ?><div class="clear"></div></div><div style="float:left;margin:2px 1px 0px 0px;text-align:left;"><a href="__APP__/meishi/more?pid=<?php echo ($pmingcai['0']['pid']); ?>" class="ah_list_title"><span style="padding-left:15px;font-size:15px;">热门安徽名菜排行</span><span>更多</span></a><?php if(is_array($pmingcai)): $i = 0; $__LIST__ = array_slice($pmingcai,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>" class="ah_list_img" ><div class="ah_list_b" style="top:17px"><?php echo ($i); ?></div><div style="float:left"><img src="__IPUBLIC__/m_<?php echo ($vo['image']); ?>"></div><div class="ah_list_nt" ><?php echo ($vo['name']); ?></div><div class="clear"></div></a><?php endforeach; endif; else: echo "" ;endif; if(is_array($pmingcai)): $i = 0; $__LIST__ = array_slice($pmingcai,3,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>" class="ah_list_bor"><div class="ah_list_b"><?php echo ($i+3); ?></div><div class="ah_list_nts" ><?php echo ($vo['name']); ?></div><div class="clear"></div></a><?php endforeach; endif; else: echo "" ;endif; ?></div></div><div class="bor1" style="margin-top:5px;"><img src="__TPUBLIC__/image/ad1.png" style="margin:1px;width:976px;"></div><div class="ah_title"><img src="__TPUBLIC__/image/2f.gif"></div><div style="height:330px;margin-top: 5px;" class="bor1"><div style="float:left"><div style="margin:2px;"><div id="slide2" class="smallslider" style="height:326px;width:280px;"><ul><?php if(is_array($xiaochi)): $i = 0; $__LIST__ = array_slice($xiaochi,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>"><img src="__IPUBLIC__/s_<?php echo ($vo['image']); ?>" style="height:326px;width:280px;" alt="<?php echo ($vo['name']); ?>"/></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="clear"></div></div></div><div style="width:486px;float:left;margin-top: 2px;"><?php if(is_array($xiaochi)): $i = 0; $__LIST__ = array_slice($xiaochi,5,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="ah_display_f"><div style="float:left;" class="ah_dis_f"><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>"><img src="__IPUBLIC__/s_<?php echo ($vo['image']); ?>"></a><div class="ah_dis_t"><?php echo ($vo['name']); ?></div></div></div><?php endforeach; endif; else: echo "" ;endif; ?><div class="clear"></div></div><div style="float:left;margin:2px 1px 0px 0px;text-align:left;"><a href="__APP__/meishi/more?pid=<?php echo ($pxiaochi['0']['pid']); ?>" class="ah_list_title"><span style="padding-left:15px;font-size:15px;">热门安徽小吃排行</span><span>更多</span></a><?php if(is_array($pxiaochi)): $i = 0; $__LIST__ = array_slice($pxiaochi,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>" class="ah_list_img" ><div class="ah_list_b" style="top:17px"><?php echo ($i); ?></div><div style="float:left"><img src="__IPUBLIC__/m_<?php echo ($vo['image']); ?>"></div><div class="ah_list_nt" ><?php echo ($vo['name']); ?></div><div class="clear"></div></a><?php endforeach; endif; else: echo "" ;endif; if(is_array($pxiaochi)): $i = 0; $__LIST__ = array_slice($pxiaochi,3,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>" class="ah_list_bor"><div class="ah_list_b"><?php echo ($i+3); ?></div><div class="ah_list_nts" ><?php echo ($vo['name']); ?></div><div class="clear"></div></a><?php endforeach; endif; else: echo "" ;endif; ?></div></div><div class="bor1" style="margin-top:5px;"><img src="__TPUBLIC__/image/ad1.png" style="margin:1px;width:976px;"></div><div class="ah_title"><img src="__TPUBLIC__/image/3f.gif"></div><div style="height:330px;margin-top: 5px;" class="bor1"><div style="float:left"><div style="margin:2px;"><div id="slide3" class="smallslider" style="height:326px;width:280px;"><ul><?php if(is_array($tuchan)): $i = 0; $__LIST__ = array_slice($tuchan,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>"><img src="__IPUBLIC__/s_<?php echo ($vo['image']); ?>" style="height:326px;width:280px;" alt="<?php echo ($vo['name']); ?>"/></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="clear"></div></div></div><div style="width:486px;float:left;margin-top: 2px;"><?php if(is_array($tuchan)): $i = 0; $__LIST__ = array_slice($tuchan,5,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="ah_display_f"><div style="float:left;" class="ah_dis_f"><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>"><img src="__IPUBLIC__/s_<?php echo ($vo['image']); ?>"></a><div class="ah_dis_t"><?php echo ($vo['name']); ?></div></div></div><?php endforeach; endif; else: echo "" ;endif; ?><div class="clear"></div></div><div style="float:left;margin:2px 1px 0px 0px;text-align:left;"><a href="__APP__/meishi/more?pid=<?php echo ($ptuchan['0']['pid']); ?>" class="ah_list_title"><span style="padding-left:15px;font-size:15px;">热门徽味土产排行</span><span>更多</span></a><?php if(is_array($ptuchan)): $i = 0; $__LIST__ = array_slice($ptuchan,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>" class="ah_list_img" ><div class="ah_list_b" style="top:17px"><?php echo ($i); ?></div><div style="float:left"><img src="__IPUBLIC__/m_<?php echo ($vo['image']); ?>"></div><div class="ah_list_nt" ><?php echo ($vo['name']); ?></div><div class="clear"></div></a><?php endforeach; endif; else: echo "" ;endif; if(is_array($ptuchan)): $i = 0; $__LIST__ = array_slice($ptuchan,3,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="__APP__/meishi/showmeishi?pid=<?php echo ($vo['pid']); ?>&id=<?php echo ($vo['id']); ?>" class="ah_list_bor"><div class="ah_list_b"><?php echo ($i+3); ?></div><div class="ah_list_nts" ><?php echo ($vo['name']); ?></div><div class="clear"></div></a><?php endforeach; endif; else: echo "" ;endif; ?></div></div><div class="bor1" style="margin-top:5px;"><img src="__TPUBLIC__/image/ad1.png" style="margin:1px;width:976px;"></div><div style="background:url(__TPUBLIC__/image/bottom.gif) no-repeat;height:94px;widht:980px" class="href color"><ul class="sub-list tttt" style="padding-top: 24px;-webkit-padding-start: 10px;font-size: 12px;"><li>友情链接：</li><?php if(is_array($listlink)): $i = 0; $__LIST__ = $listlink;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo['url']); ?>" title="<?php echo ($vo['name']); ?>" target="_blank"><?php echo ($vo['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div style="background:url(__TPUBLIC__/image/dise.gif);height:84px;widht:980px" ><div class="foot_lib"><a>关于我们</a>&nbsp;
            <a>使用帮助</a><a>知识中心</a><a>诚聘英才</a><a>友情链接</a><a>广告服务</a><a>联系我们</a><div style="clear:both;"></div><div>地址：滁州市泰鑫城市星座3号楼1单元1101室&nbsp;联系电话：0550-3786120</div></div></div></div></body>