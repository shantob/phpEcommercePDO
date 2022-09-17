<header>
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-1 pt-3">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <a class="navbar-brand justify-content-center d-md-flex" href="#">
                                            <img class="" src="https://images-platform.99static.com//y0rb96b9CUsj6F8lqnkVOPlBuyY=/0x0:999x999/fit-in/500x500/99designs-contests-attachments/109/109048/attachment_109048124" height="100px" width="100%" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg-8 justify-content-center">
                                        <img src="https://th.bing.com/th/id/OIP.GzdIdwawwaDLXahsPhPlLAHaDi?w=314&h=167&c=7&r=0&o=5&pid=1.7" width="100%" height="120" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-2">
                                        <a href="#" class="btn btn-tag btn-rounded text-danger" data-mdb-close="true" style="">
                                            <i class="fas fa-layer-group me-2 hover-overlay hover-zoom hover-shadow ripple text-center"></i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bell pt-2 mt-lg-3" viewBox="0 0 16 16">
                                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                            </svg></a>
                                    </div>
                                    <div class="col-lg-8 col-md-4">
                                        <div class="">
                                            <button class="mt-2 rounded-bottom hover-overlay text-center text-dark  border-light p-2" type="submit">
                                                <a class="text-warning fs-5" href="login.html"> Sign in /</a>
                                                <a class="text-danger fs-5" href="register.html">Sign Up</a>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg navbar sticky-top " style="background-color:  #ff9900;">
            <div class="container-fluid">
                <div class="dropdown show">
                    <button class="btn text-light me-3 " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <h3 class="">CATEGORY</h3>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-light w-100 bg-warning">
                        <?php
                        //use PDOException;

                        //class Student
                        foreach ($categories as $category) { ?>

                            <div class="col-lg-3 col-md-6 mt-2 p-2 text-center">
                                <li><a class="dropdown-item text-center bg-secondary w-100 mt-2 p-2 text-light" href="show.php?id=<?= $category['id'] ?>"> <button><?= $category['name'] ?></button></a></li>
                            <?php } ?>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars p-2" aria-hidden="true" style="border: 1px solid white; border-radius: 5px; color: white;"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto p-2 mb-2 mb-lg-0">
                        <a href="index.html">
                            <li class="nav-item active">
                                <button class="btn btn-light me-3 active" type="button" data-bs-auto-close="true" aria-expanded="false">
                                    Home
                                </button>
                            </li>
                        </a>
                        <a href="productlist.html">
                            <li class="nav-item">
                                <button class="btn btn-light me-3" type="button" data-bs-auto-close="true" aria-expanded="false">
                                    Product
                                </button>
                            </li>
                        </a>
                        <a href="contact.html">
                            <li class="nav-item">
                                <button class="btn btn-light me-3" type="button" data-bs-auto-close="true" aria-expanded="false">
                                    Contact
                                </button>
                            </li>
                        </a>
                        <a href="about.html">
                            <li class="nav-item ">
                                <button class="btn btn-light me-3" type="button" data-bs-auto-close="true" aria-expanded="false">
                                    About
                                </button>
                            </li>
                        </a>
                        <li class="nav-item dropdown">
                            <button class="btn btn-light dropdown-toggle me-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                GALLERY
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item text-center" href="#">Action</a></li>
                                <li><a class="dropdown-item text-center" href="#">Another action</a></li>
                                <li><a class="dropdown-item text-center" href="#">Something else here</a></li>
                            </ul>
                        </li>

                    </ul>


                    <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                        <div class="input-group">
                            <input type="text" placeholder="Search ..." class="form-control">
                            <button class="btn btn-secondary " type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </nav>