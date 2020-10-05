<html>

<head>

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 style="text-align: center; margin-bottom: 5%">DATA DIRI JEMAAT</h3>
					</div>

					<div class="panel-body">
						<table style="margin-left: auto; margin-right: auto;">
							<tr>
								<td>NIK/NIM :</td>
								<td>{{ $data->nik }}</td>
							</tr>
							<tr>
								<td>Nama Lengkap :</td>
								<td>{{ $data->nama_lengkap }}</td>
							</tr>
							<tr>
								<td>Tempat/Tanggal Lahir :</td>
								<td>{{ $data->tempat_lahir }}</td>
							</tr>
							<tr>
								<td>Alamat :</td>
								<td>{{ $data->alamat }}</td>
							</tr>
							<tr>
								<td>Jenis Kelamin :</td>
								<td>{{ $data->jenis_kelamin }}</td>
							</tr>
							<tr>
								<td>No. Handphone :</td>
								<td>{{ $data->no_hp }}</td>
							</tr>
							<tr>
								<td colspan="2">Apakah Anda akan mengikuti protokol kesehatan selama ibadah berlangsung?</td>
							</tr>
							<tr>
								<td colspan="2"><strong>Jawaban : YA</strong></td>
							</tr>
							<tr>
								<td colspan="2">Keluhan Penyakit :</td>
							</tr>
							<tr>
								<td>Demam :</td>
								<td><strong>{{ $data->demam }}</strong></td>
							</tr>
							<tr>
								<td>Sakit Tenggorokan :</td>
								<td><strong>{{ $data->tenggorokan }}</strong></td>
							</tr>
							<tr>
								<td>Pilek :</td>
								<td><strong>{{ $data->pilek }}</strong></td>
							</tr>
							<tr>
								<td>Batuk :</td>
								<td><strong>{{ $data->batuk }}</strong></td>
							</tr>
							<tr>
								<td>Sesak Napas :</td>
								<td><strong>{{ $data->sesak }}</strong></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>