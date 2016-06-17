@extends('layout.layoutuser.default')
@section('isi')
<div id="all">

	<div id="content">
		<div class="container">

			<div class="row products">
				@if($kategori->count()>0)
					@foreach($kategori as $kat)
					<div class="col-md-4 col-sm-6">
						<div class="product">
							<div class="flip-container">
								<div class="flipper">
									<div class="front">
										<a href="{{url('produk/'.$kat->id_produk)}}">
											<img src="{{asset('assetuser/img/'.$kat->img)}}" alt="" class="img-responsive">
										</a>
									</div>
								</div>
							</div>
							<a href="{{url('produk/'.$kat->id_produk)}}">
								<img src="{{asset('assetuser/img/'.$kat->img)}}" alt="" class="img-responsive">
							</a>
							<div class="text">
								<h3><a href="{{url('produk/'.$kat->id_produk)}}"></a></h3>
								<p class="price">{{number_format($kat->harga_bunga)}}</p>
								<p class="buttons">
									<a href="{{url('produk/'.$kat->id_produk)}}" class="btn btn-default">View detail</a>
									<!-- <a href="{{url('order/'.$kat->id_produk)}}" class="btn btn-primary"> <i class="fa fa-shopping-cart"></i> View detail</a> -->
								</p>
							</div>
							<!-- /.text -->
						</div>
						<!-- /.product -->
					</div>
					@endforeach
				@else
					<div class="col-md-4 col-sm-6">
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="product">
							<center><h3>Tidak ada produk</h3></center>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
					</div>
				@endif
				<!-- /.col-md-4 -->
			</div>
			<!-- /.products -->
		</div>
	</div>
	<!-- /#all -->
	@stop()