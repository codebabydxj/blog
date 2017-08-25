$(function(){
	
	$(".dianzan").click(function(){
		var spanval=$(this).find("span").html();
		var that=this;
		$.ajax({
			url:"index.php?m=index&f=user&a=dianzan",
			data:{
				sid:$(this).attr("sid")
			},
			success:function(e){
				
				if(e=="no"){
					//弹出框，提示用户进行登录
                    $(".mask").show();
                    $(".notice-login").css("display","block");
				}else if(e=="dianguo"){
					 $(".notice").show().html("淘气，知道你喜欢我~").css({fontSize:"14px"});
//                      $(".mask").show();
					setTimeout(function(){
						$(".notice").hide().html("淘气，知道你喜欢我~").css({fontSize:"14px"});
//	                    $(".mask").hide();
                    },1000);
				}else if(e=="yes"){
					var newval=parseInt(spanval)+1;
					$(that).find("span").html(newval);
					 $(".notice").show().html("谢谢你的点赞~");
//                      $(".mask").show();
                    setTimeout(function(){
                        $(".notice").hide().html("谢谢你的点赞~");
//                      $(".mask").css.hide();
                    },800);
				}
			}
		});
	})
	
	$(".quxiao").click(function(){
		$(".notice-login").css("display","none");
		$(".mask").css("display","none");
	})
	
})
