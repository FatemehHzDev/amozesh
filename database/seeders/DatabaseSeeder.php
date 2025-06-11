<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Organ;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
       $this->call(PermissionSeeder::class);
       $this->call(OrganSeeder::class);
      $this->call(RoleSeeder::class);
       $this->call(CourseSeeder::class);
       DB::table('rooms')->insert(['organ_id'=>'1','name'=>'A','capacity'=>'30']);
       DB::table('organ_courses')->insert(['course_id'=>'1','organ_id'=>'1']);
       DB::table('skills')->insert(['organ_course_id'=>'1','fa_name'=>'کاربرicdl',
           'en_name'=>'icdl','pishniaz'=>'دارد','tahsilat'=>'دیپلم','amali'=>'20',
           'nazari'=>'20','sum'=>'40','sum_a'=>'30','karvarzi'=>'5','project'=>'5','isco'=>'1234']);
        DB::table('questions')->insert(['organ_id'=>'1','teacher_id'=>'1','skill_id'=>'1','text'=>'3*4','a'=>'12','b'=>'13','c'=>'15','d'=>'18','ans'=>'a']);
        DB::table('questions')->insert(['organ_id'=>'1','teacher_id'=>'1','skill_id'=>'1','text'=>'4*5','a'=>'7','b'=>'20','c'=>'30','d'=>'9','ans'=>'b']);
        DB::table('questions')->insert(['organ_id'=>'1','teacher_id'=>'1','skill_id'=>'1','text'=>'6*3','a'=>'14','b'=>'15','c'=>'8','d'=>'18','ans'=>'d']);
        DB::table('questions')->insert(['organ_id'=>'1','teacher_id'=>'1','skill_id'=>'1','text'=>'6+5','a'=>'11','b'=>'7','c'=>'9','d'=>'13','ans'=>'a']);
        DB::table('questions')->insert(['organ_id'=>'1','teacher_id'=>'1','skill_id'=>'1','text'=>'9+5','a'=>'17','b'=>'14','c'=>'13','d'=>'12','ans'=>'b']);
        DB::table('questions')->insert(['organ_id'=>'1','teacher_id'=>'1','skill_id'=>'1','text'=>'6*6','a'=>'32','b'=>'34','c'=>'36','d'=>'40','ans'=>'c']);
        DB::table('questions')->insert(['organ_id'=>'1','teacher_id'=>'1','skill_id'=>'1','text'=>'7*4','a'=>'28','b'=>'57','c'=>'41','d'=>'50','ans'=>'a']);
        DB::table('questions')->insert(['organ_id'=>'1','teacher_id'=>'1','skill_id'=>'1','text'=>'2*8','a'=>'10','b'=>'16','c'=>'17','d'=>'19','ans'=>'b']);
        DB::table('questions')->insert(['organ_id'=>'1','teacher_id'=>'1','skill_id'=>'1','text'=>'6*5','a'=>'25','b'=>'42','c'=>'30','d'=>'34','ans'=>'c']);
        DB::table('questions')->insert(['organ_id'=>'1','teacher_id'=>'1','skill_id'=>'1','text'=>'7*7','a'=>'47','b'=>'48','c'=>'40','d'=>'49','ans'=>'d']);
        DB::table('teachers')->insert(['user_id'=>'3','skill_id'=>'1']);



    }
}
