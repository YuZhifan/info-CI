/**
 * Created by Felix on 2016/4/23.
 */

$(document).ready(function(){
    $(".nav-discussion").addClass("nav-current");
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
    $(".discussion-tag input").click(function(){
//        clickSwitch($(".choose"),$(this),"choose");
//        $(".discussion-list").html('' +
//        		'<li class="discussion-row">' +
//        		'<img src='+INFO.base_url+'/views/common/img/list-item1.jpg>' +
//        		'<p class="discussion-row-title">' +
//        				'<strong>Felix</strong><span>2016-04-06 21:54:50</span>'+
//        		'</p>'+
//        		'<p>神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代</p>'+
//        		'</li>');
    
//        $(".discussion-list").html(INFO.base_url+'/discussion/getComment');
        $.get(INFO.base_url+"/discussion/getComment",function(data){
        	console.log(data);
//        	for(list in data){
//	        	$(".discussion-list").html(
//	            		'<li class="discussion-row">' +
//	            		'<img src='+INFO.base_url+'/views/common/img/list-item1.jpg>' +
//	            		'<p class="discussion-row-title">' +
//	            				'<strong>Felix</strong><span>2016-04-06 21:54:50</span>'+
//	            		'</p>'+
//	            		'<p>'+data.status+'</p>'+
//	            		'</li>'
//	        			data
//	          );	
//        	}
            
        });
    });
});