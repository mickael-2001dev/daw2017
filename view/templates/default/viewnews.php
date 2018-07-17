<?php 
$news = $data['news'];
$date = new DateTime($news->getDateNews());
?>
<section id="noticias" class="container content-section text-center">
    <div class="row">
    	<div class="col-lg-12">
    		<div class="col-lg-8 col-lg-offset-2">
    			 <h1><?php echo $news->getTitlenews();?></h1>
            <?php if($news->getListimagens()): ?>
            <?php if(count($news->getListimagens()>1)): ?>
                <div id="js1" style="width: 700px;height:400px;">
                    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1600px;height:940px;overflow:hidden;visibility:hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                            <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="img/oval.svg" />
                        </div>
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:940px;overflow:hidden;">
                        <?php foreach($news->getListimagens() as $row): ?>
                            <div>
                                <img width="1600" height="920" data-u="image" src="<?php echo $this->url.'view/img/'.$row->getLocalimage()?>" />  
                            </div> 
                        <?php endforeach;?>
                           
                            
                        </div>
                        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
                        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
                    </div>
                </div>
                <br>
         


            <?php elseif(count($news->getListimagens()>1)): ?>
                <br>
    			<img src="<?php echo $this->url.'view/img/'.$row->getLocalimage()?>" class="img-responsive">
            <?php endif; ?>
            <?php endif; ?>
            </div>
    		</div>
    		<div class="col-lg-8 col-lg-offset-2">
    			<p class="text-center">
                <?php echo $news->getArticlenews() ?>
                </p>
                <div class="col-lg-8 col-lg-offset-2">
                    <p style="font-family: 10px;"><?php echo $date->format('d/m/y') ?></p>
                </div>
                <?php if($news->getListvideos()): ?>
                <?php foreach ($news->getListvideos() as $row): ?>
                <div class="col-lg-12"> <iframe width="700" height="400" src="https://www.youtube.com/embed/<?php echo $row->getLinkvideo() ?>" frameborder="0" allowfullscreen></iframe><br><br></div>
                <?php endforeach ?>
                <?php endif; ?>
    		</div>
          
    	</div>
    </div>
</section>