

    <!-- Intro Header -->

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contato</h2>
                <p>Fale conosco e siga-nos nas nossas redes sociais!</p>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
                 <div class="col-lg-12">
                    <?php if (isset($data['msg'])): ?>
                        <p class="contact-msg"><?php echo $data['msg'] ?></p>
                    <?php endif ?>
                    </div>
                 <div class="col-lg-8 col-lg-offset-2">
                    <p>Deseja Mandar uma mensagem?</p>
                   <form method="post">
                        <div class="form-group">
                            <input class="form-control custom-form" type="email" name="ms_mail" placeholder="Seu Email" required>
                        </div>
                        <div class="form-group">
                           <textarea class="form-control custom-form" placeholder="Sua mensagem" name="msg"></textarea>
                        </div>
                        <div class="form-group">
                              <input type="submit" class="btn btn-default btn-lg btn-block" name="send" value="Enviar">
                        </div>
                    </form> 
                   
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <p>Ou deseja receber todas noticias por Email?</p>
                   <form method="post">
                        <div class="form-group">
                            <input class="form-control custom-form" type="email" name="mail" placeholder="Seu Email" required>
                        </div>
                        <div class="form-group">
                              <input type="submit" class="btn btn-default btn-lg btn-block" name="add" value="Cadastrar Email">
                        </div>
                    </form> 
                   
                </div>
               
            </div>
        </div>
    </section>

    <!-- Map Section -->

  