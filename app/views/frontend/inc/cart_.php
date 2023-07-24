<div class="cart-dropdown" id="cart-dropdown">
    <div class="cart-content-wrap">
        <div class="cart-header">
            <h2 class="header-title">Cart review</h2>
            <button class="cart-close sidebar-close"><i class="fas fa-times"></i></button>
        </div>
        <div class="cart-body">
            <ul class="cart-item-list">
                <?php if (isset($_SESSION['cart'])) { ?>
                    <?php foreach ($_SESSION['cart'] as $item) { ?>

                        <li class="cart-item">
                            <div class="item-img">
                                <a href="<?php echo ASSETS_URL_ROOT . '/products/productdetail/' . $item['ProductID'] ?>">
                                    <img src="<?php echo ASSETS_URL_ROOT . '/public/imgs/' . $item['Image'] ?>" alt="Commodo Blown Lamp"></a>
                                <a href="<?php echo ASSETS_URL_ROOT . '/cart/del?Id=' . $item['CartID'] ?>"> <button class="close-btn"><i class="fas fa-times"></i></button></a>
                            </div>
                            <div class="item-content">
                                <div class="product-rating">
                                    <span class="icon">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </span>
                                    <span class="rating-number">(64)</span>
                                </div>
                                <h3 class="item-title"><a href="single-product-3.html"><?php echo $item['Name'] ?></a></h3>
                                <div class="item-price"><span class="currency-symbol">$</span><?php echo $item['Price'] ?></div>
                                <div class="pro-qty item-quantity">
                                    <input type="number" class="quantity-input" value="<?php echo $item['Quantity'] ?>">
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                <?php } else { ?>
                    <p>Không có sản phẩm nào trong giỏ hàng của bạn.</p>
                <?php } ?>


            </ul>
        </div>
        <div class="cart-footer">
            <h3 class="cart-subtotal">
                <span class="subtotal-title">Subtotal:</span>
                <span class="subtotal-amount">$

                    <?php
                    $subtotal = 0;
                    if (isset($_SESSION['cart'])) {
                        # code...
                        foreach ($_SESSION['cart'] as $item) {

                            $subtotal += ($item['Price'] * $item['Quantity']);
                        }
                    }
                    echo  $subtotal;
                    ?>
                </span>
            </h3>
            <div class="group-btn">
                <a href="<?php echo ASSETS_URL_ROOT ?>/cart" class="axil-btn btn-bg-primary viewcart-btn">View Cart</a>
                <a href="<?php echo ASSETS_URL_ROOT ?>/checkout" class="axil-btn btn-bg-secondary checkout-btn">Checkout</a>
            </div>
        </div>
    </div>
</div>