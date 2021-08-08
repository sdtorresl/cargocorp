<?php

use Cake\I18n\I18n;

$langEn = I18n::getLocale() == 'en_US';
?>
<section class="nuestros-productos">
    <div class="title-box d-flex justify-content-center">
        <h3 class="title-n d-flex">
            <?= __('Nuestros productos') ?>
        </h3>
    </div>
    <div class="container">
        <div class="products-slider">
            <?php foreach ($products as $product) : ?>
                <?php $title = $langEn ? $product->titulo_EN : $product->titulo_ES; ?>
                <div class="d-inline-flex justify-content-center ">
                    <div class="white-background pb-4">
                        <figure>
                            <?= $this->Html->image($product->imagen, ['alt' => $title, 'class' => 'image-slide']); ?>
                        </figure>
                        <div class="pl-4 pr-4">
                            <p class="title-slide">
                                <?= $title ?>
                            </p>
                            <p class="text-slide">
                                <?= $langEn ? $product->descripcion_corta_EN : $product->descripcion_corta_ES ?>
                            </p>
                            <?= $this->Html->link(__('Leer más'), ['controller' => 'products', 'action' => 'view', $product->id], ['class' => 'slide-link']) ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
