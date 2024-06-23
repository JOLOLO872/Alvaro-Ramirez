<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('role_user')->delete();
        DB::table('users')->delete();
        DB::table('roles')->delete();

        // Call the seeders
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
        ]);
            }
        }
