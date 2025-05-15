<?php

namespace Database\Seeders;

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
        $this->call([
            SchoolSeeder::class,
            SessionSeeder::class,
            TermSeeder::class,
            SubjectSeeder::class,
            ClassroomSeeder::class,
            SectionSeeder::class,

            UserSeeder::class,
            StudentSeeder::class,
            TeacherSeeder::class,

            AssessmentTypeSeeder::class,
            AssessmentSeeder::class,
            GradeSeeder::class,

            NoticeSeeder::class,
            AttendanceRecordSeeder::class,

        ]);
    }
}
