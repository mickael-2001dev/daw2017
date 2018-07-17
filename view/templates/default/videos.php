 <!-- About Section -->
   <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-12">
                <h2>Videos</h2>
                <div id="js1">
	                <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:800px;overflow:hidden;visibility:hidden;">
	                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:800px;overflow:hidden;">
	                        <a data-u="any" href="http://www.jssor.com" style="display:none">Full Width Slider</a>
                        <?php foreach($data['video'] as $row ):?>
	                        <div><iframe width="1600" height="800" src="https://www.youtube.com/embed/<?php echo $row->getLinkvideo() ?>" frameborder="0" allowfullscreen></iframe></div>
	                      
                        <?php endforeach; ?>
	                    </div>
	                    <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
	                    <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
	                </div>
             </div>
        </div>
    </section>

  <footer>
        <div class="container text-center">
            <p class="foot-text">Copyright &copy; Batclub 2017</p>
                <br>
                <a href="https://www.facebook.com/mickael.brazdesouza" class="social" style="text-decoration: none;">
                        <span class="fa-stack fa-lg circle">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <a href="https://twitter.com/space_mika" class="social" style="text-decoration: none">
                        <span class="fa-stack fa-lg circle">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
                    <a href="#" style="text-decoration: none;" class="social">
                        <span class="fa-stack fa-lg circle">
                            <i class="fa fa-circle fa-stack-2x"></i>
                            <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                        </span>
                    </a>
            </div>
           
    </footer>
    <footer class="dev text-center">
        <p class="foot-text">Desenvolvido por Mickael Braz de Souza</p>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

    <script src="<?php echo $this->asset ?>js/jssor.slider.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: false,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>

    <script type="text/javascript">jssor_1_slider_init();</script>
</body>

</html>

