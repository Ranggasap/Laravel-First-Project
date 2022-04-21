@extends('layouts.main')

@section('container')

<section class="hero-container">
  <div>
    <div>
      <h1>Find Your Best Roaster</h1>
      <p>Peternakan Pakhoy Farm89</p>
    </div>
  </div>
  <img src="/img/pakhoy2.jpeg" alt="pakhoy">
</section>

<section class="description-container bg-light">
  <div>
    <div>
      <h2>Peternakan Pakhoy Farm89</h2> 
      <p>Peternakan yang dibangun pada tahun 2019 adalah salah satu peternakan terbaik yang menghasilkan ayam berkualitas. Ayam yang berasal dari induk dan pejantan impor yang sudah disaring terlebih dahulu kualitasnya, menghasilkan bibit ayam yang menjadi andalan peternakan ini</p>
    </div>
    <div class="description-footer">
      <p>Nov 10th 2021</p>
      <a href="https://perternakanayampakhoyfarm89.business.site/" class="text-decoration none btn bg-primary">Read More</a>
    </div>
  </div>
  <video width="480" height="240" controls>
    <source src="video/home.mp4" type="video/mp4">
    <source src="video/home.ogg" type="video/ogg">
    Your browser does not support the video tag.
  </video>
</section>

<h1 class="text-center">Post Categories</h1>

<section class="content-container">
  <div class="card">
    <img src="/img/pakhoy.jpg" alt="">
    <div class="card-body">
      <h3>Farm Category</h3>
      <p>Category yang berisi postingan mengenai seputar peternakan seperti denah alamat maupun lainnya</p>
    </div>
    <div class="card-footer">
      <p>Nov 10th 2021</p>
      <a href="/categories" class="text-decoration none btn bg-primary">Read More</a>
    </div>
  </div>
  <div class="card">
    <img src="/img/daily.jpeg" alt="">
    <div class="card-body">
      <h3>Daily Category</h3>
      <p>Category yang berisi keseharian peternakan mengurus ayam pilihan dan menyambut pelanggan</p>
    </div>
    <div class="card-footer">
      <p>Nov 10th 2021</p>
      <a href="/categories" class="text-decoration none btn bg-primary">Read More</a>
    </div>
  </div>
  <div class="card">
    <img src="/img/roaster.jpeg" alt="">
    <div class="card-body">
      <h3>Roaster Category</h3>
      <p>Category yang berisi postingan mengenai ayam pilihan kami yang siap dipertandingkan maupun dijual</p>
    </div>
    <div class="card-footer">
      <p>Nov 10th 2021</p>
      <a href="/categories" class="text-decoration none btn bg-primary">Read More</a>
    </div>
  </div>
</section>

<section class="contact-container mb-5">
  <div class="bg-light">
    <div>
      <h1>Contact Us</h1>
      <p><i class="bi bi-envelope-fill"></i> atjunspain89@gmail.com</p>
      <p><i class="bi bi-whatsapp"></i> +62 815-1308-4589</p>
      <p><i class="bi bi-telephone-fill"></i> +62 813-1561-2472</p>
    </div>
    <div class="footer">
      <p>Nov 10th 2021</p>
      
    </div>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5518387430425!2d106.6231572141373!3d-6.190670662374583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ffc0185414dd%3A0x64ed5957500cb61f!2sPerternakan%20ayam%20pakhoy%20farm%2089!5e0!3m2!1sen!2sid!4v1636715139348!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<footer>
  <div class="container-fluid bg-primary text-center">
    <div class="row">
      <div class="col-sm-12 pt-3">
        <p class="footer-text">&copy; copyright 2020 | built by <a class="text-decoration-none footer-text" href="https://instagram.com/karasoki">Rangga Saputra</a></p>
      </div>
    </div>
  </div>
</footer>

@endsection

