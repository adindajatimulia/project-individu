@extends('parent')

@section('title', 'Project')

@section('content')


    <!-- Projects -->
    <section id="projects">
      <div class="container" style="padding-top: 80px;">
        <div class="row text-center">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="/img/1.jpg" class="card-img-top" alt="gambar 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="/img/2.jpg" class="card-img-top" alt="gambar 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="/img/3.jpg" class="card-img-top" alt="gambar 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="/img/4.jpg" class="card-img-top" alt="gambar 1" />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffff"
          fill-opacity="1"
          d="M0,160L24,176C48,192,96,224,144,224C192,224,240,192,288,154.7C336,117,384,75,432,80C480,85,528,139,576,165.3C624,192,672,192,720,192C768,192,816,192,864,170.7C912,149,960,107,1008,80C1056,53,1104,43,1152,58.7C1200,75,1248,117,1296,128C1344,139,1392,117,1416,106.7L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Projects -->

    @endsection