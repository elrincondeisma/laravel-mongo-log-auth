<?php

namespace Elrincondeisma\LaravelMongoLogAuth\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Elrincondeisma\LaravelMongoLogAuth\Models\AuthenticationLog;

class AuthenticationLogFactory extends Factory
{
    protected $model = AuthenticationLog::class;

    public function definition()
    {
        return [];
    }
}
