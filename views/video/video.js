/**
 * Created by Felix on 2016/4/22.
 */

$(document).ready(function(){
    $(".nav-video").addClass("nav-current");
});


$(document).ready(function(){
     // 载入评论
    loadComment();

    // 绑定跳转事件
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


// 评论验证

    // 输入框获得焦点，验证登录状态
    $(".comment textarea").focusin(function(){
        var loginStatus = checkLogin();
        console.log(loginStatus);
        var msg = $(".comment .comment-msg");
        msg.html("");
        if(loginStatus === "NO"){
            msg.html("请先登录");
            return false;
        }
    });

    // 提交表单验证评论长度
    $(".comment form").submit(function(){
        var loginStatus = checkLogin();
        var msg = $(".comment .comment-msg");
        if(loginStatus === "NO"){
            msg.html("请先登录");
            return false;
        }else{
            var content = $("#comment-submit").val();
            if(content.length < 15){
                console.log(content);
                msg.html("评论不少于15字...");
                msg.show(100,"linear");
                return false;
            }
            else if(content.length > 150){
                msg.html("评论不能超出150字...");
                msg.show(100,"linear");
                return false;
            }

            $.post({
                url:INFO.base_url + "index.php/video/addComment",
                data:$("#video-comment-form").serialize(),
                success:function(){
                    $(".comment-list").html("");
                    loadComment();
                }
            });
            return false;
        }  
    });

    //输入框闪烁效果 
    function msgAnimate(){
        var textarea =$(".comment form textarea");
            textarea.animate({//显示
                "outline-width": "1px",
            },100);

            setTimeout(function(){
                textarea.animate({//隐藏
                    "outline-width": "0",
                },100);

                setTimeout(function(){
                    textarea.animate({//显示
                        "outline-width": "1px",
                    },100);

                    setTimeout(function(){
                        textarea.animate({//隐藏
                            "outline-width": "0",
                        },200);
                    },200);

                },200);

            },150);    
        }

    //已登录返回YES，否则返回NO 
    function checkLogin(){
        $.get({
                type:"GET",
                url:INFO.base_url + "index.php/video/checkLogin",
                success:function(log){
                    $("#loginBar").data("status",log);
                },
                dataType:"html"
            });
        return $("#loginBar").data("status");
    }

    // 加载评论列表
    function loadComment(){
        $.getJSON({
            type:"GET",
            url:INFO.base_url + "index.php/video/comment",
            success:function(data){
                var list = $("<ul class='comment-list'></ul>");
                $.each(data, function(i,item){
                    list.append(
                    '<li class="comment-row">'+
                    '<img src="'+INFO.base_url+item.avatar+'">'+
                    '<p class="comment-row-title">'+
                    '<strong>'+item.user_nicename+'</strong>'+
                    '<span>'+item.comment_time+'</span>'+
                    '</p>'+
                    '<p>'+item.comment+'</p>'+
                    '</li>'
                    );
                $(".comment-title").after(list);
                })
            },
            dataType:"json"
        });
    }

    //分页跳转
    function jump(current,newPage){
        current.removeClass("page-current");
        newPage.addClass("page-current");
        console.log("跳转到第 " + newPage.attr("name").replace(/[^0-9]/ig,"") + " 页");
    }
});

