<?php

use Cake\I18n\I18n;
?>

<aside class="menu-container">
    <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <?= $this->Html->link(
            $this->Html->image('Group.png', ['alt' => 'CargoCorp', 'class' => 'logo']),
            ['controller' => 'pages', 'action' => 'display', 'home'],
            ['escapeTitle' => false, 'title' => __('Inicio'), 'class' => 'navbar-brand']
        ); ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto menu mb-3 mt-3">
                <li class="nav-item mb-3">
                    <?= $this->Html->link(__("Inicio"), ['controller' => 'Pages', 'action' => 'display', 'home'], ['class' => 'white-leter']) ?>
                </li>
                <li class="nav-item mb-3">
                    <?= $this->Html->link(__("Noticias"), ['controller' => 'News', 'action' => 'index'], ['class' => 'white-leter']) ?>
                </li>
                <li class="nav-item mb-3">
                    <?= $this->Html->link(__("Sobre nosotros"), ['controller' => 'Pages', 'action' => 'display', 'about'], ['class' => 'white-leter']) ?>
                </li>
                <li class="nav-item mb-3">
                    <?= $this->Html->link(__("Inicio sesión"), 'https://107.190.136.34/cargocorpuw/', ['class' => 'white-leter', 'target' => '_blank']) ?>
                </li>
                <li class="nav-item mb-3">
                    <?php if (I18n::getLocale() == 'en_US') {
                        echo $this->Html->link(__("Español"), ['controller' => 'Languages', 'action' => 'es'], ['class' => 'white-leter']);
                    } else {
                        echo $this->Html->link(__("Inglés"), ['controller' => 'Languages', 'action' => 'en'], ['class' => 'white-leter']);
                    }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
</aside>
