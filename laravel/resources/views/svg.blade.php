@extends('layouts.master')
@section('title')
NJ글로벌
@endsection


@section('content')

<style>
#mobile { display: none;}



* { padding: 0; margin: 0; border: 0; outline: none; }
body{ position: relative;margin: 0; }
ul, li { padding: 0; margin: 0; border: 0; outline: none; list-style: none;}
a { color: inherit; }
a:hover { color: inherit; text-decoration: none; }
polygon { -webkit-transition-property: fill,opacity; -webkit-transition-duration: 2s;  -ms-transition-property: fill,opacity; -ms-transition-duration: 2s; transition-property: fill,opacity; transition-duration: 2s; opacity:0; }
.container { min-width: 1200px; position: relative; margin: 0 auto;  max-width:none; padding:0; overflow-x: hidden;}
#pc {min-width: 1200px; position: relative; margin: 0 auto;  max-width:none; padding:0; overflow-x: hidden; }
.polyimg { -webkit-transition-property: all; -webkit-transition-duration: 0.1s; -ms-transition-property: all; -ms-transition-duration: 0.1s; transition-property: all; transition-duration: 0.1s; opacity:0; }
polygon, .polyimg {cursor:pointer; }
.main_poly { display: block; margin: 0 auto; width: 700px; height: auto; z-index:3; position: absolute; left: 50%; top: 37%; transform: translate(-50%, -50%); opacity:1; }
#pc_inner_container { margin: 0 auto; min-width:1200px; position: relative; }
.fixed_go_to_main { position: fixed; right: 15%; top: 15%; z-index: 999; border-radius: 1.5vw; width: 3vw; height:3vw; background-color: #7d0000; cursor: pointer; transition: all 0.3s; }
.fixed_go_to_main i { color: #fff; font-size: 1.4vw; display: block; line-height: 2.2; text-align: center; transition: all 0.3s; }
.fixed_go_to_main p { text-align: center; opacity: 0; transition: opacity 0.3s; transition-delay: 0.3s; color: #fff; position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%); width: 100%;  }
.fixed_go_to_main:hover { width: 13vw; border-radius: 0 1.5vw 1.5vw 0; }
.fixed_go_to_main:hover i { opacity: 0; }
.fixed_go_to_main:hover p { opacity: 1; }
.fixed_go_to_main:not(:hover) p { opacity: 0; transition: opacity 0.1s;}

.footer { position: absolute; bottom: 10%; left: 10%; width: 80%; z-index: 9999; }
.footer ul:after { content: ""; display: block; clear: both; }
.footer ul li { float: left; width: calc((100% / 4) - 30.1px); margin: 0 15px; text-align: center;}
.footer ul li a { padding: 10px; position: relative; text-align: center; color: #fff; font-size:13px; font-weight: bold; height: 60px; line-height: 60px; text-align: center; text-transform: uppercase; transition: all 0.3s; overflow: hidden; }
.footer ul li a:hover { color: #fff; text-decoration: none; }
.footer ul li a:before { content: ""; position: absolute; left: 0; top: calc(100% - 2px); width: 0; height: 100%; z-index: 999; border-top: 2px solid #fff; box-sizing: border-box; -webkit-box-sizing: border-box; -ms-box-sizing: border-box; transition: all 0.3s; transform-origin: left; }
.footer ul li a:hover:before { width: 100%; }

.tail { width: 100%; min-width: 1200px; height: 60px; background-color: #2b2b2b; color: #fff; font-size: 11px; font-weight: normal; padding:22px 60px; letter-spacing: 0.1em; }
.tail div { display:inline-block; }
.tail div:first-child { width:50%; }
.tail div:nth-child(2) { width:24%; }
.tail div:nth-child(3) { width:25%; }
.tail div:nth-child(2), .tail div:nth-child(3) { text-align:right; }

#PCE { top: 6%; left: 40%; }
#LEG { top: 40%; left: 4%; }
#MEN { top: 40%; left: 71%; }
.text { opacity: 0; z-index: 99; position: absolute; width: 28vw; }
.text h3 { margin: 0; font-weight: bold; font-size: 0.9vw; margin-bottom: 3px; color: #fff; }
.text p { margin: 0; font-size: 0.8vw; color: #fff; }




#mobile { width: 100%; }
.top_main_logo { width: 40vw; }
.mb_top_bg { width: 100%; height: 36vh; min-height: 240px; background-color: #467ca8; position: absolute; }
.mb_top_bg > div { position: absolute; top: 40%; left: 50%; transform: translate(-50%, -50%); }
.mb_top_bg > div > p { margin: 0 auto; text-align: center; font-size: 2.2vw; color: #fff; font-weight: bold; }
.mb_top_bg > div > p a { color: #fff; }

.the-arrow > .shaft { width: 13vw; transition-delay: 0.2s; top: 4px; background-color: #fff; display: block; margin: 0 auto; height:2px; position: relative; transition: all 0.2s; will-change: transform; }
.the-arrow > .shaft:before { transform: rotate(-40deg); width: 2vw; transition-delay: 0.3s; transition: all 0.5s; transform-origin: bottom right; background-color: #fff; content: ""; display: block; height: 2px; position: absolute; top: 0; right: 0; transition: all 0.2s;}


.mb_bot_content { width: 100%; position: relative; transition: all 1s; }
.mb_bot_content > div { width: calc(100% - 1vw); margin:  0.375vw 0.5vw;  margin-right: 0; }
.mb_bot_content > div:after { content: ""; display: block; clear: both; }
.mb_bot_content > div > div { width: calc(100% / 3 - 0.345vw); float: left; overflow: hidden; position: relative; margin-right: 0.5vw;}
.mb_bot_content > div > div:after { content: ""; display: block; left: 0; top: 0; width: 100%; height: 100%; position: absolute; background-color: rgba(25,25,25,0.4); transition: all 0.3s;}
.mb_bot_content > div > div:hover:after { background-color: rgba(25,25,25,0.6); }
.mb_bot_content > div > div:last-child { margin-right: 0%; }
.mb_bot_content > div > div > .ct_content { height: 100%; width: 100%; }
.mb_bot_content > div > div > .ct_content > span:first-child { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 99; color: #fff; text-align: center; margin: 0 auto; font-size: 2vw; }
.mb_bot_content > div > div img { width: 100%; height: 100%;}
.mb_bot_content .the-arrow > .shaft { width: 4vw; display: inline-block; top: -5px; }
.mb_bot_content .the-arrow > .shaft:before { width: 1vw; }
.go_main { width: 100%; height: 5vh; background-color: rgba(25,25,25,0.65); text-align: center; color: #fff; line-height: 5vh; font-weight: bold; }
.go_main a { display: block;}



.flat-button { position: relative; width: calc(100% - 2.6vw); height: 100px; background: #ffffff; margin: 1.3vw; overflow: hidden; z-index: 1; cursor: pointer; line-height: 15px; text-align: center; color: #c12a2a; font-size: 2em; font-weight: bold; padding: 40px 20px; border: 2px solid #c12a2a; display:none; }



@media screen
and (max-width: 1200px) {
  #mobile, .mb_img_box, .flat-button { display: block; transition: all 1s; -ms-transition: all 1s; }
  #pc { display: none; transition: all 1s; -ms-transition:all 1s; }
  polygon, .polyimg { cursor:default; }
  .container { min-width: auto; width: 100%; overflow: hidden;}
  .mb_bot_content { width: 100%; position: relative; transition: all 1s; -ms-transition:all 1s; }
  .mb_bot_content > div { width: 100%; margin: 0; }
  .mb_bot_content > div:after { content: ""; display: block; clear: both; }
  .mb_bot_content > div > div { width: calc(100% / 3 - 1.73vw); float: left; overflow: hidden; position: relative; margin-left: 1.3vw; margin-right: 0; margin-top: 1.3vw; }
  .mb_bot_content > div > div:after { content: ""; display: block; left: 0; top: 0; width: 100%; height: 100%; position: absolute; background-color: rgba(25,25,25,0.65); transition: all 0.3s; -ms-transition:all 0.3s;}
  .mb_bot_content > div > div:hover:after { background-color: rgba(25,25,25,0.6); }
  .mb_bot_content > div > div > .ct_content { position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 99; color: #fff; text-align: center; margin: 0 auto; font-size: 2vw;  }
  .mb_bot_content > div > div > .ct_content > p { display: none;}
  .mb_bot_content > div > div > .ct_content span:first-child { height: 100%; width: 100%; line-height: 10;}
  .mb_bot_content > div > div img { width: 100%; height: 100%; position: absolute; }
  .go_main { width: 100%; height: 5vh; background-color: rgba(25,25,25,0.65); text-align: center; color: #fff; line-height: 5vh; font-weight: bold; }
  .go_main a { display: block;}
  polygon{opacity:1;}
}

/* 태블릿 가로일 때 */
@media screen 
and (min-device-width: 768px) 
and (max-device-width: 1200px)
and (orientation: landscape) {
  #mobile { display: none; }
  #pc { display: block; }
  .container { width: 100%; min-width: auto; overflow: auto; }
  #pc_inner_container { width: 100%; min-width: auto; }
  .tail { width: 100%; min-width: auto; }
}

/* 테블릿 세로일 때 */
@media only screen
and (min-device-width: 768px)  
and (max-device-width: 1200px)  
and (orientation: portrait) {
  #mobile { display: block; }
  .container { min-width: auto; width: 100%; }
}


</style>




<div id="pc">
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


  
  <div id="pc_inner_container">
    <div class="fixed_go_to_main">
      <span><i class="fa fa-chevron-left"></i></span>
      <p>GO TO MAIN</p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="layer_1" x="0px" y="0px" width="100%" viewBox="0 0 1920 980" enable-background="new 0 0 1920 980" xml:space="preserve">
      <polygon fill="#FF0000" points="-0.031,26.807 -0.031,39.118 951.255,493.09 951.621,982.826 962.704,982.826 961.804,493.074  1919.969,41.047 1919.968,29.567 956.633,484.16 "></polygon>

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
      
      <!-- hatch start -->
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
      <!-- hatch end -->
      
      <polygon class="poly polys" data-name="PCE" fill="#C72A2A" points="783.416,218.941 710.758,366.76 956.563,484.295 1208.43,366.089 1133.93,218.929"></polygon>
      <polygon class="poly polys" data-name="LEG" fill="#D4D4D5" points="707.441,375.171 952.971,491.731 952.745,756.85 783.673,756.85 647.691,496.796"></polygon>
      <polygon class="poly polys" data-name="MEN" fill="#FFFFFF" points="961.657,490.953 961.916,754.978 1136.391,753.428 1272.058,491.639 1211.867,372.895"></polygon>
      
      <image class="polyimg pimg1" data-name="PCE"  xlink:href="{{ asset('/img/PCE.png') }}" x="43.8%" y="32%" width="300" height="100" ></image>
      <image class="polyimg pimg2" data-name="LEG" xlink:href="{{ asset('/img/LEGRAND.png') }}" x="36%" y="55%" width="300" height="100"></image>
      <image class="polyimg pimg3" data-name="MEN" xlink:href="{{ asset('/img/MENNEKES.png') }}" x="48.5%" y="55%" width="300" height="100"></image>
      
      <polygon class="poly" fill="none" stroke="#FFFFFF" stroke-width="4" stroke-miterlimit="10" points="782.871,218.312 646.078,496.787    782.871,758.306 1137.211,755.095 1273.859,491.624 1135.49,218.312  "></polygon>
    </svg>
    
  </div>

</div>

<div id="mobile">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="mb_svg" version="1.1" x="0px" y="0px" width="100%" viewBox="0 0 768 719.936" enable-background="new 0 0 768 719.936" xml:space="preserve">
    <g>
      <polygon fill="#FFFFFF" points="-576.031,-105.189 -576.031,-92.878 375.255,361.094 375.621,719.936 386.704,719.936    385.804,361.078 1343.969,-90.949 1343.968,-102.429 380.633,352.164  "/>
      <clipPath id="m_tops">
        <polygon fill="#CE2528" points="-576.031,-131.818 -576.031,-105.189 380.633,352.164 1343.968,-102.429 1343.968,-131.817  "/>
      </clipPath>
      <clipPath id="m_lefts">
        <polygon fill="#cececf" points="-576.031,-92.878 375.255,361.094 375.621,719.936 -576.031,719.936  "/>
      </clipPath>
      <clipPath id="m_rights">
        <polygon fill="#fff" points="385.867,361.186 1344.031,-90.949 1344.031,720.072 386.768,720.072  "/>
      </clipPath>

      <image clip-path="url(#m_tops)" xlink:href="{{ asset('/img/PCE_bg.png') }}" alt="Image" x="-1%" y="-40%" height="800px" width="800px" class="svg__image"></image>
      <image clip-path="url(#m_lefts)" xlink:href="{{ asset('/img/LEGRAND_bg.jpg') }}" alt="Image" x="-1%" y="-40%" height="1920px" width="1920px" class="svg__image" ></image>
      <image clip-path="url(#m_rights)" xlink:href="{{ asset('/img/MENNEKES_bg.png') }}"  alt="Image" x="45%" y="5%" height="900px" width="900px" class="svg__image" ></image>

      <g>
        <polygon style="opacity:0.9" fill="#C12A2A" points="207.416,86.945 134.758,234.764 380.563,352.299 632.43,234.093 557.93,86.933   "/>
        <polygon style="opacity:0.9" fill="#CECECF" points="131.441,243.175 376.971,359.735 376.745,624.854 207.673,624.854 71.691,364.8   "/>
        <polygon style="opacity:0.9" fill="#fff" points="385.657,358.957 385.916,622.981 560.391,621.432 696.058,359.643 635.867,240.898   "/>
        <polygon fill="none" stroke="#FFFFFF" stroke-width="4" stroke-miterlimit="10" points="206.871,86.315 70.078,364.791     206.871,626.31 561.211,623.099 697.859,359.628 559.49,86.315   "/>
      </g>
    </g>

    <image class="polyimg pimg1" data-name="PCE"  xlink:href="{{ asset('/img/PCE.png') }}" x="34%" y="28%" width="300" height="100" ></image>
    <image class="polyimg pimg2" data-name="LEG" xlink:href="{{ asset('/img/LEGRAND.png') }}" x="16%" y="55%" width="300" height="100"></image>
    <image class="polyimg pimg3" data-name="MEN" xlink:href="{{ asset('/img/MENNEKES.png') }}" x="45.5%" y="55%" width="300" height="100"></image>
  </svg>
</div>


<div class="mb_bot_content">
  <div>
    <div class="mb_img_box">
      <img src="{{ asset('/img/mobile/mb_schuko.jpg') }}" alt="schuko">
      <p class="ct_content">
        <span>SCHUKO</span>
      </p>
    </div>
    <div class="mb_img_box">
      <img src="{{ asset('/img/mobile/mb_camlok.jpg') }}" alt="camlok">
      <p class="ct_content">
        <span>CAMLOK</span>
      </p>
    </div>
    <div class="mb_img_box">
      <img src="{{ asset('/img/mobile/mb_nema.jpg') }}" alt="nema">
      <p class="ct_content">
        <span>NEMA</span>
      </p>
    </div>
  </div>
</div>

<div class='flat-button'>
  GO TO MAIN
</div>

<div class="tail">
  <div>copyrightⓒ2019 NJ-GLOBAL Corporation All Rights Reserved.</div>
  <div>서울시 ㅁㅁ동 ㅁㅁ구 ㅁㅁ빌딩 ㅁㅁㅁ호</div>
  <div>T.032-222-2222 F.032-222-2222</div>
</div>


<script>

function resized() {
  let cli_wid = $(window).innerWidth();
  let svg_height = (cli_wid / 32) * 16.33;
  let fix_wid = (1200 / 32) * 13.94;
  if(cli_wid >= 1200) {
    media_1200_max();
    $("#layer_1").css({
      "width": "100%",
      "height": svg_height + "px"
    });
  } else {
    $(".mb_img_box").css("display","block");
    
    media_1200_min();
    $("#layer_1").css({
      "width": "100%",
      "height": fix_wid + "px"
    });
    
  }
}

function mb_img_box_height() {
  let box = $(".mb_img_box");
  let box_width = box[0].clientWidth;
  let box_height = (box_width / 20) * 13;
  box.css("height", box_height);
}

// function mb_bot_pad_func() {
//   let mb_top = $(".mb_top_bg");
//   let mb_bot = $(".mb_bot_content");
//   let mb_top_height = mb_top[0].clientHeight;
//   let mb_bot_pad_top = mb_top_height - (mb_top_height / 10 * 3);
//   mb_bot.css({
//     "top": mb_bot_pad_top,
//     "paddingBottom": mb_bot_pad_top
//   });
// }

function mobile_resize(){
  let cli_wid = $(window).innerWidth();
  let svg_height = (cli_wid / 2) * 3;
  $("#mb_svg").css({"height":cli_wid*0.92+"px"});
}

$(document).ready(function(){

  setTimeout(function(){
    $(".poly").css("opacity", "0.7");
  }, 500);
  setTimeout(function(){
      $(".polyimg").css("opacity", "0.8");
  }, 1500);
  resized();
  mobile_resize();
  mb_img_box_height();
});


$(window).resize(function(){
  resized();
  mobile_resize();
  mb_img_box_height();
});

function media_1200_min() {
  $("polygon, .polyimg").off("hover");
  $(".polys, .polyimg").off("mouseover");
  $(".polys, .polyimg").off("mouseleave");
}

function media_1200_max() {
  $("polygon, .polyimg").hover(function() {
      $(".polyimg[data-name="+$(this).attr('data-name')+"]").css('opacity', '0.8') ;
  }, function(){
      $(".polyimg[data-name="+$(this).attr('data-name')+"]").css('opacity', '1') ;
  });

  $(".polys, .polyimg").mouseover(function(){
    $(".text[data-name="+$(this).attr('data-name')+"]").css({
      "opacity": "1",
      "transition": "all 0.3s",
      "-ms-transition": "all 0.3s"
    }, 300);
    $(".hatch[data-name="+$(this).attr('data-name')+"]").css({
      "opacity": "0.7",
      "transition": "all 0.3s",
      "-ms-transition": "all 0.3s"
    }, 300);
  });
  $(".polys, .polyimg").mouseleave(function(){
    $(".text[data-name="+$(this).attr('data-name')+"]").css({
      "opacity": "0"
    }, 300);
    $(".hatch[data-name="+$(this).attr('data-name')+"]").css({
      "opacity": "0.3",
      "transition": "all 0.3s",
      "-ms-transition": "all 0.3s"
    }, 300);
  });
}

</script>


@endsection