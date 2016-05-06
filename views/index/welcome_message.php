<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
    <title>信息论-首页</title>
    <link href=<?=base_url().'views/index/index.css'?> rel="stylesheet" type="text/css">
    <script src=<?=base_url().'views/common/jquery-2.2.3.min.js'?>></script>
    <!--IE8只能支持jQuery1.9-->
    <!--[if lte IE 8]>
    <link href=<?=base_url().'views/common/Css/IE.css'?> rel="stylesheet" type="text/css">
    <script src="http://apps.bdimg.com/libs/jquery/1.9.0/jquery.min.js"></script>
    <![endif]-->
</head>
<body id="body">
<!--添加登录条-->
<include file="index.php/loginBar"/>
<!--添加导航栏-->
<include file="index.php/nav"/>
<img src=<?=base_url().'views/index/img/bg-index.png'?> class="bg-index">
<div id="achievement">
    <h1>教学成果</h1>
    <span>Teaching Achievements</span>
    <div class="achievement-list">
        <fieldset>
            <legend>获得荣誉</legend>
            <ul>
                <li>广东省优秀教学成果奖</li>
                <li>广东工业大学教学成果奖</li>
                <li>省151工程现代教育技术优秀项目</li>
                <li>广东工业大学教育技术研究项目</li>
                <li>广东省高等教育教学成果奖</li>
            </ul>
        </fieldset>
        <fieldset>
            <legend>设计思想</legend>
                <ul>
                    <li>概念讲述注重物理意义的分析</li>
                    <li>将先进的通信技术引入课堂</li>
                    <li>采取多样化的教学方法</li>
                    <li>实践教学与理论教学相辅相成</li>
                    <li>多种实践教学手段提高学生综合能力</li>
                </ul>
        </fieldset>
        <fieldset>
            <legend>教学方法</legend>
                <ul>
                    <li>运用灵活多样的教学手段，推进教学改革</li>
                    <li>建立学生小组，组织学生进行网络学习</li>
                    <li>保持授课难度，坚持由浅入深</li>
                    <li>借助现代教学手段，充分利用网络资源</li>
                </ul>
        </fieldset>
        <fieldset>
            <legend>教学条件</legend>
                <ul>
                    <li>教材使用与建设（包括配套实验教材的教学效果）</li>
                    <li>促进学生主动学习的扩充性资料使用情况（包括网络教学环境等）</li>
                    <li>实践性教学环境</li>
                </ul>
        </fieldset>
    </div>
</div>
<div id="team-info">
    <h1>关于我们</h1>
    <span>About Us</span>
    <p>
        《信息论与编码》课程组目前有成员10人，其中教授4人、副教授3人、讲师3人。课题组成员都是专业课教师，80%为中青年教师，90%具有博士学历。
    </p>
    <p>
        成员年龄结构合理，都是长期从事该课程教学研究，具有丰富教学和科研经验的教授和副教授；也有年轻有为的青年讲师作为课程的辅导教师/实验教师，辅导教师/实验教师都至少有5年以上教龄且都同时承担学院其它专业基础课程，具有一定的教学经验；辅导教师/实验教师与学生比例为1:23。
    </p>
    <p>
        目前青年教师都在积极申请出国研修计划，进一步提高教学和科研水平。课题组计划在两年内选送青年教师到国内著名大学进行深造学习，进一步丰富和提高该课程的教学内容和教学效果，这些都有助于课程建设和教学质量的稳步提高。
    </p>

</div>
<!--添加页尾-->
<include file="index.php/footer"/>
<script src=<?=base_url().'views/index/index.js'?>></script>
<!--让IE8支持媒体查询-->
<script src="http://apps.bdimg.com/libs/respond.js/1.4.2/respond.js"></script>
</body>
</html>