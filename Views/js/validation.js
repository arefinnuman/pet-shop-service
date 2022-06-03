const form=document.getElementById('form');
const username=document.getElementById('user_name');
const password=document.getElementById('password');

form.addEventListener('submit', (e)=>{
	e.preventDefault();
	validate();
})
function validate()
{
	if(uname.value=="")
		setError(uname,'User name is empty');
	else
		setSuccess(uname);
}
function setError(input,msg)
{
	const itag=document.getElementById('success');
	itag.style.visibility=true;
	input.style.backgroundColor=red;
}