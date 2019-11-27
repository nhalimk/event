<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Event Attendances System
    </title>
    <?= $this->Html->meta('icon') ?>

<!--    <?= $this->Html->css('base.css') ?>-->
    <?= $this->Html->css('material-kit.css') ?>
    <?= $this->Html->css('demo.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('../font/font-awesome/css/fontawesome.css') ?>
    <?= $this->Html->css('font-awesome/css/brands.css') ?>
    <?= $this->Html->css('font-awesome/css/solid.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script('jquery-3.4.1.min.js'); ?>
    <?= $this->Html->script('bootstrap.js'); ?>
    <?= $this->Html->script('popper.min.js'); ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="page-header header-filter" style="background-image: url('img/bg7.jpg'); background-size: cover; background-position: top center;">
        <div class="container-fluid clearfix">

            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    
    </div>
</body>
</html>
