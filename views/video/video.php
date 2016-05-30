<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>信息论-视频录像</title>
    <link href=<?=base_url().'views/video/video.css'?> rel="stylesheet" type="text/css">
    <script src=<?=base_url().'views/common/jquery-2.2.3.min.js'?>></script>
    <script src=<?=base_url().'views/common/common.js'?>></script>
    <!--IE8只能支持jQuery1.9-->
    <!--[if lte IE 8]>
    <link href=<?=base_url().'views/common/IE.css'?> rel="stylesheet" type="text/css">
    <script src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body>
<!-- 导航栏 -->
<?=$infoNav;?>
<div class="video-wrap">
    <div class="video">
        <div class="video-box">
            <video src=<?=base_url().'views/video/video/test3.mp4' ?> controls="controls" id="video"></video>	
        </div>
        <div class="video-list">
            <h1>相关视频</h1>
            <p class="subTitle">Related Video</p>
            <ul>
                <li>
                    <div class="list-item">
                        <button data-src=<?=base_url().'views/video/video/test1.mp4' ?>>
                            <img src=<?=base_url().'views/common/img/list-item1.jpg'?>>
                            <span>视频1</span>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="list-item">
                        <button data-src=<?=base_url().'views/video/video/test2.mp4' ?>>
                            <img src=<?=base_url().'views/common/img/list-item2.jpg'?>>
                            <span>视频2</span>
                        </button>
                    </div>
                </li>
                <li>
                    <div class="list-item">
                        <button data-src=<?=base_url().'views/video/video/test3.mp4' ?>>
                            <img src=<?=base_url().'views/common/img/list-item3.jpg'?>>
                            <span>视频3</span>
                        </button>
                    </div>
                </li>
                <b class="clear-float"></b>
            </ul>
        </div>
    </div>
</div>

<div class="comment">
    <h1>评论</h1>
    <p class="subTitle">comment</p>
    <form action="video/addComment" method="post" id="video-comment-form">
        <textarea rows="4" cols="100" id="comment-submit" name="comment" ></textarea>
        <span class="comment-msg"></span>
        <input type="submit" value="提交评论" />
    </form>
    <div class="comment-box">
        <div class="comment-title">
            <strong><img src=<?=base_url().'views/common/img/notepad.png'?> title="logo">评论列表</strong>
            <label for="comment-submit"><img src=<?=base_url().'views/common/img/pen.png'?>>我要评论</label>
        </div>			
        <div class="page">
            <a href="video/comment"  name="pre">上一页</a>
            <a href="#" class="page-current" name="page1">1</a>
            <a href="#" name="page2">2</a>
            <a href="#" name="page3">3</a>
            <a href="#" name="page4">4</a>
            <a href="#" name="page5" class="page-last">5</a>
            <a href="#" name="next">下一页</a>
            <input type="text" />
            <a href="#" name="jump">跳转到</a>
        </div>
    </div>
</div>
<!-- 页脚 -->
<?=$infoFooter;?>
<script src=<?=base_url().'views/video/video.js'?>></script>
</body>
</html>