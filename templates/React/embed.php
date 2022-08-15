<?php

use Cake\Routing\Router;

$this->Html->css($css, ['block' => true]);

$this->Html->script($js, ['block' => 'react']);
?>

<div id="root" data-url="<?= Router::url([ 
    'controller' => 'React',
    'action' => 'api'
    ]); ?>"></div>