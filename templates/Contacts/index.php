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
                <?= $this->Form->create($contact, ['class' => 'needs-validation', 'novalidate']) ?>
                <?= $this->Form->control('name', ['label' => __('Nombre')]) ?>
                <?= $this->Form->control('email', ['type' => 'email', 'label' => __('Correo electrónico')]) ?>
                <div class="form-group">
                    <label for="reason"><?= __('Motivo de contacto') ?></label>
                    <?= $this->Form->select('reason', $contactReasons, ['empty' => __('Elige uno')]) ?>
                </div>
                <div class="form-group">
                    <label for="message"><?= __('Mensaje') ?></label>
                    <?php $messageErrors = $contact->getErrors()['message'] ?? null ?>
                    <?= $this->Form->textarea('message', ['class' => $messageErrors ? 'form-control is-invalid' : 'form-control']); ?>
                    <?php if ($messageErrors) {
                        foreach ($messageErrors as $key => $errorMessage) {
                            echo "<div class='invalid-feedback'>" . $errorMessage . '</div>';
                        }
                    }
                    ?>
                </div>
                <?= $this->Form->submit(__('Contáctanos'), ['class' => 'boton-contacto']) ?>
                <?= $this->Form->end() ?>

            </div>
        </div>

        <div class="row js-scroll fade-in-botton">
            <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2">
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

                <div id="miami-map" class="map"></div>
            </div>

            <div class="col-12 col-md-6 col-lg-6 col-xl-6 mt-2">
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

                <div id="mexico-map" class="map"></div>
            </div>
        </div>
    </div>
</section>


<script>
    function initMap() {
        // The location of Uluru
        const mexicoLoc = {
            lat: 19.4299669,
            lng: -99.1935539
        };
        const mexicoMap = new google.maps.Map(document.getElementById("mexico-map"), {
            zoom: 15,
            center: mexicoLoc,
        });
        const mexicoMarker = new google.maps.Marker({
            position: mexicoLoc,
            map: mexicoMap,
            title: 'Cargo Corp UW Mexico',
            animation: google.maps.Animation.DROP,
        });

        const miamiLoc = {
            lat: 25.7668374,
            lng: -80.1909157
        };
        const miamiMap = new google.maps.Map(document.getElementById("miami-map"), {
            zoom: 15,
            center: miamiLoc,
        });
        const miamiMarker = new google.maps.Marker({
            position: miamiLoc,
            map: miamiMap,
            title: 'Cargo Corp UW Miami',
            animation: google.maps.Animation.DROP,
        });
        miamiMarker.setMap(miamiMap);
    }

    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    console.log("Errors in form");
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });

        const invalidInput = document.querySelectorAll('.form-group.is-invalid > input');
        invalidInput.forEach((element) => element.classList.add('is-invalid'));

    }, false);
</script>

<?= $this->Html->script('https://maps.googleapis.com/maps/api/js?key=AIzaSyA2pfbu1B3r7FJHj16Mi3plmazkZmDUuEU&callback=initMap&libraries=&v=weekly') ?>
