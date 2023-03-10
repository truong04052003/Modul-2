<?php
include_once './views/LAYOUT/header.php';
include_once './views/LAYOUT/menu.php';

?>
<div class="container-fluid px-4">
    <h1>Thêm sản phẩm</h1>
    <form action="" method="post">
        <div class="mb-3">
            <label class="form-label">TENSANPHAM</label>
            <input type="text" class="form-control" name="TENSANPHAM">
        </div>
        <div class="mb-3">
            <label class="form-label">category_id</label>
            <select class="form-select" name="category_id">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category->ID; ?>"><?php echo $category->categories_name;?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label">IMAGE</label>
            <input type="file" class="form-control" name="IMAGE">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Them</button>
        </div>

    </form>
</div>

<?php
include_once './views/LAYOUT/footer.php';
?>