@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section class="short_descrip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="introduce back-cdn">
                            <h1><i class="product-icons-64 product-icons-cdn"></i> CDN</h1>
                            <p>AliCloud CDN(Content Delivery Network) 서비스는 멀티미디어 컨텐츠를 중국 및 세계 전역의 EDGE로 전송하여 지역별 사용자의 접근성을 향상시킵니다. 사이트 응답속도를 빠르게 하고 네트워크 구축 비용을 절감하며, 이에 따라 대량의 사용자 접속과 지리적 문제를 동시에 해결할 수 있습니다.</p>
                        </div>
                </div>
            </div>
        </div>
</section>
<section class="ali_table">
        <div class="container">
            <div class="ali_function_header">
               <h3>상품 개요</h3>
            </div>
            <p>AliCloud CDN을 사용하여 컨텐츠 공급자는 최종 사용자에게 다양한 컨텐츠를 저비용, 고성능으로 제공합니다.</p>
            <p>수많은 알리바바 서비스 운영을 바탕으로 안정적이며 빠른 네트워크 품질을 보장합니다.</p>
            <img  class="center-block" src="https://www.cloudlink.co.kr/images/front/content/product_cdn01.jpg"/>
            <br>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>속도와 보안</td>
                        <td>
                            <ul>
                                <li>분산 시스템 구조 : 중국 500+ 이상의 노드, 해외 30+ 노드 제공</li>
                                <li>노드당 40Gbps이상의 광대역 네트워크, 40TB ~1.5PB의 대용량 스토리지 제공</li>
                                <li>성능 안정성 95% 이상 보장, 악의적인 공격에 대해 m/sec 반응, 동영상 재생율 95%이상</li>
                                <li>7*24 모니터링을 통한 높은 서비스 품질 유지와 배포 스케줄 모니터링 지원</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>경제성</td>
                        <td>
                            <ul>
                                <li>자원의 탄력적인 운영 및 실사용량 과금, 편리한 운영 및 경제성 확보</li>
                                <li>2가지 지불방식 : 전송량 또는 최대 Bandwidth기준</li>
                                <li>갑작스런 전송량 폭주는 모니터링 시스템에서 감지 및 조정 지원</li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>간편한 사용법</td>
                        <td><ul>
                            <li>간편한 도메인 네임 추가, 제거, 검사 기능 지원</li>
                            <li>서비스 구성 항목과 자체 정의 Anti-stealing-link, cash power, response headers 등의 기능 지원</li>
                            <li>Open API interface, Open Service ,내용 조회, 모니터링 데이터, 사용로그 다운로드 등 기능 제공</li>
                        </ul></td>
                    </tr>
                </tbody>
            </table>
</div>
</section>

<section class="ali_function">
    <div class="container">
            <div class="ali_function_header">
                <h3>상품 특징</h3>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;노드캐시</div>
                </div>
                <div class="col-md-11">
                    <h4>방문 횟수가 높은 대상에 대한 알고리즘을 통하여 빠른 속도의 CDN서비스를 제공합니다.</h4>
                    <ul>
                        <li>고성능 캐시 시스템설계, CPU Multi-Core 균등처리능력, 메모리에 대한 효율적인 사용과 제어, 그리고 SSD IOPS와 처리량(throughput)의 최대화를 통하여 빠른 CDN서비스를 제공합니다.</li>
                        <li>각 노드에 고성능 읽기쓰기를 지원하는 SSD를 배치함으로써 사용자의 방문대기시간을 줄이고 가용성을 높일 수 있습니다.</li>
                    </ul>
                    <h4>페이지 최적화, 압축기능을 제공하여 효율적으로 속도를 향상시킵니다.</h4>
                    <ul>
                        <li>페이지 최적화는 Web Page의 빈칸, 줄 바꿈, 탭, 주석 등 내용들을 제거함으로써 로딩될 페이지의 사이즈를 최적화시킵니다.</li>
                        <li>압축기능을 활용하여 효율적으로 사용자가 전송하고자 하는 컨텐츠의 크기를 줄임으로써 CDN효과를 최대화 합니다.</li>
                        <li>다수의 JavaScript/CSS 파일을 조합하여 한번에 요청을 진행하기 때문에 요청건수를 줄일 수 있습니다.</li>
                    </ul>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;배포</div>
                </div>
                <div class="col-md-11">
                    <h4>자체 연구개발한 배포시스템은 각 노드 당 100만개 이상의 Domain Name의 배포를 진행할 수 있습니다.</h4>
                    <ul>
                        <li>다양한 배포규칙을 제공하기 때문에 한 노드에 장애가 발생하더라도 사용자에 영향을 주지 않습니다.</li>
                        <li>보안 시스템과 컨텐츠 관리시스템 등 여러 시스템과 유연하게 연동하여 사용할 수 있습니다.</li>
                    </ul>
                    <h4>다양한 서비스 시나리오를 지원하기 때문에 서로 다른 자원유형의 CDN 요구를 만족시킬 수 있습니다.</h4>
                    <ul>
                        <li>정보포털 사이트, 멀티미디어 사이트, 게임 사이트 등 유형에 상관없이 사용자가 운영하는 사이트에서 CDN서비스의 분산 배포는 업무의 수요를 만족시키며 접근속도를 가속화 시킵니다.</li>
                    </ul>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;성능</div>
                </div>
                <div class="col-md-11">
                    <h4>멀티미디어 스트리밍을 지원하기 때문에 높은 품질과 짧은 응답 시간을 구현하여 서비스의 고도화를 실현하였습니다.</h4>
                    <ul>
                        <li>스트리밍 중계방송, 미디어 자원 저장공간, Partition Transcoding, 방문 권한, 컨텐츠 전송 가속화 등 일련의 솔루션을 제공합니다.</li>
                        <li>동영상 스트리밍 재생서비스는 버퍼링 시간을 줄이고 우수한 재생 품질을 보장하며 mp4, flv 등 포맷을 지원합니다.</li>
                    </ul>
                    <h4>알리클라우드의 다양한 서비스와 함께 사용하면 다운로드 속도를 향상시킬 수 있습니다.</h4>
                    <ul>
                        <li><strong>OSS 조합</strong> : 사이트의 접근속도를 향상시키고 OSS의 Outbound 비용 절감</li>
                        <li><strong>ECS 조합 </strong>: 사이트의 가용성과 서버 정보 보호 및 Bandwidth 비용 절감</li>
                    </ul>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;관리</div>
                </div>
                <div class="col-md-11">
                    <h4>관리콘솔을 통하여 전체 노드에 대한 배포를 사용자가 재정의 할 수 있습니다.</h4>
                    <ul>
                        <li>간편한 조작으로 빠르게 CDN서비스를 개통할 수 있습니다. 콘솔을 통하여 Domain Name의 추가, 삭제, 수정, 조회, 노드캐싱규칙, http헤더 등의 조작을 사용자 요구에 따라 최적 기능을 선택할 수 있습니다.</li>
                    </ul>
                    <h4>Open API과 관리콘솔을 통하여 간편하게 CDN서비스를 사용할 수 있습니다.</h4>
                    <ul>
                        <li>CDN API, Domain Name 분석, 컨텐츠 분할과 실시간 데이터 모니터링을 통하여 Bandwidth와 트래픽, 접근 속도과 보안 등 전반적인 모니터링 정보를 제공합니다.</li>
                    </ul>
                </div>
            </div>
    </div>
</section>
@endsection
