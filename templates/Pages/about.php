<?php
$this->start('title');
echo __('Sobre nosotros');
$this->end('title');
?>

<section class="container-top-icons mb-5">
    <div class="features-summary bg-white black container pl-3 pr-3">
        <div class="row justify-content-center top-text d-flex align-content-center flex-wrap">
            <div class="top-box col-10 col-sm-10 col-md-4 col-lg-4 col-xl-4 px-2 pr-md-3 pl-md-4 my-4">
                <div class="d-flex align-items-center">
                    <figure class="align-content-center">
                        <?= $this->Html->image('clock2.png', ['alt' => 'clock-logo', 'class' => "image-c pr-3"]); ?>
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
                        <?= $this->Html->image('world2.png', ['alt' => 'world-logo', 'class' => "image-c pr-3"]); ?>
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
                        <?= $this->Html->image('badge2.png', ['alt' => 'badge-logo', 'class' => "image-c pr-3"]); ?>
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

<section class="about-us">
    <div id="title-about" class="d-flex justify-content-center mt-2">
        <h3 class="uppercase-title d-inlie-flex"><?= __('Sobre nosotros') ?></h3>
    </div>
    <div id="text-about-container">
        <h2 class="about-us-title">
            <?= __('Somos un Managing General Agent (MGA) especializado') ?>
        </h2>
        <p class="about-us-text">
            <?= __('quienes somos pagina about') ?>
        </p>
    </div>
</section>

<?= $this->cell('Team') ?>