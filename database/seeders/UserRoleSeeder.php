<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\RoleFactory;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleNames = RoleFactory::getNames();
        
        $allUsers = User::all();
        
        foreach ($allUsers as $user) {
            if (empty($user->role_id)) {
                $idRole = random_int(0, count($roleNames) - 1);
                
                User::where('id', $user->id)
                    ->update(['role_id' => $idRole + 1]);
            }
        }
    }
}
