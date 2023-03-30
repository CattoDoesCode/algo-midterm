<?php require_once '../classes/search.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSP20843X | Linear Search</title>

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
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="bubble_sort.php">Bubble Sort</a></li>
                            <li><a class="dropdown-item" href="quick_sort.php">Quick Sort</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Search
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="linear_search.php">Linear Search</a></li>
                            <li><a class="dropdown-item" href="binary_search.php">Binary Search</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hash
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="mid_square.php">Mid Square</a></li>
                            <li><a class="dropdown-item" href="digit_extraction.php">Digit Extraction</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="display-5">Linear Search</h1>

        <form class="mt-5" method="POST">
            <label for="Array">Array</label>
            <input type="text" id="Array" name="Array" style="width: 20rem;margin-left:1rem;" required>
            <label for="item-to-search" style="margin-left:1rem">Item to Search</label>
            <input type="text" id="item-to-search" name="item-to-search" style="width: 2.5rem;margin-left:1rem;" required>
            <button type="button submit" class="btn btn-outline-warning" style="margin-left: 16px;">Search</button>
        </form>
        <?php
        if (isset($_POST["Array"])) {
            $search_1 = new Search("linear", $_POST["item-to-search"], $_POST["Array"]);

            // non-numeric error trap
            if (preg_match("/[a-zA-Z]+/", $_POST["Array"])) {
                echo "ERROR: non-numeric item detected in array: ". $_POST["Array"];
            } else {
                if ($search_1->is_found) {
                    echo "<p class='lead'>item ".$_POST["item-to-search"]. " found in array: ". $_POST["Array"]. "</p>";
                } else {
                    echo "element not found";
                }
            }
        }
        ?>
        
        <p class="lead mt-5">Linear search is a simple search algorithm that is used to find an element in a list or array. It works by iterating through each element of the list or array until the target element is found or until the end of the list is reached.</p>
        <p class="lead">Linear search has a time complexity of O(n), where n is the size of the list or array. This means that the worst-case scenario occurs when the target element is located at the end of the list, and the algorithm must iterate through every element before finding the target. However, linear search is simple to implement and works well on small lists or arrays where the time complexity is not a concern.</p>
        <h2 class="display-6 mt-4">Pseudocode</h2>
        <pre>
FUNCTION linearSearch(arr, val)
BEGIN
  FOR i = 0 to length(arr)-1 DO
    IF arr[i] equals val THEN
      RETURN true
    END IF
  END FOR
  RETURN false
END
        </pre>
        <h2 class="display-6 mt-4">Time Complexity</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Best</th>
                    <th scope="col">Average</th>
                    <th scope="col">Worst</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>O(1)</td>
                    <td>O(n)</td>
                    <td>O(n)</td>
                </tr>
            </tbody>
        </table>


    </div>

    <!-- Prevent form resubmission when page is refreshed -->
    <!-- https://stackoverflow.com/a/45656609 -->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>