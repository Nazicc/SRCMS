<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html class=" js no-touch csstransforms csstransforms3d svg" lang="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>SRCMS - 企业安全应急响应与缺陷管理中心</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<script type="text/javascript" async="" src="/temp/dev/Public/Admin/ga.js.下载"></script>
<link rel="stylesheet" href="/temp/dev/Public/Admin/app.min.css">
<style type="text/css">.cf-hidden { display: none; } .cf-invisible { visibility: hidden; }</style></head>
<body class="page-loaded" style="font-family:微软雅黑;">
 
<div class="pageload" style="display: none;">
<div class="pageload-inner">
<div class="sk-rotating-plane"></div>
</div>
</div>
 
<div class="app signin v2 usersession">
<div class="session-wrapper">
<div class="session-carousel slide" data-ride="carousel" data-interval="3000">
 
<div class="carousel-inner" role="listbox">
<div class="item active" style="background-image:url(/temp/dev/Public/Admin/loginpage.jpg);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;">
</div>
<!--<div class="item" style="background-image:url(http://www.srcms.xyz/imgres/loginpage2.jpg);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;">
</div>
<div class="item" style="background-image:url(http://lorempixel.com/1200/800?3);background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;">-->
</div>
</div>
</div>
<div class="card bg-white no-border">
<div class="card-block">
<form role="form" class="form-layout" action="<?php echo U('login/login');?>" method="post">
<div class="text-center m-b">
<img src="/temp/dev/Public/Admin/logo.png"></img>
<h4 class="text-uppercase" style="font-family:微软雅黑;">安全应急响应与缺陷管理中心</h4>
<div class="divider">
<span>请登录您的帐号</span>
</div>
</div>
<div class="form-inputs p-b">
<label class="text-uppercase">账户名</label>
<input type="text" class="form-control input-lg" placeholder="邮箱地址" name="username" id="exampleInputUser" />
<label class="text-uppercase">密码</label>
<input type="password" class="form-control input-lg" placeholder="密码" name="password" id="exampleInputPassword" />
<!--<div>
	<label class="text-uppercase">验证码</label>
	<div style="float:left;">
	<input type="text"  name="verify" class="form-control input-lg" id="exampleInputCode" placeholder="验证码">
	</div>
	<div style="float:right;">
	<a href="javascript:void(0)"><img class="verify" src="<?php echo U('login/verify');?>" alt="点击刷新"/></a>
	</div>
</div>-->
</div>
<button class="btn btn-primary btn-block btn-lg m-b" type="submit" data-form-sbm="1484311449704.6902">立即登录</button>
</div>
</form>
</div>
</div>
</div>
</div>
<script src="/temp/dev/Public/Admin/app.min.js.下载"></script><div class="bg-default"></div><div class="bg-primary"></div><div class="bg-success"></div><div class="bg-warning"></div><div class="bg-danger"></div><div class="bg-info"></div><div class="bg-white"></div><div class="bg-dark"></div>

</body>
<script src="/temp/dev/Public/Static//js/jquery-1.10.2.js"></script>
<script>
    $(function(){
        $(".verify").click(function(){
            var src = "<?php echo U('login/verify');?>";
            var random = Math.floor(Math.random()*(1000+1));
            $(this).attr("src",src+"&random="+random);

        });
    })
</script>
</html>