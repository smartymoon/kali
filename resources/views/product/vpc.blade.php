@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section class="short_descrip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="introduce back-vpc">
                            <h1><i class="product-icons-64 product-icons-vpc"></i> AliCloud VPC</h1>
                            <p>AliCloud VPC (Virtual Private Cloud)는 AliCloud의 솔루션을 기반으로 제공되는 독립된 네트워크 환경을 의미합니다. 사용자는 IP 주소 범위, 서브넷, 라우팅 리스트 및 게이트웨이를 설정할 수 있고 이를 통해 자신만의 가상 환경을 구축할 수 있습니다. 사용자는 VPN과 전용 네트워크를 통한 전통적인 DB와 VPC 연결을 통해 맞춤형 네트워크 환경을 구성할 수 있으며 이를 통해 손쉽게 클라우드 환경으로 옮겨갈 수 있습니다.</p>
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
                    <span>Isolation Security</span>
                    <img src="https://www.cloudlink.co.kr/images/front/content/vpc_merit01.png"/>
                    <p>터널링 기술을 통해 VLAN 분리 효과를 가져옵니다. 인스턴스 NIC에서 브로드캐스트 도메인이 격리됩니다.</p>
                </div>
                <div class="col-md-3">
                    <span>접근 통제</span>
                    <img src="https://www.cloudlink.co.kr/images/front/content/vpc_merit02.png"/>
                    <p>유연한 접근 통제 규칙을 제공하며, 정부 및 금융 기관 사용자의 보안 규정을 준수합니다.</p>
                </div>
                <div class="col-md-3">
                    <span>소프트웨어 정의 네트워크 (SDN)</span>
                    <img src="https://www.cloudlink.co.kr/images/front/content/vpc_merit03.png"/>
                    <p>맞춤형 네트워크 설정 및 SDN 실시간 관리 운영이 가능합니다.</p>
                </div>
                <div class="col-md-3">
                    <span>다중 접속</span>
                    <img src="https://www.cloudlink.co.kr/images/front/content/vpc_merit04.png"/>
                    <p>VPN 소프트웨어 지원, DDN(전용선) 연결을 지원합니다.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="ali_function_header">
               <h3>상품 특징</h3>
            </div>
            <h3 style="text-align:center">A secure access-controlled software defined network</h3>
            <p style="text-align:center">AliCloud VPC는 멀티 테넌트 및 논리적으로 격리된 Private Cloud를 통해 안전한 데이터 전송을 구현합니다.</p>
            <div class="row">
                <div class="col-md-3">
                    <h3>VLAN</h3>
                    <p>AliCloud VPC의 Private IP 주소 범위는 하나 또는 다수의 VSwitch로 분할 가능하여, 애플리케이션과 기타 서비스가 필요한 수준 만큼 사용할 수 있습니다.</p>
                </div>
                <div class="col-md-3">
                    <h3>사용자 정의 라우팅 규칙</h3>
                    <p>가상 라우터의 라우팅 규칙과 트래픽의 재전송 경로 등에 대한 사용자 맞춤형 관리가 가능하여 비즈니스 요구에 따른 최적의 방안을 정할 수 있습니다.</p>
                </div>
                <div class="col-md-3">
                    <h3>Security Group</h3>
                    <p>Security Group의 설정으로, AliCloud VPC 인스턴스는 서로 다른 보안 영역으로 구분할 수 있으며, 각각에 대한 접근 통제 규칙도 정할 수 있습니다.</p>
                </div>
                <div class="col-md-3">
                    <h3>전용선/VPN</h3>
                    <p>VPC는 전용선과 VPN 연결을 지원하며, 이러한 것들은 VPC와 다른 물리적인 네트워크가 가상의 하이브리드 네트워크를 구성하는 것을 가능케 합니다.</p>
                </div>
                <div class="col-md-3">
                    <h3>Elastic Public IP</h3>
                    <p>Elastic Public IP(EIP)는 같은 리전 또는 리전별 존재하는 VPC 인스턴스에 대해서 바인딩과 언바인딩을 실시간으로 할 수 있다.</p>
                </div>
            </div>
        </div>
</section>
@endsection
