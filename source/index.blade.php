@extends('_layouts.main')

@section('slider')
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        welcome to

                      </h2>
                      <h1>
                        ZEDIA KAIZEN
                      </h1>
                      <p>
                        Bespoke software solutions to fit yur needs...
                      </p>
                      <div class="">
                        <a href="">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        welcome to

                      </h2>
                      <h1>
                        ZEDIA KAIZEN
                      </h1>
                      <p>
                        We are always here to help you grow
                      </p>
                      <div class="">
                        <a href="">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h2>
                        welcome to

                      </h2>
                      <h1>
                        ZEDIA KAIZEN
                      </h1>
                      <p>
                        Contact us today and let us solve your problems
                      </p>
                      <div class="">
                        <a href="">
                          Contact us
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- end slider section -->
@endsection
@section('content')

@include('_partials.sections.what-we-do')

@include('_partials.sections.who-we-are')

@include('_partials.sections.our-work')

@include('_partials.sections.contact-us')


@endsection
