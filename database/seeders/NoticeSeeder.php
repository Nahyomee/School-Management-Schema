<?php

namespace Database\Seeders;

use App\Models\Notice;
use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notice::create([
            'school_id' => School::first()->id,
            'title' => 'Welcome Back to School',
            'content' => 'Term starts on the 10th of September.',
        ]);
    }
}
