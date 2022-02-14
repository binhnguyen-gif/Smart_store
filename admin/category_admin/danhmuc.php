<?php
if (isset($_POST['themmoi'])) {
    $tendanhmuc = $_POST['tendanhmuc'];
    $link = $_POST['link'];
    $level = $_POST['level'];

    $sql_danhmuc = "INSERT INTO danhmuc(tendanhmuc, link, level) VALUES ('" . $tendanhmuc . "','" . $link . "','" . $level . "')";
    $query_danhmuc = mysqli_query($connect, $sql_danhmuc);
    if ($query_danhmuc) {
        echo '<script>alert("Thêm danh mục thành công");</script>';
    } else {
        echo '<script>alert("Thêm danh mục thất bại");</script>';
    }
}
?>
<div class="content_admin">
    <div class="product-menu">
        <div class="product-title">
            <h3>Thêm danh mục sản phẩm</h3>
        </div>
        <div class="product-handling">

        </div>
    </div>
    <form action="" method="post">
        <div class="form-danhmuc">
            <div class="form-danhmuc__left">
                <label for="">Tên danh mục</label>
                <input type="text" name="tendanhmuc" id="" class="danhmuc-input" placeholder="Tên danh mục">
                <label for="">Link</label>
                <input type="text" name="link" id="" class="danhmuc-input" placeholder="Link danh mục">
                <select name="level" id="level-danhmuc">
                    <option value="-1">--Level--</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
            <div class="form-danhmuc__right">
                <!--                <label for="">Giá</label>-->
                <!--                <input type="text" name=""  class="danhmuc-input" id="" placeholder="0">-->
            </div>
        </div>
        <input type="submit" value="Thêm mới" name="themmoi" class="btn" style="margin-bottom: 32px">
    </form>

    <div class="interface">
        <table border="1" cellpadding="0">
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Link</th>
                <th>Level</th>
                <th colspan="2">Action</th>
            </tr>
            <?php
            $count = 0;
            $sql_selecet_dm = "SELECT * FROM danhmuc ORDER BY id DESC ";
            $query_select_dm = mysqli_query($connect, $sql_selecet_dm);
            while ($row = mysqli_fetch_array($query_select_dm)) {
                $count++; ?>

                <tr>
                    <td><?php echo $count ;?></td>
                    <td><?php echo $row['tendanhmuc'] ;?></td>
                    <td><?php echo $row['link']; ?></td>
                    <td><?php echo $row['level'] ;?></td>
                    <td>
                        <a href="">Sửa</a>
                    </td>
                    <td>
                        <a href="Xóa">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>