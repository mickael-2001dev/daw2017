    

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Administração Videos</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Videos
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Link</th>
                                        <th>Alterar</th>
                                        <th>Remover</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $item = 0;?>
                                  <?php foreach($data['video'] as $videos):?> 
                                    <tr class="<?php echo ($item%2==0)?"even":"odd"; ?>">
                                        <td><?php echo $videos->getIdvideo() ?></td>
                                        <td><?php echo $videos->getLinkvideo() ?></th>
                                        <td class="text-center"><a href="<?php $this->base_url ?>AdminVideos/updateVideos/<?php echo $videos->getIdvideo() ?>"><button class="btn btn-warning"><i class="fa fa-pencil"></i></button></a></td>
                                        <td class="text-center"><a href="<?php $this->base_url ?>AdminVideos/delete/<?php echo $videos->getIdvideo() ?>"><button class="btn btn-danger"><i class="fa fa-remove"></i></button></a></td>
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
              
            
