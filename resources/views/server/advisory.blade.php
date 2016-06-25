@extends('layouts.master')
@section('title', 'Page Title')
@section('content')
<div class="container advisory">
    <div class="advisory-head">
        <h1 class="text-warning">이제부터 엔클라우드24를 통해 아마존 AWS를 이용하세요!</h1>
        <p>엔클라우드24(ncloud24, www.ncloud24.com)는 2011년부터 KT ucloud 서비스를 시작한 국내 최초이자 최대 규모의 CSB(Cloud Service Brokerage) 사업자로서 우수한 기술력을 바탕으로 클라우드 컨설팅, 시스템 구축, 매니지드 서비스를 제공하고 있습니다. 또한 아마존웹서비스의 컨설팅 파트너사로 AWS에서 워크로드 및 애플리케이션을 디자인, 설계, 구축, 마이그레이션 및 관리하는 데 도움을 주는 클라우드 서비스를 제공하고 있으며, 모든 분야의 기업 고객이 다양한 클라우드 환경에서 비용절감과 함께 신뢰성이 높고, 안전하며 유연한 클라우드 서비스를 받을 수 있도록 지원하고 있습니다.</p>
    </div>
    <div class="advisory-body">
        <h2>왜 엔클라우드24인가?</h2>
        <div class="row advisory-item">
            <div class="col-md-3">
                    <img class="img-responsive" src="https://www.ncloud24.com/aws/img/new_why01.png">
            </div>
            <div class="col-md-9">
                    <h3>1. Consulting Services</h3>
                    <ul>
                        <li>고객사의 비즈니스 환경에 맞게 AWS 설계를 지원합니다.</li>
                        <li>AWS 도입 컨설팅</li>
                        <li>고객의 필요를 위한 복잡한 네트워크 아키텍처를 구축</li>
                        <li>공공, 민간 및 하이브리드 클라우드 솔루션 설계 및 배포</li>
                        <li>타 클라우드 서버 및 물리 서버 AWS 이전 컨설팅</li>
                    </ul>
            </div>
        </div>
        <div class="row advisory-item">
                    <div class="col-md-3">
                            <img class="img-responsive" src="https://www.ncloud24.com/aws/img/new_why05.png">
                    </div>
                    <div class="col-md-9">
                            <h3>2. Technical Assistance Services</h3>
                            <ul>
                                <li>고객사의 비즈니스 환경에 맞게 AWS 구축을 지원합니다.</li>
                                <li>AWS 이전 지원</li>
                                <li>높은 부하 서버 개선 사항 (버스트 보정)</li>
                                <li>서버 이전 혹은 신규 생성시 고객사에서 해결하기 어려운 전문적인 기술 지원</li>
                                <li>한국어 기술지원 서비스 제공</li>
                                <li>신규 서비스를 위한 테스트 환경 제공</li>
                                <li>전담인력을 통한 세심한 관리</li>
                            </ul>
                    </div>
        </div>
        <div class="row advisory-item">
                    <div class="col-md-3">
                            <img class="img-responsive" src="https://www.ncloud24.com/aws/img/new_why02.png">
                    </div>
                    <div class="col-md-9">
                            <h3>3. Management Services</h3>
                            <ul>
                                <li>엔클라우드24는 365일 24시간 고객서비스를 지원합니다.</li>
                                <li>365일 24시간 실시간 모니터링 실시</li>
                                <li>클라우드 서비스 장애시 신속 대응</li>
                                <li>운영 지원 / 백업 복구 서비스 제공</li>
                                <li>월별 매니지드 보고서 제공(고급형)</li>
                            </ul>
                    </div>
        </div>
        <div class="row advisory-item">
                    <div class="col-md-3">
                            <img class="img-responsive" src="https://www.ncloud24.com/aws/img/why03.png">
                    </div>
                    <div class="col-md-9">
                            <h3>4. Billing Services</h3>
                            <ul>
                                <li></li>
                                <li>사용요금 원화 결제</li>
                                <li>원화 세금계산서 발행</li>
                                <li>사용량에 따른 후불 청구</li>
                                <li>서비스 별 상세 이용내역 리포트 제공</li>
                            </ul>
                    </div>
        </div>
        <div class="row advisory-item">
                    <div class="col-md-3">
                            <img class="img-responsive" src="https://www.ncloud24.com/aws/img/new_why04.png">
                    </div>
                    <div class="col-md-9">
                            <h3>5. Cloud Console Services</h3>
                            <ul>
                                <li>자체 클라우드 콘솔 제공</li>
                                <li>여러개의 Instance를 한번에 생성하고 제어할 수 있는 Multi 기능 지원</li>
                                <li>한눈에 확인할 수 있는 계정별 서비스 이용현황</li>
                                <li>편리한 청구 요금 확인</li>
                                <li>리전별, 서비스별 클라우드 지연속도 실시간 제공</li>
                                <li>정보확인에 편리한 Flexible Area 인터페이스 제공</li>
                                <li>여러 서버의 모니터링을 한눈에, 멀티 모니터링</li>
                            </ul>
                    </div>
        </div>
    </div>
    <div class="advisory-body">
        <h2>APN 컨설팅 파트너란?</h2>
        <div class="row advisory-item">
                    <div class="col-md-3">
                            <img class="img-responsive" src="https://www.ncloud24.com/aws/img/apn.png">
                    </div>
                    <div class="col-md-9">
                            <p>APN 컨설팅 파트너는 모든 규모의 고객이 AWS에서 워크로드 및 애플리케이션을 디자인, 설계, 구축, 마이그레이션 또는 관리하는 데 도움을 주는 전문 서비스 회사입니다. 컨설팅 파트너에는 SI(Systems Integrator), 전략적 컨설팅 업체, 대행사, MSP(Managed Service Provider), VAR(Value-Added Reseller)이 포함되어 있습니다.</p>
                            <p>APN 컨설팅 파트너는 다양한 리소스와 교육에 액세스하여 고객이 AWS 클라우드에서 애플리케이션을 배포, 실행, 관리할 때 더 효율적으로 지원할 수 있습니다.</p>
                    </div>
        </div>
    </div>
</div>
@endsection
