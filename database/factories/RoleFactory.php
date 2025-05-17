<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{

    protected $model = Role::class;

    private static $names = [
        'admin', 
        'editor', 
        'menager', 
        'simple'
    ];

    /**
     * @return array
     */
    public static function getNames(): array
    {
        return self::$names;
    }

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                //
        ];
    }
}
