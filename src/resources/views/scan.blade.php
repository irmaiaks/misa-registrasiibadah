@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default" style="background-color: #edcfa9;">
				<div class="panel-heading" style="background-color: #e89f71;">
					<h3 style="text-align: center; font-family:Arial, Helvetica, sans-serif"><strong> Scanner </strong></h3>
				</div>

				<div class="panel-body">

					<!-- The Modal -->
					<div id="myModal" class="modal">

						<!-- Modal content -->
						<div class="modal-content">
							<span class="close">&times;</span>
							<h3 style="text-align: center; font-family:Arial, Helvetica, sans-serif">Data Diri Jemaat</h3>
							<p id="isi" style="text-align: center; font-family:Arial, Helvetica, sans-serif"></p>

							<div style="margin-bottom: 10%" id="pdf"></div>
						</div>
					</div>

					<div class="col-md-12" style="text-align: center;">
						<video style="width: 100%; height: auto;" id="preview"></video>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('javascript')
<script type="text/javascript">
	// Get the modal
	var modal = document.getElementById("myModal");

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "block";
		}
	}

	let scanner = new Instascan.Scanner({
		video: document.getElementById('preview')
	});
	scanner.addListener('scan', function(content) {
		var id = content;
		var url = "{{ URL('scan')}}";

		$.ajax({
			url: url + "/" + id,
			type: "GET",
			cache: false,
			dataType: 'JSON',
			data: {
				_token: '{{ csrf_token() }}'
			},
			success: function(response) {
				modal.style.display = "block";

				if (response.status == 1) {
					var message = 'NIK/NIM : ' + response.data.nik +
						'<br>Nama Lengkap : ' + response.data.nama_lengkap +
						'<br>Tempat/Tangga Lahir : ' + response.data.tempat_lahir +
						'<br>Alamat : ' + response.data.alamat +
						'<br>Jenis Kelamin : ' + response.data.jenis_kelamin +
						'<br>No. Handphone : ' + response.data.no_hp +

						'<br>Apakah Anda akan mengikuti protokol kesehatan selama ibadah berlangsung?<strong> YA</strong><br>KELUHAN PENYAKIT<br>Demam : <strong>' + response.data.demam + '</strong><br> Sakit Tenggorokan : <strong>' + response.data.tenggorokan + '</strong><br>Pilek : <strong>' + response.data.pilek + '</strong><br>Batuk : <strong>' + response.data.batuk + '</strong><br>Sesak Napas : <strong>' + response.data.sesak + '</strong>';

					document.getElementById('isi').innerHTML = message;

					var pdf = "{{ URL('pdf') }}";

					//var download = '<a style="float: right;" class="btn btn-danger" href="' + pdf + '/' + id + '">Download PDF</a>';

					//document.getElementById('pdf').innerHTML = download;

				} else {

					var message = '<p style="font-family:Arial, Helvetica, sans-serif; font-size: 25px;"><strong>SCANNER GAGAL!</p> <strong><p style="font-family:Arial, Helvetica, sans-serif"><strong>(QRCode Sudah Terpakai)</strong></p>';

					document.getElementById('isi').innerHTML = message;

					//var download = '';

					//document.getElementById('pdf').innerHTML = download;
				}

			}
		});
	});

	Instascan.Camera.getCameras().then(function(cameras) {
		if (cameras.length > 0) {
			var selectedCam = cameras[0];
			$.each(cameras, (i, c) => {
				if (c.name.indexOf('back') != -1) {
					selectedCam = c;
					return false;
				}
			});

			scanner.start(selectedCam);
		} else {
			console.error('No cameras found.');
		}
	}).catch(function(e) {
		console.error(e);
	});
</script>
@endsection