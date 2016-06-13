@extends('layout.layoutuser.default')
@section('isi')
<div id="all">
	<div class="container">
		<div class="row" id="productMain">
			<div class="col-sm-6">
				<div id="mainImage">
					<img src="{{asset('assetuser/img/'.$produks->img)}}" alt="" class="img-responsive">
				</div>

				<!-- <div class="ribbon sale">
					<div class="theribbon">SALE</div>
					<div class="ribbon-background"></div>
				</div> -->
				<!-- /.ribbon -->

				<!-- <div class="ribbon new">
					<div class="theribbon">NEW</div>
					<div class="ribbon-background"></div>
				</div> -->
				<!-- /.ribbon -->

			</div>
			<div class="col-sm-6">
				<div class="box" id="details">
					
					<h3>Produk detail</h3>
					<h4>Nama produk : {{$produks->nama_produk}}</h4>
					<p>Kode : {{$produks->kode_bunga}}</p>
					<h4>Harga : {{$produks->harga_bunga}}</h4>
					

					<blockquote>
						<p><em>{{$produks->keterangan_bunga}}</em></p>
					</blockquote>

					<hr>
					<div class="social">
						<h4>Show it to your friends</h4>
						<p>
							<a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
							<a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
							<a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
							<a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop()