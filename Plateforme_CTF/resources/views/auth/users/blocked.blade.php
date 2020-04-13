<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Le compte est bloqué</title>
	{!! Html::style('css/app.css') !!}
</head>
<body>
<div class="container spark-screen">
    <div class="row" style="padding:10px;">
			@if(Session::has('message'))
			<br>
			<div class="alert alert-info errors">{{ Session::get('message') }}</div>
			@endif
			<h1>Le compte est bloqué</h1>
			<p>Il semble que votre compte est bloqué. Plusieurs raisons peuvent expliquer le blocage de votre compte.</p>
			<ul>
				<li><strong>Abus de service</strong> : Les administrateurs ont le pouvoir de bloquer tous les comptes s’ils constatent un abus de service.</li>
			</ul>
			<p>Pour plus de détails, veuillez contacter l'administrateur.</p>
			<p>Vous pouvez {{ Html::link('user/logout', 'logout') }} pour l'instant</p>
		</div>
	</div>
</body>
</html>
