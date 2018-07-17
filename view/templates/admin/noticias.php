    

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
                           Noticias
                        </div>
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Titulo</th>
                                        <th>Resumo do Artigo</th>
                                        <th>Artigo Prinicipal</th>
                                        <th>Data</th>
                                        <th class="text-center"><i class="fa fa-pencil"></i></th>
                                        <th class="text-center"><i class="fa fa-remove"></i></th>
                                        <th>Ver</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $item = 0;?>
                                  <?php foreach($data['news'] as $news):?> 
                                    <?php $date = new DateTime($news->getDatenews());?>
                                    <tr class="<?php echo ($item%2==0)?"even":"odd"; ?>">
                                        <td><?php echo $news->getIdnews() ?></td>
                                        <td><?php echo $news->getTitlenews() ?></td>
                                        <td><?php echo $news->getMainarticle() ?></td>
                                        <td><?php echo substr($news->getArticlenews(),0,120)." ..."?></td>
                                        <td><?php echo $date->format('d/m/y')?></td>
                                        <td><a href="<?php echo $this->base_url?>AdminNews/updateNews/<?php echo $news->getIdnews()?>"<button class="btn btn-warning" title="Alterar"><i class="fa fa-pencil"></i></button></a></td>
                                        <td><a href="<?php echo $this->base_url?>AdminNews/delete/<?php echo $news->getIdnews()?>"><button class="btn btn-danger" title="Deletar"><i class="fa fa-remove"></i></button></a></td>
                                        <td><a href="<?php echo $this->base_url?>Noticias/view_news/<?php echo $news->getIdnews()?>"><button class="btn btn-info"><i class="fa fa-arrow-circle-right"></i></button></a></td>
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


              
            
