<?php ?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>

    <!-- load css and javascripts -->
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('bootstrap-theme.css') ?>
    <?= $this->Html->css('pokemon.css') ?>

    <?= $this->Html->script('jquery-2.2.0.min.js') ?>
    <?= $this->Html->script('bootstrap.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>



</head>
<body>
<!-- load navbar -->
    <?= $this->element('navbar') ?>

<!-- fetch content -->
    <section class="container clearfix">
    <div class="content">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>


    </section>
    <footer>
    </footer>
</body>
</html>