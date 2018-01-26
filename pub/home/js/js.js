(function(){
        var isTouch = ('ontouchstart' in document.documentElement) ? 'touchstart' : 'click', _on = $.fn.on;
            $.fn.on = function(){
                arguments[0] = (arguments[0] === 'click') ? isTouch: arguments[0];
                return _on.apply(this, arguments); 
            };
})();
//$('.mmcp_c_zh').eq(0).css('display','block');
$('.mmcp_list_li').eq(0).addClass('mmcp_list_li_style');
function Tab(headclassName,conclassName,colorclassName){//Tab切换
	$(headclassName).mouseenter(function (){
	var i=$(this).index();//下标
	$(this).addClass(colorclassName).siblings().removeClass(colorclassName);
	var movewidth=$('.mmcp_lc_x_dw').width()+$('.mmcp_lc_xli').eq(0).width();
	$('.mmcp_lc_x_dw').stop().animate({'left':movewidth*i+'px'},300);
//	$(conclassName).eq(i).show().siblings().hide();
	var conwidth=$('.mmcp_c_zh').width();
	$('.mmcp_cc').stop().animate({'scrollLeft':conwidth*i+'px'},300);
});
}
Tab('.mmcp_list_li','.mmcp_c_zh','mmcp_list_li_style');

$('.cp_hli_con').eq(0).css('display','block');
$('.cp_hli').eq(0).addClass('cp_hli_style');
function Taba(headclassName,conclassName,colorclassName){//Tab切换 
	$(headclassName).mouseenter(function (){
	var i=$(this).index();//下标
	$(this).addClass(colorclassName).siblings().removeClass(colorclassName);
	$(conclassName).eq(i).show().siblings().hide();
});
}
Taba('.cp_hli','.cp_hli_con','cp_hli_style');


$('.qa_li').eq(0).children('.qa_li_c').css('display','block');



$('.qa_li').on('click',function(){
	var _index=$(this).index();//下标
	if('block'==$('.qa_li').eq(_index).children('.qa_li_c').css('display')){
		$('.qa_li').eq(_index).children('.qa_li_c').stop().slideUp();
	}else{
		$('.qa_li').eq(_index).children('.qa_li_c').stop().slideDown();
		$('.qa_li').eq(_index).siblings().children('.qa_li_c').stop().slideUp();
	}
	
})
var herfw=$('.list_ul').outerWidth(true);
var pdfalse=false;
$('.list_ul').css('left',-herfw+'px');
$('.list_herf').on('touchstart',function(event){
	event.stopPropagation();
	$('.list_ul').animate({'left':'0'});
	$('.list_herf').css({'visibility':'hidden'});
	pdfalse=true;
});

$(document).on('touchstart',function(event){
	if(pdfalse){
		$('.list_ul').animate({'left':-$('.list_ul').outerWidth(true)});
		$('.list_herf').css({'visibility':'visible'});
		pdfalse=false;
	}
});
	
$('.list_ul').on('touchstart',function(event){
	event.stopPropagation();
});
$('.gotop').on('touchstart',function(){
	$('body,html').animate({'scrollTop': 0 },500);
});


$('.news_con_r_li').on('mouseenter',function(){
	var i=$('.news_con_r_li').index(this);
	$('.news_con_l img:eq('+i+')').show().siblings().hide();
});

var timebtm=null;
var timebtmpd=true;
//控制发送按钮
$('.login_send').on('click',function(){
	if(timebtmpd){
		timebtmpd=false;
		$('.login_send').attr('disabled',true);
		$('.login_send').css('backgroundColor','#c2c2c2');
		var btim=59;
		$('.login_send').html(btim+'秒');
		function autotime(){
			clearInterval(timebtm);
			timebtm=setInterval(function(){
				btim--;
				$('.login_send').html(btim+'秒');
				if(btim==0){
					clearInterval(timebtm);
					$('.login_send').css('backgroundColor','#d4377c');
					$('.login_send').html('发送');
					timebtmpd=true;
				}
			},1000);
		}
		autotime();
	}else{
		return false;
	}
	
});