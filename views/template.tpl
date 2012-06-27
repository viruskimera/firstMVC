<html>
<head>
	<title>Adwords simulation</title>
	<link rel="stylesheet" type="text/css" href="libs/css/cssMain.css">
</head>
<body>

	<div class="main">
		<div class="menus">
			<ul class="ulmenu">
				<li><img data-info="/controllers/controller/left" src="libs/imgs/left.png"></li>
				<li><img data-info="views/right.tpl" src="libs/imgs/right.png"></li>
				<li><img src="libs/imgs/statistic.png"></li>
				<li><img src="libs/imgs/user-boss.png"></li>
				<li><img src="libs/imgs/notepad.png"></li>
			</ul>
		</div>
		</br>

		<div id="content">

			{foreach from=$data item=f}
	
				{$f} </br>

			{/foreach}

			<h1>hola, como estas?</h1>

		</div>
		</br>

		<div class="footer"> rights reserved.</div>
	</div>


<script type="text/javascript" src="libs/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="libs/js/jsMain.js"></script>
</body>
</html>


