<?php

use Inertia\Testing\AssertableInertia;

it('contains a list of available languages', function () {
    $this->get('/')
        ->assertInertia(function (AssertableInertia $page) {
            $page->where('languages.0.value', 'en')
                ->where('languages.0.label', 'English');
        });
});
