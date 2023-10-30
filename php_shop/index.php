<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
        crossorigin="anonymous"
    />
    <title>My Shop</title>
    <script>
        var categories = <?php echo json_encode($categories); ?>;

        function selectCategory(category) {
            document.location.href = "?category=" + category;
        }
    </script>
</head>
<body>
        <div class="container">
            <div class="row">
                <nav id="sidebarMenu" class="col-lg-3 bg-dark">
                    <div class="navbar d-flex flex-column mr-5 pt-3">
                        <h4 class="navbar-heading mt-4 mb-3 mr-5 text-primary">
                            <a href="./?page=home">Product</a>
                        </h4>
                        <ul id="product" class="nav-item nav d-flex flex-column mb-2 h6">
                            <?php include "product.php"; ?>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-lg-9 px-sm-5">
                    <div class="d-flex justify-content-md-start pt-3 mb-3">
                        <?php include "heading.php"; ?>
                    </div>
                    <hr />
                    <div class="brand row ml-1 w-100">
                        <?php include "brand.php"; ?>
                    </div>
                </main>
            </div>
        </div>
</body>
</html>