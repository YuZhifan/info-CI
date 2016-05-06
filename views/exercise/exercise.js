/**
 * Created by Felix on 2016/4/22.
 */

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
        }
    });
});

//模拟测试-选择范围
$(document).ready(function(){
    $(".simulation a:eq(1)").click(function(){
        $("#select-test").show(300);
    });

    $("#select-test .confirm").click(function(){//确定
        $("#select-test").hide(500);
        console.log("确定范围");
    });


    $("#select-test .cancel").click(function(){//取消
        $("#select-test").hide(500);
        console.log("取消选择范围");
    });
});