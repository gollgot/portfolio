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
            'description' => 'Description',
            'previewImage' => null,
            'technoPreview' => 'Symfony / PHP / MySQL',
            'techno' => 'PHP / Symfony / MySQL / Twig / Bootstrap',
            'scope' => 'School project of 4 students',
            'sources' => null,
            'online' => true,
            'images' => null,
            'created_at' => Carbon::now()
        ]);

        DB::table('projects')->insert([
            'id' => 2,
            'name' => 'Broken Feature',
            'creationDate' => '2021-01-18',
            'Description' => 'Description',
            'previewImage' => null,
            'technoPreview' => 'PHP / Laravel / MariaDB',
            'techno' => 'PHP / Laravel / MariaDB / Blade / Tailwind CSS / Docker',
            'scope' => 'School project of 4 students',
            'sources' => 'https://gitlab.com/broken-feature',
            'online' => true,
            'images' => null,
            'created_at' => Carbon::now()
        ]);

        DB::table('projects')->insert([
            'id' => 3,
            'name' => 'Bob The Racer',
            'creationDate' => '2020-06-24',
            'Description' => 'Description',
            'previewImage' => null,
            'technoPreview' => 'Java SE / Swing',
            'techno' => 'Java SE / Swing / Design pattern',
            'scope' => 'School project of 4 students',
            'sources' => 'https://github.com/gollgot/MCR_BobTheRacer',
            'online' => true,
            'images' => null,
            'created_at' => Carbon::now()
        ]);

        DB::table('projects')->insert([
            'id' => 4,
            'name' => 'Deezer streaming',
            'Description' => 'Description',
            'previewImage' => null,
            'creationDate' => '2020-12-02',
            'technoPreview' => 'Javascript / VueJS',
            'techno' => 'Javascript/ VueJS / Fetch',
            'scope' => 'School project of 4 students',
            'sources' => null,
            'online' => true,
            'images' => null,
            'created_at' => Carbon::now()
        ]);
    }
}
