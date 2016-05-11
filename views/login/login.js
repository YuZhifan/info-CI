// log.js
$(document).ready(function(){
	// 获取 href 属性中在井号“#”后面的分段
	var act = window.location.hash;
	if(act === "#toregister"){//注册

		// 输入框获得焦点，隐藏提示信息
		hideMsg("register");

		// 输入用户名，验证用户名已是否存在
		$("#usernamesignup").focusout(function(){
			$.get({
				type:"GET",
				url:"http://localhost/info-CI/index.php/register/username_check/"+$("#usernamesignup").val(),
				success:function(exsit){
					if(exsit === "YES"){
						showMsg("该用户名已存在");
					}
				},
				dataType:"html"
			})
		});

		//提交注册请求
		$("#register form").submit(function(){
			var name = $("#usernamesignup").val();
			var password = $("#register form input[name='password']").val();
			var passconf = $("#register form input[name='passconf']").val();
			var regRegexp = /[^A-Za-z0-9]/g;
			// 未填写完全
			if(!(name && password && passconf)){
				showMsg("register","请填写全部内容");
				return false;
			}

			// 密码少于6位
			else if(password.length < 6){
				showMsg("register","请输入至少6位的密码");
				return false;
			}

			//两次密码不同 
			else if(passconf !== password){
				showMsg("register","两次密码不同");
				return false;
			}

			// 密码含有非法字符
			else if(regRegexp.exec(passconf)){
				showMsg("register","密码中只能含有数字和字母");
				return false;
			}
			else {
				return true;
			}
		});
	}else{//登录
		hideMsg("login")
		$("#login form").submit(function(){
			var password = $("#login form input[name='password']");
			var logRegexp = /[^A-Za-z0-9]/g;

			if(logRegexp.exec(password)){
				showMsg("login","密码错误");
				return false;
			}
		});
	}

	function hideMsg(act){
		$("#" + act +" input[type!='submit']").focusin(function(){
			$("."+ act +"-msg").html("");
			$("."+ act +"-msg").hide(100);
		});
	}

	function showMsg(act,content){
		$("."+ act +"-msg").html(content);
		$("."+ act +"-msg").show(100);
	}
});

