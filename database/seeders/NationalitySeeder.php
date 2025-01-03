<?php

namespace Database\Seeders;

use App\Models\nationality;
use Illuminate\Database\Seeder;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('nationalities')->delete();

        $nationals = [
            'أفغانستاني', 'ألباني', 'آلاندي', 'جزائري', 'أمريكي سامواني', 'أندوري', 'أنقولي',
            'أنغويلي', 'أنتاركتيكي', 'بربودي', 'أرجنتيني', 'أرميني', 'أوروبهيني', 'أسترالي',
            'نمساوي', 'أذربيجاني', 'باهاميسي', 'بحريني', 'بنغلاديشي', 'بربادوسي', 'روسي',
            'بلجيكي', 'بيليزي', 'بنيني', 'سان بارتيلمي', 'برمودي', 'بوتاني', 'بوليفي',
            'بوسني/هرسكي', 'بوتسواني', 'بوفيهي', 'برازيلي', 'إقليم المحيط الهندي البريطاني',
            'بروني', 'بلغاري', 'بوركيني', 'بورونيدي', 'كمبودي', 'كاميروني', 'كندي',
            'الرأس الأخضر', 'كايماني', 'أفريقي', 'تشادي', 'شيلي', 'صيني', 'جزيرة عيد الميلاد',
            'جزر كوكوس', 'كولومبي', 'جزر القمر', 'كونغي', 'جزر كوك', 'كوستاريكي', 'كوراتي',
            'كوبي', 'قبرصي', 'كوراساوي', 'تشيكي', 'دنماركي', 'جيبوتي', 'دومينيكي', 'دومينيكي',
            'إكوادوري', 'مصري', 'سلفادوري', 'غيني', 'إريتيري', 'استوني', 'أثيوبي', 'فوكلاندي',
            'جزر فارو', 'فيجي', 'فنلندي', 'فرنسي', 'غويانا الفرنسية', 'بولينيزيي',
            'أراض فرنسية جنوبية وأنتارتيكية', 'غابوني', 'غامبي', 'جيورجي', 'ألماني', 'غاني',
            'جبل طارق', 'غيرنزي', 'يوناني', 'جرينلاندي', 'غرينادي', 'جزر جوادلوب', 'جوامي',
            'غواتيمالي', 'غيني', 'غيني', 'غياني', 'هايتي', 'جزيرة هيرد وجزر ماكدونالد',
            'هندوراسي', 'هونغ كونغي', 'مجري', 'آيسلندي', 'هندي', 'ماني', 'أندونيسيي', 'إيراني',
            'عراقي', 'إيرلندي', 'إيطالي', 'ساحل العاج', 'جيرزي', 'جمايكي', 'ياباني', 'أردني',
            'كازاخستاني', 'كيني', 'كيريباتي', 'كوري', 'كوري', 'كوسيفي', 'كويتي', 'قيرغيزستاني',
            'لاوسي', 'لاتيفي', 'لبناني', 'ليوسيتي', 'ليبيري', 'ليبي', 'ليختنشتيني', 'لتوانيي',
            'لوكسمبورغي', 'سريلانكي', 'ماكاوي', 'مقدوني', 'مدغشقري', 'مالاوي', 'ماليزي',
            'مالديفي', 'مالي', 'مالطي', 'مارشالي', 'مارتينيكي', 'موريتانيي', 'موريشيوسي',
            'مايوتي', 'مكسيكي', 'مايكرونيزيي', 'مولديفي', 'مونيكي', 'منغولي', 'الجبل الأسود',
            'مونتسيراتي', 'مغربي', 'موزمبيقي', 'ميانماري', 'ناميبي', 'نوري', 'نيبالي', 'هولندي',
            'هولندي', 'كاليدوني', 'نيوزيلندي', 'نيكاراجوي', 'نيجيري', 'نيجيري', 'ني',
            'نورفوليكي', 'ماريني', 'نرويجي', 'عماني', 'باكستاني', 'بالاوي', 'فلسطيني', 'بنمي',
            'بابوي', 'بارغاوي', 'بيري', 'فلبيني', 'بيتكيرني', 'بوليني', 'برتغالي', 'بورتي',
            'قطري', 'ريونيوني', 'روماني', 'روسي', 'رواندا', 'Kittitian/Nevisian',
            'ساينت مارتني فرنسي', 'ساينت مارتني هولندي', 'سان بيير وميكلوني',
            'سانت فنسنت وجزر غرينادين', 'ساموي', 'ماريني', 'ساو تومي وبرينسيبي', 'سعودي',
            'سنغالي', 'صربي', 'سيشيلي', 'سيراليوني', 'سنغافوري', 'سولفاكي', 'سولفيني',
            'جزر سليمان', 'صومالي', 'أفريقي', 'لمنطقة القطبية الجنوبية', 'سوادني جنوبي',
            'إسباني', 'هيلاني', 'سوداني', 'سورينامي', 'سفالبارد ويان ماين', 'سوازيلندي',
            'سويدي', 'سويسري', 'سوري', 'تايواني', 'طاجيكستاني', 'تنزانيي', 'تايلندي', 'تيموري',
            'توغي', 'توكيلاوي', 'تونغي', 'ترينيداد وتوباغو', 'تونسي', 'تركي', 'تركمانستاني',
            'جزر توركس وكايكوس', 'توفالي', 'أوغندي', 'أوكراني', 'إماراتي', 'بريطاني', 'أمريكي',
            'أمريكي', 'أورغواي', 'أوزباكستاني', 'فانواتي', 'فنزويلي', 'فيتنامي', 'أمريكي',
            'فاتيكاني', 'فوتوني', 'صحراوي', 'يمني', 'زامبياني', 'زمبابوي',
        ];

        foreach ($nationals as $name) {
            nationality::create(['name' => $name]);
        }
    }
}
