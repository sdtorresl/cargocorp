<?php
$this->start('title');
echo __('Contact us');
$this->end('title');
?>

<aside class="product-picture">
    <figure>
        <?= $this->Html->image('image-3.jpg', ['alt' => __('Contáctanos')]); ?>
    </figure>
</aside>

<section class="contact-us mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <h3 class="uppercase-title d-inlie-flex" id="translate">
                        <?= __('contáctenos') ?>
                    </h3>
                </div>
            </div>
        </div>

        <div class="row fade-in-botton justify-content-center mt-3">
            <div class="col-8">
                <?= $this->Form->create() ?>
                <?= $this->Form->control('name', ['label' => __('Nombre')]) ?>
                <?= $this->Form->control('email', ['type' => 'email', 'label' => __('Correo electrónico')]) ?>
                <div class="form-group">
                    <label for="reason"><?= __('Motivo de contacto') ?></label>
                    <?= $this->Form->select('reason', $contactReasons) ?>
                </div>
                <div class="form-group">
                    <label for="message"><?= __('Mensaje') ?></label>
                    <?= $this->Form->textarea('message'); ?>
                </div>
                <?= $this->Form->submit(__('Contáctanos'), ['class' => 'boton-contacto']) ?>
                <?= $this->Form->end() ?>

            </div>
        </div>

        <div class="row js-scroll fade-in-botton">
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
