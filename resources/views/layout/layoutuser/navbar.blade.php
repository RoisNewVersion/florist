

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-collapse collapse" id="navigation">
                <ul class="nav navbar-nav navbar-left">
                    <li class=""><a href="{{url('/')}}">Home</a>
                    </li>
                    <!-- <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">View <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Hand Bouquet</h5>
                                            <ul>
                                                <li><a href="{{url('kategori/1')}}">BUNGA SEGAR</a>
                                                </li>
                                                <li><a href="{{url('kategori/2')}}">BUNGA KAIN</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Bouquet</h5>
                                            <ul>
                                                <li><a href="{{url('kategori/3')}}">BUNGA RANGKIAN</a>
                                                </li>
                                                <li><a href="{{url('kategori/4')}}">BUNGA STANDING</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Karangan Papan Bunga</h5>
                                            <ul>
                                                <li><a href="{{url('kategori/5')}}">BIRTHDAY</a>
                                                </li>
                                                <li><a href="{{url('kategori/6')}}">CONGRATULATIONS</a>
                                                </li>
                                                <li><a href="{{url('kategori/7')}}">DUKA CITA</a>
                                                </li>
                                                <li><a href="{{url('kategori/8')}}">WEDDING</a>
                                                </li>
                                            </ul>
                                        </div>
                                
                            </li>
                        </ul>
                    </li> -->

                    <li class=""><a href="{{url('order')}}">Order</a>
                    <li class=""><a href="#" data-toggle="modal" data-target="#about-us-modal">About Us</a>
                    <li class=""><a href="#" data-toggle="modal" data-target="#syarat-modal">Syarat & Ketentuan</a>
                </ul>
            </div>
            <!--/.nav-collapse -->

            <!-- modal about us -->
            <div class="modal fade" id="about-us-modal" tabindex="-1" role="dialog" aria-labelledby="About" aria-hidden="true">
                <div class="modal-dialog modal-md">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="About">About Us</h4>
                        </div>
                        <div class="modal-body">
                            <p><b>IDA FLORIST</b> menjual berbagai bunga yang dapat di rangkai
                            dalam tiga kategori yaitu Bouquet, Hand Bouquet dan Karangan Bunga. <b>Bouquet </b> adalah karangan bunga di ruangan seperi standing flower atau bunga hias di meja. <b>Karangan bunga </b> yaitu papan bunga yang dilengkapi dengan styrofoam dengan konsep sesuai pemesanan, seperti duka cita, wedding, mau[un ucapan selamat. sedangkan <b>Hand Bouquet </b> adalah karangan bunga yang dibungkus dengan plastik dan tisu.</p>
                            <p><b>IDA FLORIST</b> terletak di kalisari kota semarang, tepatnya dijalan Dr. Sutomo depan RSt. Tentara sakti wira tantama, kami menerima pemesanan dalam maupun luar kota, transaksi di luar kota hanya beberapa kota saja, seperti Kendal, Demak, Kudus.</p>
                            <p class="text-center text-muted"><a href="{!! route('register')!!}"><strong>Register now</strong></a></p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->

            <!-- modal syarat -->
            <div class="modal fade" id="syarat-modal" tabindex="-1" role="dialog" aria-labelledby="Syarat" aria-hidden="true">
                <div class="modal-dialog modal-md">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="Syarat">Syarat</h4>
                        </div>
                        <div class="modal-body">
                            
                            <p>Silahkan register trlebih dahulu untuk dapat login. mohon isi data diri dengan benar. setelah register anda bisa login untuk meneruskan pemesanan.</p>
                            <p>Contoh gambar bisa dilihat di menu HOME, gambar disertai kode dan harga</p>
                            <p>Terima Kasih</p>
                            <p class="text-center text-muted"><a href="{!! route('register')!!}"><strong>Register now</strong></a></p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->