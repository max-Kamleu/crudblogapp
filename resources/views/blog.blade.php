@extends('layouts.app')

@section('main-content')

<article class="about-section py-5">
		    <div class="container">
			    <h2 class="title mb-3">Blog</h2>
			    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
					Aenean commodo ligula eget dolor. Aenean massa. 
					Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
					Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </p>
	    </article><!--//about-section-->
<section class="blog-list px-3 py-5 p-md-5">
		    <div class="container">
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb-7.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="{{ url('/blog/title') }}">Heading Lorem Ipsum Dolor Sit Amet</a></h3>
						    <div class="meta mb-1"><span class="date">Published 3 months ago</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="{{ url('/blog/title') }}">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb-8.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="{{ url('/blog/title') }}">Heading Lorem Ipsum Dolor Sit Amet</a></h3>
						    <div class="meta mb-1"><span class="date">Published 4 months ago</span><span class="time">3 min read</span><span class="comment"><a href="#">2 comments</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="{{ url('/blog/title') }}">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb-9.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="{{ url('/blog/title') }}">Heading Nemo Enim Ipsam Voluptatem </a></h3>
						    <div class="meta mb-1"><span class="date">Published 4 months ago</span><span class="time">8 min read</span><span class="comment"><a href="#">7 comments</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="{{ url('/blog/title') }}">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb-10.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="{{ url('/blog/title') }}">Heading Perspiciatis Unde Omnis </a></h3>
						    <div class="meta mb-1"><span class="date">Published 5 months ago</span><span class="time">15 min read</span><span class="comment"><a href="#">3 comments</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="{{ url('/blog/title') }}">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb-11.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="{{ url('/blog/title') }}">Heading Duis Arcu Tortor</a></h3>
						    <div class="meta mb-1"><span class="date">Published 5 months ago</span><span class="time">10 min read</span><span class="comment"><a href="#">0 comment</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="{{ url('/blog/title') }}">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <div class="item">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="assets/images/blog/blog-post-thumb-12.jpg" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="{{ url('/blog/title') }}">Heading Vestibulum Ante Ipsum Primis</a></h3>
						    <div class="meta mb-1"><span class="date">Published 6 months ago</span><span class="time">2 min read</span><span class="comment"><a href="#">8 comments</a></span></div>
						    <div class="intro">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies...</div>
						    <a class="more-link" href="{{ url('/blog/title') }}">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
			    </div><!--//item-->
			    
			    <nav class="blog-nav nav nav-justified my-5">
				  <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
				  <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
				</nav>
				
		    </div>
	    </section>
	    

@endsection