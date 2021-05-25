<?php

//Home

Breadcrumbs::for('home', function ($trail) {
    $trail->push(__('home.home'), route('home.index'));
});

//Order Breadcrumbs

Breadcrumbs::for('order', function ($trail) {
    $trail->parent('home');
    $trail->push(__('order.order'), route('order.index'));
});

Breadcrumbs::for('order.show', function ($trail, $name) {
    $trail->parent('order');
    $trail->push(''.$name, route('order.show', $name));
});

Breadcrumbs::for('order.download', function ($trail, $name) {
    $trail->parent('order.show', $name);
    $trail->push('Order Download : '.$name, route('order.show', $name));
});

//Cart Breadcrumbs

Breadcrumbs::for('shop', function ($trail) {
    $trail->parent('home');
    $trail->push(__('cart.cart'), route('cart.shop'));
});

Breadcrumbs::for('buy', function ($trail) {
    $trail->parent('shop');
    $trail->push(__('cart.buy'), route('cart.buy'));
});

//Seed Breadcrumbs
Breadcrumbs::for('list', function ($trail) {
    $trail->parent('home');
    $trail->push(__('home.store'), route('seed.list'));
});

Breadcrumbs::for('show', function ($trail) {
    $trail->parent('list');
    $trail->push(__('cart.buy'), route('cart.buy'));
});

//Admin
Breadcrumbs::for('admin', function ($trail) {
    $trail->parent('home');
    $trail->push(__('admin.admin'), route('admin.home.index'));
});

Breadcrumbs::for('create', function ($trail) {
    $trail->parent('admin');
    $trail->push(__('admin.create'), route('admin.create'));
});

Breadcrumbs::for('download', function ($trail) {
    $trail->parent('admin');
    $trail->push(__('admin.listProviders'), route('admin.download'));
});

Breadcrumbs::for('listAdmin', function ($trail) {
    $trail->parent('admin');
    $trail->push(__('admin.list'), route('admin.list'));
});

Breadcrumbs::for('orderAdmin', function ($trail) {
    $trail->parent('admin');
    $trail->push(__('admin.orderList'), route('admin.order'));
});
