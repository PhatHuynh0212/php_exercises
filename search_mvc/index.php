<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Search</title>
    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="wrap_container">
            <div class="row mb-4">
                <div class="col-md-6 offset-md-3">
                    <h2 class="text-center" style="margin-bottom: 15px;">
                        <a href="index.php" style="text-decoration: none; color: inherit;">Film Search</a>
                    </h2>
                    <form id="searchForm" action="index.php" method="GET">
                        <div class="input-group">
                        <?php
                                $searchQuery = isset($_GET['q']) ? $_GET['q'] : '';                              
                                echo "<input type='text' id='searchInput' class='form-control' placeholder='Tìm kiếm ...' name='q' value='$searchQuery' style='background: transparent; border-radius: 90px; border-color: black;'>";
                            ?>
                            <div class="input-group-append">
                                <button class="btn btn-outline-info ms-3" type="submit" name="searchBtn" style="border-radius: 90px;">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div id="filmList" class="row">
                <?php
                require_once("Controllers/FilmController.php");

                $filmController = new FilmController();

                if (isset($_GET['q'])) {
                    $searchQuery = $_GET['q'];
                    $filmController->displayResults($searchQuery);
                } else {
                    $filmController->displayProducts();
                }
                ?>
            </div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
