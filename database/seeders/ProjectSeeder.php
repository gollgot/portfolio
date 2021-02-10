<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'id' => 1,
            'name' => 'Avia-Sion',
            'creationDate' => '2019-12-25',
            'technoPreview' => 'Symfony / PHP / MySQL',
            'techno' => 'PHP / Symfony / MySQL / Twig / Bootstrap',
            'sources' => null,
            'online' => true,
            'created_at' => Carbon::now()
        ]);

        DB::table('projects')->insert([
            'id' => 2,
            'name' => 'Broken Feature',
            'creationDate' => '2021-01-18',
            'technoPreview' => 'PHP / Laravel / MariaDB',
            'techno' => 'PHP / Laravel / MariaDB / Blade / Tailwind CSS / Docker',
            'sources' => 'https://gitlab.com/broken-feature',
            'online' => true,
            'created_at' => Carbon::now()
        ]);

        DB::table('projects')->insert([
            'id' => 3,
            'name' => 'Bob The Racer',
            'creationDate' => '2020-06-24',
            'technoPreview' => 'Java SE / Swing',
            'techno' => 'Java SE / Swing / Design pattern',
            'sources' => 'https://github.com/gollgot/MCR_BobTheRacer',
            'online' => true,
            'created_at' => Carbon::now()
        ]);

        DB::table('projects')->insert([
            'id' => 4,
            'name' => 'Deezer streaming',
            'creationDate' => '2020-12-02',
            'technoPreview' => 'Javascript / VueJS',
            'techno' => 'Javascript/ VueJS / Fetch',
            'sources' => null,
            'online' => true,
            'created_at' => Carbon::now()
        ]);
    }
}
