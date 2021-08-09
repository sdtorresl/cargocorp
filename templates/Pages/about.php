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
    <div class="d-flex justify-content-center pb-5">
        <h3 class="uppercase-title d-inlie-flex"><?= __('Sobre nosotros') ?></h3>
    </div>
    <div>
        <h2 class="about-us-title">
            <?= __('Somos un Managing General Agent (MGA) especializado') ?>
        </h2>
        <p class="about-us-text">
            <?= __('Somos un Managing General Agent (MGA) especializado en proveer capacidad para las líneas de Marine (Cargo, STP, Project Cargo, Casco, P&I, RC Marítimas) y Terrorismo.
            Managing General Agent (License # W279031 FLORIDA Department of Financial Services)') ?>
        </p>
    </div>
</section>

<section class="container team-section">
    <div class="our-team">

        <div class="d-flex justify-content-center pb-5">
            <h3 class="uppercase-title d-inlie-flex">
                <?= __('Nuestro equipo') ?>
            </h3>
        </div>
        <div class="our-team-slide">
            <div>
                <div class="container paddings">
                    <div class="row justify-content-center">
                        <div class="col-10 col-sm-10 col-md-4 col-lg-3 col-xl-3 justify-content-right px-0">
                            <figure class="h-100 d-flex justify-content-center overflow-hidden">
                                <?= $this->Html->image('team-member-image.png', ['alt' => 'team-member-photo', 'class' => 'team-member-photo']); ?>
                            </figure>
                        </div>
                        <div class="col-10 col-sm-10 col-md-6 col-lg-6 col-xl-6 team-slide">
                            <p class="team-member-name">Ana MarÍa Díaz</p>
                            <p class="team-member-ocupation">Chief Financial Officer (C.F.O.)</p>
                            <p class="team-member-description">Lorem ipsum dolor sit amet consectetur adipiscing, elit pretium dui aliquet lacus mauris gravida, neque bibendum velit metus sollicitudin. Nec himenaeos interdum sociis nisi tempor diam</p>
                            <a href="#" class="team-member-email"><?= __('Enviar correo') ?> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container paddings">
                    <div class="row justify-content-center">
                        <div class="col-10 col-sm-10 col-md-4 col-lg-3 col-xl-3 justify-content-right px-0">
                            <figure class="h-100 d-flex justify-content-center overflow-hidden">
                                <?= $this->Html->image('team-member-image.png', ['alt' => 'team-member-photo', 'class' => 'team-member-photo']); ?>
                            </figure>
                        </div>
                        <div class="col-10 col-sm-10 col-md-6 col-lg-6 col-xl-6 team-slide ">
                            <p class="team-member-name">Ana MarÍa Díaz</p>
                            <p class="team-member-ocupation">Chief Financial Officer (C.F.O.)</p>
                            <p class="team-member-description">Lorem ipsum dolor sit amet consectetur adipiscing, elit pretium dui aliquet lacus mauris gravida, neque bibendum velit metus sollicitudin. Nec himenaeos interdum sociis nisi tempor diam</p>
                            <a href="#" class="team-member-email"><?= __('Enviar correo') ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="container paddings">
                    <div class="row justify-content-center">
                        <div class="col-10 col-sm-10 col-md-4 col-lg-3 col-xl-3 justify-content-right px-0">
                            <figure class="h-100 d-flex justify-content-center overflow-hidden">
                                <?= $this->Html->image('team-member-image.png', ['alt' => 'team-member-photo', 'class' => 'team-member-photo']); ?>
                            </figure>
                        </div>
                        <div class="col-10 col-sm-10 col-md-6 col-lg-6 col-xl-6 team-slide ">
                            <p class="team-member-name">Ana MarÍa Díaz</p>
                            <p class="team-member-ocupation">Chief Financial Officer (C.F.O.)</p>
                            <p class="team-member-description">Lorem ipsum dolor sit amet consectetur adipiscing, elit pretium dui aliquet lacus mauris gravida, neque bibendum velit metus sollicitudin. Nec himenaeos interdum sociis nisi tempor diam</p>
                            <a href="#" class="team-member-email"><?= __('Enviar correo') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-us">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 p-0">
                <div class="d-flex justify-content-center pb-5">
                    <h3 class="uppercase-title d-inlie-flex" id="translate">
                        <?= __('contáctenos') ?>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <p class="contact-title">
                    Miami
                </p>
                <div class="contact-information">
                    <p class="contact-text">
                        701 Brickell Avenue, Suite 1550, Miami FL 33131
                    </p>
                    <p class="contact-text">
                        <?= __('Teléfono') ?>: (305) 433 6492 / (305) 433 6342
                    </p>
                    <p class="contact-text">
                        <?= __('Teléfono') ?>: (57) 1 317 502 5065 Fax: (305) 728 5278
                    </p>
                </div>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="276" id="gmap_canvas" src="https://maps.google.com/maps?q=701%20Brickell%20Avenue,&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://getasearch.com/fmovies"></a>
                        <br>
                        <a href="https://www.embedgooglemap.net">add google map</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <p class="contact-title">
                    <?= __('México') ?>
                </p>
                <div class="contact-information">
                    <p class="contact-text">
                        Aristóteles N° 77, Oficina 510
                    </p>
                    <p class="contact-text">
                        Colonia Polanco IV Sección
                    </p>
                    <p class="contact-text">
                        C.P. 11550. Ciudad de México
                    </p>
                </div>
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="100%" height="276" id="gmap_canvas" src="https://maps.google.com/maps?q=Arist%C3%B3teles%20N%C2%B0%2077&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <a href="https://getasearch.com/fmovies"></a>
                        <br>
                        <a href="https://www.embedgooglemap.net">add google map</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
