<!DOCTYPE html>
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>信息论-登录</title>
        <!-- <link rel="shortcut icon" href="../favicon.ico">  -->
        <link rel="stylesheet" type="text/css" href=<?=base_url()."views/login/demo.css"?> />
        <link rel="stylesheet" type="text/css" href=<?=base_url()."views/login/login.css"?> />
        <link rel="stylesheet" type="text/css" href=<?=base_url()."views/login/style.css"?> />
		<link rel="stylesheet" type="text/css" href=<?=base_url()."views/login/animate-custom.css"?> />
        <script src=<?=base_url().'views/common/jquery-2.2.3.min.js'?>></script>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>
                    <a href=<?=base_url()."index.php"?>>
                        <img class="index-logo" src=<?=base_url().'views/index/img/logo-info.png'?> alt="index-logo">
                    </a>
                    欢迎  
                    <span>信息论与编码</span></h1>
				<nav class="codrops-demos">
					<span> 广东省研究生示范课程</span>
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login" autocomplete="on" method="post"> 
                                <h1>登 录</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > 用户名  </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Your Username"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> 密码  </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="*****" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">自动登录</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="登 录" /> 
								</p>
                                <p class="change_link">
									没有登录帐号？
									<a href="#toregister" class="to_register">注 册</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="register" autocomplete="on" method="post"> 
                                <h1> 注 册 </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">用户名</label>
                                    <input id="usernamesignup" name="username" required="required" type="text" placeholder="Mr.Felix" />
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">密码 </label>
                                    <input id="passwordsignup" name="password" required="required" type="password" placeholder="******"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">确认密码 </label>
                                    <input id="passwordsignup" name="passconf" required="required" type="password" placeholder="******"/>
                                </p>
								<p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > 邮箱</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="Mr.Felix@mail.com"/> 
                                </p>
                                <p class="signin button"> 
									<span class="register-msg">1</span><input type="submit" value="注 册"/> 
								</p>
                                <p class="change_link">  
									已经有帐号？
									<a href="#tologin" class="to_register"> 直接登录 </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    <script src=<?=base_url().'views/Login/login.js'?>></script>
    </body>
</html>