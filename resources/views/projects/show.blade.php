<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../images/logo.png" type="image/gif" sizes="16x16">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/projects.test.css">

    <title>{{$project->title}} - Vanessa Sahari</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar-expand-lg navbar-light navbar">
        <a class="navbar-brand col-6 col-md-4 col-lg-2" href="/home"><img src="../images/Untitled-1.png" alt=""
                class="img-responsive img-fluid logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Projects
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Interior Design</a>
                        <a class="dropdown-item" href="#">Modern Bathroom</a>
                        <a class="dropdown-item" href="#">Morning Kitchen</a>
                        <a class="dropdown-item" href="#">Blue Lighting Bedroom</a>
                        <a class="dropdown-item" href="#">Low Key Lighting Kitchen</a>
                        <a class="dropdown-item" href="#">Dirt Ground Texture</a>

                    </div>
                </li>
            </ul>
            <div class="navbar-nav my-2 my-lg-0">
                <li class="nav-item social-icon">
                    <a class="fab fa-behance" aria-hidden="true" href=""></a>
                </li>
                <li class="nav-item social-icon">
                    <a class="fab fa-artstation" aria-hidden="true" href=""></a>
                </li>
                <li class="nav-item social-icon">
                    <a class="fab fa-twitch" aria-hidden="true" href=""></a>
                </li>
            </div>
        </div>
    </nav>


    <!-- IMAGE BOX -->
    <div class="container">
        <div class="row d-flex flex-wrap justify-content-start">
            <div class="image-container col-12 col-lg-8">
                <i class="fa fa-arrow-down bounce btn-down" aria-hidden="true"></i>
                <img src="/storage/images/{{$project->image1}}" alt="" class="img-responsive">
                <img src="/storage/images/{{$project->image2}}" alt="" class="img-responsive">
                <img src="/storage/images/{{$project->image3}}" alt="" class="img-responsive">
            </div>

            <!-- RIGHT MENU -->
            <div class="right-menu col-12 col-lg-4">
                <a class="fas fa-times btn-close" href="http://127.0.0.1:5500#portfolio"></a>
                <div class="author col-12 d-flex align-items-start">
                    <img src="https://cdn.shopify.com/s/files/1/2656/8500/products/tropica-rainforest-pink-green-leaves-wallpaper-fd42474_1024x1024.jpg?v=1554116072"
                        alt="" class="img-responsive img-fluid img-auth">
                    <div class="author-name-headline ml-2">
                        <h3>By Vanessa</h3>
                        <p>Creative 3D Artist</p>
                    </div>
                </div>
                <div class="buttons d-flex justify-content-center flex-wrap mt-lg-3">
                    <b>Used Stack:</b>
                    <div class="col-12"></div>
                    <img src="../images/zbrush.png" class="stack">
                    <img src="../images/substance.png" class="stack">
                    <img src="../images/blender.png" class="stack">
                    <img src="../images/substance (2).png" class="stack">
                    <img src="../images/ps.png" class="stack">
                </div>
                <hr class="mt-4 mb-3">
                <div class="project-details text-center">
                    <h3>{{$project->title}}</h3>
                    <p>{{$project->details}}</p>
                    <h3 class="mb-3">Also see in:</h3>
                    <a class="fab fa-behance" href=""> </a>
                    <a class="fab fa-artstation" href=""></a>
                    <a class="fab fa-dribbble" href=""></a>

                </div>
            </div>

        </div>
    </div>


    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="../js/projects.js"></script>
    <script src="https://kit.fontawesome.com/b9d8e9307e.js"></script>


</body>

</html>
