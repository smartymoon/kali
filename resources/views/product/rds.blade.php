@extends('layouts.master')
@section('title', 'Page Title')

@section('content')
<section class="short_descrip">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="introduce back-rds">
                            <h1><i class="product-icons-64 product-icons-rds"></i> RDS</h1>
                            <p>
                                RDS(Relational Database Service)는 안정적이며, 신뢰할 수 있는 클라우드 관계형 데이터 베이스 서비스입니다. AliCloud의 분산시스템과 고성능 스토리지를 기반으로 MySQL, SQL Server, PostgreSQL 및 PPAS Engine을 지원합니다. 또한 재해 복구, 백업, 복구, 모니터링, 마이그레이션을 이행하기 위한 해결방안을 제공하며, DBMS 시스템 운영 및 유지를 위한 고민을 해결할 수 있습니다.
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
        <h4>AliCloud의 RDS는 네 개의 데이터베이스 엔진을 지원합니다(PostgreSQL, PPAS 는 준비 중).</h4>
        <br>
        <br>
        <div class="col-md-3">
            <img src="https://img.alicdn.com/tps/TB1DhFdKpXXXXcOXXXXXXXXXXXX-350-160.png" alt="" width="175">
        </div>
        <div class="col-md-3">
            <img src="https://img.alicdn.com/tps/TB1LrA3KXXXXXXdXFXXXXXXXXXX-350-160.png" alt="" width="175">
        </div>
        <div class="col-md-3">
            <img src="https://img.alicdn.com/tps/TB1fmpXKpXXXXalXpXXXXXXXXXX-350-160.png" alt="" width="175">
        </div>
        <div class="col-md-3">
            <img src="https://img.alicdn.com/tps/TB1YpZ8KXXXXXbJXpXXXXXXXXXX-350-160.png" alt="" width="175">
        </div>
        </div>
        <div class="container" style="margin-top:30px">
        <h4>자체 내장 데이터베이스와 비교했을 때보다 더 많은 자동화된 서비스를 제공합니다.</h4>
        <br><br>
        <table class="table table-bordered">
                <tr>
                    <td style="padding:28px;vertical-align: middle;"><img src="https://img.alicdn.com/tps/TB1QMVOKXXXXXbwXFXXXXXXXXXX-32-32.png" width="18" height="18" style=""> 신뢰성</td>
                    <td style="padding-top:20px">
                        <ul>
                            <li>99.9999% 데이터 신뢰성 보장</li>
                            <li>자동 백업 및 최대 7일 동안 원하는 시점으로 데이터를 복구 가능</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td style="padding:28px;vertical-align: middle;"><img src="https://img.alicdn.com/tps/TB1oGFWKXXXXXbxXpXXXXXXXXXX-32-32.png" width="18" height="18" style=""> 보안</td>
                    <td style="padding-top:20px">
                        <ul>
                            <li>MySQL, PostgreSQL, PPAS Engine 등의 오픈 데이터베이스 원본 유지 및 보호 가능</li>
                            <li>Security Hole 발생 시 실시간 감지, 수정 및 복구 가능</li>
                            <li>DDoS, IP Allow, SQL Injection, Password-cracker 방어 기능 제공</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td style="padding:28px;vertical-align: middle;"><img src="https://img.alicdn.com/tps/TB1bGuyKXXXXXc6XFXXXXXXXXXX-32-32.png" width="18" height="18" style=""> 가용성</td>
                    <td style="padding-top:20px">
                        <ul>
                            <li>RDS는 고가용성을 위해 분산구조를 지원하며, 재해복구를 대비하여 멀티리전(Multi-Region) 지원함</li>
                            <li>원격지 재해복구 RDS 생성 가능</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td style="padding:28px;vertical-align: middle;"><img src="https://img.alicdn.com/tps/TB1jz0_KXXXXXX8XXXXXXXXXXXX-32-32.png" width="18" height="18" style=""> 경제성</td>
                    <td style="padding-top:20px">
                        <ul>
                            <li>자원 임계치 경보 및 성능 진단 등을 통해서 운영의 편의성과 리포팅 기능을 제공</li>
                            <li>물리적인 장비 및 데이터베이스 인프라 구축/유지 보수 등이 불필요</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td style="padding:28px;vertical-align: middle;"><img src="https://img.alicdn.com/tps/TB1dOXJKXXXXXXvXVXXXXXXXXXX-32-32.png" width="18" height="18" style=""> 확장성</td>
                    <td style="padding-top:20px">
                        <ul>
                            <li>RDS의 확장 및 성능업그레이드가 탄력적으로 가능함으로 효율적인 자원 사용 가능</li>
                            <li>Read/Write 를 분리하여 구성할 수 있으며, MDS(Multidimensional Scaling)을 구현 할 수 있음</li>
                        </ul>
                    </td>
                </tr>
        </table>
        <div class="container" style="padding-left:0px;height: 33px;margin-top: 30px;margin-bottom: 50px;border-bottom: solid 1px #ddd;">
            <h1 style="font-size: 24px;background-color: #fff;display: inline-block;padding-right: 10px;">상품 특징</h1>
        </div>
        <div class="container">
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;보안</div>
                </div>
                <div class="col-md-11">
                    <h4>3단계의 보안체계, 90% 이상의 네트워크 공격을 방어할 수 있습니다.</h4>
                    <ul>
                        <li><b>DDoS방어</b> : 실시간 네트워크 모니터링으로 대량의 네트워크 공격을 감지하고, 공격대상 IP를 필터링하고, 고객 서비스 보호를 위해 공격하는 IP를 Black Hole로 연결함</li>
                        <li><b>IP Allow list</b> : RDS로 연결이 허용되는 IP 주소는 최대 1,000 개로 제한</li>
                        <li><b>데이터베이스 공격방어</b> : SQL Injection, Password-Cracker 등 다양한 공격으로부터 RDS를 방어하며, SQL 감시 기능으로 필요 시점의 연결기록과 작업내용을 확인할 수 있음</li>
                    </ul>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;확장성</div>
                </div>
                <div class="col-md-11">
                    <br><br>
                    <h4>스케일링(Scale Up/Down)을 통해 100% 자원활용을 실현합니다.</h4>
                    <ul>
                        <li>업그레이드가 필요한 자원의 메모리와 디스크 공간을 필요에 따라 Scale-up 할 수 있음(디스크 당 최대 20,000 IOPS, 2TB 지원)</li>
                        <li>RDS for MySQL 은 Read-Only 마운트와 Search 기능을 확장할 수 있으며, 독립적인 Read-Only Link Address가 존재함</li>
                    </ul>
                    <br><br>
                </div>
            </div>
            <div class="row ali_function_body">
                <div class="col-md-1">
                    <div class="verticle-mode">&nbsp;편의성</div>
                </div>
                <div class="col-md-11">
                    <h4>Auto Backup 을 통한 장애복구</h4>
                    <ul>
                        <li><b>Auto Backup</b> : 7일 이내 2단계 데이터 복구, 90% 이상의 장애 상황 해결</li>
                        <li>Auto Backup은 Daily Backup을 통해 OSS에 저장되며, 장애 복구 능력을 향상 시키고 백업으로 인한 디스크 공간을 절약함. DB화일과 로그화일의 백업을 통해 7일 이내의 시점으로 데이터 복구가 가능함으로 Human Error등의 데이터 유실에 대해 유연하게 대처할 수 있음</li>
                    </ul>
                    <h4>자동 모니터링, 경보, 성능 감지 등으로 DB운영업무 60% 이상 절감효과가 발생합니다.</h4>
                    <ul>
                        <li>CPU/IOPS/Connection/Disk Space 등의 정보 제공과 실시간 모니터링 및 경보를 제공</li>
                        <li>자동 모니터링 시스템은 정기적 점검으로 RDS의 최적화 보고서를 제공</li>
                    </ul>
                </div>
            </div>
        </div>
</div>
</section>
@endsection
