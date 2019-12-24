@extends('templates.'.sc_store('template').'.shop_layout')

@section('main')

<section >
    <div class="container">
    <div class="row content-blog">
        <div class="col-md-9">
            <div class="content-blog-right">
                <div class="item-blog">
                    <img src="item-blog2.jpg" tppabs="http://html.physcode.com/uray/imager/blog/item-blog2.jpg" alt="">
                    <a href=""><i class="far fa-heart"></i>&nbsp; Like 10</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#"> <i
                        class="far fa-calendar-alt">&nbsp;</i> April 12, 2019</a>
                    <h2>Temporibus autem quib</h2>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                        opposed to using
                        'Content here, content here', making it look like readable English.
                    </p>
                    <div class="content-center">
                        <i class="fas fa-quote-left"></i>
                        <em>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos
                            dolores et quas molestias excepturi sint occaecati cupiditate non provident.</em>
                    </div>
                    <div>
                        <div class="card">
                            <div class="row no-gutters1">
                                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                    <img src="blog-single-item.jpg" tppabs="http://html.physcode.com/uray/imager/blog/blog-single-item.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Nam libero tempore cum soluta</h5>
                                        <p class="card-text">On the other hand, we denounce with righteous indignation
                                            and dislike men who are
                                            so beguiled and demoralized by the charms of pleasure of the moment, so
                                            blinded by desire. That they
                                            cannot foresee the pain. These cases are perfectly.</p>
                                        <p class="card-text">Trouble that are bound to ensue; and equal blame belongs to
                                            those who fail in their
                                            duty through weakness. which is the same as saying through shrinking from
                                            toil and pain.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete
                        account of the system, and expound the actual teachings of the great explorer of the truth
                    </p>
                    <div class="float-left"><span class="lnr lnr-tag"></span>&nbsp;&nbsp;Beauty Skin Care Make Up</div>
                    <div class="float-right socials">
                       <table>
                           <tr>
                               <td><a href=""><i class="fab fa-twitter"></i></a></td>
                               <td><a href=""><i class="fab fa-facebook"></i></a></td>
                               <td><a href=""><i class="fab fa-instagram"></i></a></td>
                           </tr>
                       </table>
                    </div>
                    <div class="slide-blog-single">
                        <div class="row control-slide-blog-single d-flex justify-content-between">
                            <div>
                                <a href="#">
                                    <span class="lnr lnr-arrow-left"></span>&nbsp;Previous post
                                </a>
                            </div>
                            <div><i class="fas fa-th"></i></div>
                            <div>
                                <a href="#">Next post&nbsp;<span class="lnr lnr-arrow-right"></span></a>
                            </div>
                        </div>

                        <h2>Comments</h2>
                        <div class="card" style="border-bottom: 1px solid #e6e6e6;">
                            <div class="row no-gutters">
                                <div class="col-md-2 col-sm-12 col-12">
                                    <img src="item-coment-blog-single1.jpg" tppabs="http://html.physcode.com/uray/imager/blog/item-coment-blog-single1.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-10 col-sm-12 col-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Nam libero tempore cum soluta</h5>
                                        <p class="card-text">March 28, 2019</p>
                                        <span class="card-text">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                                                        cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#">REPLY</a>
                        </div>
                        <div class="card">
                            <div class="row no-gutters">
                                <div class="col-md-2 col-sm-12 col-12">
                                    <img src="item-coment-blog-single2.jpg" tppabs="http://html.physcode.com/uray/imager/blog/item-coment-blog-single2.jpg" class="card-img" alt="...">
                                </div>
                                <div class="col-md-10 col-sm-12 col-12">
                                    <div class="card-body">
                                        <h5 class="card-title">Nam libero tempore cum soluta</h5>
                                        <p class="card-text">March 28, 2019</p>
                                        <span class="card-text">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                                                        cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#">REPLY</a>
                        </div>
                    </div>
                </div>
                <div class="post-comment">
                    <h2>Post a Comment</h2>
                    <textarea placeholder="Your comment *"></textarea>
                    <input type="text" placeholder="Your Name *">
                    <input type="text" placeholder="Your Mail *">
                    <button class="btn">SUBMIT</button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="content-blog-left">
                <div class="search-blog">
                        <input type="text" placeholder="Search" class="float-left">
                        <button class="btn float-right"><span class="lnr lnr-chevron-right"></span></button>
                </div>
                <div class="author-blog">
                    <img src="author-blog.jpg" tppabs="http://html.physcode.com/uray/imager/blog/author-blog.jpg" alt="">
                    <h3>Denise Murray</h3>
                    <small>denise_83@example.com</small>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit volupta.</p>
                </div>
                <div class="category-blog">
                    <h2>Categories</h2>
                    <a href=""> Beauty (23)</a>
                    <a href="">BB Creams (20)</a>
                    <a href="">Make Up (31)</a>
                    <a href="">Spa (08)</a>
                    <a href="">Skin care (15)</a>
                </div>

                <div class="lastest-blog">
                    <h2>Latest Posts</h2>
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-6 col-6">
                                <div class="img-lastest-blog">
                                    <img src="lastest-blog-item1.jpg" tppabs="http://html.physcode.com/uray/imager/blog/lastest-blog-item1.jpg" class="card-img" alt="...">
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-6 col-6">
                                <div class="card-body">
                                    <p class="card-text">April 12, 2019</p>
                                    <span class="card-text"><a href=""> Sed ut perspiciatis</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-6 col-6">
                                <div class="img-lastest-blog">
                                    <img src="lastest-blog-item2.jpg" tppabs="http://html.physcode.com/uray/imager/blog/lastest-blog-item2.jpg" class="card-img" alt="...">
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-6 col-6">
                                <div class="card-body">
                                    <p class="card-text">April 12, 2019</p>
                                    <span class="card-text"><a href="">Nemo enim ipsam</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-5 col-md-12 col-sm-6 col-6">
                                <div class="img-lastest-blog">
                                    <img src="lastest-blog-item3.jpg" tppabs="http://html.physcode.com/uray/imager/blog/lastest-blog-item3.jpg" class="card-img" alt="...">
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-12 col-sm-6 col-6">
                                <div class="card-body">
                                    <p class="card-text">April 12, 2019</p>
                                    <span class="card-text"><a href="">Nor again is there</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tag-blog">
                    <h2>Tag</h2>
                    <div class="link-blog">
                        <a href="#" >Nature</a>
                        <a href="#">Oragnic</a>
                        <a href="#">Fresh</a>
                        <a href="#">Vegan</a>
                        <a href="#">Spa</a>
                    </div>
                </div>
                <div class="lastest-img">
                    <img src="Portfolio_Single_Images_item.jpg" tppabs="http://html.physcode.com/uray/imager/portfolio/Portfolio_Single_Images_item.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

@section('breadcrumb')
    <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="{{ route('home') }}">Home</a></li>
          <li class="active">{{ $title }}</li>
        </ol>
      </div>
@endsection
