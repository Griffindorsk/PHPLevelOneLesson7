<?php
require_once "../templates/layout.php";
?>
<div class="centerline">
    <div class="shop">
        <div class="control">
            <form class="form_arrangement" action="index.php">
                <label for="generation_value">Сколько товаров добавить в каталог:</label>
                <input name="cat_volume" id="generation_value" type="number" min="1" max="30"
                    placeholder="кол-во позиций">
                <button type="submit">добавить в каталог</button>
            </form>
            <p class="button"><a href="index.php?clean=full&cat_volume=">удалить каталог</a></p>
        </div>
        <div class="message">
            <p><?=$control_message;?></p>
        </div>
        <div class="products">
            <div class="catalogue">
                <div class="list">
                    <div class="headers col1h">
                        <p>артикул</p>
                    </div>
                    <div class="headers col2h">
                        <p>название</p>
                    </div>
                    <div class="headers col3h">
                        <p>пол</p>
                    </div>
                    <div class="headers col4h">
                        <p>размер</p>
                    </div>
                    <div class="headers col5h">
                        <p>цвет</p>
                    </div>
                    <div class="headers col6h"></div>
                    <div class="headers col7h">
                        <p>цена</p>
                    </div>
                    <div class="headers col8h">
                        <p>в корзину</p>
                    </div>
                    <?=$full_list?>
                </div>
            </div>
            <div class="description">
                <div class="text_description">
                    <h3>Описание товара</h3>
                    <h4>(кликните на любой параметр товара, чтобы увидеть)</h4>
                    <!-- <p>Хенли – простая модель с длинными рукавами, без воротника, но с глубоким вырезом на
                        пуговицах, из тонкого хлопка.</p> -->
                        <p><?=$text_description?></p>
                </div>
                <!-- <img class="product_photo" src="../products/images/05_t_shirt_violet.jpg" alt="описание"> -->
                <?=$product_photo?>
            </div>
        </div>
        <div class="control">
            <p class="button"><a href="index.php?clean_basket=full">очистить корзину</a></p>
        </div>
        <div class="products">
            <div class="basket">
                <div class="list">
                    <div class="headers col1h">
                        <p>артикул</p>
                    </div>
                    <div class="headers col2h">
                        <p>название</p>
                    </div>
                    <div class="headers col3h">
                        <p>пол</p>
                    </div>
                    <div class="headers col4h">
                        <p>размер</p>
                    </div>
                    <div class="headers col5h">
                        <p>цвет</p>
                    </div>
                    <div class="headers col6h"></div>
                    <div class="headers col7h">
                        <p>цена за ед.</p>
                    </div>
                    <div class="headers col8h">
                        <p>кол-во</p>
                    </div>
                    <div class="headers col9h">
                        <p>цена</p>
                    </div>
                    <div class="headers col10h">
                        <p></p>
                    </div>
                    <?=$basket_list?>
                </div>
                <!-- <div class="list">список товаров</div> -->
                <div class="total_sum"><p>Общая стоимость товаров в корзине: <strong><?=$total_sum?></strong></p></div>
            </div>
        </div>
    </div>
</div>