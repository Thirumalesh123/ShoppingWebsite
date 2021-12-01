$loginForm=$('#loginExec');
if($loginForm.length)
{
$loginForm.validate({
rules:{
username:{
required:true,
email:true
},
password:{
required:true
},
messages:{
username:{
required:'please enter your email!!',
email:'please enter a valid email address!!'
},
password:{
required:'please enter your password!!'
}
},
errorElement='em',
errorPlacement:function(error,element){
error.insertAfter(element);
}
}
});
}

