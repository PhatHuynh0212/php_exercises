<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="wrap_container">
            <div class="row mb-4">
                <div class="col-md-6 offset-md-3">
                    <h2 class="text-center" style="margin-bottom: 15px;">
                        <a href="index.php" style="text-decoration: none; color: inherit;">Film Image</a>
                    </h2>
                    <div class="input-group">
                        <input type="text" id="searchInput" class="form-control" placeholder="Link ..." name="q" style='background: transparent; border-radius: 90px; border-color: black;'>
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary ms-3" type="submit" onclick="search()" style="border-radius: 90px;">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="filmCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" id="filmList">
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#filmCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Trước</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#filmCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sau</span>
                </button>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        window.onload = function () {
            loadAllProducts();
        };

        function loadAllProducts() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {

                var films = JSON.parse(xhr.responseText);
                displaySearchResults(films);

                }
            };
            xhr.open('GET', 'search.php', true);
            xhr.send();
        }

        const IMAGE_REGEX = /(ftp|http|https)?:\/\/([www]\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*).[jpg|jpeg|png|gif]{3}/;

        function search() {
            var searchQuery = document.getElementById('searchInput').value;

            if (!searchQuery.match(IMAGE_REGEX)) {
                alert("Vui lòng nhập đúng đường dẫn hình ảnh.")
                return
            }

            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                var films = JSON.parse(xhr.responseText);
                displaySearchResults(films);
                }
            };
            xhr.open('GET', 'search.php?q=' + searchQuery, true);
            xhr.send();
        }

        function displaySearchResults(films) {
            var filmList = document.getElementById('filmList');
            filmList.innerHTML = '';
            films.forEach((film, index) => {
                var activeClass = index === 0 ? 'active' : '';
                var slideHtml =
                `<div class="carousel-item ${activeClass}">
                    <img src="${film.anh}" class="d-block w-100" alt="Film image">
                </div>`;
                filmList.insertAdjacentHTML('beforeend', slideHtml);
            });
            var filmCarousel = new bootstrap.Carousel(document.getElementById('filmCarousel'));
        }
    </script>
</body>
</html>