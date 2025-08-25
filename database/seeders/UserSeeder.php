<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => __('Administrator'),
            'email' => 'admin@admin.com',
            'address' => __('No. 7, Sec. 5, Xinyi Rd., Xinyi Dist., Taipei City 110615, Taiwan (R.O.C.)'),
            'phone' => '02-8101-8800',
        ]);
    }
}
