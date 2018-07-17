<section id="noticias" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-12">
                <h2>Notícias</h2>
                <p>Só notícias relacioadas com o nosso Herói e Vigilante favorito</p>
            </div>
                <?php foreach ($data['news'] as $key): ?>
                    <div class="col-lg-12 noticia">
                        <h3><?php echo $key->getTitleNews(); ?></h3>
                        <p><?php echo $key->getMainarticle(); ?></p>
                        <?php if($key->getListimagens()): ?>
                        <?php $img = $key->getListimagens(); ?>
                         <div class="col-lg-6 col-lg-offset-3"><img src="<?php echo $this->url.'view/img/'.$img[0]->getLocalImage()?>" class="img-responsive"></div>
                        <?php endif; ?>
                        <div class="col-lg-12"><a href="<?php echo $this->base_url?>Noticias\view_news\<?php echo $key->getIdnews()?>"><button class="btn btn-small btn-default">Leia Mais</button></a>
                        </div>
                    </div>
                <?php endforeach ?>
               
            </div>
        
</section>