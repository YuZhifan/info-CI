/**
 * Created by Felix on 2016/4/22.
 */

$(document).ready(function(){
    $(".nav-exercise").addClass("nav-current");
    getComment(1);
});

function getComment(comment_type=1){
	$.get(INFO.base_url+"/exercise/get/"+comment_type,function(json){
    	var data = JSON.parse(json);
    	$(".content").empty();
    	var qid = 1;
    	for(list in data.results){
        	$(".content").append(
//        			'<p class="content-row-title">' +data.results[list].comment+'</p>'+
        			'<p class="content-row-title">' +
        			qid+'、'+
        			data.results[list].question+
        			'</p>'+
            		'</li>'
          );	
        	qid++;
    	}
    });
}  

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
    
    $(".chapter li a").click(function(){
        var select = $(this);
        var chapter_id = select.data("ch");
        console.log(chapter_id);
        	getComment(chapter_id);
    });
    $(".former li a").click(function(){
        var select = $(this);
        var chapter_id = select.data("ch");
        console.log(chapter_id);
        	getComment(chapter_id);
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

$(document).ready(function(){
    $(".discussion-tag").click(function(){
       clickSwitch($(".choose"),$(this),"choose");
       var comment_type = $(event.target)[0].getAttribute("data-show");
//        console.log(comment_type);
        switch(comment_type)
        {
	        case "all":
				getComment(0);
				break;
			case "review":
				getComment(1);
				break;
			case "question":
				getComment(2);
				break;
			case "comment":
				getComment(3);
				break;
			default:
				getComment(0);
			}
    });
});

