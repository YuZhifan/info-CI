/**
 * Created by Felix on 2016/4/23.
 */

var comment_type_num = 0; 
var page_size = 10;

function getMaxPage(){
	var max_pagee = 1;//默认分页
	$.ajax({ 
		url: INFO.base_url+"/discussion/getMaxPage/?comment_type="+comment_type_num+"&max_page="+page_size, 
		data: "json", 
		async:false,
		success: function(lists){
        max_pagee = lists.results.max_page;
        console.log("max_pagee="+max_pagee);
      }});
	return max_pagee;
//	
	
//	$.get(INFO.base_url+"/discussion/getMaxPage/?comment_type="+comment_type_num+"&max_page="+page_size,function(json){
//    	var lists = JSON.parse(json);
//    	max_pagee = lists.results.max_page;
//    	console.log("max_pagee="+max_pagee);
//    	
//    	return false;
//    });
}

$(document).ready(function(){
    $(".nav-discussion").addClass("nav-current");
    getComment();
});

$('.pagination').jqPagination({
//	  link_string : '/discussion?page={page_number}&max_page=20',
//	  current_page: 5, //设置当前页 默认为1
	  max_page : getMaxPage(), //设置最大页 默认为1
//	  page_string : '当前第{current_page}页,共{max_page}页',
	  paged : function(page) {
	      //回发事件。。。
		  getComment(comment_type_num,page);
	      }
	});

//分页跳转
//$(document).ready(function(){
//    function jump(current,newPage){
//        current.removeClass("page-current");
//        newPage.addClass("page-current");
//        console.log("跳转到第 " + newPage.attr("name").replace(/[^0-9]/ig,"") + " 页");
//    }
//    var Count = 5;
//    $(".page a").click(function(){
//        var current = $(".page-current");
//        var newPage = $(this);
//        var pageName = newPage.attr("name");
//        switch(pageName){
//            case "pre"://上一页
//                if(current.attr("name") !== "page1"){
//                    jump(current, current.prev());
//                }
//                break;
//            case "next"://下一页
//                if(current.attr("name") !== $(".page-last").attr("name")){
//                    jump(current, current.next());
//                }
//                break;
//            default://某一页
//                jump(current,newPage);
//                break;
//        }
//
//    });
//});


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
//       clickSwitch($(".choose"),$(this),"choose");
       var comment_type = $(event.target)[0].getAttribute("data-show");
//        console.log(comment_type);
       comment_type_num = getCommentTypeNum(comment_type);
       getComment(comment_type_num);
    });
});

function getCommentTypeNum(comment_type){
    console.log(comment_type);
    switch(comment_type)
    {
        case "all":
			return 0;
		case "review":
			return 1;
		case "question":
			return 2;
		case "comment":
			return 3;
		default:
			return 0;
		}
}

function getComment(comment_type=0,page_number=1){
	$.get(INFO.base_url+"/discussion/getComment/?comment_type="+comment_type+"&page_number="+page_number+"&max_page=10",function(lists){
    	//var lists = JSON.parse(json);
    	showComment(lists);
    	
    });
	console.log($('.pagination'));
}  

function showComment(lists){
//	console.log("lists:"+lists);
	$(".discussion-list").empty();
	for(index in lists.results){
    	$(".discussion-list").append(
        		'<li class="discussion-row">' +
        		'<img src='+INFO.base_url+'/'+lists.results[index].avatar+'>'+
        		'<p class="discussion-row-title">' +
        				'<strong>'+lists.results[index].user_nicename+'</strong><span>'+lists.results[index].comment_time+'</span>'+
        		'</p>'+
        		'<p>'+lists.results[index].comment+'</p>'+
        		'</li>'
      );	
	}
	}