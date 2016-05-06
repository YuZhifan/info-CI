/**
 * Created by Felix on 2016/4/23.
 */


/*
* changeClass(cl1,cl2,clName)
* 给cl1移除类clName
* 给cl1添加类clName
* */
//
//function changeClass(cl1,cl2,clName){
//    cl1.removeClass(clName);
//    cl2.addClass(clName);
//}


var INFO ={
    base_url:"http://localhost/info-CodeIgniter/",
};


/*
* clickSwitch(current,choose,clName)点击切换类
* current当前选择 choose新点击 clName切换的类名
* 新点击与当前不一样的时候切换类名
* */
function clickSwitch(current,choose,clName){
    var currentData,chooseData;
    if(current.val()){
        currentData = current.val();
        chooseData = choose.val();
    }else{
        currentData = current.html();
        chooseData = choose.html();
    }
    if(currentData !== chooseData){
        current.removeClass(clName);
        choose.addClass(clName);
    }
    return false;
}


//根据屏幕大小自适应导航栏
$(document).ready(function(){
    changeNav();
    function changeNav(){
        //如果屏幕尺寸小于768px,并且 .nav-btn 元素不存在
        //隐藏导航条，显示折叠按钮
        var navBtn = $(".nav-btn");
        var nav = $(".nav");
        if($(window).width() < 768 && !$(".nav-bar").length){ 
            nav.hide();
            navBtn.show();
            nav.addClass("nav-bar");
            navBtn.off();
            //为折叠按钮添加点击事件
            navBtn.on("click",function(){
                nav.toggle();
            });
            
        }else if($(window).width() >= 768) {
            navBtn.hide();
            nav.show();
            nav.removeClass("nav-bar");
        }
    }

    var changeFlag = false;
    $(window).resize(function(){
        if(!changeFlag){
            setTimeout(function(){
                changeFlag = false;
                changeNav();
            },30);
        }
        changeFlag = true;
    });
});