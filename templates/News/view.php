<?php

use Cake\I18n\I18n;

$this->Breadcrumbs->add(
    __('Noticias'),
    ['controller' => 'News', 'action' => 'index', 1]
);

$this->Breadcrumbs->add(
    I18n::getLocale() == 'en_US' ? $article->id_categoria->nombre_EN : $article->id_categoria->nombre_ES,
    ['controller' => 'news', 'action' => 'index', $article->id_categoria->id_categoria]
);

$this->Breadcrumbs->setTemplates(
    [
        'wrapper' => '<ol{{attrs}}>{{content}}</ol>',
        'item' => '<li class="breadcrumb-item" {{attrs}}><a href="{{url}}"{{innerAttrs}}>{{title}}</a></li>{{separator}}',
        'itemWithoutLink' => '<li{{attrs}}><span{{innerAttrs}}>{{title}}</span></li>{{separator}}',
        'separator' => ''
    ]
);

$this->start('title');
echo I18n::getLocale() == 'en_US' ? $article->titulo_notificacion_EN : $article->titulo_notificacion_ES;
$this->end('title');

?>
<head>
<?php $this->Html->meta('description', I18n::getLocale() == 'en_US' ? $article->descripcion_corta_EN : $article->descripcion_corta_ES); ?>
</head>
<aside class="article-picture">
    <?php
    $images[0] = 'image-1.png';
    $images[1] = 'image-2.png';
    $images[2] = 'image-3.jpg';
    $images[3] = 'image-4.jpg';
    $images[4] = 'image-5.jpg';
    $i = rand( 0, 4 );
?>
    <figure>
        <?= $this->Html->image($images[$i], ['alt' => 'containers-image-background', 'id' => 'random-image']); ?>
    </figure>

</aside>

<section class="article container p-0 mt-5">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb" class="col">
                <?= $this->Breadcrumbs->render(
                    ['class' => 'breadcrumb'],
                    ['separator' => '<i class="fa fa-angle-right"></i>']
                ); ?>
            </nav>
        </div>
        <div class="row justify-content-center">
            <div class="col-11 col-sm-11 col-md-1 col-lg-1 col-xl-1 p-0">
                <div id="social-media-container">
                    <p id="social-media" class="text-left">
                        <?= __('Compartir') ?>
                    </p>
                    <div class="icons-container">
                        <?php $url =  $_SERVER['REQUEST_SCHEME'] . "://" .  $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI']; ?>
                        <?php $shareText = __("He visto este artículo y me ha parecido interesante"); ?>

                        <div id="facebook" class="social-media-icons">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $url . '&t=' . $shareText ?>" target=" _blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>
                        <div id="twitter" class="social-media-icons">
                            <a href="https://twitter.com/intent/tweet?text=<?= $shareText . '&url=' . $url ?>" target=_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                        <div id="email" class="social-media-icons">
                            <a href="#" <?= $shareText ?> target="_blank">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                        <div id="linkedin" class="social-media-icons">
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= $url . '&text=' . $shareText ?>" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-11 col-sm-11 col-md-6 col-lg-6 col-xl-6">
                <div>
                    <h1 class="article-title">
                        <?= I18n::getLocale() == 'en_US' ? $article->titulo_notificacion_EN : $article->titulo_notificacion_ES ?>
                    </h1>
                </div>

                <article class="article-body">
                    <p class="date">
                        <?= $article->fecha_creacion ?>
                    </p>

                    <p class="headline">
                        <?= I18n::getLocale() == 'en_US' ? $article->descripcion_corta_EN : $article->descripcion_corta_ES ?>
                    </p>

                    <figure class="article-image">
                        <?= $this->Html->image($article->image, ['alt' => $article->titulo_ES, 'class' => "w-100"]); ?>
                    </figure>

                    <p class="article-text">
                        <?= I18n::getLocale() == 'en_US' ? $article->descripcion_larga_EN : $article->descripcion_larga_ES ?>
                    </p>
                </article>
            </div>

            <aside class="col-11 col-sm-11 col-md-4 col-lg-4 col-xl-4">
                <?= $this->cell('MostRead', [$article->id_categoria->id_categoria, [$article->id_blog]]); ?>
            </aside>
        </div>
    </div>
</section>

<?= $this->cell('Related', [$article->id_categoria->id_categoria, [$article->id_blog]]); ?>
