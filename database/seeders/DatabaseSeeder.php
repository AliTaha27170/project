<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersSeeder::class);
        DB::table('admins')->insert([
            'name'=>'Hasan Ahmad',
            'email'=>'hasan@admin.com',
            'password'=>Hash::make('12345678'),
        ]);
        DB::table('boss_speech')->insert([
            'speach'=>'كلمة رئيس الجمعية هنا',
        ]);
        DB::table('bank_accounts')->insert([
            'firstaccount'=>'حساب الراجحي 1 --- 1000000001',
            'secondaccount'=>'حساب الراجحي 1 --- 1000000001',
            'thiredaccount'=>'حساب الراجحي 1 --- 1000000001',
        ]);
        DB::table('socila_media')->insert([
            'facebook'=>'https://www.facebook.com',
            'instagram'=>'https://www.instagram.com',
            'twitter'=>'https://www.twitter.com',
        ]);
        DB::table('vision_message_worth')->insert([
            'message'=>'تشمل منطقة عمل الجمعیة مكة المكرمة-مدینة مكة المكرمة. كما یكون مركزھا في مدینة مكة المكرمة ویمكن نقلھ بقرار من الجمعیة العمومیة إلى أي مكان آخر ضمن منطقة عملھا بشرط ألا یكون في ھذا النقل ضرر لجمعیة أخرى . ',
            'vision'=>'تشمل منطقة عمل الجمعیة مكة المكرمة-مدینة مكة المكرمة. كما یكون مركزھا في مدینة مكة المكرمة ویمكن نقلھ بقرار من الجمعیة العمومیة إلى أي مكان آخر ضمن منطقة عملھا بشرط ألا یكون في ھذا النقل ضرر لجمعیة أخرى . ',
            'worth'=>'تشمل منطقة عمل الجمعیة مكة المكرمة-مدینة مكة المكرمة. كما یكون مركزھا في مدینة مكة المكرمة ویمكن نقلھ بقرار من الجمعیة العمومیة إلى أي مكان آخر ضمن منطقة عملھا بشرط ألا یكون في ھذا النقل ضرر لجمعیة أخرى . ',
        ]);
        DB::table('popups')->insert([
            'title'=>'العنوان',
            'description'=>'الوصف الوصف الوصف الوصف الوصف ',
        ]);
    }
}
