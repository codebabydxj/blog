$(window).ready(function(){
function yz(){
    $("#form2").validate({
        rules:{
            uname1:{
                required:true,
                minlength:6,
                remote:{
                	type:"post",
                    url:"index.php?m=index&f=user&a=validateUsername",
                    data:{"uname":function(){
						return $("#usernamer").val();
					}},
					dataType:"json"
                }
            },
            upass1:{
                required:true,
                minlength:6
            },
            upass2:{
                required:true,
                equalTo:"#Password1r"
            }
        },
        messages:{
            uname1:{
                required:"*请输入用户名",
                minlength:"*用户名至少输入6位",
                remote:"*用户名已存在"
            },
            upass1:{
                required:"*请输入密码",
                minlength:"*密码至少输入6位"
            },
            upass2:{
                required:"*请确认密码",
                equalTo:"*两次密码不一致"
            }
        }
    })
}
yz();
})