    

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Administração Imagens</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Imagens
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nome</th>
                                        <th>Ver</th>
                                        <th>Editar</th>
                                        <th>Remover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $item = 0;?>
                                  <?php foreach($data['imagens'] as $imagens):?> 
                                    <tr class="<?php echo ($item%2==0)?"even":"odd"; ?>">
                                        <td><?php echo $imagens->getIdImage() ?></td>
                                        <th><?php echo $imagens->getLocalimage() ?></th>
                                        <td class="text-center"><button class="btn btn-info" data-toggle="modal" data-target="#showModal<?php echo $imagens->getIdImage() ?>"><i class="fa fa-fw fa-eye"></i></button></td>
                                        <td class="text-center"><a href="<?php $this->base_url ?>AdminImagem/updateImagens/<?php echo $imagens->getIdimage() ?>"><button class="btn btn-warning"><i class="fa fa-fw fa-pencil"></i></button></a></td>
                                         <td class="text-center"><a href="<?php $this->base_url ?>AdminImagem/delete/<?php echo $imagens->getIdimage() ?>"><button class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button></a></td>
                                    </tr>
                                    <?php $item++; ?>
                                  <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
      </div>
              
            

    <?php foreach ($data['imagens'] as $image): ?>
                <div id="delModal<?php echo $image->getIdImage()?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header modal-header-danger">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Alerta</h4>
                      </div>
                      <div class="modal-body">
                        <p>Remover Imagem <?php echo $image->getidimage(); ?>?</p>
                        <button type="button" class="btn btn-danger delete-im" value="<?php echo $image->getIdimage() ?>">Remover</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <div class="row">
                            <hr>
                            <div class="col-lg-12">
                                 <div class="resp"></div>
                            </div>
                           
                        </div>
                       
                      </div>
                       <div class="modal-footer">
                        <button type="button" class="btn btn-default close-mod">Fechar</button>
                        </div>
                    </div>

                  </div>
                </div>

                <div id="showModal<?php echo $image->getIdimage()?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header modal-header-info">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Imagem <?php echo $image->getLocalimage(); ?></h4>
                      </div>
                      <div class="modal-body">
                        <img src="<?php echo $this->url.'view/img/'.$image->getLocalimage()?>" class="img-responsive">
                      </div>
                       <div class="modal-footer">
                        <button type="button" class="btn btn-default " data-dismiss="modal">Fechar</button>
                        </div>
                    </div>

                  </div>
                </div>
            <?php endforeach; ?>
