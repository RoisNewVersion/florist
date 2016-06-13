@extends('layout.layoutadmin.default')

@section('isi')
<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		
		<div class="clearfix"></div>

		<div class="row">

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel" >
					<div class="x_title">
						<h2>Tambah Produk</h2>
						<ul class="nav navbar-right panel_toolbox">
							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
							</li>
							
							<li><a class="close-link"><i class="fa fa-close"></i></a>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
					<div class="x_content">
						<div class="col-md-5">
							
							{!! Form::open(['url'=>'superuser/produk', 'method'=>'post', 'class'=>'form-horizontal', 'files'=>true]) !!}
									<div class="form-group">
									  <label for="nama_produk">Nama produk</label>
									  {!!Form::input('text','nama_produk', old('nama_produk'), ['id'=>'nama_produk', 'class'=>'form-control'])!!}
									  {!!$errors->first('nama_produk', '<p class="help-block">:message</p>')!!}
									</div>
									
									<div class="form-group">
									  <label for="keterangan_bunga">Keterangan bunga</label>
									  {!!Form::input('text','keterangan_bunga', old('keterangan_bunga'), ['id'=>'keterangan_bunga', 'class'=>'form-control'])!!}
									  {!!$errors->first('nama_produk', '<p class="help-block">:message</p>')!!}
									</div>

									<div class="form-group">
									  <label for="kode_bunga">Kode bunga</label>
									  {!!Form::input('text','kode_bunga', old('kode_bunga'), ['id'=>'kode_bunga', 'class'=>'form-control'])!!}
									  {!!$errors->first('kode_bunga', '<p class="help-block">:message</p>')!!}
									</div>

									<div class="form-group">
									  <label for="harga_bunga">Harga bunga</label>
									  {!!Form::input('text','harga_bunga', old('harga_bunga'), ['id'=>'harga_bunga', 'class'=>'form-control'])!!}
									  {!!$errors->first('harga_bunga', '<p class="help-block">:message</p>')!!}
									</div>

									<div class="form-group">
									  <label for="harga_bunga">Kategori</label>
									  {!! Form::select('kategori', $kategori,  null, ['id'=>'kategori', 'class'=>'form-control']) !!}
									  {!!$errors->first('harga_bunga', '<p class="help-block">:message</p>')!!}
									</div>

									<div class="form-group">
									  <label for="harga_bunga">Gambar bunga</label>
									  {!!Form::file('gambar', ['id'=>'gambar', 'class'=>'form-control'])!!}
									  {!!$errors->first('gambar', '<p class="help-block">:message</p>')!!}
									</div>
									
							
									<div class="form-group">
										<div class="col-sm-10 col-sm-offset-2">
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>
									</div>
							
							{!! Form::close() !!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /page content -->
@stop()
