<?php

use Cake\I18n\I18n;
?>
<?php if ($mostRead != null) : ?>

    <div class="row justify-content-center">
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11" id="transparent-grid"></div>
        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 pt-5 pb-5">
            <div class="d-flex justify-content-center" id="justify-left">
                <h3 class="trititle d-inline-flex justify-content-center" id="aside-title">
                    <?= __('Lo más leído') ?>
                </h3>
            </div>
            <div class="container-news grey-background">
                <figure>
                    <?= $this->Html->image($mostRead->image, ['alt' => $mostRead->titulo_ES, 'class' => "image-slide boletin-image"]); ?>
                </figure>
                <div class="news-text">
                    <p class="noticias-fecha pt-3">
                        <?= $mostRead->fecha_creacion ?>
                    </p>
                    <h3 class="noticias-title">
                        <?= I18n::getLocale() == 'en_US' ? $mostRead->titulo_EN : $mostRead->titulo_ES ?>
                    </h3>
                    <p class="noticias-text">
                        <?= I18n::getLocale() == 'en_US' ? $mostRead->descripcion_corta_EN : $mostRead->descripcion_corta_ES ?>
                    </p>
                    <?= $this->Html->link(
                        __('Leer más'),
                        ['controller' => 'News', 'action' => 'view', $mostRead->titulo_pagina],
                        ['class' => 'noticias-link']
                    ); ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>
