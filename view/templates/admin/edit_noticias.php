        
        <div id="page-wrapper" class="news">
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
                            Alterar Notícia <?php echo $data['news']->getIdnews(); ?>
                        </div>
                        <div class="panel-body">
                            <form method="post" role="form" id="newsForm">
                                <div class="form-group">
                                    <label>Título: </label>
                                    <textarea class="form-control" name="titlenews" rows="3"><?php echo $data['news']->getTitlenews(); ?></textarea>
                                    <p class="help-block">Informe o título</p>
                                </div>
                                <div class="form-group">
                                    <label>Artigo: </label>
                                    <textarea class="form-control" name="articlenews" rows="5"><?php echo $data['news']->getArticlenews(); ?></textarea>
                                    <p class="help-block">Informe o artigo</p>
                                </div>
                                <div class="form-group">
                                    <label>Data: </label>
                                    <input type="date" name="datenews" class="form-control" value="<?php echo $data['news']->getDatenews(); ?>">
                                    <p class="help-block">Informe a data</p>
                                </div>
                                <div class="form-group">
                                    <label>Resumo do Artigo: </label>
                                    <textarea class="form-control" name="mainarticle" rows="4"><?php echo $data['news']->getMainarticle(); ?></textarea>
                                    <p class="help-block">Informe o resumo do artigo</p>
                                </div>
                              
                                <div class="form-group">
                                    <input type="submit" class="btn btn-warning" name="add">
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
     