  <?php if($data['msg']): ?>
        <div class="alert alert-success">
        <?php echo $data['msg']; ?>
        <a href="<?php echo $this->base_url.''.$data['link']?>">Voltar</a>
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        </div>
  <?php endif; ?>