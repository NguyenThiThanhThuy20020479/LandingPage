@php
$blogs = [
    [
        'title' => 'Blog 1',
        'shortDes' => 'Blog 1 description ',
    ],
    [
        'title' => 'Blog 2',
        'shortDes' => 'Blog 2 description ',
    ],
    [
        'title' => 'Blog 3',
        'shortDes' => 'Blog 3 description ',
    ]
];
@endphp
<section id="blog" class="section">
    <!-- Container Starts -->
    <div class="container">
      <!-- Start Row -->
      <div class="row">
        <div class="col-lg-12">
          <div class="blog-text section-header text-center">  
            <div>   
              <h2 class="section-title">Latest Blog Posts</h2>
            </div> 
          </div>
        </div>

      </div>
      <!-- End Row -->
      <!-- Start Row -->
      <div class="row">
        <!-- Start Col -->
        @for ($i = 0; $i < count($blogs); $i++)
            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper">
                <div class="blog-item-img">
                <a href="single-post.html">
                    <img src="assets/img/blog/img1.png" class="img-fluid" alt="">
                </a>             
                </div>
                <div class="blog-item-text"> 
                <h3><a href="#">{{$blogs[$i]['title']}}</a></h3>
                <p>{{$blogs[$i]['shortDes']}}</p>
                <a href="#" class="read-more">Read more</a>
                </div>
                <div class="author">
                <span class="name"><i class="lni-user"></i><a href="#">Posted by Admin</a></span>
                <span class="date float-right"><i class="lni-calendar"></i><a href="#">21/03/2024</a></span>
                </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
            </div>
        @endfor

      </div>
      <!-- End Row -->
    </div>
  </section>