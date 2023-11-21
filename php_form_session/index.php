<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Session</title>
</head>
<body>
    <div class="container">
        <div class="glass-container">
            <div class="left">
                <div class="form_1">
                    <h1>Form 1: Thêm Danh Mục</h1>
                    <form method="post">
                        <label for="category">Danh Mục :</label>
                        <input type="text" name="category" id="category">
                        <button type="submit" name="addCategory">Thêm</button>
                    </form>
                </div>
                <br>
                <hr>
                <div class="form_2">
                <h1>Form 2: Thêm Sản Phẩm</h1>
                    <form method="post">
                        <label for="categorySelect">Chọn Danh Mục :</label>
                        <select name="category" id="categorySelect">
                            <option value="">--Chọn một danh mục--</option>
                            <?php include("category_ss.php") ?>
                        </select>
                        <br>
                        <div class="san_pham">
                            <label for="product">Sản Phẩm:</label>
                            <input type="text" name="product" id="product">
                            <button type="submit" name="addProduct">Thêm</button>
                        </div>
                        
                    </form>
                    <br>
                    <hr>
                    <button style="width: 100%; height: 35px; margin-top: 28px"><a href="del.php" style="text-decoration:none; padding: 5px 120px;">Xóa Session</a></button>
                </div>
            </div>
            
            <div class="right">
                <div class="form_3">
                    <h1>Danh Sách Danh Mục và Sản Phẩm</h1>
                    <ul>
                        <?php include("result.php") ?>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    
</body>
</html>