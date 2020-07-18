<?php

use Illuminate\Database\Seeder;

class UserCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(App\User::class, 10)
        ->create()
        ->each( function ($user)  {
            $user->posts()->createMany(
                factory(App\Post::class, 5)->make()->toArray()
            );
        });

        
       App\User::create([
           'name' =>'Carlos',
           'email' =>'carlo@test.com',
           'email_verifet_at' => now(),
           'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
           'remember_token' => Str::random(10),
       ])->posts()->createMany(
        factory(App\Post::class, 5)->make()->toArray()
       );
    }
}
?>