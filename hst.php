<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
.progress{width:100%;margin:20px auto;text-align:center}
.progress .circle,.progress .bar{position:relative;display:inline-block;background:#fff;width:40px;height:40px;border-radius:40px;border:1px solid #d5d5da}
.progress .circle:not(:last-child){margin-right:80px;}
.progress .bar{position:absolute;width:85px;height:6px;top:16px;left:40px;border-left:none;border-right:none;border-radius:0}
.progress .circle .label{display:inline-block;width:32px;height:32px;line-height:32px;border-radius:32px;margin-top:4px;color:#b5b5ba;font-size:17px}
.progress .circle .title{display:block;color:#b5b5ba;font-size:13px;line-height:30px;width:200px;margin-left:-80px;text-align:center}
.progress .done .bar,.progress .circle.done{background:#eee}
.progress .circle.done .label{color:#FFF;background:#8bc435}
.progress .circle.done .title{color:#444}
.progress .circle.active .label{color:#FFF;background:#0c95be}
.progress .circle.active .title{color:#0c95be}
</style>
</head>
<body>
<div class="progress">
<div class="circle done"> <!--add the 'done' class for completed steps-->
<span class="label">1</span> <!--step number-->
<span class="bar"></span>
</div>
<div class="circle done"> <!--add the 'active' class for the current step-->
<span class="label">2</span>
<span class="bar"></span>
</div>
<div class="circle active"> <!--no added class for future steps-->
<span class="label">3</span>
</div>
<div class="circle "> <!--no added class for future steps-->
<span class="label">4</span>
</div>
<div class="circle"> <!--no added class for future steps-->
<span class="label">5</span>
</div>
<div class="circle"> <!--no added class for future steps-->
<span class="label">6</span>
</div>
<div class="circle"> <!--no added class for future steps-->
<span class="label">7</span>
</div>
<div class="circle"> <!--no added class for future steps-->
<span class="label">8</span>
</div>
<div class="circle"> <!--no added class for future steps-->
<span class="label">9</span>
</div>
<div class="circle"> <!--no added class for future steps-->
<span class="label">10</span>
</div>
</div>
</body>
</html>

