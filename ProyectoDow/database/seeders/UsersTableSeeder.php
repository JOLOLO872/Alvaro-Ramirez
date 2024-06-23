<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Deshabilitar las verificaciones de clave externa
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncar las tablas
        DB::table('role_user')->truncate();
        User::truncate();

        // Habilitar las verificaciones de clave externa
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $adminRole = Role::where('nombre', 'admin')->first();
        $userRole = Role::where('nombre', 'usuario')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
        ]);

        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
    }
}
