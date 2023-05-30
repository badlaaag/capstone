@extends('layouts.frontend')
@section('content')



<div class="blog-area pt-100 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="ml-20">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="blog-wrap-2 mb-30">
                                <div class="blog-img-2">
                                    <a href="/blog-details-standard">
                                        <img src="/assets/img/blog/blog-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content-2">
                                    <div class="blog-meta-2">
                                        <ul>
                                            <li>22 April, 2024</li>
                                            <li><a href="/blog-details-standard">4 <i class="fa fa-comments-o"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="/blog-details-standard">Mac Sales</a></h4>
                                    <p>Aenean sollicitudin, lorem quis on endum uctor nisi elitod the cona sequat ipsum, necas sagittis sem natoque nibh id penatibus</p>
                                    <div class="blog-share-comment">
                                        <div class="blog-btn-2">
                                            <a href="/blog-details-standard">read more</a>
                                        </div>
                                        <div class="blog-share">
                                            <span>share :</span>
                                            <div class="share-social">
                                                <ul>
                                                    <li><a class="facebook" href="//facebook.com"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter" href="//twitter.com"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="instagram" href="//instagram.com"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Repeat the above code block for the remaining blog posts -->
                    </div>
                </div>
                <div class="pro-pagination-style text-center mt-20">
                    <ul>
                        <li><button class="prev"><i class="fa fa-angle-double-left"></i></button></li>
                        <li><button class="active">1</button></li>
                        <li><button>2</button></li>
                        <li><button class="next"><i class="fa fa-angle-double-right"></i></button></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sidebar-style">
                    <div class="sidebar-widget">
                        <h4 class="pro-sidebar-title">Search</h4>
                        <div class="pro-sidebar-search mb-55 mt-25">
                            <form class="pro-sidebar-search-form" action="#" data-hs-cf-bound="true">
                                <input type="text" placeholder="Search here...">
                                <button><i class="pe-7s-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h4 class="pro-sidebar-title">Recent Blogs</h4>
                        <div class="sidebar-project-wrap mt-30">
                            <div class="single-sidebar-blog">
                                <div class="sidebar-blog-img">
<a href="/blog-details-standard">
<img src="/assets/img/blog/sidebar-blog-1.jpg" alt="">
</a>
</div>
<div class="sidebar-blog-content">
<h5><a href="/blog-details-standard">Tips for Product Photography</a></h5>
<span>22 April, 2024</span>
</div>
</div>
<div class="single-sidebar-blog">
<div class="sidebar-blog-img">
<a href="/blog-details-standard">
<img src="/assets/img/blog/sidebar-blog-2.jpg" alt="">
</a>
</div>
<div class="sidebar-blog-content">
<h5><a href="/blog-details-standard">Best Makeup Products</a></h5>
<span>21 April, 2024</span>
</div>
</div>
<!-- Repeat the above code block for the remaining recent blogs -->
</div>
</div>
<div class="sidebar-widget">
<h4 class="pro-sidebar-title">Categories</h4>
<div class="sidebar-categories">
<ul>
<li><a href="#">Fashion</a></li>
<li><a href="#">Beauty</a></li>
<li><a href="#">Travel</a></li>
<!-- Add more categories as needed -->
</ul>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
@endsection