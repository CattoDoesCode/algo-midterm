<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algorithms and Complexity</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg mt-3">
        <div class="container">
            <a class="navbar-brand" href="#">CSP20843X</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="pages/bubble_sort.php">Bubble Sort</a></li>
                            <li><a class="dropdown-item" href="pages/quick_sort.php">Quick Sort</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Search
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="pages/linear_search.php">Linear Search</a></li>
                            <li><a class="dropdown-item" href="pages/binary_search.php">Binary Search</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hash
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="pages/mid_square.php">Mid Square</a></li>
                            <li><a class="dropdown-item" href="pages/digit_extraction.php">Digit Extraction</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="display-5">Sort</h1>
        <div class="row mt-3">
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Bubble Sort</h5>
                        <p class="card-text text-truncate">Bubble sort is a simple sorting algorithm that repeatedly steps through the list to be sorted,</p>
                        <a href="pages/bubble_sort.php" class="btn btn-outline-primary" style="width: 100%;">Sort</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Quick Sort</h5>
                        <p class="card-text text-truncate">Quick Sort is a sorting algorithm that uses the divide-and-conquer approach to sort an array or a list of elements.</p>
                        <a href="pages/quick_sort.php" class="btn btn-outline-primary" style="width: 100%;">Sort</a>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="display-5 mt-5">Search</h1>
        <div class="row mt-3">
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Linear Search</h5>
                        <p class="card-text text-truncate">Linear search is a simple search algorithm that is used to find an element in a list or array.</p>
                        <a href="pages/linear_search.php" class="btn btn-outline-warning" style="width: 100%;">Search</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Binary Search</h5>
                        <p class="card-text text-truncate">Binary search is a search algorithm used to find a specific element in a sorted list or array.</p>
                        <a href="pages/binary_search.php" class="btn btn-outline-warning" style="width: 100%;">Search</a>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="display-5 mt-5">Hashing</h1>
        <div class="row mt-3">
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">MidSquare</h5>
                        <p class="card-text text-truncate">The Mid-Square Hashing Algorithm is a simple hash function that involves squaring the key, taking out the middle digits of the squared result, </p>
                        <a href="pages/mid_square.php" class="btn btn-outline-dark" style="width: 100%;">Hash</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Digit Extraction</h5>
                        <p class="card-text text-truncate">Digit extraction hashing algorithm is a type of hashing algorithm that extracts certain digits from the key and combines them in a specific way</p>
                        <a href="pages/digit_extraction.php" class="btn btn-outline-dark" style="width: 100%;">Hash</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- footer -->
        <div class="container mt-5 mb-3">
        <hr>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <p class="lead">References</p>
                <a target="_blank" href="https://getbootstrap.com/docs/5.3/getting-started/introduction/">https://getbootstrap.com/docs/5.3/getting-started/introduction/</a>
                <br>
                <a target="_blank" href="https://chat.openai.com/">https://chat.openai.com/</a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                <p class="lead footer-title-text">Links</p>
                <a href="https://github.com/CattoDoesCode/ds_a_midterm_exam/blob/main/index.php" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                    </svg>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3" >
                <figure>
                    <blockquote class="blockquote">
                        <p>©2023 Excel Rey R. Morales. All rights reserved.</p>
                    </blockquote>
                    <figcaption class="blockquote-footer">
                        Made with custom <cite title="Source Title">HTML, CSS, Bootstrap 5</cite>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>