<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $group  = new \App\Group();
        $group->name= 'C0520G1';
        $group->save();
        $group  = new \App\Group();
        $group->name= 'C0520G2';
        $group->save();
        $group  = new \App\Group();
        $group->name= 'C0520G3';
        $group->save();
    }
}
