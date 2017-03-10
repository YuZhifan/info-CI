<!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
    <title>信息论-讨论交流</title>
    <link href=<?=base_url().'views/discussion/discussion.css'?> rel="stylesheet" type="text/css">
    <script src=<?=base_url().'views/common/jquery-2.2.3.min.js'?>></script>
    <link rel="stylesheet" href=<?=base_url().'views/common/jqpagination.css'?>>
	<script src=<?=base_url().'views/common/jquery.jqpagination.min.js'?>></script>
    <!--IE8只能支持jQuery1.9-->
    <!--[if lte IE 8]>
    <link href="__PUBLIC__/Common/Css/IE.css" rel="stylesheet" type="text/css">
    <script src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
    <![endif]-->
    <script src=<?=base_url().'views/common/common.js'?>></script>
</head>
<body id="body">
<!-- 导航栏 -->
<?=$infoNav;?>

<div class="lecture-wrap">
    <div class="lecture">
        <div><a href="#">信息论在图像性能上的应用</a></div>
        <span>专题讲座</span>
        <div><a href="#">编解码设计与实现</a></div>
    </div>
</div>

<div class="discussion">
    <h1>交流讨论</h1>
    <p class="subTitle">discussion</p>
    <form action="discussion/addComment" class="discussion-form" method="post">
        <textarea name="comment" rows="4" cols="100" id="discussion-submit"></textarea>
        <label><input name="discussion_type" type="radio" value="1" />心得 </label>
        <label><input name="discussion_type" type="radio" value="2" />疑问 </label>
        <label><input name="discussion_type" type="radio" value="3" />吐槽 </label>
        <span class="msg"></span>
        <input type="submit" value="留言讨论" />
    </form>
    <div class="discussion-box">
        <div class="discussion-tag">
            <input type="button" value="全部" class="choose" data-show="all"/>
            <input type="button" value="心得" data-show="review"/>
            <input type="button" value="疑问" data-show="question"/>
            <input type="button" value="吐槽" data-show="comment"/>
        </div>

        <ul class="discussion-list">
<!--             <li class="discussion-row"> -->
<!--               <img src=<?=base_url().'views/common/img/list-item1.jpg'?>>  -->
<!--                 <p class="discussion-row-title"> -->
<!--                     <strong>Felix</strong><span>2016-04-06 21:54:50</span> -->
<!--                 </p> -->
<!--                 <p>神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代神明之胄动画全集这是一个图腾崇拜的时代</p> -->
<!--             </li> -->
        </ul>

        <div class="pagination" >
		  <a href="#" class="first" data-action="first">&laquo;</a>
		  <a href="#" class="previous" data-action="previous">&lsaquo;</a>
		  <input id="jpa" type="text" readonly="readonly" />
		  <a href="#" class="next" data-action="next">&rsaquo;</a>
		  <a href="#" class="last" data-action="last">&raquo;</a>
		</div>
    </div>
</div>
<!--页脚-->
<?=$infoFooter;?>
<script src=<?=base_url().'views/discussion/discussion.js'?>></script>
<!--让IE8支持媒体查询-->
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
</body>
</html>