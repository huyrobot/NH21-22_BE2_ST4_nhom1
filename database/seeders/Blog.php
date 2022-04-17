<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Blog extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            ['id' => 1, 'time_blog' => '2022-12-02', 'title_blog' => '8 Inspiring Ways to Wear Dresses in the Winter', 'content_blog' => 'How To Wear Dresses in the Winter and Stay Warm As a petite woman, dresses are my favorite thing to wear. Dresses are so flattering on a petite frame, as they serve to lengthen the appearance by creating a vertical line. A dress naturally accents the curves on any woman, and this is especially true for petite women. If I could wear a dress every day I would, as I just love the way I look in them! In the winter however, this is not always practical. Today I am sharing. If the date involves a long drive to your destination with pretty photos along the way, you’ll want to dress for comfort and the weather. Since you are usually in the car, v-neck top, fur coat and finish off with a black toe pointed stiletto heels are a must. Tip: you can wear crop tops in the fall or winter. Just wear it with a warm chunky knit cardigan and put on another layer of outerwear for pit stops at the gas station.'],
            ['id' => 2, 'time_blog' => '2020-09-04', 'title_blog' => '7 Fall Winter 2020 Fashion Trends To Wear For A Romantic Date Night', 'content_blog' => 'Winter evenings can be romantic. Indoor candlelit bars and restaurants feel charming and inviting, while giving you the perfect excuse to get comfortable with the person you are seeing.

            This season, however, date night can feel a little different depending on where you live and what is really open. For those who live in areas where social aloofness is still a thing, we have created the perfect evening look to keep you warm.

            For everyone else who is dating at home, virtually or on the go, we have designed outfits that suit the occasion and keep you warm from fall to winter. (Personally, I am a huge fan of the hiking date outfit. Being in the woods surrounded by snow and frost is magical!).

            Cold weather outfits that are ready for any date idea approved by a fashion stylist. For outdoor dinners, here is an outfit that combines comfort and clothing. The silk top adds an elegant shine to the top, while the high-waisted black jeans have a more refined (but still relaxed) look than the sweatpants. Add gold dangling earrings, a blue pearl handle bag and crocodile leather ankle boots for those lofty accessory accents. Whether it is fall or winter, a trendy jacket is a must, like this cozy 60s fleece with faux leather trim.'],
            ['id' => 3, 'time_blog' => '2022-11-04', 'title_blog' => '22 Cute Birthday Outfits for Winter If You Are A Women Over 30', 'content_blog' => 'Looking for a cute birthday outfits for winter idea? Then this post is for you! As a January baby in my thirties, I now have some experience dressing for winter birthdays in a variety of climates.

            My birthday was January 5th! For the past 6 years, I have been fortunate to celebrate my birthday in Australia, Greece, Germany, India, New York and my home in Texas. For the most part, it has been FROZEN all my life for all my birthday celebrations. But I will also share some birthday outfit ideas if you live in a climate slightly warmer than Russia or Wisconsin!

            When it comes to my birthday, I usually use that as an excuse to be a little over the top with what I wear. I mean it is my day to be a princess … is not it? So dresses, tulle skirts and high heels are more my strengths for my birthday outfits. I will also add some more casual outfits.

            22 Cool Winter Birthday Party Outfits to Chic this winter

            It can be very difficult, let alone the limitation, to choose the perfect winter birthday outfit. With cold weather, snow, and ice affecting all of your fashion choices, finding a set that is both practical and festive can be quite frustrating. This is where I come in!

            To ensure you are satistfied with my picks, I got some inspiration from top fashion girls from Instagram, who presented us with a handful of super cool yet weather-friendly outfit ideas to wear on your next birthday.

            As you will soon realize, your options are actually much broader than they seem. Come on, check out our favorite winter birthday outfits, including everything from the classic LBD look to an outfit put together with the ultimate party pants, then shop for important items to wear when you are celebrating another year.']
        ]);
    }
}
