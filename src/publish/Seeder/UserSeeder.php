<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Adel Shokry',
            'email' => 'adel.arabcoder@gmail.com',
            'password' => bcrypt(123456),
            'phone' => '+0201020976194',
            'rule' => 'admin',
            'info' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.',
            'gender' => 'male',
            ]);

        User::create([
            'name' => 'Mohamed',
            'email' => 'mohamed@gmail.com',
            'password' => bcrypt(123456),
            'phone' => '+021207687151',
            'rule' => 'editor',
            'info' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.',
            'gender' => 'male',
            ]);

        User::create([
            'name' => 'Adel Bios',
            'email' => 'adel@gmail.com',
            'password' => bcrypt(123456),
            'phone' => '+021207687151',
            'rule' => 'user',
            'info' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.',
            'gender' => 'male',
            ]);
    }
}
