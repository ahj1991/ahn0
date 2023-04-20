<?php 
	session_start();
?>
<header>
    <div id="header_wrap">
        <div>
            <h1>
                <p>
                    <a href="../sub/main.php"><span></span></a>
                </p>
            </h1>
        </div>
        <div>
            <div class="contact_nav h5">
                <p>
                    <span>
                        <a href="#">.Blog</a>
                    </span>
                </p>
                <p>
                    <span>
                        Hyeon Jeong, Ahn
                    </span>
                </p>
                <p>
                    <span><a href="tel:01033390393">+82 010-3339-0393</a></span>
                </p>    
            </div>
        </div>
        <div>
            <div class="nav_area">
                <div class="nav_btn">
                    <p>
                        <span>PLANNING &amp; DESIGN</span>
                        <span>menu</span>
                    </p>
                </div>
                <nav>
                    <div class="nav_box">
                        <ul>
                            <li>
                                <a href="../project/list.php">
                                    <span class="h2">UI/UX</span>
                                </a>
                            </li>

                            <li>
                                <a href="../story/list.php">
                                    <span class="h2">Design</span>
                                </a>
                            </li>

                            <li>
                                <a href="../sub/about.php">
                                    <span class="h2">Coding</span>
                                </a>
                            </li>
                                                        
                            <li>
                                <a href="../sub/contact.php">
                                    <span class="h2">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="sns">
                        <p class="h5">
                            <a href="#"><span>Instagram</span></a>
                            <a href="#"><span>Facebook</span></a>
                            <?php
                            if(!isset($_SESSION['userid'])){
                            ?>
                                <a href="../login/login_form.php"><span>Login</span></a>
                            <?php
                            }else{
                            ?>
                                <a href="../login/member_modify.php">MyPage</a>
                                <a href="../login/logout.php"><span>Logout</span></a>
                            <?php
                            }
                            ?>
                        </p>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Channel Plugin Scripts
    <script>
    (function() {
        var w = window;
        if (w.ChannelIO) {
        return (window.console.error || window.console.log || function(){})('ChannelIO script included twice.');
        }
        var ch = function() {
        ch.c(arguments);
        };
        ch.q = [];
        ch.c = function(args) {
        ch.q.push(args);
        };
        w.ChannelIO = ch;
        function l() {
        if (w.ChannelIOInitialized) {
            return;
        }
        w.ChannelIOInitialized = true;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'https://cdn.channel.io/plugin/ch-plugin-web.js';
        s.charset = 'UTF-8';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
        }
        if (document.readyState === 'complete') {
        l();
        } else if (window.attachEvent) {
        window.attachEvent('onload', l);
        } else {
        window.addEventListener('DOMContentLoaded', l, false);
        window.addEventListener('load', l, false);
        }
    })();
    ChannelIO('boot', {
        "pluginKey": "fb4d591e-1e68-4678-b9da-47732a5004f4"
    });
    </script>
     End Channel Plugin -->

    <style>
        /* pc 화면 */
        @media (min-width: 768px) {
            #kakao-talk-channel-chat-button {
            position: fixed;
            z-index: 9999;
            right: 24px; /* 화면 오른쪽으로부터의 거리, 숫자만 변경 */
            bottom: 24px; /* 화면 아래쪽으로부터의 거리, 숫자만 변경 */
            }
        }
        /* 모바일 화면 */
        @media (max-width:767px) {
            #kakao-talk-channel-chat-button {
            position: fixed;
            z-index: 9999;
            right: 14px; /* 화면 오른쪽으로부터의 거리, 숫자만 변경 */
            bottom: 14px; /* 화면 아래쪽으로부터의 거리, 숫자만 변경 */
            }
        }
        </style>

        <div id="kakao-talk-channel-chat-button"></div>

        <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
        <script type='text/javascript'>
        //<![CDATA[
            // 사용할 앱의 JavaScript 키를 설정해 주세요.
            Kakao.init('bbdb2d99d9ca4a8295f0b83e6b65deec');
            // 카카오톡 채널 1:1채팅 버튼을 생성합니다.
            Kakao.Channel.createChatButton({
            container: '#kakao-talk-channel-chat-button',
            channelPublicId: '_xfZnCs' // 카카오톡 채널 홈 URL에 명시된 ID
            });
        //]]>
        </script>
</header>