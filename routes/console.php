<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;


// Cara Menjadi Orang Baik
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
