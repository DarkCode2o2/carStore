<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
// home
Breadcrumbs::for('index', function ($trail) {
    $trail->push('الرئيسية', route('main'));
});

// home > cars
Breadcrumbs::for('allcars', function ($trail) {
    $trail->parent('index');
    $trail->push('قائمة السيارات', route('cars'));
});


// home > cars > car
Breadcrumbs::for('showCar', function ($trail, $car, ) {
    $trail->parent('allcars');
    $trail->push($car->car_model, route('showCar', $car->id));
});


// home > auction cars
Breadcrumbs::for('auctions', function ($trail) {
    $trail->parent('index');
    $trail->push('قائمة سيارات المزاد', route('auctions'));
});


// home > auction cars > auction car
Breadcrumbs::for('showAuction', function ($trail, $car, ) {
    $trail->parent('auctions');
    $trail->push($car->car_model, route('showAuction', $car->id));
});
