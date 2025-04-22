<?php

use Illuminate\Support\Facades\Route;
use Webkul\Newsletter\Http\Controllers\Admin\NewsletterController;

Route::group([
    'prefix' => 'admin/newsletter',
    'middleware' => ['web', 'admin']
], function () {
    Route::get('/', [NewsletterController::class, 'index'])->name('admin.newsletter.index');
    Route::get('/compose', [NewsletterController::class, 'compose'])->name('admin.newsletter.compose');
    Route::post('/send', [NewsletterController::class, 'send'])->name('admin.newsletter.send');
    Route::get('/export', [NewsletterController::class, 'export'])->name('admin.newsletter.export');
});
