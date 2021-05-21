<?php
require_once "../templates/layout.php";
?>
<div class="centerline">
    <div class="shop">
        <div class="control">
            <p class="button"><a href="index.php?clean_basket=full&basket_window=go">очистить корзину</a></p>
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
        <div class="description">
            <div class="text_description">
                <h3>Описание товара</h3>
                <h4>(кликните на любой параметр товара, чтобы увидеть)</h4>
                <p><?=$text_description?></p>
            </div>
            <?=$product_photo?>
        </div>
    </div>
</div>