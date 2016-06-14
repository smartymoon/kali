@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section class="short_descrip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="introduce back-ess">
                            <h1><i class="product-icons-64 product-icons-ess"></i> Auto Scale</h1>
                            <p>
                                Auto Scaling은 사용자가 설정한 시나리오에 따라 자동으로 ECS의 수량을 자동으로 조정할 수 있는 서비스입니다. 업무량이 증가하거나 감소함에 따라 ECS 인스턴스는 자동으로 증가하거나 감소하게 됩니다.
                            </p>
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
                <div class="col-md-3">
                    <span>온 디멘드</span>
                    <img src="https://www.cloudlink.co.kr/images/front/content/ess_merit01.png"/>
                    <p>비즈니스의 급격한 변화에 대해서 서버스 부하 및 비용을 걱정할 필요 없습니다.
매뉴얼 작업 없이 IT자원을 적절히 확장 배치합니다.</p>
                </div>
                <div class="col-md-3">
                    <span>자동화</span>
                    <img src="https://www.cloudlink.co.kr/images/front/content/ess_merit02.png"/>
                    <p>ECS 인스턴스를 자동으로 생성하고 해제합니다.
SLB와 RDS 접속 리스트를 자동으로 구성합니다.</p>
                </div>
                <div class="col-md-3">
                    <span>다양한 스케일 모드</span>
                    <img src="https://www.cloudlink.co.kr/images/front/content/ess_merit03.png"/>
                    <p>멀티 모드 호환과 동시에 스케줄, Dynamic, Static, Safe mode까지 구성할 수 있습니다.
API를 통해 외부 모니터링 시스템과 연동하여 사용할 수 있습니다.</p>
                </div>
                <div class="col-md-3">
                    <span>인텔리젼스</span>
                    <img src="https://www.cloudlink.co.kr/images/front/content/ess_merit04.png"/>
                    <p>지능적인 스케줄 구성으로 복잡한 상황에 대응할 수 있습니다.
다양한 시나리오에 대응하여 자동적인 컴퓨팅 자원 할당을 진행할 수 있습니다.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="ali_function_header">
               <h3>상품 특징</h3>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>Schedule 확장</h3>
                    <p>주기적인 상황 변화에 대응하여 원하는 시간에 ECS 인스턴스를 생성하거나 해제할 수 있습니다. 주기적인 상황 변화 시 다이나믹 스케일 모드와 함께 구성하게 되면 예기치 못한 상황에도 대응할 수 있습니다.</p>
                </div>
                <div class="col-md-3">
                    <h3>Dynamic 확장</h3>
                    <p>클라우드 모니터링의 성능 지표에 의하여
ECS인스턴스를 자동으로 생성하거나 해제합니다.</p>
                </div>
                <div class="col-md-3">
                    <h3>Static 확장</h3>
                    <p>평상시 원하는 시기 내내 ‘최소 인스턴스 수량’ 속성을 통해 안전하게 운영하는 인스턴스 수량을 계속 유지할 수 있습니다.
</p>
                </div>
                <div class="col-md-3">
                    <h3>로드벨런싱과 RDS</h3>
                    <p>ECS 인스턴스를 생성하거나 해제할 때 자동으로 로드 밸런싱과 관련된 ECS 인스턴스를 추가하거나 제거합니다.</p>
                </div>
            </div>
        </div>
</section>
@endsection
