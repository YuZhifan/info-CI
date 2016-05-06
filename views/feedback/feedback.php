<!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
    <title>信息论-讨论交流</title>
    <link href=<?=base_url().'views/feedback/feedback.css'?> rel="stylesheet" type="text/css">
    <script src=<?=base_url().'views/common/jquery-2.2.3.min.js'?>></script>
    <script src=<?=base_url().'views/common/common.js'?>></script>
    <!--IE8只能支持jQuery1.9-->
    <!--[if lte IE 8]>
    <link href="__PUBLIC__/Common/Css/IE.css" rel="stylesheet" type="text/css">
    <script src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
    <![endif]-->
    <script src=<?=base_url().'views/common/common.js'?>></script>
</head>
<body id="body">
<div class="feedback-msg">
    <div class="msg-box">
        <p>亲爱的同学们：</p>
        <p>
            您好！本问卷的目的在于了解同学猛对本网络课程的教学建议和学习需求，以便为同学们提供更好的教学内容。 请您认真填一下调查问卷，您的真实回答将为我们的课程教学提供建设性信息，并据此做出进一步的改进。
        <p>
            *本问卷以不记名形式进行，我们将对所填内容保密，请您放心填写！谢谢您对我们工作的大力支持与配合！
        </p>

        <input type="button" value="确 定">
    </div>
</div>
<!--添加登录条-->
<include file="./loginBar"/>
<!--添加导航栏-->
<include file="./nav"/>

<form action="" class="question">
    <h1>课程评价问卷</h1>
    <ul>
        <li>
            <p>(1)你之前是否也体验过类似的网络课程（ ） </p>
            <label><input type="radio" name="que1" value="是">是</label>
            <label><input type="radio" name="que1" value="否">否</label>
        </li>
        <li>
            <p>(2)任课老师在教学中是否保持精神饱满，仪表端庄，声音洪亮，充满激情（ ） </p>
            <label><input type="radio" name="que2" value="非常好">非常好</label>
            <label><input type="radio" name="que2" value="较好">较好</label>
            <label><input type="radio" name="que2" value="一般">一般</label>
            <label><input type="radio" name="que2" value="较差">较差</label>
        </li>
        <li>
            <p>(3)任课老师专业知识方面（ ）</p>
            <label><input type="radio" name="que3" value="非常好">非常好</label>
            <label><input type="radio" name="que3" value="较好">较好</label>
            <label><input type="radio" name="que3" value="一般">一般</label>
            <label><input type="radio" name="que3" value="较差">较差</label>
        </li>
        <li>
            <p>(4)任课老师严谨治学、言传身教方面做得（ ）</p>
            <label><input type="radio" name="que4" value="非常好">非常好</label>
            <label><input type="radio" name="que4" value="较好">较好</label>
            <label><input type="radio" name="que4" value="一般">一般</label>
            <label><input type="radio" name="que4" value="较差">较差</label>
        </li>
        <li>
            <p>(5)你觉得网络课堂对你学习的帮助是（ ）</p>
            <label><input type="radio" name="que5" value="非常大">非常大</label>
            <label><input type="radio" name="que5" value="有一点">有一点</label>
            <label><input type="radio" name="que5" value="不明显">不明显</label>
            <label><input type="radio" name="que5" value="没有">没有</label>
        </li>
        <li>
            <p>(6)您认为任课教师在及时更新教学内容，介绍学科新动态、新发展、理论联系实际方面做得如何（ ）</p>
            <label><input type="radio" name="que6" value="非常好">非常好</label>
            <label><input type="radio" name="que6" value="较好">较好</label>
            <label><input type="radio" name="que6" value="一般">一般</label>
            <label><input type="radio" name="que6" value="较差">较差</label>
        </li>
        <li>
            <p>(7)您对本课程所使用的教材（ ）</p>
            <label><input type="radio" name="que7" value="非常满意">非常满意</label>
            <label><input type="radio" name="que7" value="较满意">较满意</label>
            <label><input type="radio" name="que7" value="一般">一般</label>
            <label><input type="radio" name="que7" value="不满意">不满意</label>
        </li>
        <li>
            <p>(8)您对本课程收获（ ）</p>
            <label><input type="radio" name="que8" value="很大">很大</label>
            <label><input type="radio" name="que8" value="较大">较大</label>
            <label><input type="radio" name="que8" value="一般">一般</label>
            <label><input type="radio" name="que8" value="很少">很少</label>
        </li>
        <li>
            <p>(9)您对改进学校精品课程网站的建设方案和提高网站资源的利用率有什么意见和建议</p>
            <textarea name="suggestion"></textarea>
        </li>
    </ul>
    <input type="submit" value="提  交"/>
</form>

<script src=<?=base_url().'views/feedback/feedback.js'?>></script>
<!--让IE8支持媒体查询-->
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
</body>
</html>