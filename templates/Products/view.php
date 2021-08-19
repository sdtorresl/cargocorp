<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 */

use Cake\I18n\I18n;

$englishLang = I18n::getLocale() == 'en_US';
$title = $englishLang ? $product->titulo_EN : $product->titulo_ES;
$description = $englishLang ? $product->descripcion_corta_EN : $product->descripcion_corta_ES;

$this->start('title');
echo __('Productos');
$this->end('title');

?>

<aside class="product-picture">
    <figure>
        <?= $this->Html->image($product->imagen_larga, ['alt' => $title]); ?>
    </figure>
</aside>

<section class="about-product">
    <div class="container">
        <div class="d-flex justify-content-center content-left">
            <h3 class="uppercase-title d-inline-flex " id="transform-title">
                <?= __('Sobre el producto') ?>
            </h3>
        </div>

        <h2 id="about-title">
            <?= $title ?>
        </h2>
        <p id="about-text">
            <?= $description ?>
        </p>
    </div>
</section>

<article id="product-description" class="pt-3 pb-5">
    <div class="container">
        <?= $englishLang ? $product->descripcion_larga_EN : $product->decripcion_large_ES; ?>
    </div>
</article>

<aside>
    <?= $this->cell('Team') ?>
    <?= $this->cell('Products') ?>
</aside>
