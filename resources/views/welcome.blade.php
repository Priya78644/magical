@extends('component.main')
@section('content')


<!-- Carousel Start -->
<div class="carousel">
  <div class="slider">
    <div class="slides">
      <div class="slide">
        <img src="/img/slide1.png" alt="Slide 1">
        <img src="/img/slider1.png" alt="Slide 1">
      </div> 
          <!-- Slide 2 -->
          <div class="slide">
              <img src="/img/slide2.png"  alt="Slide 2">
              <img src="/img/slider2.jpg"  alt="Slide 2">
          </div>
          <!-- Slide 3 -->
          <div class="slide">
            <img src="/img/slide2.png"  alt="Slide 2">
            <img src="/img/slider2.jpg"  alt="Slide 2">
        </div>
          <!-- Add more slides as needed -->
          <div class="slide">
            <img src="/img/slide4.png"  alt="Slide 3">
            <img src="/img/slider4.png" alt="Slide 3">
        </div>
        <div class="slide">
          <img src="/img/slide5.png"  alt="Slide 3">
          <img src="/img/slider5.png" alt="Slide 3">
      </div>
      <div class="slide">
        <img src="/img/slide1.png" alt="Slide 1">
        <img src="/img/slider1.png" alt="Slide 1">
      </div> 
      <div class="slide">
        <img src="/img/slide2.png"  alt="Slide 2">
        <img src="/img/slider2.jpg"  alt="Slide 2">
    </div>
    <div class="slide">
      <img src="/img/slide2.png"  alt="Slide 2">
      <img src="/img/slider2.jpg"  alt="Slide 2">
  </div>
  <div class="slide">
    <img src="/img/slide5.png"  alt="Slide 3">
    <img src="/img/slider5.png" alt="Slide 3">
</div>
<div class="slide">
  <img src="/img/slide1.png" alt="Slide 1">
  <img src="/img/slider1.png" alt="Slide 1">
</div> 

      </div>
      <div class="prev absolute top-1/2 transform -translate-y-1/2 left-10 z-10 cursor-pointer text-white" onclick="prevSlide()">&#10094;</div>
      <div class="next absolute top-1/2 transform -translate-y-1/2 right-10 z-10 cursor-pointer text-white" onclick="nextSlide()">&#10095;</div>
  </div>
</div>

{{-- button --}}
<div class="d-flex justify-content-center m-4">
  <button type="button" class="btn btn-success btn-lg">Buy Now</button>
</div>
{{-- Carousel End  --}}





<!-- About Section -->
<div class="container my-5">
  <div class="row">
    <div class="col-md-6">
      <h2 class=" mb-4" style="color: green">About Us</h2>
      <p>Welcome to Magical Brands, where beauty meets magic! Our revolutionary product, Magical Hair Colour Shampu, transforms your hair care routine.</p>
      <p>With a unique blend of nourishing shampoo and vibrant hair colour, our shampu delivers salon-worthy results in the comfort of your home. Discover our gentle yet effective formula that leaves your locks healthy and lustrous.</p>
      <p>Choose from a wide range of shades to express your individuality. Our commitment to quality and safety means you can trust our tested and chemical-free product. Unlock the power of self-expression and let your hair become a canvas for your dreams. Experience the magic at magicalbrands.info.</p>
    </div>
    <div class="col-md-6">
      <img src="img/about.jpg" class="img-fluid rounded" alt="Aloe Vera">
    </div>
  </div>
</div>





<!-- CArdss Start -->
<div class="container my-5">
  <h1 class="text-center mb-5" style="color: green">Magical Hair Colour Shampoo</h1>
  <div class="row">
    <div class="col-sm-6 col-md-4 mb-4">
      <div class="card">
        <img src="img/slide1.png" class="card-img-top" alt="Product Image">
      </div>
    </div>
    <div class="col-sm-6 col-md-4 mb-4">
      <div class="card">
        <img src="img/slide2.png" class="card-img-top" alt="Product Image">
      </div>
    </div>
    <div class="col-sm-6 col-md-4 mb-4">
      <div class="card">
        <img src="img/slide3.png" class="card-img-top" alt="Product Image">
      </div>
    </div>
    <div class="col-sm-6 col-md-4 mb-4">
      <div class="card">
        <img src="img/slide4.png" class="card-img-top" alt="Product Image">
      </div>
    </div>
    <div class="col-sm-6 col-md-4 mb-4">
      <div class="card">
        <img src="img/slide5.png" class="card-img-top" alt="Product Image">
      </div>
    </div>
    <div class="col-sm-6 col-md-4 mb-4">
      <div class="card">
        <img src="img/slider5.png" class="card-img-top" alt="Product Image">
      </div>
    </div>
  </div>
</div>
<!--  End -->




<!-- Card Start -->
<div class="container my-5">
  <h1 class="text-center  mb-5" style="color: green">Magical Hair & Beard Serum</h1>
  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="img/bottle1.jpeg" class="card-img-top" alt="Product Image">
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="img/bottle2.jpeg" class="card-img-top" alt="Product Image">
      </div>
    </div>
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="img/bottle3.jpeg" class="card-img-top" alt="Product Image">
      </div>
    </div>
  </div>
</div>
 



<div class="container my-5">
<div class="row">
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="img/bottle4.jpeg" class="card-img-top" alt="Product Image">
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="img/bottle5.jpeg" class="card-img-top" alt="Product Image">
    </div>
  </div>
  <div class="col-md-4 mb-4">
    <div class="card">
      <img src="img/bottle6.jpeg" class="card-img-top" alt="Product Image">
    </div>
  </div>
</div>
</div>






{{-- video  Start --}}
<h1 class="text-center" style="color: green">Magical Product Videos</h1>
<div class="container my-5">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https://www.facebook.com/watch/?v=215493971368436" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
{{-- button --}}
<div class="d-flex justify-content-center my-4">
    <button type="button" class="btn btn-success btn-lg">Buy Now</button>
</div>
{{-- 2nd video --}}

<div class="container my-5">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmagicalbrand.in%2Fvideos%2F224599287180713%2F%3Fref%3Dembed_video&show_text=0&width=560" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>
</div>
{{-- button --}}
<div class="d-flex justify-content-center my-4">
    <button type="button" class="btn btn-success btn-lg">Buy Now</button>
</div>
{{-- Video End --}}




<div class="container my-4">
  <div class="row">
    <div class="col-6 col-md-3">
      <img src="/img/4-1.png" class="img-fluid" alt="Feature 1">
    </div>
    <div class="col-6 col-md-3">
      <img src="/img/4-2.png" class="img-fluid" alt="Feature 2">
    </div>
    <div class="col-6 col-md-3">
      <img src="/img/4-3.png" class="img-fluid" alt="Feature 3">
    </div>
    <div class="col-6 col-md-3">
      <img src="/img/4-4.png" class="img-fluid" alt="Feature 4">
    </div>
  </div>
</div>



<div class="container-fluid position-relative min-vh-100 d-flex flex-column align-items-center justify-content-center">
  <img src="/img/about.jpg" alt="Background Image" class="background-image">
  <div class="overlay d-flex flex-column align-items-center justify-content-center">
      <div class="container">
          <h1 class="text-white font-weight-bold text-center mb-3">What Our Customers Say</h1>
          <div class="row">
              <div class="col-12 col-md-6 mb-4 d-flex">
                  <div class="testimonial-card w-100">
                      <p class="mb-2">
                          Magical Hair Colour Shampu exceeded my expectations! The vibrant shade I chose lasted for weeks, and my hair felt soft and nourished. It's easy to use and has a pleasant scent. Highly recommended!
                      </p>
                      <p class="font-weight-bold mb-1">Arti</p>
                  </div>
              </div>
              <div class="col-12 col-md-6 mb-4 d-flex">
                  <div class="testimonial-card w-100">
                      <p class="mb-2">
                          I love how Magical Hair Colour Shampu transformed my hair. The colour was stunning, and my hair felt silky smooth. It's a game-changer for home hair colouring. I'm thrilled with the results!
                      </p>
                      <p class="font-weight-bold mb-1">Ragani</p>
                  </div>
              </div>
              <div class="col-12 col-md-6 mb-4 d-flex">
                  <div class="testimonial-card w-100">
                      <p class="mb-2">
                          Magical Hair Colour Shampu is a must-have for anyone looking to switch up their hair colour. It's gentle on the hair and delivers vibrant, long-lasting results. I'm impressed by its quality and ease of use. Absolutely fantastic!
                      </p>
                      <p class="font-weight-bold mb-1">Gudiya</p>
                  </div>
              </div>
              <div class="col-12 col-md-6 mb-4 d-flex">
                  <div class="testimonial-card w-100">
                      <p class="mb-2">
                          I can't get enough of Magical Hair Colour Shampu! The shade I chose perfectly matched my desired look, and my hair feels so healthy and shiny. It's definitely my go-to product for vibrant hair colour.
                      </p>
                      <p class="font-weight-bold mb-1">Kritika</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>





{{-- CONTACT US --}}
<section class="bg-light py-5">
  <div class="container">
    <div class="row g-4">
      <!-- Get in Touch Section -->
      <div class="col-lg-6 d-flex flex-column justify-content-center bg-white p-4 rounded shadow-sm">
        <div class="d-flex align-items-center mb-3">
          <h2 class="h3 text-success">Get in Touch</h2>
          <div class="flex-grow-1 border-bottom border-success mx-3"></div>
        </div>
        <p class="mb-4">We'd love to hear from you! Whether you have a question about our services or just want to say hello, feel free to reach out.</p>
        <div class="mb-4">
          <div class="d-flex align-items-center mb-3">
            <i class="ri-mail-line text-success me-2 fs-4"></i>
            <p class="mb-0">mmenterprises33@gmail.com</p>
          </div>
          <div class="d-flex align-items-center mb-3">
            <i class="ri-smartphone-line text-success me-2 fs-4"></i>
            <p class="mb-0">+916388337746</p>
          </div>
          <div class="d-flex align-items-center">
            <i class="ri-building-4-line text-success me-2 fs-4"></i>
            <p class="mb-0">H NO.M-53-KH NO-669 G/F CHANAKYA PLACE UTTAM NAGAR NEW DELHI 110059</p>
          </div>
        </div>
        <div class="d-flex align-items-center mb-3">
          <h2 class="h3 text-success">Find us</h2>
          <div class="flex-grow-1 border-bottom border-success mx-3"></div>
        </div>
        <!-- Map -->
        <div class="ratio ratio-16x9 mb-4">
       <iframe class="w-100 h-100" src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7005.312169437948!2d77.06920698655982!3d28.610092456626646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04cab35aa8c7%3A0x96413183c32ff465!2sChanakya%20Place%2C%20Delhi%2C%20110045%2C%20India!5e0!3m2!1sen!2sus!4v1721974341384!5m2!1sen!2sus" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="d-flex align-items-center mb-3">
          <h2 class="h3 text-success">Follow us</h2>
          <div class="flex-grow-1 border-bottom border-success mx-3"></div>
        </div>
        <div class="d-flex gap-2">
          <a href="#" class="btn btn-outline-success rounded-circle d-flex align-items-center justify-content-center p-2 shadow-sm">
            <i class="ri-facebook-line fs-4"></i>
          </a>
          <a href="#" class="btn btn-outline-success rounded-circle d-flex align-items-center justify-content-center p-2 shadow-sm">
            <i class="ri-instagram-line fs-4"></i>
          </a>
        </div>
      </div>
      <!-- Contact Form Section -->
      <div class="col-lg-6 bg-white p-4 rounded shadow-sm">
        <h2 class="h3 text-success mb-4">Contact Form</h2>
        <form action="#" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
            <input type="text" id="name" name="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone number</label>
            <input type="text" id="phone" name="phone" class="form-control">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" id="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success btn-lg w-100">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>









<script>
    // Toggle navbar on small screens
    document.querySelector('[data-toggle="collapse"]').addEventListener('click', function() {
        document.getElementById('navbarCollapse').classList.toggle('hidden');
    });
</script>





<script>
let slideIndex = 0;
const slides = document.querySelector('.slides');
const slideCount = document.querySelectorAll('.slide').length;

function showSlide(index) {
    if (index >= slideCount) slideIndex = 0;
    if (index < 0) slideIndex = slideCount - 1;
    slides.style.transform = `translateX(${-slideIndex * 100}%)`;
}

function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
}

function prevSlide() {
    slideIndex--;
    showSlide(slideIndex);
}

// Autoplay
let autoplayInterval = setInterval(nextSlide, 3000);

// Event listeners for controls
document.querySelector('.next').addEventListener('click', () => {
    clearInterval(autoplayInterval);
    nextSlide();
    autoplayInterval = setInterval(nextSlide, 3000);
});

document.querySelector('.prev').addEventListener('click', () => {
    clearInterval(autoplayInterval);
    prevSlide();
    autoplayInterval = setInterval(nextSlide, 3000);
});

// Initial display
showSlide(slideIndex);

  </script>



@endsection