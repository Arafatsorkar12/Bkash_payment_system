   Route::get('/bkash/pay', [BkashPaymentController::class, 'payment'])->name('url-pay');
        Route::post('/bkash/create', [BkashPaymentController::class, 'createPayment'])->name('bkash-pay');
        Route::get('/bkash/callback', 'BkashPaymentController@callback')->name('url-callback');

        Route::post('/payment/bkash', 'BkashPaymentController@createPayment')->name('bkash.payment');
        Route::post('/payment/bkash/success', 'BkashPaymentController@paymentSuccess')->name('bkash.success');
