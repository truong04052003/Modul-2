<?php
include_once './views/LAYOUT/header.php';
include_once './views/LAYOUT/menu.php';

?>
<div class="container-fluid px-4">

    <h1>Thêm đơn hàng</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">TENKHACH</label>
                <input type="text" class="form-control" name="TENKHACH">
            </div>
            <div class="mb-3">
                <label class="form-label">customer_id</label>
                <select class="form-select" name="customer_id">
                    <?php foreach ($orders as $order) : ?>
                        <option value="<?php echo $order->ID; ?>"><?php echo $order->ID; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">NGAYDATHANG</label>
                <input type="text" class="form-control" name="NGAYDATHANG">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Them</button>
            </div>
</div>

</form>
<?php
include_once './views/LAYOUT/footer.php';
?>