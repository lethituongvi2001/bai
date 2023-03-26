<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up </title>

<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="admin/ktnguoidung/css/style.css">
<meta name="robots" content="noindex, follow">
<script nonce="36ed148b-44e4-437a-b09a-4a340373fe5c">(function(w,d){!function(e,f,g,h){e.zarazData=e.zarazData||{};e.zarazData.executed=[];e.zaraz={deferred:[],listeners:[]};e.zaraz.q=[];e.zaraz._f=function(i){return function(){var j=Array.prototype.slice.call(arguments);e.zaraz.q.push({m:i,a:j})}};for(const k of["track","set","debug"])e.zaraz[k]=e.zaraz._f(k);e.zaraz.init=()=>{var l=f.getElementsByTagName(h)[0],m=f.createElement(h),n=f.getElementsByTagName("title")[0];n&&(e.zarazData.t=f.getElementsByTagName("title")[0].text);e.zarazData.x=Math.random();e.zarazData.w=e.screen.width;e.zarazData.h=e.screen.height;e.zarazData.j=e.innerHeight;e.zarazData.e=e.innerWidth;e.zarazData.l=e.location.href;e.zarazData.r=f.referrer;e.zarazData.k=e.screen.colorDepth;e.zarazData.n=f.characterSet;e.zarazData.o=(new Date).getTimezoneOffset();if(e.dataLayer)for(const r of Object.entries(Object.entries(dataLayer).reduce(((s,t)=>({...s[1],...t[1]})))))zaraz.set(r[0],r[1],{scope:"page"});e.zarazData.q=[];for(;e.zaraz.q.length;){const u=e.zaraz.q.shift();e.zarazData.q.push(u)}m.defer=!0;for(const v of[localStorage,sessionStorage])Object.keys(v||{}).filter((x=>x.startsWith("_zaraz_"))).forEach((w=>{try{e.zarazData["z_"+w.slice(7)]=JSON.parse(v.getItem(w))}catch{e.zarazData["z_"+w.slice(7)]=v.getItem(w)}}));m.referrerPolicy="origin";m.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(e.zarazData)));l.parentNode.insertBefore(m,l)};["complete","interactive"].includes(f.readyState)?zaraz.init():e.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<div class="main">

<section class="signup">
<div class="container">
<div class="signup-content">
<div class="signup-form">
  <p><?php if(isset($tb)) echo $tb; ?></p>
<h2 class="form-title">Đăng ký</h2>
<form method="POST" action="index.php?action=themkhachhang" class="register-form" id="register-form">
<div class="form-group">
<label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
<input type="text" name="txthoten" id="name" placeholder="Họ tên" />
</div>
<div class="form-group">
<label for="email"><i class="zmdi zmdi-email"></i></label>
<input type="email" name="txtemail" id="email" placeholder="Email đăng nhập" />
</div>
<div class="form-group">
<label for="sodienthoai"><i class="zmdi zmdi-sodienthoai"></i></label>
<input type="sodienthoai" name="txtsodienthoai" id="sodienthoai" placeholder="Số điện thoại đăng nhập" />
</div>
<div class="form-group">
<label for="pass"><i class="zmdi zmdi-lock"></i></label>
<input type="password" name="txtmatkhau" id="pass" placeholder="Mật Khẩu" />
</div>
<div class="form-group">
<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
<input type="password" name="txtnlmatkhau" id="re_pass" placeholder="Nhập lại mật khẩu" />
</div>
<div class="form-group">
<input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
<label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
</div>
<div>
</div>
<div class="form-group form-button">
<input type="submit" name="signup" id="signup" class="form-submit" value="Đăng ký" />
</div>
</form>
</div>
<div class="signup-image">
<figure><img src="admin/ktnguoidung/images/signup-image.jpg" alt="sing up image"></figure>
<a href="index.php"><span class="glyphicon glyphicon-home"></span> Trang Chủ</a>
</div>
</div>
</div>
</section>


</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7685addd7b934c3b","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>