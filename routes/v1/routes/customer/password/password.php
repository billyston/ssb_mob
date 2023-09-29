<?php

declare(strict_types=1);

use App\Http\Controllers\V1\Customer\Password\PasswordChangeController;
use App\Http\Controllers\V1\Customer\Password\PasswordResetController;
use App\Http\Controllers\V1\Customer\Password\PasswordResetRequestController;
use App\Http\Controllers\V1\Customer\Password\PasswordResetTokenVerificationController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'customers/password',
    'as' => 'customers.password.',
], function (): void {
    // Unprotected routes
    Route::group([], function (): void {
        Route::post(
            uri: 'request',
            action: PasswordResetRequestController::class,
        )->name(
            name: 'request'
        );
        Route::post(
            uri: 'token/verification',
            action: PasswordResetTokenVerificationController::class,
        )->name(
            name: 'token.verification'
        );
        Route::post(
            uri: 'reset',
            action: PasswordResetController::class,
        )->name(
            name: 'reset'
        );
    });

    // Protected routes
    Route::group([
        'middleware' => 'auth:customer',
    ], function (): void {
        Route::post(
            uri: 'change',
            action: PasswordChangeController::class,
        )->name(
            name: 'change'
        );
    });
});
