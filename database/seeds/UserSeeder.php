<?php

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //生成10条数据
        $user = factory(User::class)->times(50)->make()->makeVisible('password')->toArray();

        User::insert($user);


    }
}
