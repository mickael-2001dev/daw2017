  <?php if($data['msg']): ?>
        <div class="alert alert-danger">
        <?php echo $data['msg']; ?>
            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        </div>
  <?php endif; ?>