type="text/javascript">
		function validate()
		{
			const usernametext = document.getElementById('user_name');
			const passwordtext = document.getElementById('password');
			const usernameerror = document.getElementById('username-err');
			const passworderror = document.getElementById('password-err');
			if(usernametext.value == "")
			{
				usernameerror.style.visibility = 'visible';
				return false;
			}
			if(passwordtext.value == "")
			{
				passworderror.style.visibility = 'visible';
				return false;
			}
			if(usernametext.value != "" && passwordtext.value != "")
			{
				return true;
			}
		}
