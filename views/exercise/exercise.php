<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>信息论-自测训练</title>
    <link href=<?=base_url().'views/exercise/exercise.css'?> rel="stylesheet" type="text/css">
    <script src=<?=base_url().'views/common/jquery-2.2.3.min.js'?>></script>
    <script src=<?=base_url().'views/common/common.js'?>></script>
    <!--IE8只能支持jQuery1.9-->
    <!--[if lte IE 8]>
    <link href=<?=base_url().'views/common/IE.css'?> rel="stylesheet" type="text/css">
    <script src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="exercise-type">
    <div class="type-title">
        <a href="#" class="type-current" data-type="chapter">章节练习</a>
        <a href="#" data-type="simulation">模拟测试</a>
        <a href="#" data-type="former">往年试题</a>
    </div>
    <ul class="type-list chapter">
        <li><a href="#" data-ch="1">第一章</a></li>
        <li><a href="#" data-ch="2">第二章</a></li>
        <li><a href="#" data-ch="3">第三章</a></li>
        <li><a href="#" data-ch="4">第四章</a></li>
        <li><a href="#" data-ch="5">第五章</a></li>
        <li><a href="#" data-ch="6">第六章</a></li>
        <li><a href="#" data-ch="7">第七章</a></li>
        <li><a href="#" data-ch="8">第八章</a></li>
    </ul>
    <ul class="type-list simulation dis-none">
        <li><a href="#">开始测试</a></li>
        <li><a href="#">选择范围</a></li>
    </ul>
    <ul class="type-list former dis-none">
        <li><a href="#">12年A卷</a></li>
        <li><a href="#">12年B卷</a></li>
        <li><a href="#">13年A卷</a></li>
        <li><a href="#">13年B卷</a></li>
        <li><a href="#">14年A卷</a></li>
        <li><a href="#">14年B卷</a></li>
        <li><a href="#">15年A卷</a></li>
        <li><a href="#">15年B卷</a></li>
    </ul>
    <div id="select-test" hidden="hidden">
        <div class="select">
            <h1>请选择测试范围</h1>
            <label><input name="test" type="checkbox" value="" />第一章 </label>
            <label><input name="test" type="checkbox" value="" />第二章 </label>
            <label><input name="test" type="checkbox" value="" />第三章 </label>
            <label><input name="test" type="checkbox" value="" />第四章</label>
            <label><input name="test" type="checkbox" value="" />第五章 </label>
            <label><input name="test" type="checkbox" value="" />第六章 </label>
            <label><input name="test" type="checkbox" value="" />第七章 </label>
            <label><input name="test" type="checkbox" value="" />第八章 </label>
            <a href="#" class="confirm">确定</a>
            <a href="#" class="cancel">取消</a>
        </div>
    </div>
</div>
<div class="content-wrap">
    <p href="#" class="bread-crumb">请选择自测题类型</p>
    <div class="content">

    </div>
</div>


<script src=<?=base_url().'views/exercise/exercise.js'?>></script>
<!--让IE8支持媒体查询-->
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
</body>
</html>