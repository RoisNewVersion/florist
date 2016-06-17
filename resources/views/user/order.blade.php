@extends('layout.layoutuser.default')
@section('isi')
<div id="content">
	<div class="container">
		<div class="col-md-3">
			<div id="ket_bunga">
				
			</div>
		</div>
		<div class="col-md-6">
			<div class="box">
				<h2>DATA PEMESANAN BUNGA</h2>
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<form action="{{url('order')}}" method="post">
					{!!csrf_field()!!}
					<div class="form-group">
						<label for="jenisbunga">Kode bunga / Pilih kode bunga untuk memilih produk</label>
						<select id="kode_bg" name="kode_bg" class="form-control">
							<option>Pilih kode bunga</option>
							@foreach($list_bunga as $bunga)
							<option value="{{$bunga['id_produk']}}">{{$bunga['kode_bunga']}}</option>
							@endforeach
						</select>
					</div>
					
					<div class="form-group">
						<label for="keterangan">Tulis Keterangan</label>
						<input type="text" name="ket_bg" class="form-control" id="">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat Kirim</label>
						<input type="text" name="alamat_kirim" class="form-control" id="">
					</div>
					<div class="form-group">
						<label for="telp">No.Telp Penerima Bunga</label>
						<input type="text" name="no_telp_pen" class="form-control" id="text">
					</div>
					<div class="form-group">
						<label for="tanggal">Tanggal Pengiriman</label>
						<input type="text" name="tgl_kirim" class="form-control" id="tgl_kirim">
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> KIRIM</button>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</div>
@stop()

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		// datepicker
		$('#tgl_kirim').datepicker({
			format: 'yyyy-mm-dd',
		}).on('changeDate', function(e){
			$(this).datepicker('hide');
		});
		// on change kode bunga
		$('#kode_bg').change(function(event) {
			var kb = $('#kode_bg').val();
			$.getJSON('{{url('ajax/getkodebg')}}', {id_produk: kb}, function(json, textStatus) {
				// console.log(json);
				var ket = '<h3>Keterangan bunga</h3>'
				+'<p><b>Nama produk</b> : '+json.nama_produk+'</p>'
				+'<p><b>Keterangan bunga</b> : '+json.keterangan_bunga+'</p>'
				+'<p><b>Harga</b> : '+json.harga_bunga+'</p>';
				// tempel ke keterangan
				$('#ket_bunga').append(ket);
			});
		});
	});
</script>
@stop