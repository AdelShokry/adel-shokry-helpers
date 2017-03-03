<?php

use Illuminate\Database\Seeder;
use App\Setting;
class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Control::store(request(),'setting',[
                'translate' => [
                    'site_name'=>'Php Anonymous',
                    'site_desc'=>'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص',
                    'copyright'=>'جميع الحقوق محفوظة @ 2016 مـ',
                ],
                'mail' => 'alfurat.eg@gmail.com',
                'phone' => '123456789',
                'keywords' => 'keyword1,keyword2,keyword3',
                'maintenance' => 'open',
                'facebook' => 'https://www.facebook.com/anonymousDevelopersPage',
            ]);	
        

       
    }
}
