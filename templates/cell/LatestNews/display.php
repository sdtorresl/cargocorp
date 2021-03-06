<?php

use Cake\I18n\I18n;
?>

<section class="noticias">
    <div class="d-flex justify-content-center pb-5">
        <h3 class="uppercase-title d-inline-flex js-scroll fade-in-botton">
            <?= __('Noticias de interés') ?>
        </h3>
    </div>
    <div id="featured" class="container block-g">
        <?php foreach ($news as $value) : ?>
            <div class="featured-news my-md-0 my-3 js-scroll fade-in-botton">
                <div class="picture-container">

                    <?php $title = I18n::getLocale() == 'en_US' ? $value->titulo_EN : $value->titulo_ES; ?>
                    <?php $shortDescription = I18n::getLocale() == 'en_US' ? $value->descripcion_corta_EN : $value->descripcion_corta_ES; ?>

                    <figure class="picture">
                        <?= $this->Html->image($value->image, ['alt' => $title, 'class' => "image-news"]); ?>
                    </figure>
                </div>

                <div class="summary">
                    <p class="noticias-fecha">
                        <?= $this->Time->format($value->fecha_creacion); ?>
                    </p>
                    <h3 class="noticias-title">
                        <?= $title ?>
                    </h3>
                    <p class="noticias-text">
                        <?= $shortDescription ?>
                    </p>
                    <?= $this->Html->link(
                        __('Leer más'),
                        ['controller' => 'News', 'action' => 'view', $value->titulo_pagina],
                        ['class' => 'noticias-link']
                    ); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="buttom-noticias">
        <?= $this->Html->link(
            __('Ver todas las noticias'),
            ['controller' => 'News', 'action' => 'index'],
            ['class' => 'bottom-button']
        ); ?>
    </div>
</section>
