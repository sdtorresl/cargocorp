<?php
$this->start('title');
echo __('Inicio');
$this->end('title');
$this->start('script');
echo $this->Html->Script('home');
$this->end('script');
?>

<section class="main-intro-container">

    <h1 class="title">
        <div id="animation-title" class="text-capitaliza">
            <?= __('Experimentado | Impulsado por datos  | Competente') ?>
        </div>
        <div id="animation-title-two" class="text-capitalize">
            <strong>
                <?= __('Así es como ofrecemos') ?>
                <br>
                <?= __('resultados destacados') ?>
            </strong>
        </div>
    </h1>

    <div class="features-summary container pl-3 pr-3">
        <div class="row justify-content-center top-text d-flex align-content-center flex-wrap">
            <div class="top-box col-10 col-sm-10 col-md-4 col-lg-4 col-xl-4 px-2 pr-md-3 pl-md-4 my-4">
                <div class="d-flex align-items-center">
                    <figure class="align-content-center">
                        <?= $this->Html->image('clock.png', ['alt' => 'clock-logo', 'class' => "image-c pr-3"]); ?>
                    </figure>
                    <div>
                        <p class="align-content-center">
                            <?= __('Más de 20 años de experiencia en seguros') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="top-box col-10 col-sm-10 col-md-4 col-lg-4 col-xl-4 px-2 px-md-3 my-4">
                <div class="d-flex align-items-center">
                    <figure class="align-content-center">
                        <?= $this->Html->image('world.png', ['alt' => 'world-logo', 'class' => "image-c pr-3"]); ?>
                    </figure>
                    <div>
                        <p class="align-content-center">
                            <?= __('Nos encontramos en más de 14 países') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="top-box col-10 col-sm-10 col-md-4 col-lg-4 col-xl-4 px-2 pl-md-3 pr-md-4 my-4">
                <div class="d-flex align-items-center">
                    <figure class="align-content-center">
                        <?= $this->Html->image('badge.png', ['alt' => 'badge-logo', 'class' => "image-c pr-3"]); ?>
                    </figure>
                    <div>
                        <p class="align-content-center">
                            <?= __('MGA_Calification') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="who-we-are">
    <div class="container justify-content-center">
        <aside class="intro">
            <div class="intro-container">
                <h3 class="uppercase-title"><?= __('Lo que somos') ?></h3>
                <h2 class="subtitle">
                    <?= __('Managing General Agent') ?>
                </h2>
                <p class="intro-description">
                    <?= __('quienes-somos-1') ?>
                </p>
            </div>
        </aside>
        <aside class="intro">
            <div class="intro-container">
                <h3 class="uppercase-title"><?= __('Lo que nos importa') ?></h3>
                <p class="intro-description"><?= __('quienes-somos-2') ?></p>
            </div>
        </aside>
        <aside class="intro">
            <div class="intro-container">
                <h3 class="uppercase-title"><?= __('Lo que hacemos') ?></h3>
                <p class="intro-description"><?= __('quienes-somos-3') ?></p>
            </div>
        </aside>
        <aside class="intro">
            <div class="intro-container">
                <h3 class="uppercase-title"><?= __('Como lo hacemos') ?></h3>
                <p class="intro-description"><?= __('quienes-somos-4') ?></p>
            </div>
        </aside>
    </div>
</section>

<section class="difference-container">
    <div class="d-flex justify-content-center mb-3">
        <h3 class="uppercase-title d-inline-flex">
            <?= __('La diferencia') ?>
        </h3>
    </div>
    <div class="container p pl-5 pr-5">
        <div class="row justify-content-center grid-differences">
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-4 mb-5">
                <div class="d-flex js-scroll slide-left">
                    <figure class="differences-logo">
                        <?= $this->Html->image('engineer.png', ['alt' => 'engineer-logo']); ?>
                    </figure>
                    <div class="text-d">
                        <p class="title-p">
                            <?= __('Experiencia') ?>
                        </p>
                        <p class="text-p">
                            <?= __('amplia cobertura 1') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-4 mb-5">
                <div class="d-flex js-scroll slide-left">
                    <figure class="differences-logo">
                        <?= $this->Html->image('clipboard.png', ['alt' => 'clipboard-logo']); ?>
                    </figure>
                    <div class="text-d">
                        <p class="title-p">
                            <?= __('Profesionales 2') ?>
                        </p>
                        <p class="text-p">
                            <?= __('amplia cobertura 2') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-4 mb-5">
                <div class="d-flex js-scroll slide-left">
                    <figure class="differences-logo">
                        <?= $this->Html->image('boxes.png', ['alt' => 'boxes-logo']); ?>
                    </figure>
                    <div class="text-d">
                        <p class="title-p">
                            <?= __('Profesionales 3') ?>
                        </p>
                        <p class="text-p">
                            <?= __('amplia cobertura 3') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-4 mb-5">
                <div class="d-flex js-scroll slide-left">
                    <figure class="differences-logo">
                        <?= $this->Html->image('truck.png', ['alt' => 'truck-logo']); ?>
                    </figure>
                    <div class="text-d">
                        <p class="title-p">
                            <?= __('Profesionales 4') ?>
                        </p>
                        <p class="text-p">
                            <?= __('amplia cobertura 4') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-4 mb-5">
                <div class="d-flex js-scroll slide-left">
                    <figure class="differences-logo">
                        <?= $this->Html->image('ship-icon.png', ['alt' => 'ship-icon-logo']); ?>
                    </figure>
                    <div class="text-d">
                        <p class="title-p">
                            <?= __('Profesionales 5') ?>
                        </p>
                        <p class="text-p">
                            <?= __('amplia cobertura 5') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-4 mb-5">
                <div class="d-flex js-scroll slide-left">
                    <figure class="differences-logo">
                        <?= $this->Html->image('shield.png', ['alt' => 'shield-logo']); ?>
                    </figure>
                    <div class="text-d">
                        <p class="title-p">
                            <?= __('Profesionales 6') ?>
                        </p>
                        <p class="text-p">
                            <?= __('amplia cobertura 6') ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 col-xl-4 mb-5">
                <div class="d-flex js-scroll slide-left">
                    <figure>
                        <?= $this->Html->image('truck.png', ['alt' => 'truck-logo']); ?>
                    </figure>
                    <div class="text-d">
                        <p class="title-p">
                            <?= __('Profesionales 7') ?>
                        </p>
                        <p class="text-p">
                            <?= __('amplia cobertura 7') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->cell('Products') ?>


<section class="nuestros-mercados">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-1 col-lg-5 col-xl-5">
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 left-aling">
                <div class="d-flex justify-content-center pb-5 js-scroll fade-in">
                    <h3 class="uppercase-title title-m">
                        <?= __('Nuestros mercados') ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="contries-container ">
            <div class="row">
                <div class="col-10 col-sm-10 col-md-10 col-lg-5 col-xl-5 mx-auto">
                    <div>
                        <figure>
                            <?= $this->Html->image('map-image.png', ['alt' => 'map-image-logo', 'class' => "mapa"]); ?>
                        </figure>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                    <div class="row pt-5 pt-lg-0 px-4 big-scale">
                        <div class="col-10 col-sm-10 col-md-4 col-lg-4 col-xl-4 ">
                            <div class="js-scroll fade-in">
                                <h2 class="region">
                                    <?= __('América del sur') ?>
                                </h2>
                                <ul class="country">
                                    <li> <?= __('Argentina') ?></li>
                                    <li> <?= __('Bolivia') ?></li>
                                    <li> <?= __('Chile') ?></li>
                                    <li> <?= __('Colombia') ?></li>
                                    <li> <?= __('Ecuador') ?></li>
                                    <li> <?= __('Paraguay') ?></li>
                                    <li> <?= __('Uruguay') ?></li>
                                    <li> <?= __('Perú') ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
                            <div class="js-scroll fade-in">
                                <h2 class="region">
                                    <?= __('América central') ?>
                                </h2>
                                <ul class="country">
                                    <li><?= __('Guatemala') ?></li>
                                    <li><?= __('Honduras') ?></li>
                                    <li><?= __('Panamá') ?></li>
                                    <li><?= __('El Salvador') ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-10 col-sm-10 col-md-4 col-lg-4 col-xl-4">
                            <div class="js-scroll fade-in">
                                <h2 class="region">
                                    <?= __('Caribe') ?>
                                </h2>
                                <ul class="country">
                                    <li><?= __('Puerto Rico') ?></li>
                                    <li><?= __('República Dominicana') ?></li>
                                    <li class="mexico"><?= __('México') ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $cell = $this->cell('LatestNews'); ?>