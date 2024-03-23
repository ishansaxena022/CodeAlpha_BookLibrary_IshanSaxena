<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Library</title>
    <?php include 'css/links.php' ?>
    <link href="css/headers.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">


    <!--Custom CSS-->
    <style>
        .name{

        }
    </style>   

</head>
<body>
    <main>
        <!------Navigation Bar------>
        <header class="py-3 mb-3 border-bottom" style="background-color:#ffce00 ">
            <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr; ">

                <div class="container row d-flex align-items-center">
                    <!-- <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item active" href="#" aria-current="page">Overview</a></li>
                    <li><a class="dropdown-item" href="#">Inventory</a></li>
                    <li><a class="dropdown-item" href="#">Customers</a></li>
                    <li><a class="dropdown-item" href="#">Products</a></li> 
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Reports</a></li>
                    <li><a class="dropdown-item" href="#">Analytics</a></li>
                    </ul> -->
                    
                    <div class="d-flex align-items-end" > <h4>Book Library </h4> <img src="images/open-book.png" alt=""  height="40" width="40"> </div>
                </div>

                <div class="d-flex align-items-center">
                    <form class="w-100 me-3" role="search">
                    <input onkeyup="searchBooks()" id="searchInput" class="form-control" placeholder="Search by book name, author, or genre">
                    </form>

                    <div class="flex-shrink-0 dropdown">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small shadow">
                        <li><a class="dropdown-item" href="#"></a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="borrowing_history.php">Borrow History</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                    </div>
                </div>
            </div>
        </header>
        <!----Navigation Bar ends here --->

        <!-----Carousel------>
        <!-- <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="images/img1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="images/img2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="images/img3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>     -->
        <!----Carousel ends here--->

        <div class="container">
            <!-- <h1 class="text-center mb-4">Personal Book Library</h1> -->
            <div class="row">
                <!-- <div class="col-md-8">
                    <input onkeyup="searchBooks()" id="searchInput" class="form-control" placeholder="Search by book name, author, or genre">
                </div> -->
                <!-- <div class="col-md-4">
                    <button onclick="searchBooks()" class="btn btn-primary btn-block">Search</button>
                </div> -->
            </div>
            <div id="bookList" class="mt-4"></div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>

    </main>
    
</body>
</html> 