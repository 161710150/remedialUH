<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>soal2</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
			@foreach ($mahasiswa as $temp)
				<h3> <small>nama mahasiswa : {{$temp->nama}}</small></h3>
				
				<h5>nama wali : {{$temp->wali->nama}} </h5>
			@endforeach
		</div>
	</body>
</html>