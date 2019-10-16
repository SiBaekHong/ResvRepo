@extends('layouts.master')
@section('title')
소프트문
@endsection


@section('content')

<style>
* {
  padding: 0;
  margin: 0;
  border: 0;
  outline: none;
}

.container {
  min-width: 1200px;
  position: relative;
  margin: 0 auto; 
  max-width:none;
  padding:0;
}

body{
    position: relative;
    margin: 0;
}

ul, li {
    padding: 0;
    margin: 0;
    border: 0;
    outline: none;
}
polygon {
    -webkit-transition-property: fill,opacity;
    -webkit-transition-duration: 2s; 
    
    -ms-transition-property: fill,opacity;
    -ms-transition-duration: 2s;
    
    transition-property: fill,opacity;
    transition-duration: 2s;

    opacity:0;
}

.polyimg{

    -webkit-transition-property: all;
    -webkit-transition-duration: 0.1s; 
    
    -ms-transition-property: all;
    -ms-transition-duration: 0.1s;
    
    transition-property: all;
    transition-duration: 0.1s;

    opacity:0;

}

polygon, .polyimg{

    /* cursor:pointer; */
}

.main_poly {
    
    display: block;
    margin: 0 auto;
    width: 700px;
    height: auto;
    z-index:3;
    position: absolute;
    left: 50%;
    top: 37%;
    transform: translate(-50%, -50%);
    opacity:1;
}

.polyimg {
    opacity:0;
}

.footer {
    position: absolute;
    bottom: 10%;
    left: 10%;
    width: 80%;
    z-index: 9999;
}

ul, li {
  list-style: none;
}
a {
  text-decoration: none;
  color: #000;
}

ul:after {
  content: "";
  display: block;
  clear: both;
}

ul li {
  float: left;
  width: calc((100% / 4) - 30.1px);
  margin: 0 15px;
  text-align: center;
}
a:hover {
  text-decoreation: none;
}

ul li a {
  padding: 10px;
  position: relative;
  text-align: center;
  color: #fff;
  font-size:13px;
  font-weight: bold;
  height: 60px;
  line-height: 60px;
  text-align: center;
  text-transform: uppercase;
  transition: all 0.3s;
  overflow: hidden;
}
ul li a:hover {
  color: #fff;
  text-decoration: none;
}

ul li a:before {
  content: "";
  position: absolute;
  left: 0;
  top: calc(100% - 2px);
  width: 0;
  height: 100%;
  z-index: 999;
  border-top: 2px solid #fff;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -ms-box-sizing: border-box;
  transition: all 0.3s;
  transform-origin: left;
}

ul li a:hover:before {
  width: 100%;
  /* left: 100%; */
}

.tail {
    width: 100%;
    height: 60px;
    background-color: #2b2b2b;
    color: #fff;
    font-size: 11px;
    font-weight: normal;
    padding:22px 60px;
    letter-spacing: 0.1em;
}

.tail div {
  display:inline-block;
}
.tail div:first-child {

  width:50%;
}
.tail div:nth-child(2) {

  width:24%;
}
.tail div:nth-child(3) {

width:25%;
}

.tail div:nth-child(2), .tail div:nth-child(3) {
  text-align:right;
}

.text_wrap {
  position:relative;
  min-width: 1200px;
  width: 100%;
}

#PCE {
  top: 6%;
  left: 41%;
}
#LEG {
  top: 40%;
  left: 7%;
}
#MEN {
  top: 40%;
  left: 72%;
}
.text {
  opacity: 0;
  z-index: 9999;
  position: absolute;
  width: 400px;
}
.text h3 {
  margin: 0;
  font-weight: bold;
  font-size: 0.85vw;
  margin-bottom: 3px;
  color: #fff;
}
.text p {
  margin: 0;
  font-size: 0.7vw;
  color: #fff;
}
</style>



  <div class="text" data-name="PCE" id="PCE">
    <h3>ABOUT PCE</h3>
    <p>PCE - CEE 산업 도자 및 대리점의 제조업체</p>
    <p>고객 효율성, 슬림 조직 형태 및 혁신 성향</p>
    <p>개인 고객이 원하는 유연한 생산 공정은 빠른 응답을 허용</p>
  </div>
  <div class="text" data-name="LEG" id="LEG">
    <h3>ABOUT LEGRAND</h3>
    <p>Legrand는 전기 및 디지털 건물인프라의 글로벌 전문가입니다.</p>
    <p>그룹은 설치 구성 요소 및 사용자 인터페이스에서 빌딩 시스템에</p>
    <p>이르기까지 다음을 제공합니다. 우리는 상업용, 주거용 및 산업용</p>
    <p>건물에 고 부가가치 제품 및 솔루션을 제공합니다.</p>
    <p>매일 37,000 명이 넘는 헌신적인 직원들이 연결된 건물을</p>
    <p>개발하고 전세계 수백만 사용자가 전기에 지속적으로</p>
    <p>액세스 할 수 있도록 돕고 있습니다.</p>
  </div>
  <div class="text" data-name="MEN" id="MEN">
    <h3>ABOUT MENNEKES</h3>
    <p>Kirchhundem (Sauerland)에서 1935 년에 설립 된</p>
    <p>MENNEKES는 현재까지 급속하게 진행되는 전기의 유입을</p>
    <p>모든 산업 분야에 적극적으로 수반하여 산업 플러그 및</p>
    <p>소켓용 제품 및 솔루션에 업계에 영향을 미치고 있습니다.</p>
    <p>독일뿐 아니라 1,100의 인력으로, 오늘날 가족 소유 회사는</p>
    <p>국제적인 입지를 가지고 있으며 전기 산업 분야의 선도적인</p>
    <p>공급 업체 중 하나입니다. 산업용 플러그 및 소켓 및</p>
    <p>전기 이동성을 위한 멘 네크 제품은 90개국 이상에서</p>
    <p>사용되고 있습니다. 고전류가 안전하고 경제적으로</p>
    <p>전송되어야하는 곳에서는 고객과 파트너가 언제나</p>
    <p>MENNEKES에 의지 할 수 있습니다.</p>
  </div>




<div style="margin: 0 auto; min-width:1200px; position: relative;">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="layer_1" x="0px" y="0px" width="100%" viewBox="0 0 1920 980" enable-background="new 0 0 1920 980" xml:space="preserve">
    <polygon fill="#FFFFFF" points="-0.031,26.807 -0.031,39.118 951.255,493.09 951.621,982.826 962.704,982.826 961.804,493.074  1919.969,41.047 1919.968,29.567 956.633,484.16 "></polygon>

    <clipPath id="tops">
      <polygon fill="#D42528" points="-0.031,0.178 -0.031,26.807 956.633,484.16 1919.968,29.567 1919.968,0.179 "></polygon>
    </clipPath>
    <clipPath id="lefts">
      <polygon fill="#272727" points="-0.031,39.118 951.255,493.09 951.621,982.797 -0.031,982.797 "></polygon>
    </clipPath>
    <clipPath id="rights">
      <polygon fill="#272727" points="961.867,493.182 1920.031,41.047 1920.032,982.934 962.768,982.934 "></polygon>
    </clipPath>

    <image clip-path="url(#tops)" xlink:href="{{ asset('/img/PCE_bg.png') }}" alt="Image" x="0" y="-80%" height="1920px" width="1920px" class="svg__image"></image>
    <image clip-path="url(#lefts)" xlink:href="{{ asset('/img/LEGRAND_bg.jpg') }}" alt="Image" x="0" y="-40%" height="1920px" width="1920px" class="svg__image" ></image>
    <image clip-path="url(#rights)" xlink:href="{{ asset('/img/MENNEKES_bg.png') }}"  alt="Image" x="50%" y="-50%" height="1920px" width="1920px" class="svg__image" ></image>
    


    
    <clipPath id="topss">
      <polygon class="poly" opacity="0.1" points="-0.031,0.178 -0.031,26.807 956.633,484.16 1919.968,29.567 1919.968,0.179 "></polygon>
    </clipPath>

    <clipPath id="leftss">
      <polygon class="poly" opacity="0.1" points="-0.031,39.118 951.255,493.09 951.621,982.797 -0.031,982.797 "></polygon>
    </clipPath>
    <clipPath id="rightss">
      <polygon class="poly" opacity="0.1" points="961.867,493.182 1920.031,41.047 1920.032,982.934 962.768,982.934 "></polygon>
    </clipPath>

    <image class="hatch" data-name="PCE" clip-path="url(#topss)" xlink:href="{{ asset('/img/PCE_hatch_bg.png') }}" alt="Image" x="0" y="-80%" height="1920px" width="1920px" class="svg__image" opacity="0.3"></image>
    <image class="hatch" data-name="LEG" clip-path="url(#leftss)" xlink:href="{{ asset('/img/LEGRAND_hatch_bg.png') }}" alt="Image" x="0" y="-40%" height="1920px" width="1920px" class="svg__image" opacity="0.3"></image>
    <image class="hatch" data-name="MEN" clip-path="url(#rightss)" xlink:href="{{ asset('/img/MENNEKES_hatch_bg.png') }}"  alt="Image" x="50%" y="-50%" height="1920px" width="1920px" class="svg__image" opacity="0.3"></image>

    <polygon class="poly polys" data-name="PCE" fill="#C72A2A" points="783.416,218.941 710.758,366.76 956.563,484.295 1208.43,366.089 1133.93,218.929"></polygon>
    <polygon class="poly polys" data-name="LEG" fill="#D4D4D5" points="707.441,375.171 952.971,491.731 952.745,756.85 783.673,756.85 647.691,496.796"></polygon>
    <polygon class="poly polys" data-name="MEN" fill="#FFFFFF" points="961.657,490.953 961.916,754.978 1136.391,753.428 1272.058,491.639 1211.867,372.895"></polygon>
    


    <image class="polyimg pimg1" data-name="PCE"  xlink:href="{{ asset('/img/PCE.png') }}" x="43.8%" y="32%" width="300" height="100" ></image>
    <image class="polyimg pimg2" data-name="LEG" xlink:href="{{ asset('/img/LEGRAND.png') }}" x="36%" y="55%" width="300" height="100"></image>
    <image class="polyimg pimg3" data-name="MEN" xlink:href="{{ asset('/img/MENNEKES.png') }}" x="48.5%" y="55%" width="300" height="100"></image>
    
    <polygon class="poly" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-miterlimit="10" points="782.871,218.312 646.078,496.787    782.871,758.306 1137.211,755.095 1273.859,491.624 1135.49,218.312  "></polygon>
  </svg>
  <div class="footer">
    <nav>
      <ul>
        <li><a href="#schuko"><span></span>SCHUKO</a></li>
        <li><a href="#nema"><span></span>NEMA</a></li>
        <li><a href="#camlok"><span></span>CAMLOK</a></li>
        <li><a href="#gotomain"><span></span>GO TO MAIN</a></li>
      </ul>
    </nav>
  </div>
</div>
<div class="tail">

  <div>copyrightⓒ2019 NJ-GLOBAL Corporation All Rights Reserved.</div>
  <div>서울시 ㅁㅁ동 ㅁㅁ구 ㅁㅁ빌딩 ㅁㅁㅁ호</div>
  <div>T.032-222-2222 F.032-222-2222</div>

</div>




<script>


$(document).ready(function(){

  // setTimeout(function(){
  //   $(".polys").css("opacity", "0.1");
  // }, 500);

  setTimeout(function(){
    $(".poly").css("opacity", "0.7");
  }, 500);
  setTimeout(function(){
      $(".polyimg").css("opacity", "0.8");
  }, 1500);






  let cli_wid = $(window).innerWidth();
  let svg_height = (cli_wid / 32) * 16.33;
  let fix_wid = (1200 / 32) * 16.33;
  if(cli_wid >= 1200) {
    $("#layer_1").css({
      "width": "100%",
      "height": svg_height + "px"
    });
  } else {
    $("#layer_1").css({
      "width": "1200px",
      "height": fix_wid + "px"
    });
  }

});


$(window).resize(function(){
  let cli_wid = $(window).innerWidth();
  let svg_height = (cli_wid / 32) * 16.33;
  let fix_wid = (1200 / 32) * 16.33;
  if(cli_wid >= 1200) {
    $("#layer_1").css({
      "width": "100%",
      "height": svg_height + "px"
    });
  } else {
    $("#layer_1").css({
      "width": "1200px",
      "height": fix_wid + "px"
    });
  }
});


$("polygon, .polyimg").hover(function() {
    $(".polyimg[data-name="+$(this).attr('data-name')+"]").css('opacity', '0.8') ;
    // $("#"+$(this).attr('data-name')).animate({
    //   "opacity": "1"
    // }, 500);
}, function(){
    $(".polyimg[data-name="+$(this).attr('data-name')+"]").css('opacity', '1') ;
    // $("#"+$(this).attr('data-name')).animate({
    //   "opacity": "0"
    // }, 500);
});

$(".polys, .polyimg").mouseover(function(){
  console.log($("#"+$(this).attr('data-name')));
  $(".text[data-name="+$(this).attr('data-name')+"]").css({
    "opacity": "1",
    "transition": "all 0.3s"
  }, 300);
  $(".hatch[data-name="+$(this).attr('data-name')+"]").css({
    "opacity": "0.7",
    "transition": "all 0.3s"
  }, 300);
});
$(".polys, .polyimg").mouseleave(function(){
  $(".text[data-name="+$(this).attr('data-name')+"]").css({
    "opacity": "0"
  }, 300);
  $(".hatch[data-name="+$(this).attr('data-name')+"]").css({
    "opacity": "0.3",
    "transition": "all 0.3s"
  }, 300);
});

</script>


@endsection


