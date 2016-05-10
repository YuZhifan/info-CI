// log.js
$(document).ready(function(){
	// 获取 href 属性中在井号“#”后面的分段
	var act = window.location.hash;
	if(act === "#toregister"){//注册

		// 输入框获得焦点，隐藏提示信息
		hideMsg("register");

		// 输入用户名，验证用户名已是否存在
		$("#usernamesignup").focusout(function(){
			
		});

		//提交注册请求
		$("#register form").submit(function(){
			var name = $("#usernamesignup").val();
			var password = $("#register form input[name='password']").val();
			var passconf = $("#register form input[name='passconf']").val();
			// 未填写完全
			if(!(name && password && passconf)){
				showMsg("请填写必填项");
				return false;
			}

			//两次密码不同 
			if(passconf !== password){
				showMsg("两次密码不同");
				return false;
			}

			// 密码少于6位
			if(password.length < 6){
				showMsg("请输入至少6位的密码");
				return false;
			}

			// 密码含有非法字符

		return false;	
		});
	}else{//登录

	}

	function hideMsg(act){
		$("#" + act +" input[type!='submit']").focusin(function(){
			$(".register-msg").html("");
			$(".register-msg").hide(100);
		});
	}

	function showMsg(content){
		$(".register-msg").html(content);
		$(".register-msg").show(100);
	}
});

