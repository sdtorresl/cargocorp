<?php

use Cake\I18n\I18n;
?>

<section class="boletin" id="boletin-enlace">
    <div class="d-flex justify-content-center pseudo-lines">
        <h3 class="d-inline-flex boletin-title px-3">
            <?= I18n::getLocale() == 'en_US' ? $category->nombre_EN : $category->nombre_ES ?>
        </h3>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($news as $key => $value) : ?>
                <div class="col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 d-flex justify-content-center my-2">
                    <div class="white-background boletin-slides pb-3 js-scroll fade-in-botton scrolled">
                        <figure>
                            <?= $this->Html->image($value->image, ['alt' => $value->titulo_ES, 'class' => "image-slide boletin-image"]); ?>
                        </figure>
                        <div class="news-text pt-3">
                            <p class="noticias-fecha">
                                <?= $value->fecha_creacion ?>
                            </p>
                            <h3 class="noticias-title">
                                <?= I18n::getLocale() == 'en_US' ? $value->titulo_EN : $value->titulo_ES ?>
                            </h3>
                            <p class="noticias-text">
                                <?= I18n::getLocale() == 'en_US' ? $value->descripcion_corta_EN : $value->descripcion_corta_ES ?>
                            </p>
                            <?= $this->Html->link(
                                __('Leer más'),
                                ['controller' => 'News', 'action' => 'view', $value->titulo_pagina],
                                ['class' => 'noticias-link']
                            ); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
