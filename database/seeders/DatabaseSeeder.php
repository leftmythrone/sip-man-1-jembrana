<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

// Model List
use App\Models\User;
use App\Models\Role;
use App\Models\Classroom;
use App\Models\Department;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Day;
use App\Models\Schedule;
use App\Models\ScheduleCategory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /*
        |--------------------------------------------------------------------------
        | Web Role Seeder
        |--------------------------------------------------------------------------
        */

        Role::create([
            'level' => 'Admin',
        ]);

        Role::create([
            'level' => 'Kepala Sekolah',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Web User Seeder
        |--------------------------------------------------------------------------
        */

        User::create([
            'user_role_id' => 1,
            'username' => 'admin',
            'user_slug' => uniqid('gfg', true),
            'password' => Hash::make('1')
        ]);

        User::create([
            'user_role_id' => 2,
            'username' => 'kepsek',
            'user_slug' => uniqid('gfg', true),
            'password' => Hash::make('1')
        ]);

        /*
        |--------------------------------------------------------------------------
        | Web Classroom Seeder
        |--------------------------------------------------------------------------
        */

        Department::create([
            'department_name' => 'Ilmu Pengetahuan Alam',
        ]);

        Department::create([
            'department_name' => 'Ilmu Pengetahuan Sosial',
        ]);

        Department::create([
            'department_name' => 'Bahasa',
        ]);

        Department::create([
            'department_name' => 'Agama',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Web Classroom Seeder
        |--------------------------------------------------------------------------
        */

        Classroom::create([
            'class_name' => 'X',
            'class_department_id' => 1,
            'class_slug' => uniqid('gfg', true),
        ]);

        Classroom::create([
            'class_name' => 'XI',
            'class_department_id' => 2,
            'class_slug' => uniqid('gfg', true),
        ]);

        Classroom::create([
            'class_name' => 'XII',
            'class_department_id' => 3,
            'class_slug' => uniqid('gfg', true),
        ]);

        /*
        |--------------------------------------------------------------------------
        | Web Subject Seeder
        |--------------------------------------------------------------------------
        */

        Subject::create([
            'subject_name' => 'Bahasa Indonesia',
            'subject_duration' => 120,
            'subject_criteria' => 'A',
            'subject_slug' => uniqid('gfg', true),
            'subject_teacher_id' => 1,
            'subject_department_id' => 1,
        ]);

        Subject::create([
            'subject_name' => 'Bahasa Indonesia',
            'subject_duration' => 120,
            'subject_criteria' => 'A',
            'subject_slug' => uniqid('gfg', true),
            'subject_teacher_id' => 2,
            'subject_department_id' => 2,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Web Teacher Seeder
        |--------------------------------------------------------------------------
        */

        Teacher::factory(10)->create();

        /*
        |--------------------------------------------------------------------------
        | Web Day Seeder
        |--------------------------------------------------------------------------
        */

        Day::create([
            'day_name' => 'Senin'
        ]);

        Day::create([
            'day_name' => 'Selasa'
        ]);

        Day::create([
            'day_name' => 'Rabu'
        ]);

        Day::create([
            'day_name' => 'Kamis'
        ]);

        Day::create([
            'day_name' => 'Jumat'
        ]);

        Day::create([
            'day_name' => 'Sabtu'
        ]);


        /*
        |--------------------------------------------------------------------------
        | Web Schedule Categories Seeder
        |--------------------------------------------------------------------------
        */

        ScheduleCategory::create([
            'category_name' => 'Upacara'
        ]);

        ScheduleCategory::create([
            'category_name' => 'Istirahat 1'
        ]);

        ScheduleCategory::create([
            'category_name' => 'Istirahat 2'
        ]);

        /*
        |--------------------------------------------------------------------------
        | Web Schedule Seeder
        |--------------------------------------------------------------------------
        */

        Schedule::create([
            'schedule_description' => 'Kelas La',
            'schedule_session' => 2,
            'schedule_duration' => 60,
            'schedule_slug' => uniqid('gfg', true),
            'schedule_category_id' => 1,
            'schedule_teacher_id' => 1,
            'schedule_subject_id' => 1,
        ]);

    }
}
