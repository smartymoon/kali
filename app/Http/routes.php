<?php

/*
|--------------------------------------------------------------------------
| Application Route::
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

//第一菜单，首页
Route::get('aliyun',function(){
    return view('aliyun');
});

//第二菜单，产品列表,三级菜单

    //弹性计算
            Route::get('product/ecs',function(){
                return view('product.ecs');
            });

            Route::get('product/ess',function(){
                //弹性伸缩
                return view('product.ess');
            });

            Route::get('product/hpc',function(){
                return view('product.hpc');
            });

    //数据库,无三级菜单
            Route::get('product/rds',function(){
                return view('product.rds');
            });
    //存储
            Route::get('product/oss',function(){
                return view('product.oss');
            });

            Route::get('product/cdn',function(){
                return view('product.cdn');
            });

            Route::get('product/disk',function(){
                return view('product.disk');
            });
    //网络
            Route::get('product/slb',function(){
                return view('product.slb');
            });

            Route::get('product/vpc',function(){
                //专有网络
                return view('product.vpc');
            });
    //云盾
            Route::get('product/aegis',function(){
                //安骑士
                return view('product.aegis');
            });


            Route::get('product/sas',function(){
                //态势感知
                return view('product.sas');
            });

            Route::get('product/waf',function(){
                //web应用防火墙
                return view('product.waf');
            });

            Route::get('product/ddos',function(){
                return view('product.ddos');
            });

            Route::get('product/ddosbasic',function(){
                //基础防护
                return view('product.ddosbasic');
            });

            /*
            Route::get('product/mss',function(){
                //服务器安全托管,停止新购
                return view('product.mss');
            });
            */

            Route::get('product/antifraud',function(){
                //反欺诈
                return view('product.antifraud');
            });

            Route::get('product/lvwang',function(){
                //绿网
                return view('product.lvwang');
            });

            Route::get('product/cdi',function(){
                //内容检测api
                return view('product.cdi');
            });

            Route::get('product/hsm',function(){
                //加秘服务
                return view('product.hsm');
            });

            Route::get('product/cas',function(){
                //证书服务
                return view('product.cas');
            });

            Route::get('product/dsi',function(){
                //数据安全险
                return view('product.dsi');
            });
    //云监控,只二级
            Route::get('product/jiankong',function(){
                return view('product.jiankong');
            });


//我们的服务
            Route::get('server/advisory',function(){
                //资询服务
                return view('server.advisory');
            });

            Route::get('server/case',function(){
                //案例
                return view('server.case');
            });

            Route::get('server/console',function(){
                //控制台
                return view('server.console');
            });
