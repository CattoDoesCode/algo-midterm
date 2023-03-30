<?php require_once '../classes/hash.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSP20843X | Digit Extraction Hashing</title>

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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Search
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="linear_search.php">Linear Search</a></li>
                            <li><a class="dropdown-item" href="binary_search.php">Binary Search</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <h1 class="display-5">Digit Extraction</h1>

        <form class="mt-5" method="POST">
            <label for="key">Key</label>
            <input type="text" id="key" name="key" style="width: 5rem;margin-left:1rem;" required>
            <button type="button submit" class="btn btn-outline-dark" style="margin-left: 16px;">Hash</button>
        </form>
        <?php
        if (isset($_POST["key"])) {
            $hash_1 = new Hash("digitextraction", $_POST["key"]);

            // non-numeric error trap
            if (preg_match("/[a-zA-Z]+/", $_POST["key"])) {
                echo "ERROR: non-numeric value detected in key: " . $_POST["key"];
            } else {
                echo "<p class='lead'>Hashed value is: ". $hash_1->address. "</p>";
            }
        }
        ?>

        <p class="lead mt-5">Digit extraction hashing algorithm is a type of hashing algorithm that extracts certain digits from the key and combines them in a specific way to produce a hash value. The idea is to select one or more digits from the key and use them to compute a hash value that is used as an index into an array. The extracted digits are typically chosen to spread the keys as evenly as possible over the array.</p>
        <p class="lead">The digit extraction hashing algorithm is relatively simple and easy to implement. However, it may not provide good performance for all types of keys, and careful selection of the digits used to compute the hash value is important to ensure good spread over the array.</p>
        <h2 class="display-6 mt-4">Pseudocode</h2>
        <pre>
FUNCTION digitExtraction(key)
BEGIN
    // Extract the first, third, and fourth characters of the key
    first = SUBSTRING(key, 0, 1)
    third = SUBSTRING(key, 2, 1)
    fourth = SUBSTRING(key, 3, 1)
    RETURN address = CONCAT(first, third, fourth)
END

        </pre>
        <!-- <h2 class="display-6 mt-4">Time Complexity</h2>
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
                    <td>O(log n)</td>
                    <td>O(log n)</td>
                </tr>
            </tbody>
        </table> -->
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