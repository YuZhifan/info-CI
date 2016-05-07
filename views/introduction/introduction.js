/**
 * Created by Felix on 2016/4/24.
 */

 $(document).ready(function(){
    $(".nav-introduction").addClass("nav-current");
});

$(document).ready(function(){
    //显示主讲老师内容
    $("#list-leader").fadeIn(600);


    //点击按钮显示隐藏菜单内容
    //菜单向左移动，显示右边内容
    var subNav = $(".subNav p");
    $(".subNav .turn-left").click(function(){
        //子导航栏中可显示的宽度
        var navLength = 0.8 * $(window).width();
        //备选菜单总宽度
        var length = subNav.width();
        //备选菜单左偏移量
        var left = parseInt(subNav.css("left"));
        //单个菜单选项宽度
        var distance =$(".subNav p a").innerWidth();
        //当可显示的宽度小于备选菜单宽度，菜单左移
        if(navLength < (length  + left)){
            subNav.css("left",left-distance+"px" );
        }
    });

    //菜单向右移动，显示左边内容
    $(".subNav .turn-right").click(function(){
        var subNav = $(".subNav p");
        //备选菜单左偏移量
        var left = parseInt(subNav.css("left"));
        //单个菜单选项宽度
        var distance =$(".subNav p a").innerWidth();
        //当菜单有左偏移时，菜单右移
        console.log("left:"+left);
        console.log("distance:"+distance);
        if(left){
            subNav.css("left",left + distance + "px");
        }
    });

    //点击菜单，切换内容
    $(".subNav p a").click(function(){
        var current = $(".subNav .choose");
        var choose = $(this);
        clickSwitch(current,choose,"choose");
        var currentData = current.data("target");
        var chooseData = choose.data("target");
        if(currentData !== chooseData){
            $("#" + currentData).hide();
            $("#" + chooseData).fadeIn(600);
        }
    });

});
