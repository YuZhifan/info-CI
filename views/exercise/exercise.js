/**
 * Created by Felix on 2016/4/22.
 */

$(document).ready(function(){
    $(".nav-exercise").addClass("nav-current");
});

//选择类型
$(document).ready(function(){
    function change(show,hidden){
        hidden.removeClass("type-current");
        show.addClass("type-current");
        $("." + hidden.data("type")).addClass("dis-none");
        $("." + show.data("type")).removeClass("dis-none");
    }    
    $(".type-title a").click(function(){
        var current = $(".type-current");
        var select = $(this);
        if(select.data("type") !== current.data("type")){
            change(select,current);
            $(".bread-crumb").html(select.text() + " &#62;");
        }
    });


//章节练习
    $(".chapter li a,.former li a").click(function(){
        var type = "";
        if($(this).data("ch")){
            type = "章节练习 &#62; ";
        }
        else{
            type = "往年试题 &#62; ";
        }
        console.log(type);
        $(".bread-crumb").html(type + $(this).text() + " &#62;");
    });


});

//模拟测试-选择范围
$(document).ready(function(){
    $(".simulation a:first-child").click(function(){//开始测试
        console.log("开始测试");
        $(".bread-crumb").html("模拟测试 &#62;");
    });

    $(".simulation a:eq(1)").click(function(){//选择测试范围
        $("#select-test").show(300);
    });

    $("#select-test .confirm").click(function(){//确定
        $("#select-test").hide(500);
        console.log("确定范围");
        $(".bread-crumb").html("模拟测试 &#62;");
    });

    $("#select-test .cancel").click(function(){//取消
        $("#select-test").hide(500);
        console.log("取消选择范围");
    });
});