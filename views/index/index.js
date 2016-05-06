/**
 * Created by Felix on 2016/4/15.
 */



//根据屏幕大小自适应导航栏
$(document).ready(function(){
    changeNav();
    function changeNav(){
        //如果屏幕尺寸小于768px,并且 .nav-btn 元素不存在
        //隐藏导航条，显示折叠按钮
        var navBtn = $(".nav-btn");
        var nav = $(".nav");
        if($(window).width() < 768 && !$(".nav-bar").length){
            navBtn.removeClass("dis-none");
            nav.addClass("dis-none nav-bar");
            //为折叠按钮添加点击事件
            navBtn.off("click","**");
            navBtn.on("click",function(){
                if(nav.css("display") === "none"){
                    nav.removeClass("dis-none");
                }
                else{
                    nav.addClass("dis-none");
                }
            });
        }else if($(window).width() >= 768) {
            navBtn.addClass("dis-none");
            nav.removeClass("dis-none nav-bar");
        }
    }



    var changeFlag = false;
    $(window).resize(function(){
        if(!changeFlag){
            changeNav();
            setTimeout(function(){
                changeFlag = false;
            },100);
        }
        changeFlag = true;
    });
});



