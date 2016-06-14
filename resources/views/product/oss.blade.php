@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section class="short_descrip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="introduce back-oss">
                            <h1><i class="product-icons-64 product-icons-oss"></i> OSS</h1>
                            <p>
                                OSS(Object Storage Service)는 AliCloud가 제공하는 고성능의 오브젝트 스토리지 서비스입니다. 스토리지 용량과 처리능력을 탄력적으로 확장시킬 수 있으며, 사용량에 따라 비용이 과금됩니다. 따라서 고객은 핵심업무에만 집중할 수 있으며, 다른 AliCloud 상품과 연동하여 백업, 데이터 가공, 분석, CDN 스토리지 등으로 사용할 수 있습니다.
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
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:150px"></th>
                    <th style="width:450px">OSS</th>
                    <th>H/W Storage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="https://img.alicdn.com/tps/TB1QMVOKXXXXXbwXFXXXXXXXXXX-32-32.png" width="18" height="18" style=""> 신뢰성</td>
                    <td style="vertical-align:middle;width:450px">
                        <ul>
                            <li>서비스 가용성 99.9% 이상, 데이터 신뢰성 99.99999999% 보장</li>
                            <li>자동 용량 확장 (서비스 영향 없음), 다중 데이터 자동백업 지원</li>
                        </ul>
                    </td>
                    <td style="vertical-align:middle;">
                        <ul>
                            <li>HW 신뢰성에 한정, HW장애로 인한 데이터 손실 발생 높음</li>
                            <li>복구시에 많은 시간과 비용이 발생함</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><img src="https://img.alicdn.com/tps/TB1oGFWKXXXXXbxXpXXXXXXXXXX-32-32.png" width="18" height="18" style=""> 보안</td>
                    <td style="vertical-align:middle;">
                        <ul>
                            <li>멀티레벨 보안 및 DDoS, 블랙홀 자동 처리 지원, 다중 사용자 <br>리소스 격리, 원격 재해 복구, IP Allow List 등의 기능 제공</li>
                            <li>강력한 권한관리 기능 포함</li>
                        </ul>
                    </td>
                    <td style="vertical-align:middle;">
                        <ul>
                            <li>고가의 보안 및 접근 제어 솔루션을 도입 필요</li>
                            <li>보안 레벨 유지를 위해 개발 및 유지보수 비용 필요</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><img src="https://img.alicdn.com/tps/TB1dOXJKXXXXXXvXVXXXXXXXXXX-32-32.png" width="18" height="18" style=""> 비용</td>
                    <td style="vertical-align:middle;">
                        <ul>
                            <li>저렴한 비용, 운영/유지보수 인력/호스팅 비용없이 사용</li>
                            <li>다중 회선으로 구성된 BGP 백본 네트워크로 Bandwidth 보장</li>
                        </ul>
                    </td>
                    <td style="vertical-align:middle;">
                        <ul>
                            <li>용량 제약, HW 증설, 운영 및 유지 보수 비용 높음</li>
                            <li>한정적인 서비스와 HW벤더에 의존 필요</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td><img src="//img.alicdn.com/tps/TB15S64KXXXXXcrXpXXXXXXXXXX-32-32.png" width="18" height="18">데이터처리</td>
                    <td style="vertical-align:middle;">
                        <ul>
                            <li>이미지 처리, 오디오 및 비디오 트랜스 코딩, 컨텐츠 가속 분포도, <br>아카이브 서비스 제공</li>
                        </ul>
                    </td>
                    <td style="vertical-align:middle;">
                        <ul>
                            <li>별도의 개발 및 구매 필요</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="container" style="padding-left:0px;height: 33px;margin-top: 30px;margin-bottom: 50px;border-bottom: solid 1px #ddd;">
            <h1 style="font-size: 24px;background-color: #fff;display: inline-block;padding-right: 10px;">상품 특징</h1>
        </div>
        <div class="container">
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;편의성</div>
                </div>
                <div class="col-md-11">
                    <h4>로컬 파일처럼 편리하게 사용 할 수 있습니다.</h4>
                    <ul>
                        <li>표준 인터페이스, 풍부한 SDK/API, 콘솔, 포털, 및 앱을 통해서 간편한 업로드/다운로드 지원</li>
                        <li>비디오 스트리밍 및 기타 대용량 파일의 읽기, 쓰기, 업로드를 자유롭게 관리 할 수 있음</li>
                        <li>데이터 관리 기능을 통한 대량 삭제 또는 아카이브 서비스 지원</li>
                    </ul>
                    <h4>실시간 스트리밍 서비스를 지원합니다.</h4>
                    <ul>
                        <li>CCTV와 같은 비디오 스트림을 포함한 컨텐츠가 실시간 업로드 되는 경우에도 읽기 및 쓰기를 지원</li>
                        <li>Terminal C SDK 및 Demo 지원</li>
                    </ul>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;보안</div>
                </div>
                <div class="col-md-11">
                    <h4>스케일링(Scale Up/Down)을 통해 100% 자원활용을 실현합니다.</h4>
                    <ul>
                        <li>엔터프라이즈급 AliCloud 보안제품 지원(무료)</li>
                        <li>DDoS 방어: 1 ~ 5G 대역 기본 제공, DDOS 보호 및 보호 형 CC, SYN 홍수, UDP 등 DDoS 공격을 포함한 기본 웹 공격 방어</li>
                        <li>편리한 인증, 권한 부여, STS, URL 인증, 권한 부여 및 화이트리스트 기능 제공</li>
                        <li>사용자 레벨 자원 분리 기능 지원으로 멀티 클러스터 동기화 기능(옵션) 제공</li>
                    </ul>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;부가서비스</div>
                </div>
                <div class="col-md-11">
                    <h4>빠른 데이터 처리를 통해 강력한 파일 변환 기능을 제공합니다.</h4>
                    <ul>
                        <li>각종 이미지 포맷 변환, 기타 이미지 포맷, 미리보기, 워터마크 등의 작업 지원</li>
                        <li>오디오/비디오 트랜스코딩 : 고품질, 고속의 병렬 오디오/비디오 데이터 트랜스코딩 지원</li>
                        <li>CDN 연동시 안정성 및 Bandwidth 설정을 클릭 한번으로 구성함</li>
                    </ul>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;적용분야</div>
                </div>
                <div class="col-md-11">
                    <h4>산업솔루션 및 제품 패키지 적용</h4>
                    <ul>
                        <li>보안 감시, 온라인 주문, 대화형 TV, 영상 처리 및 기타 산업분야에 적용</li>
                    </ul>
                    <br><br>
                </div>
            </div>
        </div>
</div>
</section>
@endsection
