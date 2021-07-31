<?php
use Cake\I18n\I18n;
?>

<section class="noticias">
    <div class="d-flex justify-content-center ">
        <h3 class="trititle d-inline-flex">
            Noticias de interés
        </h3>
    </div>
    <div id="featured" class="container block-g">
        <?php foreach  ($news as $value) : ?> 
            <div class="featured-news">
                <div class="picture-container">
                    <figure class="picture">
                    <?= $this->Html->image($value->image, ['alt' => $value->titulo_ES, 'class' => "image-news"]); ?>   
                    </figure>
                </div>
            
                <div class="summary">
                    <p class="noticias-fecha">  
                        <?=$this->Time->format($value->fecha_creacion);?>   
                    </p>
                    <h3 class="noticias-title"> 
                        <?= $value->titulo_ES ?> 
                    </h3>
                    <p class="noticias-text">
                                <?= $value->descripcion_corta_ES ?>
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
        <a href="#" class="bottom-button">Ver todas las noticias</a> 
    </div>
</section>
