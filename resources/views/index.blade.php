@extends('master')
    @section('index_content')
    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" style="background-image: url('{{asset("assets/user/images/hero_1.jpg")}}')">

          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-5" data-aos="fade-right">
                <h1 class="mb-3 text-white">Wonders of Usambara Tourism Festival</h1>
                <p>Explore the lush Usambara Mountains for scenic hikes, peaceful birdwatching, and enjoying the green, beautiful, and calm landscapes.</p>
                <p class="d-flex align-items-center">
                    <a href="{{ asset('assets/user/videos/website_intro.mp4') }}" data-fancybox class="play-btn-39282 mr-3">
                        <span class="icon-play"></span>
                    </a> 
                    <span class="small">Watch the video</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="site-section py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6">
              <div class="heading-39101 mb-5">
                <span class="backdrop">Services</span>
                <span class="subtitle-39191">Best experience</span>
                <h3>Our Services</h3>
              </div>
              <p>
                We offer the best service of guided eco-tours in the Usambara Mountains, providing you with an immersive experience in one of Tanzania's most biodiverse and scenic regions.</p>
              <p>Imagine yourself walking through green forests full of rare plants and colorful birds. Our knowledgeable guides will take you to stunning viewpoints where you can see miles of lush valleys and distant mountains. You’ll also get to visit friendly local villages, learn about their culture, and maybe even taste some traditional food. For the adventurous, there are hidden waterfalls to discover and clear pools to swim in. The Usambara Mountains are full of natural beauty and cultural treasures, making sure your trip is truly unforgettable.</p>
              <p><ul><li><span>Surface</span> 3.500 km2</li><li><span>Inhabitants</span> 419.000</li><li><span>spring rain season</span> April & May</li><li><span>fall rain season</span> October & November</li></ul></p>
            </div>
            <div class="col-md-6" data-aos="fade-right">
              <img src="{{asset('assets/user/images/map.jpg')}}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
  
      <div class="site-section">
  
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-7">
              <div class="heading-39101 mb-5">
                <span class="backdrop text-center">Journey</span>
                <span class="subtitle-39191">Where to Start?</span>
                <h3>Activities and Hiking</h3>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
              <div class="listing-item">
                <div class="listing-image">
                  <img src="{{asset('assets/user/images/old_korogwe.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a class="px-3 mb-3 category bg-primary" href="#">Biking?</a>
                  <h2 class="mb-1"><a href="trip-single.html">Old Korogwe</a></h2>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
              <div class="listing-item">
                <div class="listing-image">
                  <img src="{{asset('assets/user/images/ndemaha.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a class="px-3 mb-3 category bg-primary" href="#">Climb?</a>
                  <h2 class="mb-1"><a href="trip-single.html">Ndemaha water falls</a></h2>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
              <div class="listing-item">
                <div class="listing-image">
                  <img src="{{asset('assets/user/images/zungnat_hill.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a class="px-3 mb-3 category bg-primary" href="#">High Hills</a>
                  <h2 class="mb-1"><a href="trip-single.html">Zungnat Hills Hiking Trail</a></h2>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
              <div class="listing-item">
                <div class="listing-image">
                  <img src="{{asset('assets/user/images/kilole_ruvu.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a class="px-3 mb-3 category bg-primary" href="#">Coneing?</a>
                  <h2 class="mb-1"><a href="trip-single.html">Kilole Ruvu Canoeing Tour</a></h2>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
              <div class="listing-item">
                <div class="listing-image">
                  <img src="{{asset('assets/user/images/pangani_river.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a class="px-3 mb-3 category bg-primary" href="#">Water</a>
                  <h2 class="mb-1"><a href="trip-single.html">Ruvu Maajabu and Pangani River Basine Tour</a></h2>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
              <div class="listing-item">
                <div class="listing-image">
                  <img src="{{asset('assets/user/images/mambo_caves.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div class="listing-item-content">
                  <a class="px-3 mb-3 category bg-primary" href="#">Rocks</a>
                  <h2 class="mb-1"><a href="trip-single.html">Mambo caves</a></h2>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="listing-item">
                  <div class="listing-image">
                    <img src="{{asset('assets/user/images/amani.jpg')}}" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a class="px-3 mb-3 category bg-primary" href="#">Waterfalls</a>
                    <h2 class="mb-1"><a href="trip-single.html">Amani Nature Reserve</a></h2>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="listing-item">
                  <div class="listing-image">
                    <img src="{{asset('assets/user/images/shangayu_rainforest.jpg')}}" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a class="px-3 mb-3 category bg-primary" href="#">High rains</a>
                    <h2 class="mb-1"><a href="trip-single.html">Shangayu rainforest</a></h2>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                <div class="listing-item">
                  <div class="listing-image">
                    <img src="{{asset('assets/user/images/mountaineering.jpg')}}" alt="Image" class="img-fluid">
                  </div>
                  <div class="listing-item-content">
                    <a class="px-3 mb-3 category bg-primary" href="#">Climbing</a>
                    <h2 class="mb-1"><a href="trip-single.html">Mountaineering</a></h2>
                  </div>
                </div>
              </div>
  
          </div>
  
        </div>
      </div>
  
      <div class="site-section">
  
        <div class="container">
  
          <div class="row justify-content-center text-center">
            <div class="col-md-10">
              <div class="heading-39101 mb-5">
                <span class="backdrop text-center">Testimonials</span>
                <span class="subtitle-39191">Testimony</span>
                <h3>Happy Customers</h3>
              </div>
            </div>
          </div>
  
          <div class="owl-carousel slide-one-item">
            <div class="row">
              <div class="col-md-6">
  
                <div class="testimonial-39191 d-flex">
                  <div class="mr-4">
                    <img src="{{asset('assets/user/images/user_image.jpg')}}" alt="Image" class="img-fluid">
                  </div>
                  <div>
                  <blockquote>&ldquo;Incredible experience! Stunning views, vibrant culture, and amazing guides. Usambara Mountains are a must-visit! Highly recommend your exceptional service!&rdquo;</blockquote>
                  <p>&mdash; Lucas Weah</p>
                  </div>
                </div>    
                
              </div>
  
              <div class="col-md-6">
  
                <div class="testimonial-39191 d-flex">
                  <div class="mr-4">
                    <img src="{{asset('assets/user/images/user_image.jpg')}}" alt="Image" class="img-fluid">
                  </div>
                  <div>
                  <blockquote>&ldquo;
                    Wonderful trip! The views were breathtaking, the local culture was fascinating, and the guides were fantastic. Highly recommend your service!&rdquo;</blockquote>
                  <p>&mdash; Smith Alex</p>
                  </div>
                </div>    
                
              </div>
            </div>
  
            <div class="row">
              <div class="col-md-6">
  
                <div class="testimonial-39191 d-flex">
                  <div class="mr-4">
                    <img src="{{asset('assets/user/images/user_image.jpg')}}" alt="Image" class="img-fluid">
                  </div>
                  <div>
                  <blockquote>&ldquo;Amazing adventure! Beautiful scenery, friendly locals, and excellent guides. The Usambara Mountains are unforgettable. Your service made it perfect!&rdquo;</blockquote>
                  <p>&mdash; Amunike Agosto</p>
                  </div>
                </div>    
                
              </div>
  
              <div class="col-md-6">
  
                <div class="testimonial-39191 d-flex">
                  <div class="mr-4">
                    <img src="{{asset('assets/user/images/user_image.jpg')}}" alt="Image" class="img-fluid">
                  </div>
                  <div>
                  <blockquote>&ldquo;Fantastic journey! The Usambara Mountains' beauty is unmatched. Great guides and superb service. Highly recommend for an unforgettable experience!&rdquo;</blockquote>
                  <p>&mdash; Jane Laizer</p>
                  </div>
                </div>    
                
              </div>
            </div>
  
          </div>
  
        </div>
      </div>
  
  
      <div class="site-section">
  
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-10">
              <div class="heading-39101 mb-5">
                <span class="backdrop text-center">Routes</span>
                <span class="subtitle-39191">Where to start?</span>
                <h3>Famous Routes</h3>
              </div>
            </div>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="post-entry-1 h-100">
     
                  <img src="{{asset('assets/user/images/korogwe_lushoto.jpg')}}" alt="Image"
                   class="img-fluid">
                
                <div class="post-entry-1-contents">
                  
                  <h2>Korogwe to Lushoto route</h2>
                  
                  <p>Travel form Korogwe to Lushoto is about 73 Km, which takes around 1 hour 23 min up to 2 hours based on road condition</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="post-entry-1 h-100">
          
                  <img src="{{asset('assets/user/images/arusha_lushoto.jpg')}}" alt="Image"
                   class="img-fluid">
     
                <div class="post-entry-1-contents">
                  
                  <h2>Arusha to Lushoto Route</h2>
                  
                  <p>Awesome Journey from geneva of Africa (Arusha) to Lushoto is about 334 KM, which takes around 5hr and 46min by car</p>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="post-entry-1 h-100">
            
                  <img src="{{asset('assets/user/images/lushoto_.jpg')}}" alt="Image"
                   class="img-fluid">
                
                <div class="post-entry-1-contents">
                  
                  <h2>Travel around Lushoto to Usambara peaks</h2>
                  <p>Travel from Lushoto town to Usambara peaks is about 20 KM within 40 minutes</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
  
      <div class="site-section bg-image overlay" style="background-image: url('{{asset("assets/user/images/hero_1.jpg")}}')">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7 text-center">
              <h2 class="font-weight-bold text-white">Join and Trip With Us</h2>
              <p class="text-white">Join us for an unforgettable journey through the Usambara Mountains—nature, culture, and adventure await!</p>
              <p class="mb-0"><a href="#" class="btn btn-primary text-white py-3 px-4">Get In Touch</a></p>
            </div>
          </div>
        </div>
      </div>
  
  
  
    @endsection 