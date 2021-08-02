<section class="filtro">
    <div>
        <h2 class="f-title">
            Filtra tus noticias
        </h2>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 justify-content-center p-0">
                <div class="button-container">
                    <a href="#boletin-enlace" class="link-button">Boletin</a>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 justify-content-center p-0">
                <div class="button-container">
                    <a href="#siniestros-enlace" class="link-button">siniestros</a>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-2 col-lg-2 col-xl-2 justify-content-center p-0">
                <div class="button-container">
                    <a href="#todas-las-noticias-enlace" class="link-button">todas</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="boletin" id="boletin-enlace">
    <div class="d-flex justify-content-center pseudo-lines">
        <h3 class="d-inline-flex boletin-title">
            boletín
        </h3>
    </div>
    <div class="container p-0">
        <div class="row justify-content-center">
            <div class="col-sm-11 col-md-11 col-lg-4 col-xl-4 d-flex justify-content-center p-0 pb-5 pl-5 pr-5 p-desktop">
                <div class="white-background boletin-slides pb-3">
                    <figure>
                        <?= $this->Html->image('ship-image.png', ['alt' => 'ship-image', 'class' => "image-slide boletin-image"]); ?>
                    </figure>
                    <div class="news-text pt-3">
                        <p class="noticias-fecha">
                            16 de junio 2021
                        </p>
                        <h3 class="noticias-title">
                            Perdida de contenedores en el mar se ha incrementado este año
                        </h3>
                        <p class="noticias-text">
                            En el primer Q del 2021 se han perdido 1.127 contenedores de transporte marítimo, estimando una perdida en mercancía equivalente a unos 54 millones de dólares aproximadamente.
                        </p>
                        <a href="#" class="noticias-link">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-11 col-md-11 col-lg-4 col-xl-4 d-flex justify-content-center p-0 pb-5 pl-5 pr-5 p-desktop">
                <div class="white-background boletin-slides justify-content-center pb-3">
                    <figure>
                        <?= $this->Html->image('shipload-image.png', ['alt' => 'shipload-image', 'class' => "image-slide boletin-image"]); ?>
                    </figure>
                    <div class="news-text pt-3">
                        <p class="noticias-fecha">
                            16 de junio 2021
                        </p>
                        <h3 class="noticias-title">
                            Perdida de contenedores en el mar se ha incrementado este año
                        </h3>
                        <p class="noticias-text">
                            En el primer Q del 2021 se han perdido 1.127 contenedores de transporte marítimo, estimando una perdida en mercancía equivalente a unos 54 millones de dólares aproximadamente.
                        </p>
                        <a href="#" class="noticias-link">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-11 col-md-11 col-lg-4 col-xl-4 d-flex justify-content-center p-0 pb-5 pr-5 pl-5 p-desktop">
                <div class="white-background boletin-slides pb-3 justify-content-center">
                    <figure>
                        <?= $this->Html->image('loaded-ship-image.png', ['alt' => 'loaded-ship-image', 'class' => "image-slide boletin-image"]); ?>
                    </figure>
                    <div class="news-text pt-3">
                        <p class="noticias-fecha">
                            16 de junio 2021
                        </p>
                        <h3 class="noticias-title">
                            Perdida de contenedores en el mar se ha incrementado este año
                        </h3>
                        <p class="noticias-text">
                            En el primer Q del 2021 se han perdido 1.127 contenedores de transporte marítimo, estimando una perdida en mercancía equivalente a unos 54 millones de dólares aproximadamente.
                        </p>
                        <a href="#" class="noticias-link">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="siniestros" id="siniestros-enlace">
    <div class="d-flex justify-content-center ">
        <h3 class="trititle d-inline-flex">
            Noticias de interés
        </h3>
    </div>
    <div id="featured" class="container block-g">
        <div class="featured-news">
            <div class="picture-container">
                <figure class="picture">
                    <?= $this->Html->image('containers-image.png', ['alt' => 'containers-image', 'class' => "image-news"]); ?>
                </figure>
            </div>

            <div class="summary">
                <p class="noticias-fecha">Jun 25, 2021</p>
                <h3 class="noticias-title">Perdida de contenedores en el mar se ha incrementado este año</h3>
                <p class="noticias-text">En el primer Q del 2021 se han perdido 1.127 contenedores de transporte marítimo, estimando una perdida en mercancía equivalente a unos 54 millones de dólares aproximadamente.</p>
                <a href="#" class="noticias-link">Leer más</a>
            </div>
        </div>

        <div class="featured-news block-d">
            <div class="picture-container">
                <figure class="picture">
                    <?= $this->Html->image('plants-image.png', ['alt' => 'plants-image', 'class' => "image-news"]); ?>
                </figure>
            </div>

            <div class="summary">
                <p class="noticias-fecha">Jun 25, 2021</p>
                <h3 class="noticias-title">Perdida de contenedores en el mar se ha incrementado este año</h3>
                <p class="noticias-text">En el primer Q del 2021 se han perdido 1.127 contenedores de transporte marítimo, estimando una perdida en mercancía equivalente a unos 54 millones de dólares aproximadamente.</p>
                <a href="#" class="noticias-link">Leer más</a>
            </div>
        </div>

        <div class="featured-news block-d">
            <div class="picture-container">
                <figure class="picture">
                    <?= $this->Html->image('twist-containers-image.png', ['alt' => 'twist-containers-image', 'class' => "image-news"]); ?>
                </figure>
            </div>

            <div class="summary">
                <p class="noticias-fecha">Jun 25, 2021</p>
                <h3 class="noticias-title">Perdida de contenedores en el mar se ha incrementado este año</h3>
                <p class="noticias-text">En el primer Q del 2021 se han perdido 1.127 contenedores de transporte marítimo, estimando una perdida en mercancía equivalente a unos 54 millones de dólares aproximadamente.</p>
                <a href="#" class="noticias-link">Leer más</a>
            </div>
        </div>
    </div>
    <div class="buttom-noticias">
        <a href="#" class="bottom-button">Ver todas las noticias</a>
    </div>
</section>

<section class="todas-las-noticias" id="todas-las-noticias-enlace">
    <div class="d-flex justify-content-center">
        <h3 class="trititle d-inline-flex">
            todas las noticias
        </h3>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-11 col-md-8 col-lg-8 col-xl-8 mb-3 block-d">
                <div class="d-flex container-news grey-background">
                    <figure class="align-content-center">
                        <?= $this->Html->image('plants-image.png', ['alt' => 'plants-image', 'class' => "image-news"]); ?>
                    </figure>
                    <div class="news-text pt-3">
                        <p class="noticias-fecha ">
                            16 de junio 2021
                        </p>
                        <h3 class=" noticias-title">
                            Perdida de contenedores en el mar se ha incrementado este año
                        </h3>
                        <p class="noticias-text">
                            En el primer Q del 2021 se han perdido 1.127 contenedores de transporte marítimo, estimando una perdida en mercancía equivalente a unos 54 millones de dólares aproximadamente.
                        </p>
                        <a href="#" class="noticias-link">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-11 col-md-8 col-lg-8 col-xl-8 mb-3 mt-3 block-d">
                <div class="d-flex container-news grey-background ">
                    <figure class="align-content-center">
                        <?= $this->Html->image('twist-containers-image.png', ['alt' => 'twist-containers-image', 'class' => "image-news"]); ?>
                    </figure>
                    <div class="news-text pt-3">
                        <p class="noticias-fecha">
                            16 de junio 2021
                        </p>
                        <h3 class="noticias-title">
                            Perdida de contenedores en el mar se ha incrementado este año
                        </h3>
                        <p class="noticias-text">
                            En el primer Q del 2021 se han perdido 1.127 contenedores de transporte marítimo, estimando una perdida en mercancía equivalente a unos 54 millones de dólares aproximadamente.
                        </p>
                        <a href="#" class="noticias-link">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-11 col-md-8 col-lg-8 col-xl-8 mt-3 block-d">
                <div class="d-flex container-news grey-background ">
                    <figure class="align-content-center">
                        <?= $this->Html->image('plants-image.png', ['alt' => 'plants-image', 'class' => "image-news"]); ?>
                    </figure>
                    <div class="news-text pt-3">
                        <p class="noticias-fecha">
                            16 de junio 2021
                        </p>
                        <h3 class="noticias-title">
                            Perdida de contenedores en el mar se ha incrementado este año
                        </h3>
                        <p class="noticias-text">
                            En el primer Q del 2021 se han perdido 1.127 contenedores de transporte marítimo, estimando una perdida en mercancía equivalente a unos 54 millones de dólares aproximadamente.
                        </p>
                        <a href="#" class="noticias-link">Leer más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
