@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section class="short_descrip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="introduce back-ddosbasic">
                            <h1><i class="product-icons-64 product-icons-ddosbasic"></i> Anti-DDoS</h1>
                            <p>AliCloud의 Anti-DDoS는 강력한 보안기능으로 DDoS 공격에 대해 고객의 네트워크와 데이터를 보호합니다. 또한 DDoS 감지, 방어, 무결성 점검 및 트로이목마를 포함한 완벽한 방어와 데이터 분석을 기반으로 AliCloud의 모든 서비스에 적용 가능합니다.</p>
                        </div>
                </div>
            </div>
        </div>
</section>
<section class="ali_img">
        <div class="container">
            <div class="ali_function_header">
               <h3>상품 개요</h3>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <span>BGP 방어</span>
                    <img src="https://www.cloudlink.co.kr/images/front/content/ddosbasic_merit01.png"/>
                    <p>DDoS 공격에도 서비스에 영향없음
고품질 Bandwidth로 가용성 및 안정성 보장</p>
                </div>
                <div class="col-md-4">
                    <span>접근 통제</span>
                    <img src="https://www.cloudlink.co.kr/images/front/content/ddosbasic_merit02.png"/>
                    <p>DDoS의 공격을 정확하게 식별하고 방어함
Laundrying알고리즘(자체연구개발)으로 정상 트래픽 보장</p>
                </div>
                <div class="col-md-3">
                    <span>무료 제공</span>
                    <img src="https://www.cloudlink.co.kr/images/front/content/ddosbasic_merit04.png"/>
                    <p>고비용의 DDoS보안 장비를 구매할 필요가 없음
알리클라우드 고객은 DDoS 공격에 대해 5G까지 무료</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="ali_function_header">
               <h3>상품 특징</h3>
            </div>
            <h3 style="text-align:center">Cutting-edge data protection</h3>
            <p style="text-align:center">AliCloud의 Anti-DDoS 선진 기술은 DDoS의 공격으로 부터 고객의 데이터와
네트워크의 안전을 보장합니다.</p>
            <div class="row">
                <div class="col-md-3">
                    <h3>방어지수를 향상</h3>
                    <p>보안 레벨에 따라 동적으로 방어 지수 조절 가능</p>
                    <p>IDC 전체 방어 설정 보다 높기 때문에 공격으로 인한 다운 확률은 거의 없음</p>
                </div>
                <div class="col-md-3">
                    <h3>“Black Hole” 시간 감소</h3>
                    <p>공격받는 “Black Hole” 시간을 감소시켜서 고객 서비스 회복 시간 단축</p>
                </div>
                <div class="col-md-3">
                    <h3>모든 유형 방어</h3>
                    <p>DDoS 방어는 Layer 4~7까지 제공
CC, SYN Flood, UDP Flood 등의 유형을 포함하여 완벽하게 방어함</p>
                </div>
                <div class="col-md-3">
                    <h3>Web Application Firewall</h3>
                    <p>지정된 방화벽으로 SQL Injections, XSS 와 모든 다른 WEB Application 공격을 효과적으로 처리함</p>
                </div>
            </div>
        </div>
</section>
@endsection
