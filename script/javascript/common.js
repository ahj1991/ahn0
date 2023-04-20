$(function(){
    
    $("img").attr({
        "oncontextmenu":'return false',
        "style":'-webkit-touch-callout:none',
        "onError":"this.style.display='none'"
    });
    
    $(window).resize(function(){
        var win_w=$(window).width();
        var win_h=$(window).height();
        var nav_li_l=$("nav ul li").length;

        $("#wrap").height(win_h);

        $("nav").height(win_h-18).width(win_w-18);
        $(".nav_box").height(win_h-18).width(win_w-18);
        $("nav ul li").height(win_h/nav_li_l-5);
        $("nav ul li a span").css({
            lineHeight:win_h/nav_li_l+"px",
        });
        var nav_num_h=$("nav ul li").height()/2;
        $(".nav_num").css({
            top:10+"%",
        });
        //$("nav ul li span").css("line-height",win_h/nav_li_l);

        $("#container").height(win_h);

        $(".content_top").height(win_h/2);
        $(".content_bottom").height(win_h/2);
        $("#content_middle").height(win_h/2);
        $("#content_middle").css({
            top:win_h/2
        });
        $("#canvas_area").css({
            width:200,
            height:200,
            position:"absolute",
            top:win_h/2-$("#canvas_area").height()/2,
            left:"50px",
            zindex:"5000px",
        });

        var nb_chk=0;
        $(".nav_btn").click(function(){
            $("nav .nav_box").toggleClass('changed');
            if(!nb_chk){
                $("nav").css({
                    display:"block",
                    transition:"1s",
                    background:"#222",
                    opacity:1,
                });
                $("nav .nav_box").css("display","block");
                $("nav ul").css("display","block");
                $("nav").addClass("scale-in-tr");
                $("nav .nav_box ul").css({
                    animation: "fadein 1.2s",
                });
                $("nav").removeClass("menu_out");
                
                $("#wrap").css("position","fixed");
                $("header #header_wrap h1 p span").css("background","url(../common/logo/ahn0_n.png) no-repeat");
                $("header #header_wrap h1 p span").css("background-size","contain"); 
                nb_chk=1;
                
            }
            else{
                //$("nav ul").css("display","none");
                $("nav").removeClass("scale-in-tr");
                $("nav .nav_box ul").css({
                    animation: "fadeout 1.2s",
                });
                $("nav").addClass("menu_out");
                $("#wrap").css("position","relative");
                $("header #header_wrap h1 p span").css("background","url(../common/logo/ahn0_bn.png) no-repeat");
                $("header #header_wrap h1 p span").css("background-size","contain");
                nb_chk=0;
                console.log(nb_chk);
            }
        });

    }).resize();
    
    $(".nav_box ul").css({
        transform:"scale(1)",
        opacity:1,
    });
    
    $("nav .nav_box ul li").each(function(index){
        $(this).prepend("<span class='nav_num'>.0"+(index+1)+"</span>");
        $(".nav_num").css({display: "none"});
        $(".nav_box ul li").eq(index-1).hover(function(){
            $(".nav_box ul li").css({backgroundColor: "rgba(0, 0, 0, 0.63)"});
            
            switch (index){
                
            case 1:
            $(".nav_box ul").css({
                background:"url(../common/nav/menu1.jpg) no-repeat",
                backgroundSize:"cover",
                transform:"scale(1)",
                opacity:1,
            });
            $(".nav_box ul li:nth-child(1) .nav_num").css({display: "block"});
            break;
            
            case 2:            
            $(".nav_box ul").css({
                background:"url(../common/nav/menu2.jpg) no-repeat",
                backgroundSize:"cover",
                transform:"scale(1)",
                opacity:1,
            });
            $(".nav_box ul li:nth-child(2) .nav_num").css({display: "block"});
            break;

            case 3:
            $(".nav_box ul").css({
                background:"url(../common/nav/menu3.jpg) no-repeat",
                backgroundSize:"cover",
                transform:"scale(1)",
                opacity:1,
            });
            $(".nav_box ul li:nth-child(3) .nav_num").css({display: "block"});
            break;

            case 0:
            $(".nav_box ul").css({
                background:"url(../common/nav/menu4.jpg) no-repeat",
                backgroundSize:"cover",
                transform:"scale(1)",
                opacity:1,
            });
            $(".nav_box ul li:nth-child(4) .nav_num").css({display: "block"});
            break;

            }
        },function(){
            $(".nav_box ul li").css({background: "none"});
            $(".nav_num").css({display: "none"});
            $(".nav_box ul").css({
                background:"#222",
                transform:"scale(1)",
                transition:"1.2s",
                opacity:1,
            });
        });
        
    });

    $("nav .nav_box ul li a").hover(function(){

        $("nav .nav_box ul li span").css({
            opacity:1,
            transition:"1s"
        });
        $(this).children("span").css({
            opacity:1,
            transition:"1s"
        });
    });

});