/**
 * Created by Felix on 2016/4/23.
 */

$(document).ready(function(){
    $(".nav-discussion").addClass("nav-current");
    getComment();
});


//分页跳转
$(document).ready(function(){
    function jump(current,newPage){
        current.removeClass("page-current");
        newPage.addClass("page-current");
        console.log("跳转到第 " + newPage.attr("name").replace(/[^0-9]/ig,"") + " 页");
    }
    var Count = 5;
    $(".page a").click(function(){
        var current = $(".page-current");
        var newPage = $(this);
        var pageName = newPage.attr("name");
        switch(pageName){
            case "pre"://上一页
                if(current.attr("name") !== "page1"){
                    jump(current, current.prev());
                }
                break;
            case "next"://下一页
                if(current.attr("name") !== $(".page-last").attr("name")){
                    jump(current, current.next());
                }
                break;
            default://某一页
                jump(current,newPage);
                break;
        }

    });
});


//提交表单
$(document).ready(function(){
    $(".discussion-form").submit(function(){
        var discussionType = $(".discussion-form label  input[name='discussion_type']:checked").val();
        
        if(!discussionType){//必须选择类型
            $(".discussion-form .msg").html("请选择留言类型...");
            return false;
        }

        var content = $(".discussion-form textarea").val();

        if(!content.length){//必须输入留言
            $(".discussion-form .msg").html("请输入留言...");
            return false;
        }

        console.log("留言类型：" + discussionType);
        console.log("留言内容：" + content);


        return true;
    });

    $(".discussion-form textarea").focus(function(){
        $(".discussion-form .msg").empty();
    });

});

//选择标签
$(document).ready(function(){
    $(".discussion-tag").click(function(){
        clickSwitch($(".choose"),$(this),"choose");
        getComment();
//        console.log($(".choose"));
    });
});


function getComment(comment_type=0){
	$.get(INFO.base_url+"/discussion/getComment/"+comment_type,function(json){
    	var data = JSON.parse(json);
    	$(".discussion-list").empty();
    	for(list in data.results){
        	$(".discussion-list").append(
            		'<li class="discussion-row">' +
            		'<img src='+INFO.base_url+'/'+data.results[list].avatar+'>'+
            		'<p class="discussion-row-title">' +
            				'<strong>'+data.results[list].user_nicename+'</strong><span>'+data.results[list].comment_time+'</span>'+
            		'</p>'+
            		'<p>'+data.results[list].comment+'</p>'+
            		'</li>'
          );	
    	}
    });
} 