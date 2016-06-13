@extends('layout.layoutuser.default')
@section('isi')

<div id="all">

        <div id="content">

            <div class="container">
            <?php
            /*if (Auth::check()) {
                echo Auth::user()->name;
                echo "Wkwkwk";
            }else{
                echo "hahaha";
                print_r(Auth::user());
            }*/
            ?>
            
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src={!! asset("assetuser/img/bunga1.jpg") !!} alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src={!! asset("assetuser/img/bunga2.jpg" ) !!} alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src={!! asset("assetuser/img/bunga3.jpg") !!} alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src={!! asset("assetuser/img/bunga4.jpg") !!} alt="">
                        </div>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>

            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->
            <div id="advantages">

                <div class="container">
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <h3><a href="#">BOUQUET</a></h3>
                                <p>Karangan bunga untuk hiasan meja (bunga stand)</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <h3><a href="#">HAND BOUQUET</a></h3>
                                <p>Rangakaian dengan menggabungkan beberapa bunga yang di bungkus dengan tisu dan plastik.</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height clickable">
                                <h3><a href="#">KARANGAN BUNGA</a></h3>
                                <p>Papan bunga untuk ucapan selamat maupun duka cita.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.container -->

            </div>
            <!-- /#advantages -->

            <!-- *** ADVANTAGES END *** -->

            <!-- *** HOT PRODUCT SLIDESHOW ***
 _________________________________________________________ -->
            <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="product-slider">

                        @foreach($data as $bunga)
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="{{route('produk', ['id'=>$bunga->id_produk])}}">
                                                <img src={{ asset('assetuser/img/'.$bunga->img)}} alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="{{route('produk', ['id'=>$bunga->id_produk])}}">
                                                <img src={{ asset('assetuser/img/'.$bunga->img) }} alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{route('produk', ['id'=>$bunga->id_produk])}}" class="invisible">
                                    <img src={{ asset('assetuser/img/'.$bunga->img)}} alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <p class="price">{{'Rp '. number_format($bunga->harga_bunga)}}</p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>
                        @endforeach
                        <!-- /.col-md-4 -->

                    </div>
                    <!-- /.product-slider -->
                </div>
                <!-- /.container -->

            </div>
            <!-- /#hot -->

            <!-- *** HOT END *** -->
            
            

        </div>
        <!-- /#content -->

@stop()