<?php


namespace App\Helpers;

use Illuminate\Support\Str;

class Helper
{
    public static function products($products)
    {
        $html = '';

        foreach ($products as $key => $product) {
            $html .= '
                    <tr>

                        <td class="align-middle">' . $product->id . '</td>
                        <td class="align-middle"><img style="height: 100px;" src="' . asset('images/' . $product->picture_Product) . '" class="rounded align-middle"></td>
                        <td class="align-middle">' . $product->name_Product . '</td>
                        <td class="align-middle">' . $product->price_Product . '</td>
                        <td class="align-middle">' . $product->size_Product . '</td>
                        <td class="align-middle">' . $product->color_Product . '</td>
                        <td class="align-middle">' . $product->weight_Product . '</td>
                        <td class="align-middle">' . $product->dimensisons_Product . '</td>
                        <td class="align-middle">' . $product->materials_Product . '</td>
                        <td class="align-middle">' . substr($product->description_Product, 0, 80) . "..." . '</td>
                        <td class="align-middle" style="padding-left: 40px">
                            <a class="btn btn-primary btn-sm" href="/admin/menus/updateProduct/' . $product->id . '">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a onclick="return confirm(\'Delete product?\')" href="delete-product/' . $product->id . '" class="btn btn-warning btn-sm"
                                >
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';

            //unset($products[$key]);

            // $html .= self::products($products);
        }

        return $html;
    }

    public static function blog($blog)
    {
        $html = '';

        foreach ($blog as $key => $blogitem) {
            $html .= '
                    <tr>

                        <td class="align-middle">' . $blogitem->id . '</td>
                        <td class="align-middle"><img style="height: 100px;" src="' . asset('images/' . $blogitem->picture_Blog) . '" class="rounded align-middle"></td>
                        <td class="align-middle">' . $blogitem->title_blog . '</td>
                        <td class="align-middle">' . $blogitem->time_blog . '</td>
                        <td class="align-middle">' . substr($blogitem->content_blog, 0, 80) . "..." . '</td>
                        <td class="align-middle" style="padding-left: 40px">
                            <a class="btn btn-primary btn-sm" href="/admin/menus/updateBlog/' . $blogitem->id . '">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a onclick="return confirm(\'Delete Blog?\')" href="delete-Blog/' . $blogitem->id . '" class="btn btn-warning btn-sm">

                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';

            //unset($products[$key]);

            // $html .= self::products($products);
        }

        return $html;
    }

    public static function hastagProducts($hastagProduct)
    {
        $html = '';

        foreach ($hastagProduct as $key => $hastag) {
            $html .= '
                    <tr>

                        <td class="align-middle text-center">' . $hastag->product_id . '</td>
                        <td class="align-middle">' . $hastag->hastag_product . '</td>
                        <td class="align-middle" style="padding-left: 40px">
                            <a class="btn btn-primary btn-sm" href="/admin/menus/updateHastagProduct/' . $hastag->id . '">
                                <i class="fas fa-edit"></i>
                            </a>
                              <a onclick="return confirm(\'Delete Hastag Product?\')" href="delete-HastagProduct/' . $hastag->id . '" class="btn btn-warning btn-sm">

                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';
        }

        return $html;
    }

    public static function hastagBlog($hastagBlog)
    {
        $html = '';

        foreach ($hastagBlog as $key => $hastag) {
            $html .= '
                    <tr>

                        <td class="align-middle text-center">' . $hastag->blog_id . '</td>
                        <td class="align-middle">' . $hastag->hastag_blog . '</td>
                        <td class="align-middle" style="padding-left: 40px">
                            <a class="btn btn-primary btn-sm" href="/admin/menus/updateHastagBlog/' . $hastag->id . '">
                                <i class="fas fa-edit"></i>
                            </a>
                               <a onclick="return confirm(\'Delete Hastag Blog?\')" href="delete-HastagBlog/' . $hastag->id . '" class="btn btn-warning btn-sm">

                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';

            //unset($products[$key]);

            // $html .= self::products($products);
        }

        return $html;
    }

    public static function users($users)
    {
        $html = '';

        foreach ($users as $key => $userItem) {
            if ($userItem->role != 1) {
                $html .= '
                    <tr>

                        <td class="align-middle text-center">' . $userItem->id . '</td>
                        <td class="align-middle">' . $userItem->name . '</td>
                        <td class="align-middle">' . $userItem->email . '</td>
                        <td class="align-middle"> ••••••••••••••• </td>
                        <td class="align-middle">' . $userItem->phone . '</td>
                        <td class="align-middle">' . $userItem->address . '</td>
                        <td class="align-middle">' . $userItem->city . '</td>

                        <td class="align-middle" style="padding-left: 40px">
                            <a class="btn btn-primary btn-sm" href="/admin/menus/updateUsers/' . $userItem->id . '">
                                <i class="fas fa-edit"></i>
                            </a>
                              <a onclick="return confirm(\'Delete User?\')" href="delete-Users/' . $userItem->id . '" class="btn btn-warning btn-sm">

                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';
            }

        }

        return $html;
    }

    public static function orderItem($orderItem)
    {
        //dd($orderItem);
        $total = 0;
        $html = '';

        foreach ($orderItem as $item) {
            $html .= '
                            <tr>

                                <td class="align-middle text-center">' . $item->order_id . '</td>
                                <td class="align-middle text-center">' . $item->prod_id . '</td>
                                <td class="align-middle text-center">' . $item->qty . '</td>
                                <td class="align-middle text-center">' . $item->price . '</td>


                            </tr>

                        ';
            $total = $total + $item->price;
        }
        $html = $html . '
        <tr style="font-size: 15px">
            <th class="align-middle text-center" ></th>
            <th class="align-middle text-center" ></th>
            <th class="align-middle text-center" ></th>
            <th class="align-middle text-center" >Total Price : $'.$total.'</th>
        </tr>
       ';

        return $html;
    }

    public static function comment($comment)
    {
        $html = '';

        foreach ($comment as $key => $item) {
            $html .= '
                    <tr>

                        <td class="align-middle text-center">' . $item->id . '</td>
                        <td class="align-middle">' . $item->email_user . '</td>
                        <td class="align-middle text-center">' . $item->prod_id . '</td>
                        <td class="align-middle">' . $item->content_cmt . '</td>

                        <td class="align-middle8 text-center ">

                               <a onclick="return confirm(\'Delete Comment?\')" href="delete-Comment/' . $item->id . '" class="btn btn-warning btn-sm">

                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                ';

            //unset($products[$key]);

            // $html .= self::products($products);
        }

        return $html;
    }

    public static function order($order)
    {
        $html = '';

        foreach ($order as $key => $item) {
            if ($item->state == 'not complete') {
                $html .= '
                    <tr class="table-warning">

                        <td class="align-middle text-center">' . $item->id . '</td>
                        <td class="align-middle text-center">' . $item->fname . '</td>
                        <td class="align-middle text-center">' . $item->lname . '</td>
                        <td class="align-middle text-center">' . $item->email . '</td>
                        <td class="align-middle">' . $item->phone . '</td>
                        <td class="align-middle">' . $item->address . '</td>
                        <td class="align-middle text-center">' . $item->city . '</td>
                        <td class="align-middle text-center">' . $item->state . '</td>

                        <td class="align-middle8 text-center ">
                            <a href="order-item/' . $item->id . '" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                               <a onclick="return confirm(\'Delivery confirmation?\')" href="confirm-order/' . $item->id . '" class="btn btn-secondary btn-sm">

                                <i class="fas fa-check-circle"></i>
                            </a>
                        </td>
                    </tr>

                ';
            } else {
                $html .= '
                    <tr class="table-success">

                        <td class="align-middle text-center">' . $item->id . '</td>
                        <td class="align-middle text-center">' . $item->fname . '</td>
                        <td class="align-middle text-center">' . $item->lname . '</td>
                        <td class="align-middle text-center">' . $item->email . '</td>
                        <td class="align-middle ">' . $item->phone . '</td>
                        <td class="align-middle ">' . $item->address . '</td>
                        <td class="align-middle text-center">' . $item->city . '</td>
                        <td class="align-middle text-center">' . $item->state . '</td>

                        <td class="align-middle8 text-center ">
                            <a href="order-item/' . $item->id . '" class="btn btn-primary btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>

                              <a onclick="return confirm(\'Cancel confirmation?\')" href="confirm-order/' . $item->id . '" class="btn btn-success btn-sm">
                                <i class="fas fa-check-circle"></i>
                            </a>
                        </td>
                    </tr>

                ';
            }


            //unset($products[$key]);

            // $html .= self::products($products);
        }

        return $html;
    }
}

?>
