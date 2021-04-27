<?php

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home.index'));
});

Breadcrumbs::for('order', function ($trail) {
    $trail->parent('home');
    $trail->push('Order', route('order.index'));
});

Breadcrumbs::for('order.show', function ($trail, $name) {
    $trail->parent('order');
    $trail->push(''.$name, route('order.show', $name));
});

Breadcrumbs::for('order.download', function ($trail, $name) {
    $trail->parent('order.show', $name);
    $trail->push('Order Download : '.$name, route('order.show', $name));
});
