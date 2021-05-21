<?php
require_once "../core/functions.php";
if (!isset($full_list)) $full_list = catalogue_show();//вывод каталога на экран
if (!isset($basket_list)) {//вывод корзины на экран
    $basket_view = basket_show();
    $basket_list = $basket_view[0];
    $total_sum = $basket_view[1];
}
if (isset($number_of_items) && $number_of_items == '' && (!isset($cleaning) || $cleaning == '')) {
    $control_message = 'необходимо задать кол-во позиций';
} else {
    $control_message = '';
}
if (isset($number_of_items) && $number_of_items <> '') {
    $control_message = '';
    catalogue($number_of_items);//генерация каталога товаров из случайного набора параметров
    $full_list = catalogue_show();//вывод каталога на экран
}
if (isset($cleaning) && $cleaning == 'full') {//полное удаление всех товаров из каталога
    sql_request("DELETE FROM catalogue WHERE id>0");
    $full_list = catalogue_show();//вывод каталога на экран
}
if (isset($clean_basket) && $clean_basket == 'full') {//полное удаление всех товаров из корзины
    sql_request("DELETE FROM basket WHERE id_basket>0");
    $basket_view = basket_show();//обновление вида корзины после удаления выбранных товаров
    $basket_list = $basket_view[0];
    $total_sum = $basket_view[1];
}
if (isset($item_del) && $item_del <> '') {//удаление выбранного товара из корзины
    sql_request("DELETE FROM basket WHERE id_basket=$item_del");
    $basket_view = basket_show();//обновление вида корзины после удаления выбранных товаров
    $basket_list = $basket_view[0];
    $total_sum = $basket_view[1];
    unset($item_del);
}
if (isset($show) && $show <> '') {//запрос на показ описания товара
    $product_description = show_description($show);
    $text_description = $product_description[0];
    $path = $product_description[1];
    $product_photo = <<<_END
    <img class="product_photo" src="../$path$product_description[2]" alt="фотография футболки">
_END;
    } else {
        $product_description = show_description('nothing');
        $text_description = $product_description[0];
        $product_photo = $product_description[1];
}
if (isset($product_selected) && $product_selected <>'') {//запрос на добавление товара в корзину
    put_in_basket($product_selected);
    $basket_view = basket_show();
    $basket_list = $basket_view[0];
    $total_sum = $basket_view[1];
    unset($product_selected);
}
require "../core/view.php";