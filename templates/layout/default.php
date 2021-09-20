<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CargoCorp UW';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?> - <?= $this->fetch('title') ?>
    </title>

    <meta name="description" content=<?= __("We are a Managing General Agent (MGA) specialized in providing capacity for Marine lines") ?>>
    <meta name="keywords" content="Read interexting news, ">
    <meta name="robots" content="index, follow">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/d8ec7601ad.js" crossorigin="anonymous"></script>

    <?= $this->Html->css('normalize') ?>
    <?= $this->Html->css('/vendor/slick/slick.css') ?>
    <?= $this->Html->css('/vendor/slick/slick-theme.css') ?>
    <?= $this->Html->css('style') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->meta('icon') ?>

</head>

<body>

    <header>
        <?= $this->element('menu') ?>
        <?= $this->Flash->render() ?>

    </header>

    <main class="main">
        <?= $this->fetch('content') ?>
    </main>

    <footer>
        <p class="copyright">
            Copyright © <?= date('Y') ?> CargoCorp Uderwriters | <?= __('Todos los derechos reservados') ?>
        </p>
        <p class="copyright"><?= __('Hecho con {0} por {1}', ['<i class="fas fa-heart"></i>', '<a href="https://innovaciones.co" class="text-white" target="_blank">Innovaciones</a></p>']) ?>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?= $this->Html->script('/vendor/slick/slick.min.js'); ?>
    <?= $this->Html->script('main'); ?>
    <?= $this->fetch('script'); ?>
</body>

</html>