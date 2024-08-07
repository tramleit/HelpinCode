<?php

namespace Database\Seeders;

use App\Models\channel;
use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(7)->create();
        channel::factory()->count(10)->create();
        Thread::factory()->count(400)->create();
        Reply::factory()->count(2000)->create();
    }
}
