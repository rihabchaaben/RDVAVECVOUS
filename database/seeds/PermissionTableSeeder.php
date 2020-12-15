<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'professionnel',
            'demandeur',
            'vendeur'
        ];


        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
