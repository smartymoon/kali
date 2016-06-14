@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section class="short_descrip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="introduce back-slb">
                            <h1><i class="product-icons-64 product-icons-slb"></i> SLB</h1>
                            <p>
                               SLB(Sever Load Balancer)는 여러 대의 ECS 서버에 트랙픽을 분산시키는 서비스입니다.
SLB는 트래픽을 분산시킴으로써 외부에 제공하는 서비스의 품질을 높일 수 있을 뿐만 아니라
부분적인 서버 장애로 인한 전체 시스템의 영향이 없으므로 높은 가용성을 보장합니다
                            </p>
                        </div>
                </div>
            </div>
        </div>
</section>
<section class="ali_table">
        <div class="container">
        <h4>SLB는 Layer 4 와 Layer 7 의 트래픽 분산 지원과 접속량 제한이 없으며, Health Check, DDoS 방어 등의 기능을 지원합니다.</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:150px"></th>
                    <th>AliCloud SLB</th>
                    <th>하드웨어 SLB</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>확장성</td>
                    <td>
                        <ul>
                            <li>클라우드 서버의 삭제와 추가가 간편</li>
                            <li>서버 추가, 삭제 시 하드웨어의 대체가 필요 없기 때문에 연관된 서비스에 영향을 주지 않고 진행 가능</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>물리적 장비의 용량을 초과하게 되면 장비의 증설을 통해 SLB 작업을 진행해야 함</li>
                            <li>따라서 서비스 중단이 발생하고 기간이 소요됨</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>보안</td>
                    <td>
                        <ul>
                            <li>무료로 4단계의 DDoS 방어를 제공</li>
                            <li>방화벽을 통한 실시간 네트워크 공격에도 대비할 수 있음</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>DDoS 및 보안 모듈은 별도 구매가 필요하며 비용과 설치에 따른 시간이 소요됨</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>비용</td>
                    <td>
                        <ul>
                            <li>장비 구매가 필요 없고, 영구적인 유지보수 제공</li>
                            <li>트래픽과 Bandwidth 두 가지 기준으로 사용량에 따라 비용을 지불하며, Private network 내의 통신은 무료</li>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li>장비 구매 비용이 높고 설치 및 배포 과정이 복잡</li>
                            <li>전문 IT 인원이 유지보수를 해야 함으로 전체적인 비용 부담이 큰 편임</li>
                        </ul>
                    </td>
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
                    <div class="verticle-mode">&nbsp;다양성</div>
                </div>
                <div class="col-md-11">
                    <h4>풍부한 프로토콜 지원을 통해 다양한 업무 시나리오를 만족시킵니다.</h4>
                    <p>SLB는 TCP 프로토콜과 UDP 프로토콜의 4-layer SLB를 지원할 뿐만 아니라 HTTP와 HTTPS 프로토콜의 7-layer SLB도 지원합니다. 또한 HTTPS 프로토콜에 SSL 관리시스템을 제공하여 사용자의 데이터 전송에 대한 보안성과 완전성에 대한 요구 사항을 만족시킵니다.</p>
                    <br>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;고가용성</div>
                </div>
                <div class="col-md-11">
                    <h4>SLB 그룹에 속한 클라우드 서버의 Health Check를 지원하여 애플리케이션 서비스의 가용성을 보장합니다.</h4>
                    <p>SLB는 정기적으로 등록된 클라우드 서버의 정상 실행 여부를 체크합니다. Health Check의 속성은 사용자가 정의할 수 있으며, 클라우드 서버의 비정상적인 작동을 감지 했을 때 트래픽을 해당 클라우드 서버에 전송하지 않습니다.</p>
                    <h4>클러스터 배포, 멀티 존(zone)을 지원을 통해 다중 재해 복구가 가능합니다.</h4>
                    <p>SLB는 클러스터 배포를 지원하고 각 노드간의 동기화를 할 수 있습니다. 또한 어떤 리전(Region)에는 다수의 가용한 존(Zone)을 제공하여 동일 리전에서의 재해 복구를 편리하게 할 수 있습니다.</p>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;유연성</div>
                </div>
                <div class="col-md-11">
                    <h4>다양한 트랙픽 스케줄링 알고리즘을 지원하기 때문에 트래픽 분산을 균일하게 설정할 수 있습니다.</h4>
                    <p>SLB는 가중평균과 최소 접속량에 의한 트래픽 분산 등 2가지 분산알고리즘을 지원함으로써 사용자의 실제 수요에 기반한 분산 알고리즘을 선택할 수 있습니다.</p>
                    <h4>사용자 맞춤형 세션을 지원합니다.</h4>
                    <p>4-layer SLB는 IP 주소를 통하여 상호간의 통신을 실현하고, 7-layer SLB는 HTTPS를 통한 통신을 지원합니다. 일정 시간에 동일한 사용자로부터의 방문 요청을 동일한 서버에 전송하여 처리함으로써 방문의 연속성을 지원합니다.</p>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;편의성</div>
                </div>
                <div class="col-md-11">
                    <h4>다양한 인스턴스 유형과 비용정산방식을 제공합니다.</h4>
                    <p>사용자는 업무 특성에 따라서 Classic 네트워크의 Public/Private SLB 인스턴스를 선택하거나 VPC 네트워크의 Private SLB 인스턴스를 선택할 수 있습니다. Classic 네크워크 유형의 SLB Public 인스턴스는 종량제와 사용량에 의한 비용정산 2가지 방식을 지원합니다.</p>
                    <h4>다양한 사용자 관리방식을 제공하여 편의성을 제고합니다.</h4>
                    <p>사용자는 관리 콘솔을 통하여 Load Balancer의 사양, Release 등의 기능을 간편하게 구현할 수 있습니다. SLB의 Open API와 SDK 등을 활용하여 SLB 생성, 사양 설정 및 관리 등을 수행할 수 있습니다.</p>
                </div>
            </div>
    </div>
</section>
@endsection
