<?php require_once '../classes/sort.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSP20843X | Quick Sort</title>

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
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sort
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="bubble_sort.php">Bubble Sort</a></li>
                            <li><a class="dropdown-item" href="quick_sort.php">Quick Sort</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <h1 class="display-5">Quick  Sort</h1>

        <form class="mt-5" method="POST">
            <label for="items-to-sort">Items to Sort</label>
            <input type="text" id="items-to-sort" name="items-to-sort" style="width: 20rem;margin-left:1rem;" required>
            <button type="button submit" class="btn btn-outline-primary" style="margin-left: 16px;">Sort</button>
        </form>
        <?php
        if (isset($_POST["items-to-sort"])) {
            $sort_2 = new Sort("quick", $_POST["items-to-sort"]);

            // non-numeric error trap
            if (preg_match("/[a-zA-Z]+/", $_POST["items-to-sort"])) {
                echo "ERROR: non-numeric item detected in array: ". $_POST["items-to-sort"];
            } else {
                echo "<p class='lead'>Sorted Array: ". "[" . implode(", ", $sort_2->sorted_arr) . "]". "</p>";
            }
        }
        ?>
        
        <p class="lead mt-5">Quick Sort is a sorting algorithm that uses the divide-and-conquer approach to sort an array or a list of elements. It works by selecting a "pivot" element from the array and partitioning the other elements into two sub-arrays, according to whether they are less than or greater than the pivot. The sub-arrays are then sorted recursively.</p>
        <p class="lead">This process continues until all elements are sorted. The pivot selection and partitioning steps allow quick sort to perform efficiently even on large data sets, with an average time complexity of O(n log n).</p>
        <h2 class="display-6 mt-4">Pseudocode</h2>
        <pre>
FUNCTION quickSort(arr)
BEGIN
    n = count(arr)
    IF n <= 1 THEN
        RETURN arr // Base case: array with 0 or 1 element is already sorted
    END IF
    pivotIndex = floor(n / 2) // Select a pivot element (usually the middle element)
    pivotValue = arr[pivotIndex]
    left = empty array
    right = empty array
    FOR i = 0 to n-1 DO
        IF i == pivotIndex THEN
            CONTINUE
        END IF
        IF arr[i] < pivotValue THEN
            append arr[i] to left
        ELSE
            append arr[i] to right
        END IF
    END FOR
    // Recursively sort the sub-arrays and concatenate them with the pivot element in the middle
    sorted_arr = concatenate(quickSort(left), [pivotValue], quickSort(right))
    RETURN sorted_arr
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
                    <td>O(nlogn)</td>
                    <td>O(nlogn)</td>
                    <td>O(n<sup>2</sup>)</td>
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