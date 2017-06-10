<!DOCTYPE html>
<html>
<head>
	<title>Siswa</title>
</head>
<body>
	<center>
		<table border = "1">
			<thead>
				<tr class="bg-info">
					<th>Id</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
				</tr>
				<?php
					$no = 1;
				?>
				@foreach ($siswa as $data)
					<tr>
						<td>{{$no++}}</td>
						<td>{{$data->nama}}</td>
						<td>{{$data->alamat}}</td>
						<td>{{$data->jenis_kelamin}}</td>
					</tr>
				@endforeach
			</thead>
		</table>
	</center>
</body>
</html>