<?php

use App\Rule;

it('lists available validation rules', function () {
    $rules = Rule::factory()->times(2)->create();

    $this->artisan('validation:list')
        ->assertSuccessful()
        ->expectsOutput('Available Validation Rules:')
        ->expectsOutput($rules->first()->name)
        ->expectsOutput($rules->last()->name);
});
