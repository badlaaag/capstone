
@extends('layouts.frontend')
@section('title', 'company')
@section('content')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<title>Company info</title>
 
<div class="breadcrumb-area pt-5 pb-2 bg-gray-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/" style="color: #686868; text-decoration:none">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Company info</li>
            </ol>
        </nav>
    </div>
</div>
<div class="welcome-area pt-100 pb-95">
    <div class="container">
    <div class="welcome-content text-center">
        <h5>Who Are We</h5>
        <h1>We are Tech-o-Matic</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labor et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commo consequat irure </p>
    </div>
</div>
</div>
<div class="banner-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-4">
                <div class="single-banner mb-30">
                    <a href="/about/undefined">
                        <img src="/assets/img/banner/applestore.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="funfact-area pt-100 pb-70 bg-gray-3">
    <div class="container"><div class="row"><div class="col-lg-3 col-md-6 col-sm-6"><div class="single-count text-center mb-30"><div class="count-icon"><i class="pe-7s-portfolio"></i></div><h2 class="count"><span>360</span></h2><span>project done</span></div></div><div class="col-lg-3 col-md-6 col-sm-6"><div class="single-count text-center mb-30"><div class="count-icon"><i class="pe-7s-cup"></i></div><h2 class="count"><span>690</span></h2><span>cups of coffee</span></div></div><div class="col-lg-3 col-md-6 col-sm-6"><div class="single-count text-center mb-30"><div class="count-icon"><i class="pe-7s-light"></i></div><h2 class="count"><span>100</span></h2><span>branding</span></div></div><div class="col-lg-3 col-md-6 col-sm-6"><div class="single-count text-center mb-30"><div class="count-icon"><i class="pe-7s-smile"></i></div><h2 class="count"><span>420</span></h2><span>happy clients</span></div></div></div></div></div>
<div class="team-area pt-95 pb-70">
    <div class="container">
        <div class="section-title-2 text-center mb-60">
            <h2>Team Members</h2>
            <p>Lorem ipsum dolor sit amet conse ctetu.</p>
        </div>
        <div class="row"><div class="col-lg-4 col-md-4 col-sm-4">
            <div class="team-wrapper mb-30"><div class="team-img">
                <img src="/assets/img/team/team-1.jpg" alt="" class="img-fluid">
                <div class="team-action">
                    <a class="facebook" href="//www.facebook.com" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="twitter" href="//www.youtube.com" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-youtube"></i>
                    </a>
                    <a class="instagram" href="//www.instagram.com" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="team-content text-center">
                <h4>Vins Alejandria</h4>
                <span>Developer </span>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="team-wrapper mb-30">
            <div class="team-img">
                <img src="/assets/img/team/team-2.jpg" alt="" class="img-fluid">
                <div class="team-action">
                    <a class="facebook" href="//www.facebook.com" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="twitter" href="//www.youtube.com" target="_blank" rel="noopener noreferrer">
                        <i class="fa fa-youtube"></i></a><a class="instagram" href="//www.instagram.com" target="_blank" rel="noopener noreferrer">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="team-content text-center">
                    <h4>Gerbe Ace Lubao</h4>
                    <span>Developer </span>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="team-wrapper mb-30">
                <div class="team-img">
                    <img src="/assets/img/team/team-2.jpg" alt="" class="img-fluid">
                    <div class="team-action">
                        <a class="facebook" href="//www.facebook.com" target="_blank" rel="noopener noreferrer">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" href="//www.youtube.com" target="_blank" rel="noopener noreferrer">
                            <i class="fa fa-youtube"></i></a><a class="instagram" href="//www.instagram.com" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Felix Abne</h4>
                        <span>Developer </span>
                    </div>
                </div>
                
            </div>
    </div>
</div>
</div>



<div class="container">
  <h2>Bootstrap Carousel</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image1.jpg" alt="Image 1">
        <div class="carousel-caption">
          <h3>Image 1</h3>
          <p>Description for Image 1</p>
        </div>
      </div>

      <div class="item">
        <img src="image2.jpg" alt="Image 2">
        <div class="carousel-caption">
          <h3>Image 2</h3>
          <p>Description for Image 2</p>
        </div>
      </div>

      <div class="item">
        <img src="image3.jpg" alt="Image 3">
        <div class="carousel-caption">
          <h3>Image 3</h3>
          <p>Description for Image 3</p>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>

@endsection
