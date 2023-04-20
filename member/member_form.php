<?php 
	session_start();

    include "../lib/dbconn.php";
    
    $page =$_GET['page'];
    $mode =$_GET['mode'];
    $table="member";
    $num=$_GET['num'];

if($mode=="modify"){
    $sql="select * from $table where num=$num";
    $result =mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);
    
        $item_num =  $row['num'];

}

?>
<!DOCTYPE html>
<html lang="Ko">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-1BG698FW5Y"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-1BG698FW5Y');
        </script>
        <meta charset="UTF-8" http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta property="og:url" content="http://www.ahn0.com">
        <meta property="og:title" content="AHN0">
        <meta property="og:type" content="website">
        <meta property="og:image" content="../start_img.png">
        <meta property="og:description" content="UI/UX designer">
        <meta name="description" content="AHN0">
        <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
        <link rel="manifest" href="../favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <title>Sign Up｜Ahn0</title>
        <link rel="stylesheet" href="../css/common.css" type="text/css">
        <link rel="stylesheet" href="../css/common_sub.css" type="text/css">
        <link rel="stylesheet" href="../css/sub_page.css" type="text/css">
        <link rel="stylesheet" href="../css/font.css" type="text/css">

        <link rel="shortcut icon" href="ahn0.dothome.co.kr/favicon.ico" type="image/x-icon" />
        <link rel="icon" href="ahn0.dothome.co.kr/favicon.ico" type="image/x-icon" />
    </head>
    <body>        
        <div id="wrap">
            <?
                include("../php/header.php");
            ?>
            <div id="member_container">
                <div id="content">
                    <div class="member_title">
                        <div class="h3">
                            <p>
                                <span>MEMBER JOIN</span>
                            </p>
                        </div>
                        <div class="text_area">
                            <p>
                                <span>
                                    지금 가입하고 AHN0 만의 혜택을 누려보세요!
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="content_area">
                        <div class="content_main">
                            <!--컨텐츠 시작-->
                            <div class="content">
                                <form name="member_form" method="post" action="insert.php">
                                    <div id="form_join">
                                        <div id="form_area">
                                            <ul>
                                                <li class="id_form">
                                                    <label for="id" class="h5">아이디<em>*</em></label>
                                                    <input type="text" name="id" id="id" title="아이디입력" placeholder="아이디입력" minlength="4" maxlength="20" onblur="en_check()">
                                                    <div class="check_text display_4"><span class="console"></span></div>
                                                </li>
                                                <li class="pass_form">
                                                    <label for="pass" class="h5">비밀번호<em>*</em></label>
                                                    <input type="password" name="pass" id="pass" title="비밀번호입력" placeholder="비밀번호(8~32자리)" maxlength="20" minlength="8" onblur="pw_check()">
                                                    <div class="check_pw"></div>
                                                </li>
                                                <li class="pass_chkform">
                                                    <label for="pass_confirm" class="h5">비밀번호 확인<em>*</em></label>
                                                    <input type="password" name="pass_confirm" id="pass_confirm" title="비밀번호 재입력" placeholder="비밀번호를 재입력" onblur="pwchk_check()">
                                                    <div class="check_pwchk"></div>
                                                </li>
                                                <li class="name_form">
                                                    <label for="name" class="h5">이름<em>*</em></label>
                                                    <input type="text" name="name" id="name" title="이름입력" placeholder="이름을 입력해주세요." onblur="name_check()">
                                                    <div class="check_name"></div>
                                                </li>
                                                <li class="hp_form">
                                                    <label for="hp" class="h5">휴대폰 번호<em>*</em></label>
                                                    <input type="text" name="hp" placeholder="전화번호 입력" title="연락처입력" onblur="hp_check()">
                                                    <div class="check_hp"></div>
                                                </li>
                                                <li class="email_form">
                                                    <label for="email" class="h5">이메일<em>*</em></label>
                                                    <input type="text" id="email" name="email" placeholder="@형식의 이메일을 작성해주세요" onblur="email_check()">
                                                    <div class="check_email"></div>
                                                </li>
                                            </ul>
                                            <div class="agree">
                                                <p class="h5">
                                                    <span>
                                                        이용약관
                                                    </span>
                                                </p>
                                                <div class="agree_wrap">
                                                    <div class="agree_content">
                                                        <p>
                                                            <b>안녕 이용약관</b>
                                                        </p>
                                                        <p>
                                                            <b>제 1조 (목적)</b>
                                                        </p>
                                                        <p>
                                                            <span>
                                                                본 '안녕닷컴 서비스 이용 약관' (이하 "본 약관"이라 합니다)은 이용자가  안녕닷컴에서 제공하는 안녕닷컴 사이트 및 사이트 관련 각종 서비스 (이하 "서비스"라 합니다)를 이용함에 있어 "안녕닷컴"과 “이용자”의 권리 의무 및 책임 사항을 규정함을 목적으로 합니다.
                                                            </span>
                                                        </p>
                                                        <p><br></p>
                                                        <p>
                                                            <b>제 2조 (정의)</b>
                                                        </p>
                                                        <p>
                                                            <span>
                                                                1. 본 약관의 주요 용어는 아래와 같이 정의합니다.<br>
                                                                ① "AHN0"는 안녕닷컴을 말하며 안녕닷컴은 AHN0이 운영하는 공식 온라인 쇼핑몰을 말합니다.<br>
                                                                ② "서비스"란 안녕닷컴 사이트 및 사이트 관련 각종 서비스를 말합니다.<br>
                                                                ③ “이용자”란 "사이트"에 접속하여 이 약관에 따라 "안녕닷컴"이 제공하는 “서비스”를 받는 “회원”과 비회원을 말합니다.<br>
                                                                ④ "회원"은 "안녕닷컴"에 개인 정보를 제공하여 회원 등록을 한 자로서, 회원 전용 "서비스"를 이용할 수 있는 자를 말합니다.<br>
                                                                ⑤ "비회원"이라 함은 회원에 가입하지 않고 "서비스"를 이용하는 자를 말합니다.<br>
                                                                2. 이 약관에서 정하지 아니한 내용과 이 약관의 해석에 관하여는 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제 등에 관한 법률, 공정거래위원 회가 정하는 전자상거래 등에서의 소비자보호지침 및 관계법령 또는 상관례에 따릅니다
                                                            </span>
                                                        </p>
                                                        <p><br></p>
                                                        <p>
                                                            <b>제 3조 (약관의 게시와 변경)</b>
                                                        </p>
                                                        <p>
                                                            <span>
                                                                1. "안녕닷컴"은 이 약관의 내용과 상호, 영업소 소재지 주소(소비자의 불만을 처리할 수 있는 곳의 주소를 포함)전화번호, 이메일 주소, 사업자등록번호, 통신판매업신고번호, 개인정보보호책임자 등을 이용자가 쉽게 알 수 있도록 “안녕닷컴”의 초기 서비스화면(전면)에 게시합니다. 다만, 약관의 내용은 이용자가 연결화 면을 통하여 볼 수 있도록 할 수 있습니다.<br>
                                                                2. "안녕닷컴"은 이용자가 약관에 동의하기에 앞서 약관에 정하여져 있는 내용 중 청약철회, 배송책임, 환불조건 등과 같은 중요한 내용을 이용 자가 이해할 수 있도록 별도의 연결화면 또는 팝업화면 등을 제공하여 이용자의 확인을 구하여야 합니다.<br>
                                                                3. "안녕닷컴"은 「전자상거래 등에서의 소비자보호에 관한 법률」, 「약관의 규제에 관한 법률」, 「전자문서 및 전자거래기본법」, 「전자금융거래법」, 「전자서명법」, 「정보통신망 이용촉진 및 정보보호 등에 관한 법률」, 「방문판매 등에 관한 법률」, 「소비자기본법」 등 관련 법을 위배하지 않는 범위에서 이 약관을 개정할 수 있습니다.<br>
                                                                4. "안녕닷컴"은 약관을 개정할 경우에는 적용일자 및 개정사유를 명시하여 현행약관과 함께 홈페이지의 초기화면에 그 적용일 7일 이전부터 적용일자 전일까지 공지합니다. 다만, 이용자에게 불리하게 약관내용을 변경하는 경우에는 최소한 30일 이상의 사전 유예기간을 두고 공지합니다. 이 경우 "안녕닷컴"은 개정 전 내용과 개정 후 내용을 명확하게 비교하여 이용자가 알기 쉽도록 표시합니다.<br>
                                                                5. 변경된 약관 조항 중 상품의 구매계약에 관한 조항은 그 적용일자 이후에 체결되는 계약에만 적용되고 그 이전에 이미 체결된 계약에 대해서는 변경전의 조항이 그대로 적용됩니다. 다만, 이미 매매계약을 체결한 이용자가 변경된 조항의 적용을 받기를 원하는 뜻을 상기 제4항에 의한 변경약관의 공지기간 내에 "안녕닷컴"에 송신하여 "안녕닷컴"의 동의를 받은 경우에는 변경된 조항이 적용됩니다.<br>
                                                                6. "안녕닷컴"이 개정약관을 공지 또는 통지하면서 회원에게 30일 기간 내에 의사표시를 하지 않으면 의사표시가 표명된 것으로 본다는 뜻을 명확하게 따로 공지 또는 고지하였음에도 회원이 명시적으로 거부의사를 표시하지 아니한 경우 회원이 개정약관에 동의한 것으로 봅니다. 또한, 회원이 개정약관의 적용에 동의하지 않는 경우 "안녕닷컴"은 개정약관의 내용을 적용할 수 없으며, 이 경우, 회원은 이용계약을 해지할 수 있습니다. 다만, 기존약관을 적용할 수 없는 특별한 사정이 있는 경우에는 "안녕닷컴"은 이용계약을 해지할 수 있습니다.<br>
                                                                7. 이 약관에서 정하지 아니한 내용과 이 약관의 해석에 관하여 전자상거래 등에서의 소비자보호에 관한 법률, 약관의 규제 등에 관한 법률, 공정거래위원회가 정하 는 전자상거래 등에서의 소비자보호지침 및 관계법령 또는 상관례에 따릅니다.
                                                            </span>
                                                        </p>
                                                        <p><br></p>
                                                        <p>
                                                            <b>제 4조 (서비스의 제공 및 변경)</b>
                                                        </p>
                                                        <p>
                                                            <span>
                                                                1. “AHN0”는 "이용자"에게 아래와 같은 서비스를 제공합니다.<br>
                                                                ① 상품의 판매<br>
                                                                ② 다양한 정보의 제공<br>
                                                                ③ 광고, 이벤트 행사 등 상품과 관련한 다양한 판촉 행위(뉴스레터, DM 포함)<br>
                                                                ④ 기타 이용자에게 유용한 부가 서비스<br>
                                                                2. "안녕닷컴"은 상품이 품절 등으로 더 이상 제공할 수 없는 경우에는 장차 체결되는 계약에 의해 제공할 상품의 내용을 변경할 수 있습니다. 이 경우에는 변경된 상품의 내용 및 제공일자를 명시하여 현재의 상품의 내용을 게시한 곳에 즉시 공지합니다.<br>
                                                                3. "안년닷컴"이 제공하기로 이용자와 계약을 체결한 서비스의 내용을 상품품절 등의 사유로 변경할 경우에는 그 사유를 이용자에게 통지 가능 한 주소로 즉시 통지합니다.<br>
                                                                4. 전항의 경우 "안녕닷컴"은 이로 인하여 이용자가 입은 손해를 배상합니다. 다만, "안녕닷컴"이 고의 또는 과실이 없음을 입증 한 경우에는 아무런 책임을 부담하지 않습니다.
                                                            </span>
                                                        </p>
                                                        <p><br></p>
                                                        <p>
                                                            <b>제 5조 (서비스의 중단)</b>
                                                        </p>
                                                        <p>
                                                            <span>
                                                                1. "안녕닷컴"은 컴퓨터 등 전기통신설비의 보수점검 교체 및 고장, 통신의 두절 등의 사유가 발생한 경우에는 "서비스"의 제공을 일시적으로 중단할 수 있습니다.<br>
                                                                2. 제1항에 의한 "서비스" 중단의 경우에는 "안녕닷컴"은 제8조에 정한 방법으로 이용자에게 통지합니다.<br>
                                                                3. "안녕닷컴"은 제1항의 사유로 "서비스"의 제공이 일시적으로 중단됨으로 인하여 이용자가 입은 손해에 대하여 배상합니다. 단 "안녕닷컴"에 고의 또는 과실이 없는 경우에는 책임을 부담하지 않습니다.
                                                            </span>
                                                        </p>
                                                        <p><br></p>
                                                        <p>
                                                            <b>제 6조 (회원 가입)</b>
                                                        </p>
                                                        <p>
                                                            <span>
                                                                1. "이용자"는 "안녕닷컴"이 정한 가입 양식에 따라 회원 정보를 기입한 후, 이 약관에 동의한다는 의사 표시를 함으로써 회원 가입을 신청합니다.<br>
                                                                2. "안녕닷컴"은 전항과 같이 회원으로 가입할 것을 신청한 자가 다음 각 호에 해당하지 않는 한 신청한 자를 "회원"으로 등록합니다.<br>
                                                                ① 등록 내용에 허위, 기재누락, 오기가 있는 경우<br>
                                                                ② 기타 회원으로 등록하는 것이 "안녕닷컴"의 기술상 현저히 지장이 있다고 판단되는 경우<br>
                                                                3. 아동(만14세 미만인 자)은 회원가입이 불가능 합니다.<br>
                                                                4. 회원 가입 계약의 성립시기는 "안녕닷컴"의 승낙이 가입 신청자에게 도달한 시점으로 합니다.<br>
                                                                5. "회원"은 제17조 제1항에 의하여 "안녕닷컴"에 등록한 회원정보에 변경이 있는 경우, 상당한 기간 내에 "안녕닷컴" 에서 정하는 방법에 따라 해당변경사항을 "안녕닷컴"에게 통지하거나 수정하여야 합니다.<br>
                                                            </span>
                                                        </p>
                                                        
                                                        
                                                    </div>
                                                </div>
                                                <div class="agree_check">
                                                    <input type="checkbox" id="idSaveCheck">
                                                    <label for="AgreeCheck">
                                                        <span>[필수] 약관에 동의 합니다.</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="button">
                                            <div class="form_btn">
                                                <input type="button" value="AHN0 시작하기" onclick="check_input()">
                                            </div>
                                            <div class="form_btn">
                                                <!--<input type="button" value="취소" onclick="reset_form()">-->
                                                <input type="button" value="취소" onclick="javascript:history.back();">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <script src="../script/jQuery/jquery-1.12.4.min.js"></script>
        <script src="../script/javascript/common.js"></script>
        <script>
            /*실시간 아이디중복체크*/
            $(document).ready(function(e) { 
                var checkAjaxSetTimeout;
                $('#id').keyup(function(){
                    var reg_id=/^[A-Za-z0-9]{5,20}$/;
                    
                    clearTimeout(checkAjaxSetTimeout);
                    checkAjaxSetTimeout = setTimeout(function(){
                    if (reg_id.test(document.member_form.id.value)) {
                        var id = $('#id').val();
                        // ajax 실행
                        $.ajax({
                            type : 'POST',
                            url : 'check_id.php',
                            data:
                            {
                                id: id
                            },
                            success : function(data) {
                                /*alert(data);*/
                                //console.log(result);
                                if (data == 0) {
                                    $(".console").html("사용가능한 아이디입니다.").css("color","#58d400");
                                } else {
                                    $(".console").html("이미 사용중인 아이디입니다.").css("color","red");
                                }
                            }
                        }); // end ajax
                    }else if(!reg_id.test(document.member_form.id.value)){
                        $(".console").html("아이디는 5~20자리 영문과 숫자로 이루어져야합니다.").css("color","red");
                    }
                    },500); //end setTimeout

                }); // end keyup
            });
            /*아이디중복체크 끝*/

            function pw_check(){
                var reg_pw=/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[$`~!@$!%*#^?&\\(\\)\-_=+]).{8,20}$/;
                var p_result = document.getElementsByClassName("check_pw")[0];
                if (!document.member_form.pass.value){
                    p_result.innerText="비밀번호를 입력해 주세요.";
                    p_result.style.color = "red";
                    return false;
                }

                if(!reg_pw.test(document.member_form.pass.value)){
                    p_result.innerText="비밀번호는 8자 이상 영문, 숫자, 특수문자를 포함해야 합니다.";
                    p_result.style.color = "red";
                    return false;
                }else{
                    p_result.innerText="";
                    return false;
                }
            }

            function pwchk_check(){
                var pk_result = document.getElementsByClassName("check_pwchk")[0];
                if (!document.member_form.pass_confirm.value)
                {
                    pk_result.innerText="비밀번호를 재입력 하세요."
                    pk_result.style.color = "red";
                    return false;
                }

                if (document.member_form.pass.value!=document.member_form.pass_confirm.value)
                {
                    pk_result.innerText="비밀번호가 일치하지 않습니다."
                    pk_result.style.color = "red";
                    return false;
                }else{
                    pk_result.innerText="";
                    return false;
                }
            }

            function name_check(){
                var reg_name=/^[a-zA-z가-힣]+$/;
                var name_result = document.getElementsByClassName("check_name")[0];
                if (!document.member_form.name.value)
                {
                    name_result.innerText="이름을 입력하세요."
                    name_result.style.color = "red";
                    return false;
                }

                if(!reg_name.test(document.member_form.name.value)){
                    name_result.innerText="한글 또는 영문만 입력가능합니다.";
                    name_result.style.color = "red";
                    return false;
                }else{
                    name_result.innerText="";
                    return false;
                }
            }

            function hp_check(){
                var reg_tel=/^[0-9]+$/;
                var hp_result = document.getElementsByClassName("check_hp")[0];
                if (!document.member_form.hp.value)
                {
                    hp_result.innerText="휴대폰 번호를 입력하세요."
                    hp_result.style.color = "red";
                    return false;
                }

                if (!reg_tel.test(document.member_form.hp.value))
                {
                    hp_result.innerText="휴대폰 번호는 숫자만 입력 가능합니다."
                    hp_result.style.color = "red";
                    return false;
                }else{
                    hp_result.innerText="";
                    return false;
                }
            }

            function email_check(){
                var reg_email=/^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;
                var email_result = document.getElementsByClassName("check_email")[0];
                if (!document.member_form.email.value)
                {
                    email_result.innerText="이메일주소를 입력하세요."
                    email_result.style.color = "red";
                    return false;
                }

                if (!reg_email.test(document.member_form.email.value))
                {
                    email_result.innerText="이메일 형식이 올바르지 않습니다."
                    email_result.style.color = "red";
                    return false;
                }else{
                    email_result.innerText="";
                    return false;
                }
            }
            
            function check_input()
            {
                /*var reg_id=/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]{6,}$/;*/
                /*var reg_tel=/^(070|02|0[3-9]{1}[0-9]{1})[0-9]{3,4}[0-9]{4}$/;*/
                /*var reg_phone=/^(01[016789]{1})[0-9]{4}[0-9]{4}$/;*/
                var reg_id=/^[A-Za-z0-9]{5,20}$/;
                var reg_tel=/^[0-9]+$/;
                var reg_pw=/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[$`~!@$!%*#^?&\\(\\)\-_=+]).{8,20}$/;
                var reg_email=/^([0-9a-zA-Z_\.-]+)@([0-9a-zA-Z_-]+)(\.[0-9a-zA-Z_-]+){1,2}$/;
                var reg_name=/^[a-zA-z가-힣]+$/;
                var reg_domain=/^((http(s?))\:\/\/)([0-9a-zA-Z\-]+\.)+[a-zA-Z]{2,6}(\:[0-9]+)?(\/\S*)?$/;

                if (!document.member_form.id.value)
                {
                    alert("아이디를 입력해 주세요.");    
                    document.member_form.id.focus();
                    return false;
                }

                if(!reg_id.test(document.member_form.id.value)){
                    alert("아이디는 5~20자리 영문과 숫자로 이루어져야합니다.")
                    document.member_form.id.focus();
                    return false;
                }

                if (!document.member_form.pass.value)
                {
                    alert("비밀번호를 입력해 주세요.");    
                    document.member_form.pass.focus();
                    return false;
                }

                if(!reg_pw.test(document.member_form.pass.value)){
                    alert("패스워드는 8자 이상 영문, 숫자, 특수문자를 포함해야 합니다.")
                    document.member_form.pass.focus();
                    return false;
                }

                if (!document.member_form.pass_confirm.value)
                {
                    alert("비밀번호를 재입력하세요");    
                    document.member_form.pass_confirm.focus();
                    return false;
                }

                if (document.member_form.pass.value!=document.member_form.pass_confirm.value)
                {
                    alert("비밀번호가 일치하지 않습니다.");    
                    document.member_form.pass_confirm.focus();
                    return false;
                }

                if (!document.member_form.name.value)
                {
                    alert("이름을 입력하세요");    
                    document.member_form.name.focus();
                    return false;
                }
                if (!reg_name.test(document.member_form.name.value))
                {
                    alert("한글 또는 영문만 입력가능합니다.");    
                    document.member_form.name.focus();
                    return false;
                }
                if (!document.member_form.hp.value)
                {
                    alert("연락처를 입력하세요");    
                    document.member_form.hp.focus();
                    return false;
                }
                if (!reg_tel.test(document.member_form.hp.value))
                {
                    alert("연락처는 숫자만 입력 가능합니다.");  
                    document.member_form.hp.focus();
                    return false;
                }

                if (!document.member_form.email.value)
                {
                    alert("이메일주소를 입력하세요");    
                    document.member_form.email.focus();
                    return false;
                }

                if (!reg_email.test(document.member_form.email.value))
                {
                    alert("이메일 형식이 올바르지 않습니다.");    
                    document.member_form.email.focus();
                    return false;
                }

                document.member_form.submit();
            }

            function reset_form()
            {
                document.member_form.id.value = "";
                document.member_form.pass.value = "";
                document.member_form.pass_confirm.value = "";
                document.member_form.name.value = "";
                document.member_form.hp.value = "";
                document.member_form.email1.value = "";
                document.member_form.email2.value = "";

                document.member_form.id.focus();

                return;
            }        
        </script>
    </body>
</html>
