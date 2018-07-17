
                    
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->

    <script src="<?php echo $this->asset?>vendor/jquery/jquery.min.js"></script>
    <script src="http://jcrop-cdn.tapmodo.com/v0.9.12/js/jquery.Jcrop.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->asset?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $this->asset?>vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo $this->asset?>vendor/raphael/raphael.min.js"></script>
    <script src="<?php echo $this->asset?>vendor/morrisjs/morris.min.js"></script>
    <script src="<?php echo $this->asset?>data/morris-data.js"></script>

    <script src="<?php echo $this->asset?>vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $this->asset?>vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $this->asset?>vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $this->asset?>dist/js/sb-admin-2.js"></script>
    <script>
        $(document).ready(function() {
       

            $('#dataTables-example').DataTable({
                responsive: true
            });

            $('#imageselect').hide();
            $('#ivideoselect').hide();
            $('#select').on('change', function() {
                
                if($('#select option:selected').val() != ""){
                  
                   
                    $('#imageselect').fadeIn(1000);
                    $('#imageselect').html('<br><img id="target" class="img-responsive" src="http://localhost/daw2017/mickaelbraz/view/img/'+$('#select option:selected').text()+'"><br><br>');


                   
                            
                } else {
                    $('#imageselect').fadeOut(1000);

                    var blow = function() {
                        $('#imageselect').html('');
                    };

                    setTimeout(blow, 1000);   
                }
                        

               
            });

            $('#selectvid').on('change', function() {
                
                if($('#selectvid option:selected').val() != ""){
                  
                   
                    $('#videoselect').fadeIn(1000);
                    $('#videoselect').html('<br><iframe width="700" height="400" src="https://www.youtube.com/embed/'+$('#selectvid option:selected').text()+'?rel=0&arp;autoplay=1 " frameborder="0" allowfullscreen ></iframe><br><br>');

                   
                            
                } else {
                    $('#imageselect').fadeOut(1000);

                    var blow = function() {
                        $('#imageselect').html('');
                    }

                    setTimeout(blow, 1000);
                }
                        

               
            });

          

        });
    </script>

            
</body>

</html>