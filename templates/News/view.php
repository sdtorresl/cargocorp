<?php

use Cake\I18n\I18n;
?>

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

                <article class="article-body">
                    <p class="date">
                        <?= $article->fecha_creacion ?>
                    </p>

                    <p class="headline">
                        <?= I18n::getLocale() == 'en_US' ? $article->descripcion_corta_EN : $article->descripcion_corta_ES ?>
                    </p>

                    <figure class="article-image">
                        <?= $this->Html->image($article->image, ['alt' => $article->titulo_ES, 'class' => "w-100"]); ?>
                    </figure>

                    <p class="article-text">
                        <?= I18n::getLocale() == 'en_US' ? $article->descripcion_larga_EN : $article->descripcion_larga_ES ?>
                    </p>
                </article>
            </div>

            <?= $cell = $this->cell('MostRead', [$article->id_categoria, [$article->id_blog]]); ?>
        </div>
    </div>
</section>

<?= $cell = $this->cell('Related', [$article->id_categoria, [$article->id_blog]]); ?>
