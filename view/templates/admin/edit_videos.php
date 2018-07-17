    

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Alterar Videos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Alterar Video <?php echo $data['video']->getIdvideo(); ?>
                        </div>
                        <div class="panel-body">
                            <form method="post" role="form" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Video: </label>
                                    <input type="text" name="video" value="<?php echo $data['video']->getLinkvideo(); ?>" class="form-control">
                                    <p class="help-block">Coloque o código do video</p>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" name="add">
                                    <input type="reset" class="btn btn-default">
                                </div>

                            </form>
                            <?php if($data['msg']): ?>
                            <div class="alert alert-danger">
                                <?php echo $data['msg']; ?>
                                <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            </div>
                            <?php endif; ?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
              
            
