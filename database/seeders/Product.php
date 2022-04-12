<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['product_id' => 1, 'picture_Product' => 'DAZY Women Casual Jacket.jpg', 'name_Product' => 'DAZY Womens Casual Jacket', 'price_Product' => 210, 'size_Product' => 'S', 'color_Product' => 'Khaki', 'weight_Product' => '0.79 kg', 'dimensisons_Product' => '110 x 33 x 100 cm', 'materials_Product' => '70% cotton', 'description_Product' => 'DAZY is a high-class office women fashion brand that is very trusted by women, cow skirts exclusively designed by Fiona brand give you an extremely youthful, dynamic and modern fashion experience. . The latest beautiful design women Jeans skirt for her to always be beautiful and stylish. High quality materials help jeans skirt always keep the shape extremely beautiful and attractive. FIONA long cowl skirt is easy to coordinate with shirts, T-shirts and accessories, bags.'],
            ['product_id' => 2, 'picture_Product' => 'C522007022___B242006_1_.jpg', 'name_Product' => 'A-shaped cowl skirt', 'price_Product' => 165, 'size_Product' => 'M', 'color_Product' => 'Blue', 'weight_Product' => '0.65 kg', 'dimensisons_Product' => '100 x 23 x 90 cm', 'materials_Product' => 'Soft, form-fitting jeans', 'description_Product' => 'Fionas exclusive designer cowboy skirt gives you an extremely youthful, dynamic and modern fashion experience. The latest beautiful design women Jeans skirt for her to always be beautiful and stylish. High quality materials help jeans skirt always keep the shape extremely beautiful and attractive.'],
            ['product_id' => 3, 'picture_Product' => 'F552002071___F352155071__1_.jpg', 'name_Product' => 'Loose shirt', 'price_Product' => 95, 'size_Product' => 'L', 'color_Product' => 'Green', 'weight_Product' => '0.65 kg', 'dimensisons_Product' => '120 x 25 x 95 cm', 'materials_Product' => 'rough smooth silk surface', 'description_Product' => 'Women shirt brand Fiona gives you a trendy and modern office fashion experience. Women shirt suitable for the office. High quality material, soft and comfortable. Youthful elegant style suitable for office or street fashion, extremely beautiful and attractive. Womenoffice shirts are easy to coordinate with women casual pants, skirts and accessories, bags.']
        ]);
    }
}
