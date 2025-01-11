<?php

use Carbon\Carbon;

function ImageUrl($image) {
    return 'https://laravel-panel.liara.run/images/' . $image;
    // return env('ADMIN_PANEL_URL') . env('PUBLIC_URL') . $image;
}

function salePercent($price , $sale){
    return round((($price - $sale) / $price) * 100);
}
function checkSaleFrom($date){
    return $date < Carbon::now();
}
function checkSaleTo($date){
    return $date > Carbon::now();
}