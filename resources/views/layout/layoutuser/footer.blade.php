<!-- *** FOOTER ***
   _________________________________________________________ -->
   <div id="footer" data-animate="fadeInUp">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-4">
                <ul> 
                    <h4>IDA FLORIST</h4>
                    <li>Jl.Dr Sutomo-Kalisari</li>
                    <li>Semarang-Jawa Tengah</li>
                    <li>No.Hp: 085100235098</li>
                </ul>
            </div>
{{--             <div class="col-md-4 col-sm-4">
                <ul> 
                    <h4>IDA FLORIST</h4>
                    <li>No REK BNI xxx xxx xxx xxx an Bella bello</li>
                    <li>NO REK BRI xxxx xxx xxx xx an Dian</li>
                    <li>No.Hp: 085100235098</li>
                </ul>
            </div>
 --}}

            <h4>Follow me</h4>

            <p class="social">
                <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
            </p>

        </div>
        <!-- /.col-md-3 -->

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->
</div>
<!-- /#footer -->

<!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
        _________________________________________________________ -->
        <div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2016 IDA FLORIST-SEMARANG</p>
                    
                </div>
                <div class="col-md-6">
                <p class="pull-right">by <a href="">EKA BELLA SATYA</a> 
                    </p>
                </div>
            </div>
        </div>
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
    _________________________________________________________ -->
    <script src={!! asset("assetuser/js/jquery-1.11.0.min.js") !!}></script>
    <script src={!! asset("assetuser/js/bootstrap.min.js") !!}></script>
    <script src={!! asset("assetuser/js/jquery.cookie.js") !!}></script>
    <script src={!! asset("assetuser/js/waypoints.min.js" ) !!}></script>
    <script src={!! asset("assetuser/js/modernizr.js" ) !!}></script>
    <script src={!! asset("assetuser/js/bootstrap-hover-dropdown.js" ) !!}></script>
    <script src={!! asset("assetuser/js/owl.carousel.min.js" ) !!}></script>
    <script src={!! asset("assetuser/js/front.js") !!}></script>
    <script src={!! asset("assetuser/js/sweetalert.min.js") !!}></script>
    <script src={!! asset("assetuser/js/bootstrap-datepicker.js") !!}></script>

    @include('sweet::alert')
    
    @yield('js')
    
</body>

</html>