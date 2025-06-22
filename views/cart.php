<?php
/** @var array{items: array} $params */
$items = $params['items'] ?? [];
$total = 0;
?>

<div class="untree_co-section before-footer-section">
    <div class="container">
        <div class="row mb-5">
            <form class="col-md-12" method="post">
                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                                <?php $total += $item['price']; ?>
                                <tr>
                                    <td><?= htmlspecialchars($item['product_name']) ?></td>
                                    <td>$<?= number_format($item['price'], 2) ?></td>
                                    <td>
                                        <form method="post" action="/cartRemove">
                                            <input type="hidden" name="cart_id" value="<?= $item['cart_id'] ?>">
                                            <button class="btn btn-sm btn-danger" type="submit">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <div class="row justify-content-end">
            <div class="col-md-6">
                <h4 class="text-right">Total: $<?= number_format($total, 2) ?></h4>
                <a href="/checkout" class="btn btn-black btn-lg btn-block mt-3">Proceed To Checkout</a>
            </div>
        </div>
    </div>
</div>
