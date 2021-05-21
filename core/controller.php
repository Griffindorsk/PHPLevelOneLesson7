<?php
//контроллер анализирует наличие и состояние входных параметров со страницы, слегка преобразует их для безопасности и передает в модель (model.php)
if (isset($_GET['cat_volume'])) {//запрос условного админа на генерацию каталога
    ($_GET['cat_volume'] <> '') ? $number_of_items = (int)htmlspecialchars($_GET['cat_volume']) : $number_of_items = '';
}
if (isset($_GET['clean'])) {//запрос пользователя на полное удаление товаров из каталога
    ($_GET['clean'] <> '') ? $cleaning = htmlspecialchars($_GET['clean']) : $cleaning = '';
}
if (isset($_GET['clean_basket'])) {//запрос пользователя на полную очистку корзины товаров
    ($_GET['clean_basket'] <> '') ? $clean_basket = htmlspecialchars($_GET['clean_basket']) : $clean_basket = '';
}
if (isset($_GET['item_del'])) {//запрос пользователя на удаление конкретной позиции в корзине
    ($_GET['item_del'] <> '') ? $item_del = htmlspecialchars($_GET['item_del']) : $item_del = '';
}
if (isset($_GET['show'])) {//запрос описания конкретного товара
    ($_GET['show'] <> '') ? $show = htmlspecialchars($_GET['show']) : $show = '';
}
if (isset($_GET['to_basket'])) {//запрос на добавление товара в корзину
    ($_GET['to_basket'] <> '') ? $product_selected = htmlspecialchars($_GET['to_basket']) : $product_selected = '';
}
require "../core/model.php";