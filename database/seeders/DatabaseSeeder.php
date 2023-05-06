<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('username', 'admin@app.com')->exists()) {
            User::create([
                'username' => 'admin@app.com',
                'password' => bcrypt('password'),
                'role' => 'Admin'
            ]);
        }
        $this->call(SettingSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
