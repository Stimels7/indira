<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Site under hard development process</title>
	<meta name="viewport" content="width=760, maximum-scale=1.0, initial-scale=1">
	<meta name="generator" content="Indira CMS-Toolkit">
	<link rel="shortcut icon" type="image/png" href="/cms/logo/favicon.png" />
	<link rel="icon" type="image/png" href="/cms/logo/small.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/cms/logo/144x144.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/cms/logo/114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/cms/logo/72x72.png">
	<link rel="apple-touch-icon" sizes="57x57" href="/cms/logo/57x57.png">
	<link rel="apple-touch-icon" href="/cms/logo/small.png">
	<style type="text/css">
		@font-face{font-family:'FontAwesome';src:url('cms/font/fontawesome-webfont.eot?v=3.0.1');src:url('cms/font/fontawesome-webfont.eot?#iefix&v=3.0.1') format('embedded-opentype'),url('cms/font/fontawesome-webfont.woff?v=3.0.1') format('woff'),url('cms/font/fontawesome-webfont.ttf?v=3.0.1') format('truetype');font-weight:normal;font-style:normal}html{font-size:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0;font-size:1em;line-height:1.4}::-moz-selection{background:#e37b52;color:#fff;text-shadow:none}::selection{background:#e37b52;color:#fff;text-shadow:none}table{border-collapse:collapse;border-spacing:0}td{vertical-align:top}hr{margin:10px -15px;border:0;border-top:2px solid rgba(0,0,0,0.90);border-bottom:1px solid rgba(255,255,255,0.10)}td{padding:15px}body{background:#ebebeb url('/cms/img/black.png') repeat;color:rgba(0,0,0,0.90);font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;text-shadow:0 -1px #000,0px 1px #fff;text-shadow:0 -1px rgba(0,0,0,0.10),0px 1px rgba(255,255,255,0.20);font-size:11pt}.wrapper{width:760px;margin:0 auto 5em auto}.main{overflow:hidden}.error-spacer{height:4em}a,a:visited{color:#2972a3}a:hover{color:#72add4}.indira{text-shadow:0 -1px rgba(0,0,0,0.95),0px 1px rgba(255,255,255,0.20);color:rgba(255,194,0,.8);font-size:55px;font-weight:100}.indira:before{font-family:FontAwesome;content:"\f094"}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="error-spacer"></div>
		<div role="main" class="main">
			<table>
				<tr>
					<td width="50%">

						<?php $messages = array('We\'re doing big thing here', 'We are working... we\'re do hard coding now', 'This website under development', 'Wait, for a while please, while we\'re working here'); ?>

						<h1><?php echo $messages[mt_rand(0, 3)]; ?></h1>

					</td>
					<td width="50%">

						<?php $messages2 = array('Сайт находится на реконструкции', 'Мы работаем над улучшением сайта', 'Проводятся технические работы', 'В данный момент мы улучшаем сайт'); ?>

						<h1><?php echo $messages2[mt_rand(0, 3)]; ?></h1>

					</td>
				</tr>
				<tr>
					<td width="50%">

						<hr>

						<h2>Hi! Currently we're doing some big thing on the website</h2>

						<h4>Come back soon!</h4>

					</td>
					<td width="50%">

						<hr>

						<h2>Привет! В данный момент сайт переживает изменения</h2>

						<h4>Попробуйте зайти позже</h4>

					</td>
				</tr>
				<tr>
					<td width="50%">

						<hr>

						<p>
							We're sorry for that sad moment, but site will get much better soon :)
						</p>

					</td>
					<td width="50%">


						<hr>

						<p>
							Приносим свои извинения.
						</p>

					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center">
						<span class="indira"></span>
					</td>
			</table>
		</div>
	</div>
</body>
</html>