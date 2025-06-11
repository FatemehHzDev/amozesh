<?php

namespace Database\Seeders;

use App\Models\Mobile;
use App\Models\Mobile_user;
use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        $user = \App\Models\User::create([
            'user_name' => 'super_admin',
            'active' => '1',
            'organ_id' =>'0',
            'password' =>'123456789',
        ]);
        $role1 = Role::create(['name' => 'Super-Admin']);
        $user->assignRole($role1);
        $profile = Profile::create(['user_id' => $user['id'], 'f_name' => 'sara', 'l_name' => 'saravi']);
        $mob = Mobile::create(['mobile' => '09393394031','organ_id'=>'0']);
        $mob_user = Mobile_user::create(['user_id' => $user['id'],'mobile_id'=>$mob['id'],'main_phone'=>'1']);

        $user = \App\Models\User::create([
            'user_name' => 'admin',
            'active' => '1',
            'organ_id' =>'1',
            'password' =>'123456789',
        ]);
        $role2 = Role::create(['name' => 'admin']);
        $user->assignRole($role2);
        $profile = Profile::create(['user_id' => $user['id'], 'f_name' => 'amir', 'l_name' => 'amiri']);
        $mob = Mobile::create(['mobile' => '09111111111','organ_id'=>'1']);
        $mob_user = Mobile_user::create(['user_id' => $user['id'],'mobile_id'=>$mob['id'],'main_phone'=>'1']);

        $user = \App\Models\User::create([
            'user_name' => 'teach1',
            'active' => '1',
            'organ_id' =>'1',
            'password' =>'123456789',
        ]);
        $role3 = Role::create(['name' => 'teacher']);
        $user->assignRole($role3 );
        $profile = Profile::create(['user_id' => $user['id'], 'f_name' => 'raha', 'l_name' => 'ahadi']);
        $mob = Mobile::create(['mobile' => '09222222222','organ_id'=>'1']);
        $mob_user = Mobile_user::create(['user_id' => $user['id'],'mobile_id'=>$mob['id'],'main_phone'=>'1']);

//        $user = \App\Models\User::create([
//            'user_name' => 'st1',
//            'active' => '1',
//            'organ_id' =>'1',
//            'password' =>'123456789',
//        ]);
//        $role4 = Role::create(['name' => 'student']);
//        $user->assignRole($role4);
//        $profile = Profile::create(['user_id' => $user['id'], 'f_name' => 'leili', 'l_name' => 'amini']);
//        $mob = Mobile::create(['mobile' => '09333333333','organ_id'=>'1']);
//        $mob_user = Mobile_user::create(['user_id' => $user['id'],'mobile_id'=>$mob['id'],'main_phone'=>'1']);
//
//        $user = \App\Models\User::create([
//            'user_name' => 'st2',
//            'active' => '1',
//            'organ_id' =>'1',
//            'password' =>'123456789',
//        ]);
//        $user->assignRole($role4);
//        $profile = Profile::create(['user_id' => $user['id'], 'f_name' => 'nazanin', 'l_name' => 'rezaei']);
//        $mob = Mobile::create(['mobile' => '09444444444','organ_id'=>'1']);
//        $mob_user = Mobile_user::create(['user_id' => $user['id'],'mobile_id'=>$mob['id'],'main_phone'=>'1']);




    }
}
