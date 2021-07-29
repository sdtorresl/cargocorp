<section class="article-picture">
    <figure>
        <?= $this->Html->image('c.png', ['alt' => 'containers-image-background']); ?>
    </figure>
</section>

<section class="article container p-0 mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-11 col-md-1 col-lg-1 col-xl-1 p-0">
                <div id="social-media-container">
                    <p id="social-media">
                        <?= __('Compartir') ?>
                    </p>
                    <div class="icons-container">
                        <div id="facebook" class="social-media-icons">
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                        <div id="twitter" class="social-media-icons">
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <div id="email" class="social-media-icons">
                            <a href="#">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                        <div id="linkedin" class="social-media-icons">
                            <a href="#">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-6">
                <div>
                    <h1 class="article-title">
                        <?= $article->titulo_notificacion_ES ?>
                    </h1>
                </div>

                <article class="article-text">
                    <p class="headline"><?= $article->descripcion_corta_ES ?></p>

                    <p class="article-p"><?= $article->descripcion_larga_ES ?></p>
                </article>
            </div>

            <div class="col-11 col-sm-11 col-md-4 col-lg-4 col-xl-4">
                <div class="row justify-content-center">
                    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11" id="transparent-grid"></div>
                    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 pt-5 pb-5" <aside>
                        <div class="d-flex justify-content-center" id="justify-left">
                            <h3 class="trititle d-inline-flex justify-content-center" id="aside-title">
                                lo más leído
                            </h3>
                        </div>
                        <div class=" container-news grey-background">
                            <figure>
                                <?= $this->Html->image('containers-image.png', ['alt' => 'containers-image', 'class' => "w-100"]); ?>
                            </figure>
                            <div class="news-text">
                                <p class="noticias-fecha pt-3">
                                    16 de junio 2021
                                </p>
                                <h5 class="noticias-title">
                                    Pérdidas millonarias en el transporte de carga en Colombia
                                </h5>
                                <p class="noticias-text">
                                    En el primer Q del 2021 se han perdido 1.127 contenedores de transporte marítimo, estimando una perdida en mercancía equivalente a unos 54 millones de dólares aproximadamente.
                                </p>
                                <a href="#" class="noticias-link">Leer más</a>
                            </div>
                        </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $cell = $this->cell('Related', [$article->id_categoria, [$article->id_blog]]); ?>
