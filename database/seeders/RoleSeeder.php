<?php

namespace Database\Seeders;

use App\Models\Role;
use Database\Factories\RoleFactory;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = RoleFactory::getNames();
        
        foreach ($names as $name) {
            Role::create([
                'name' => $name
            ]);
        }
    }
}
