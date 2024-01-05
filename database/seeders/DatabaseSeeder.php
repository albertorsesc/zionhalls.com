<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Actions\Fortify\CreateNewUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private array $seeders = [
        InfluencerSeeder::class,
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::query()->where('email', config('auth.roles.root')[0])->doesntExist()) {
            (new CreateNewUser)->create([
                'name' => 'Alberto Rosas',
                'email' => config('auth.roles.root')[0],
                'password' => 'password',
                'password_confirmation' => 'password',
                'email_verified_at' => now(),
                'terms' => true
            ]);
        }

        $this->call($this->seeders);
    }
}
