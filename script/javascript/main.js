$(function(){
    
    var main_index=1;
    
    function bg_change(){
        switch (main_index){

        case 1:

        $("#container").css({
            "background":"red",
            transition:"1s",
        });
        break;

        case 2:

        $("#container").css({
            "background":"blue",
            transition:"1s",
        });
        break;

        case 3:

        $("#container").css({
            "background":"yellow",
            transition:"1s",
        });
        break;

        case 4:

        $("#container").css({
            "background":"yellow",
            transition:"1s",
        });
        break;

    }
    $(".next").css("background","red");
    $(".next").click(function(){
        main_index++;
        
        alert(main_index);
        bg_change();
    });
    }    

    /*var start = Math.PI * 1.5 / 100;
    animate(start);*/

/*
    function animate(current) {
      var ctx = document.querySelector('requestCanvas');
      requestAnimationFrame() {
        ctx.arc(100, 100, 50, 0, current);
        if (current < Math.PI * 1.5) {
          current += current;
          animate(current);
        }
      }*/
});