@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section class="short_descrip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="introduce back-ecs">
                            <h1><i class="product-icons-64 product-icons-ecs"></i>클라우드 서버  ECS </h1>
                            <p>
클라우드 서버（Elastic Compute Service，약 ECS）한 가지 간단한 고효율,강력한 성능의 자유로운 확장이 가능한 서비스로,안정적인 컴퓨팅 자원을 구성하기 도움을 주고, 운영 효율을 높이고 IT 비용을 감소하고,  본 작업을 집중하게 합니다.
                            </p>
                        </div>
                </div>
            </div>
        </div>
</section>
<section class="ali_table">
        <div class="container">
        <h4>물리서버 컴퓨팅과 비교 </h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width:150px"></th>
                    <th>클라우드 서버  ECS</th>
                    <th>물리서버 기반 컴퓨팅</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>안정성</td>
                    <td>
99.95%품질 보장,99.999% 데이터<br>
- 신뢰성신속한 장애복구
- System Redundancy 불필요
                    </td>
                    <td>Hardware 장애 시 서비스 불가<br>
장애를 대비한 System Redundancy 필요 </td>
                </tr>
                <tr>
                    <td>신축성</td>
                    <td>CPU, 메모리, 네트워크를 자신이 원하는 대로             손쉽게 확장 가능</td>
                    <td> 시스템의 물리적 용량 제한,다양한 수요를 만족하지 못 해<br>
용량 확대를 위해서는 H/W 추가, 교체 필요 </td>
                </tr>
                <tr>
                    <td>보안셩</td>
                    <td>보안 장치를 다로 구입해 야하다
많은 서버를 접근 제어 하지 못 하다 </td>
                    <td>DDos, 웜/바이러스 등의 보안 서비스를 무료 제공
많은 서버를 접근 제어 가능하다 </td>
                </tr>
                <tr>
                    <td>비용절감</td>
                    <td>- 월, 시간 요금제를 필요 용량만큼 사용, 경제적
- 초기투자비 및 부대 운영비용 필요없다
</td>
                    <td>임대 비용이 높다, Hardware 구입비 소요
 운영비용 발생,원가이 높다.
</td>
                </tr>
                <tr>
                    <td>Usability</td>
                    <td>애플리케이션을 지원하지 않다
서버 셋팅을 인공 반복 배치하 야돼다 </td>
                    <td>다양한 운영체제 및 애플리케이션을 이미지로 쉽게 배치할 수 있다
한 이미지가 많은 서버 중에서 빠른 백업,확장 </td>
                </tr>
                <tr>
                    <td>확장</td>
                    <td>타 cloud 상품과의 편리하고 효과적인 연동을 지원합니다<br>클라우드 컴퓨팅/소토리지/보안 등 솔루션을 제공합니다</td>
                    <td>같은 사업자에서 완벽한 서비스를 제공하기 불가능
업무 확장성과 지속가능성을 보정하지 못하 </td>
                </tr>
            </tbody>
        </table>
</div>
</section>
<section class="ali_function">
    <div class="container">
            <div class="ali_function_header">
                <h3>주요 특징</h3>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;컴퓨팅</div>
                </div>
                <div class="col-md-11">
                    <h4>다양한 비즈니스 요구 사항을 충족할 수 있는 탄력적이고 안정적인 컴퓨팅 자원을 제공합니다.</h4>
                    <p>사용자의 니즈에 따라 CPU, 메모리, 데이터디스크, 네트워크의 구성을 자유롭게 선택할 수 있습니다. 또한 사업 확장에 따른 업그레이드 진행 시 5분 미만의 다운타임 내에서 CPU와 메모리 업그레이드를 진행할 수 있습니다.
IO 최적화 구성은 높은 IO 성능을 보장하며, 인프라 레벨의 SW와 HW를 업그레이드 합니다. 또한 고성능 SSD 스토리지를 이용하여 최대 20,000 IOPS의 성능을 보장합니다.</p>
                    <h4>중국 뿐만 아니라 미국, 싱가포르, 홍콩 등 글로벌 서비스를 지원합니다.</h4>
                    <p>현재 AliCloud는 중국의 북경, 청도, 항주, 심천, 상하이와 미국 실리콘 밸리, 홍콩, 싱가폴 등 8개 리전을 지원합니다. 조만간 일본, 유럽, 두바이 등 세계 주요 지역에도 데이터센터를 오픈하여 글로벌 서비스 지원 체계를 갖출 예정입니다.
각 리전은 멀티 BGP 백본 네트워크로 연결되어 있으며 최고의 네크워크 성능 및 안정성을 제공합니다. 홍콩과 싱가폴 지역에 글로벌 백본 네트워크를 제공하고 있으며, 홍콩, 동남아, 일본, 한국 등의 지역과 연결되어 있습니다. 미국 실리콘밸리 리전은 미국 내 여러 ISP와 연결되어 북미 전체와 함께 남미와 유럽과의 연동도 지원합니다. </p>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;저장</div>
                </div>
                <div class="col-md-11">
                    <h4>4가지 타입의 스토리지를 제공하여 고객의 다양한 IO 성능 요구를 만족시킵니다.</h4>
                    <p>사용자의 요구 사항에 따라 IO 성능이 다른 4가지 종류의 블록 스토리지를 제공합니다. 각각의 스토리지 구성은 단독으로 사용할 수 있을 뿐만 아니라 조합해서 사용할 수 있습니다. </p>
                    <table class="table table-bordered">
                        <thead>
                                <tr class="active">
                                    <td>디스크 종류</td>
                                    <td>Cloud Disk</td>
                                    <td>Cloud SSD(추천)</td>
                                    <td>Local SSD(제한적)</td>
                                    <td>Local Disk(제한적)</td>
                                </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>단일 블럭 최대 용량</td>
                                    <td>2,000GB</td>
                                    <td>2,048GB</td>
                                    <td>2,048GB</td>
                                    <td>800GB</td>
                                </tr>
                                <tr>
                                    <td>최대 IOPS</td>
                                    <td>1,000</td>
                                    <td>20,000</td>
                                    <td>3,000</td>
                                    <td>8,000 ~ 12,000</td>
                                </tr>
                                <tr>
                                    <td>최대 처리량</td>
                                    <td>20 ~ 40MBps</td>
                                    <td>256MBps</td>
                                    <td>80MBps</td>
                                    <td>250 ~ 300MBps</td>
                                </tr>
                                <tr>
                                    <td>단일 블럭 최대 용량</td>
                                    <td>2,000GB</td>
                                    <td>2,048GB</td>
                                    <td>2,048GB</td>
                                    <td>800GB</td>
                                </tr>
                        </tbody>
                    </table>
                    <span>* 지역별로 자원 현황에 따라 종류는 제한될 수 있습니다.</span>
                    <h4>자동화된 사용자 정의 백업</h4>
                    <p>사용자는 콘솔에서 자동 스냅샷 주기를 설정하여 ECS의 디스크 스냅샷을 생성하거나 콘솔이나 Open API를 통해 수동으로 스냅샵을 생성할 수 있습니다. 시스템 및 데이터의 이상 발생 시에 스냅샵의 복구를 통해 빠른 속도로 이전 상태로 복구할 수 있습니다. 최대 디스크 수량 x 6 +6개의 스냅샵을 생성할 수 있습니다. 예를 들어 디스크가 6개인 경우 42개(= 6 x 6 +6)의 스냅샵을 생성할 수 있습니다.</p>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;관리</div>
                </div>
                <div class="col-md-11">
                    <h4>다양한 서비스 관리 지원</h4>
                    <p>사용자는 클라우드 서버에 대해 실제 서버를 다루는 것처럼 다양한 관리 작업을 수행할 수 있습니다. 콘솔, Open API 및 Command line(CLI) 등 다양한 방식으로 서버 리부팅, 로그인, 암호변경, 네트워크 구성 변경 등을 할 수 있습니다.</p>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;네트워크</div>
                </div>
                <div class="col-md-11">
                    <p>서로 다른 연결 시나리오에 사용할 수 있는 <strong>Public </strong>및 <strong>Private IP</strong>를 제공합니다.</p>
                    <ul>
                        <li><strong>Public IP</strong> : 인스턴스 구매 시 0M 이상의 bandwidth를 선택할 경우 Public IP를 제공합니다.</li>
                        <li><strong>Private IP </strong>:ECS 인스턴스 간의 내부 통신 용도로 사용되며, Alicloud와 외부 서비스간의 연동에도 사용할 수 있습니다. SLB, OSS, RDS 등에 사용되며, 동일 리전 내에서는 무료로 제공됩니다.</li>
                    </ul>
                    <p><strong>Private Network </strong>및 <strong>Classic Network </strong>등 다양한 네트워크 구성을 지원합니다.</p>
                    <ul>
                        <li><strong>Classic Network </strong>: IP Address는 Alicloud에서 관리하며 간단하고 편리하게 사용할 수 있습니다. 사용자는 보안 그룹 설정을 통해 단일 또는 복수의 클라우드 서버 네트워크 접근 통제를 통하여 보안 수준을 설정할 수 있습니다.</li>
                        <li><strong>Private Network </strong>: 사용자 별로 격리된 네트워크 환경을 구성하며, 구성된 네트워크에 대한 모든 권한 및 보안 그룹 설정을 활용하여 접근 통제를 할 수 있습니다. IP 주소 범위, 서브넷, 게이트웨이 등을 사용자 필요에 따라 지정할 수 있습니다. 또한 전용선, VPN 등의 연결방식을 통해서 VPC를 기존의 데이터센터와 연동하여 운영할 수 있습니다.</li>
                    </ul>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;보안</div>
                </div>
                <div class="col-md-11">
                    <p>클라우드 실드, 네트워크 보안 등 기본적인 보안 기능을 무료로 제공합니다.</p>
                    <ul>
                        <li><strong>DDoS 방어 </strong>: 최대 5 GB의 무료 DDoS 방어를 제공합니다. 예를 들어 SYN flood, UDP flood, ICMP flood, ACK flood 등 일반적인 DDoS 공격을 방어할 수 있습니다.</li>
                        <li>서버 보안 : Anti Password Cracking, 트로이 목마 제거, 중복 로그인에 대한 알림, 보완 취약점 제거 등의 기능이 제공됩니다. 더 높은 수준의 보안이 필요할 경우 추가적인서비스를 통해 DDoS 방어, Server Security, Network Security 등의 서비스를 이용할 수 있습니다.</li>
                    </ul>
                    <p>클라우드 모니터링과 실시간 조기 경보 등도 무료로 제공됩니다.</p>
                    <ul>
                        <li>사이트 모니터링 : HTTP, Ping, DNS, TCP, UDP, SMTP, POP, FTP 등의 서비스에 대해 가용성과 응답 시간 측면에서 모니터링 및 알람 서비스를 제공합니다.</li>
                        <li>클라우드 모니터링 : 클라우드 서버에 대한 모니터링 서비스를 제공하며, 사용자 정의 모니터링 서비스도 사용할 수 있습니다.</li>
                        <li>알람 및 연락처 관리 : 알람 및 연락처에 대한 통합적인 관리 서비스(이메일, SMS 등)를 제공합니다.</li>
                    </ul>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;미러링</div>
                </div>
                <div class="col-md-11">
                    <h4>편리한 미러링 기능으로 신속한 시스템 복제를 지원합니다.</h4>
                    <p>미러링을 통해 빠른 시간 내에 인스턴스를 생성하고 배포할 수 있습니다.</p>
                    <ul>
                        <li><strong>Public Mirror</strong> : Alicloud에서 공식적으로 제공하는 공공 이미지입니다. 예를 들어 window, Linux 운영 체제의 여러 배포 버전을 제공합니다.</li>
                        <li><strong>User Defined Mirror </strong>: 필요에 따라 사용자 정의 미러를 다른 사용자와 공유할 수 있습니다. 공유를 받은 사용자는 공유된 미러로 ECS 인스턴스를 생성하고 시스템 디스크를 변경할 수 있습니다.</li>
                    </ul>
                </div>
            </div>


    </div>
</section>
@endsection
