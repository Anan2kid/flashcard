<?php
echo $this->Html->link(
    '<i class="glyphicon glyphicon-pencil" ></i>',
    [
        'controller' => 'decks',
        'action' => 'review',

    ], [
        'escape' => FALSE
    ]
);
?>