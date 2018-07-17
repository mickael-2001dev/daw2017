
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-newspaper-o fa-fw"></i> Notícias</a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo $this->base_url?>AdminNews/addNews">Cadastrar Notícias</a></li>
                                <li><a href="<?php echo $this->base_url?>AdminNews/selectImage">Selecionar Imagem</a></li>
                                <li><a href="<?php echo $this->base_url?>AdminNews/selectVideo">Selecionar Videos</a></li>
                                <li><a href="<?php echo $this->base_url?>AdminNews">Listar Notícias</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-image fa-fw"></i> Imagens</a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo $this->base_url?>AdminImagem/addImagens">Cadastrar Imagens</a></li>
                                <li> <a href="<?php echo $this->base_url?>AdminImagem">Listar Imagens</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-play fa-fw"></i> Videos</a>
                            <ul class="nav nav-second-level">
                                <li><a href="<?php echo $this->base_url?>AdminVideos/addVideos">Cadastrar Videos</a></li>
                                <li><a href="<?php echo $this->base_url?>AdminVideos">Listar Videos</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>