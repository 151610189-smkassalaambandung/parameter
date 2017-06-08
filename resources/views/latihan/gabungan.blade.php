<!DOCTYPE html>
<html>
<head>
	<title>Looping</title>
</head>
<body>
	<center>
		<tr>
		<font color="pink">
			<td><h1>Buah</h1></td>
			<td>@foreach($buah as $data)
					{{$data}}<hr>
				@endforeach</td>

			<td><h1>Makhluk Hidup</h1></td>
			<td>@foreach($makhluk_hidup as $data)
					{{$data}}<hr>
				@endforeach</td>

			<td><h1>Personal Computer</h1></td>
		    <td>@foreach($pc as $data)
					{{$data}}<hr>
				@endforeach</td>
		</font>
		</tr>
	</center>
</body>
</html>