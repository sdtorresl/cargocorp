<?php

use \Cake\I18n\I18n;

$featuredNews = array_slice($news->toArray(), 0, 3);
$totalNews = array_slice($news->toArray(), 3, count($news->toArray()));
?>

<section class="filtro">
    <div>
        <h2 class="f-title">
            <?= __('Filtra tus noticias') ?>
        </h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($newsCategories as $newsCategory) : ?>
                <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 justify-content-center p-0">
                    <div class="button-container my-3 <?= $currentCategory->id_categoria == $newsCategory->id_categoria ? 'active' : '' ?>">
                        <?php $title = I18n::getLocale() == 'en_US' ?  $newsCategory->nombre_EN : $newsCategory->nombre_ES; ?> </a>
                        <?= $this->Html->link($title, ['controller' => 'News', 'action' => 'index', $newsCategory->id_categoria], ['class' => 'link-button']) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="boletin" id="boletin-enlace">
    <div class="d-flex justify-content-center pseudo-lines">
        <h3 class="d-inline-flex boletin-title px-3">
            <?= I18n::getLocale() == 'en_US' ? $currentCategory->nombre_EN : $currentCategory->nombre_ES ?>
        </h3>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($featuredNews as $newsItem) : ?>
                <div class="col-11 col-sm-11 col-md-11 col-lg-4 col-xl-4 d-flex justify-content-center my-2 p-desktop">
                    <div class="white-background boletin-slides pb-3">
                        <figure>
                            <?= $this->Html->image($newsItem->image, ['alt' => $newsItem->titulo_ES, 'class' => "image-slide boletin-image"]); ?>
                        </figure>
                        <div class="news-text pt-3">
                            <p class="noticias-fecha">
                                <?= $newsItem->fecha_creacion ?>
                            </p>
                            <h3 class="noticias-title">
                                <?= I18n::getLocale() == 'en_US' ? $newsItem->titulo_EN : $newsItem->titulo_ES ?>
                            </h3>
                            <p class="noticias-text">
                                <?= I18n::getLocale() == 'en_US' ? $newsItem->descripcion_corta_EN : $newsItem->descripcion_corta_ES ?>
                            </p>
                            <?= $this->Html->link(
                                __('Leer más'),
                                ['controller' => 'News', 'action' => 'view', $newsItem->titulo_pagina],
                                ['class' => 'noticias-link']
                            ); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="todas-las-noticias" id="todas-las-noticias-enlace">
    <div class="container">
        <div class="row justify-content-center">
            <?php foreach ($totalNews as $newsItem) : ?>
                <div class="col-11 col-sm-11 col-md-8 col-lg-8 col-xl-8 mb-3 block-d">
                    <div class="d-flex container-news grey-background">
                        <figure class="align-content-center">
                            <?= $this->Html->image($newsItem->image, ['alt' => $newsItem->titulo_ES, 'class' => "image-news"]); ?>
                        </figure>
                        <div class="news-text pt-3">
                            <p class="noticias-fecha ">
                                <?= $this->Time->format(
                                    $newsItem->fecha_creacion,
                                    'MMMM dd, YYYY',
                                    'es_CO',
                                    'America/Bogota'
                                ); ?>
                            </p>
                            <h3 class=" noticias-title">
                                <?= I18n::getLocale() == 'en_US' ? $newsItem->titulo_EN : $newsItem->titulo_ES ?>
                            </h3>
                            <p class="noticias-text">
                                <?= I18n::getLocale() == 'en_US' ? $newsItem->descripcion_corta_EN : $newsItem->descripcion_corta_ES ?>
                            </p>
                            <?= $this->Html->link(
                                __('Leer más'),
                                ['controller' => 'News', 'action' => 'view', $newsItem->titulo_pagina],
                                ['class' => 'noticias-link']
                            ); ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <nav class="d-flex justify-content-center">
        <ul class="pagination pagination-sm">
            <?= $this->Paginator->prev('') ?>
            <?= $this->Paginator->numbers(["modulus" => 6]) ?>
            <?= $this->Paginator->next('') ?>
        </ul>
    </nav>

</section>
