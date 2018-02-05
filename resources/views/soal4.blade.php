<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>soal4</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
			@foreach ($mahasiswa as $temp)
				<hr>
				<h3> Nama Mahasiswa : {{$temp->nama}}</h3>
				<h3> Nama Wali : {{$temp->wali->nama}}</h3>
				<h3> Nama Dosen : {{$temp->dosen->nama}}</h3>
				<h3> Nama Jurusan : {{$temp->jurusan->nama_jurusan}}</h3>
				<h3> Mata Kuliah :
					@foreach($temp->matkul as $tampung) 
						<li><strong>{{$tampung->nama_matkul}} </strong></li>
					@endforeach
				</h5>
			@endforeach
		</div>
	</body>
</html>