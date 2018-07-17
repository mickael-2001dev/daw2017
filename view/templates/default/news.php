<section id="noticias" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-12">
                <h2>Notícias</h2>
                <p>Só notícias relacioadas com o nosso Herói e Vigilante favorito</p>
                <?php foreach ($data['news'] as $key): ?>
                    <div class="col-lg-3 noticia">
                        <!--<img src="<?php //hhjhuuhlklhl  echo $this->asset.''.$key['img']?>" class="img-responsive">!-->
                        <p><?php echo $key->getTitlenews(); ?></p>
                        <?php if($key->getListimagens()): ?>
                        <?php $img = $key->getListimagens(); ?>
                            <img src="<?php echo $this->url.'view/img/'.$img[0]->getLocalImage()?>" class="img-responsive">        
                        <?php endif; ?>
                        <a href="<?php echo $this->base_url?>Noticias\view_news\<?php echo $key->getIdnews()?> "> <button class="btn btn-small btn-default">Leia Mais</button></a>
                    </div>
                <?php endforeach ?>
               
            </div>
        </div>
</section>