@extends('layouts.master')
@section('title', 'Page Title')
<style>
	*{
		font-family:'微软雅黑';
	}
	.nav ul{
		list-style: none;
	}
	.nav li{
		width:200px;
	}
	.nav a{
		display: block;
		text-decoration: none;
	}
	.kz{
		display: none;
		padding: 0px 20px;
	}
	.kz li{
		font-size: 10px;
	}
	.test{
		background-color: #eee;
	}
	h4{
		margin-left: 10px;
	}
</style>
@section('content')
<div class="container">
	<nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix">
		<ul class="nav bs-docs-sidenav">
			<li><a class="side" onclick="ccc(this)" href="#gailan">콘솔</a></li>
			<li><a class="side" onclick="ccc(this)" href="#shili">클라우드 서버</a></li>
			<li><a class="side" onclick="ccc(this)" href="#cipan">디스크</a></li>
			<li><a class="side" onclick="ccc(this)" href="#kuaizhao">스냅샷</a>
				<ul class="kz">
					<li><a style="padding: 5px;text-decoration: none;" class="side" href="#kzlb">스샙샷 리스트</a></li>
					<li><a style="padding: 5px;text-decoration: none;" class="side" href="#kzcl">자동 스냅샷 생성</a></li>
				</ul>
			</li>
			<li><a class="side" onclick="ccc(this)" href="#jingxiang">이미지</a></li>
			<li><a class="side" onclick="ccc(this)" href="#anquanzu">보안설정</a></li>
			<li><a class="side" onclick="ccc(this)" href="#biaoqian">태크 관리</a></li>
			<li><a class="side" onclick="ccc(this)" href="#caozuo">작업이력</a></li>
		</ul>
	</nav>
	<div class="row">
		<div class="col-md-10 pages" style="height:4700px;background-color: #eee; float: right;margin-right:50px">
			<div id="gailan" style="height:470px"><h2>콘솔</h2>
			<img src="{{asset('image/advisory/sm1.jpg')}}" alt="" width="950px"></div>
			<div id="shili" style="height:480px"><h2>클라우드 서버</h2>
			<img src="{{asset('image/advisory/sm2.jpg')}}" alt="" width="950px"></div>
			<div id="cipan" style="height:500px"><h2>디스크</h2>
			<img src="{{asset('image/advisory/sm7.jpg')}}" alt="" width="950px"></div>
			<div id="kuaizhao" style="height:1020px"><h2>스냅샷</h2>
				<div id="kzlb"><h4>스샙샷 리스트</h4>
					<img src="{{asset('image/advisory/sm3.jpg')}}" alt="" width="950px">
				</div>
				<div id="kzcl"><h4>자동 스냅샷 생성</h4>
					<img src="{{asset('image/advisory/sm4.jpg')}}" alt="" width="950px">
				</div>
			</div>
			<div id="jingxiang" style="height:500px"><h2>이미지</h2>
			<img src="{{asset('image/advisory/sm5.jpg')}}" alt="" width="950px"></div>
			<div id="anquanzu" style="height:500px"><h2>보안설정</h2>
			<img src="{{asset('image/advisory/sm6.jpg')}}" alt="" width="950px"></div>
			<div id="biaoqian" style="height:500px"><h2>태크 관리</h2>
			<img src="{{asset('image/advisory/sm8.jpg')}}" alt="" width="950px"></div>
			<div id="caozuo" style="height:500px"><h2>작업이력</h2>
			<img src="{{asset('image/advisory/sm9.jpg')}}" alt="" width="950px"></div>
		</div>
	</div>
	<script>
    function ccc(that){
        $('.kz').hide();
        $(that).next().css({display:'block'});
    }
	$(document).ready(function() {
	  $("a.side").click(function() {
	    $("html, body").animate({
	      scrollTop: $($(this).attr("href")).offset().top + "px"
	    }, {
	      duration: 500,
	      easing: "swing"
	    });
	    return false;
	  });

	});

	$(document).ready(function(){
        function get_height(that){
            return that.offset().top-$(window).scrollTop();
        }
	    $(".kz a").click(function(){
	        $(this).addClass('test')
	        .parent().siblings().children("a").removeClass("test");
	    });
	    $('.nav > li > a').click(function(){
	    	$('.kz a').removeClass("test");
	    })
            var arr  = [];
            $(window).scroll(function(i,q){
                var count = 0;
                $('.pages>div').each(function(){
                    var div_height = get_height($(this));
                    if(div_height < 500 && div_height > -500){
                        $('.bs-docs-sidenav > li > a').css('background-color','#fff');
                        $('.bs-docs-sidenav > li > a').eq(count).css('background-color','#eee');
                    }
                    count++;
                })
            });
	});

	</script>
</div>
@endsection
