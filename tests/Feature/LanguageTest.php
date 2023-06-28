<?php

it('sets the language correctly', function () {
    $response = $this->post('/language', [
        'language' => $language = 'de'
    ]);

    $response
        ->assertSessionHas('language', $language)
        ->assertStatus(302);
});

it('sets the default language if the chosen language is invalid', function () {
    $response = $this->post('/language', [
        'language' => 'es'
    ]);

    $response
        ->assertSessionHas('language', config('app.locale'))
        ->assertStatus(302);
});
