<?php
$this->start('title');
echo __('Sobre nosotros');
$this->end('title');
?>

<section class="container-top-icons">
    <div class="container white-grid pl-3 pr-3" id="grid-about-us">
        <div class="row justify-content-center top-text d-flex align-content-center flex-wrap">
            <div class="top-box col-10 col-sm-10 col-md-4 col-lg-4 col-xl-4 px-2 pr-md-3 pl-md-4 my-4">
                <div class="d-flex align-content-center">
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
                <div class="d-flex align-content-center">
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
                <div class="d-flex align-content-center">
                    <figure class="align-content-center">
                        <?= $this->Html->image('badge.png', ['alt' => 'badge-logo', 'class' => "image-c pr-3"]); ?>
                    </figure>
                    <div>
                        <p class="align-content-center">
                            <?= __('Calificacion A-Fitch Rattings, A.M. Best, Standard & Poors, A-') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-us">
    <div id="title-about" class="d-flex justify-content-center pb-5">
        <h3 class="uppercase-title d-inlie-flex"><?= __('Sobre nosotros') ?></h3>
    </div>
    <div id="text-about-container">
        <h2 class="about-us-title">
            <?= __('Somos un Managing General Agent (MGA) especializado') ?>
        </h2>
        <p class="about-us-text">
            <?= __('Somos un Managing General Agent (MGA) especializado en proveer capacidad para las líneas de Marine (Cargo, STP, Project Cargo, Casco, P&I, RC Marítimas) y Terrorismo.
            Managing General Agent (License # W279031 FLORIDA Department of Financial Services)') ?>
        </p>
    </div>
</section>

<?= $this->cell('Team') ?>
