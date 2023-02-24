@extends('layouts.mother_layout')
@section('content')

<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid general-widget">
    <div class="row">
      <div class="col-sm-12 col-lg-6">
        <div class="card o-hidden">
          <div class="card-header pb-0">
            <div class="d-flex">
              <div class="flex-grow-1">
                <p class="square-after f-w-600 header-text-primary">Register<i class="fa fa-circle"> </i></p>
                <h4> Register </h4>
              </div>
              <div class="d-flex static-widget">
                <a href="{{route('register')}}">
                  <img src="{{asset('assets/images/register.png')}}" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="progress-widget">
              <div class="progress sm-progress-bar progress-animate">
                <div class="progress-gradient-primary" role="progressbar" style="width: 75%" aria-valuenow="75"
                  aria-valuemin="0" aria-valuemax="100">
                  <span class="animate-circle"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-lg-6">
        <div class="card o-hidden product-widget">
          <div class="card-header pb-0">
            <div class="d-flex">
              <div class="flex-grow-1">
                <p class="square-after f-w-600 header-text-success">Login<i class="fa fa-circle"> </i></p>
                <h4> Login </h4>
              </div>
              <div class="d-flex static-widget">
                <a href="{{route('login')}}">
                  <img src="{{asset('assets/images/login.png')}}" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="progress-widget">
              <div class="progress sm-progress-bar progress-animate">
                <div class="progress-gradient-success" role="progressbar" style="width: 60%" aria-valuenow="75"
                  aria-valuemin="0" aria-valuemax="100"><span class="animate-circle"></span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-12 col-xl-12 xl-100 col-sm-12 box-col-12">
        <div class="card o-hidden">
          <div class="weather-widget-two">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-12 col-md-12">
                  <div class="mobile-clock-widget">
                    <div>
                      <ul class="clock" id="clock">
                        <li class="hour" id="hour"></li>
                        <li class="min" id="min"></li>
                        <li class="sec" id="sec"></li>
                      </ul>
                      <div class="date f-24 mb-2" id="date"><span id="monthDay"></span><span id="year">, </span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>

<!-- latest jquery-->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!-- Bootstrap js-->
<script src="{{asset('assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/js/config.js')}}"></script>
<script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/general-widget.js')}}"></script>
<script src="{{asset('assets/js/height-equal.js')}}"></script>
@endsection