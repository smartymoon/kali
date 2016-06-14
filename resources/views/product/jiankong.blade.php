@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section class="short_descrip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="introduce back-jiankong">
                            <h1><i class="product-icons-64 product-icons-jiankong"></i> Cloud Monitor</h1>
                            <p>
                                CloudMonitor는 오픈된 모니터링 플랫폼으로써 실시간으로 사용자의 사이트와 서버를 모니터링 할 수 있고, 다양한 방식의(메시지, Alibaba messenger, 이메일) 알람으로 실시간 경고를 실행 하여 사이트와 서버의 정상적인 운영을 보장해 드립니다.
                            </p>
                        </div>
                </div>
            </div>
        </div>
</section>
<section class="ali_table">
        <div class="container" style="padding-left:0px;height: 33px;margin-top: 30px;margin-bottom: 50px;border-bottom: solid 1px #ddd;">
            <h1 style="font-size: 24px;background-color: #fff;display: inline-block;padding-right: 10px;">상품 개요</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <p><b>오픈 소스</b></p>
                    <img class="img" src="{{asset('image/jiankong/jiankong_merit01.jpg')}}" width="350" height="100">  
                    <p>분산 아키텍처 기술로서 복수 IDC로의 접속을 지원합니다. Open API는 다양한 클라우드 상품과 서비스와의 접속을 가능하게 합니다. 오픈 규칙과 데이터 인터페이스는 사용자 맞춤형 데이터 모니터링을 할 수 있도록 합니다.</p>
                </div>
                <div class="col-md-4">
                    <p><b>네트워크 이점</b></p>
                    <img class="img" src="{{asset('image/jiankong/jiankong_merit02.jpg')}}" width="350" height="100">
                    <p>퍼블릭 망에 대한 비용 없이 다수의 AliCloud 데이터센터간 데이터 전송을 지원합니다. 백본 네트워크에 대한 복수의 접속 회선과 복수 노드에 대한 데이터 전송을 지원합니다.</p>
                </div>
                <div class="col-md-4">
                    <p><b>데이터 플랫폼</b></p>
                    <img class="img" src="{{asset('image/jiankong/jiankong_merit03.jpg')}}" width="350" height="100">
                    <p>클라우드 플랫폼에 기반한 무제한적인 데이터 저장이 가능하며, 데이터 히스토리에 대한 추적도 가능합니다. 또한 과거 자료로 부터 미래 트렌드 추정과 함께 가용성에 대한 통계 자료를 지원합니다.</p>
                </div>
            </div>
        </div>
        <div class="container" style="padding-left:0px;height: 33px;margin-top: 30px;margin-bottom: 50px;border-bottom: solid 1px #ddd;">
            <h1 style="font-size: 24px;background-color: #fff;display: inline-block;padding-right: 10px;">상품 특징</h1>
        </div>
        <div class="container">
            <center><h4><b>귀하의 웹 애플리케이션과 클라우드 서버에 대한 실시간 모니터링을 지원합니다.</b></h4></center>
            <br>
        <div class="row">
            <div class="col-md-3">
                <h5>사이트 모니터링</h5>
                <p>http, ping, dns, tcp, udp, smtp, pop, ftp등 서비스의 가용성과 응답시간에 대한 통계, 모니터링, 알람 등의 서비스를 제공합니다.</p>
            </div>
            <div class="col-md-3">
                <h5>클라우드 서비스 모니터링</h5>
                <p>ECS, RDS, SLB, CDN, OCS, OSS 등 AliCloud 서비스에 대한 모니터링 기능을 제공합니다.</p>
            </div>
            <div class="col-md-3">
                <h5>사용자정의 모니터링</h5>
                <p>사용자 요구에 따른 다양한 모니터링 서비스를 구성할 수 있습니다.</p>
            </div>
            <div class="col-md-3">
                <h5>알람 및 연락처관리</h5>
                <p>알람 통지에 있어 통일화되고 배치관리를 통한 서비스를 제공합니다. 또한 SMS, e-mail 등 다양한 통지 방법을 지원합니다.</p>
            </div>
        </div>
</div>
</section>
@endsection
