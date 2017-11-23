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
 */

$cakeDescription = 'SuperRestaurantRescue';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    
    <?= $this->Html->script('jquery.min')?> 
    <?= $this->Html->script('bootstrap.min')?>
    <?= $this->Html->script('moment')?>
    <?= $this->Html->script('modernizr.min')?>
    <?= $this->Html->script('bootstrap-datetimepicker.min')?>
    <?= $this->Html->script('jquery.easing.1.3')?>
    <?= $this->Html->script('jquery.flexslider-min')?>
    <?= $this->Html->script('jquery.stellar.min')?>
    <?= $this->Html->script('jquery.waypoints.min')?>
    <?= $this->Html->script('main')?>
    <?= $this->Html->script('respond.min')?>  
        
    <?= $this->Html->css('animate') ?>
    <?= $this->Html->css('base') ?>
    <?= $this->Html->css('bootstrap-datetimepicker.min') ?>
    <?= $this->Html->css('bootstrap') ?>
    <?= $this->Html->css('flexslider') ?>
    <?= $this->Html->css('home') ?>
    <?= $this->Html->css('icomoon') ?>
    <?= $this->Html->css('simple-line-icons') ?>
    <?= $this->Html->css('style') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

   
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
    <?= $this->Flash->render() ?>

    <?= $this->fetch('content') ?>

    <footer>
    </footer>
</body>
</html>
