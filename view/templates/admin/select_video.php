       <?php $news = $data['news']; $video = $data['video'] ?>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Administração Notícias</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Selecionar Video
                        </div>
                        <div class="panel-body">
                            <form method="post" role="form">

                                <div class="form-group">
                                    <label>Noticia: </label>
                                    <select class="form-control" name="news">
                                        <option value="">Selecione uma Noticia</option>
                                        <?php foreach ($news as $key): ?>
                                            <option  value="<?php echo $key->getIdnews();?>"><?php echo $key->getTitlenews()?></option>
                                        <?php endforeach; ?>
                                    </select>
                                   <p class="help-block">Selecione a noticia correspondente a imagem</p>
                                </div>
                                    
                                <div class="form-group">
                                    <label>Video: </label>
                                    <select class="form-control" id="selectvid" name="video">
                                        <option value="">Selecione um Video</option>
                                        <?php foreach ($video as $key): ?>
                                            <option  value="<?php echo $key->getIdvideo();?>"><?php echo $key->getLinkvideo()?></option>
                                        <?php endforeach; ?>
                                    </select>
                                   <p class="help-block">Selecione o video correspondente a noticia</p>
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
                        
                        <div class="panel-body">
                            <div class="col-lg-12" id="videoselect">
                               
                            </div>
                        </div>  
                        <!-- /.panel-body -->
                       
                    </div>
                    <!-- /.panel -->
                    
                </div>
                <!-- /.col-lg-12 -->
             
            </div>

              
            
