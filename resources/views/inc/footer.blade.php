<!--
  End Subscribe Section
  ==================================== -->

<!--
  Start Footer Section
  ==================================== -->

<footer id="footer02" class="footer02">
      <div class="container">
          <div class="row oneRowFooter">
              <!-- Start Footer Text -->
              <div class="col-md-4 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
                  <div class="wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">
                      <a href="/">
                        @foreach($icons as $icon)
                          <img src="/storage/icon/{{ $icon->icon_image2 }}" width="200px">
                        @endforeach
                      </a>

                      @foreach($contacts as $contact)
                      <p class="pddt20" style="color:#fff"><strong>ADDRESS:</strong></p>
                      <font color="white">{!! $contact->contact_address !!}</font>
                  </div>
              </div>
              <!-- End Footer Text -->
              <!-- Start Footer Sitemap -->
              <div class="col-md-4 wow fadeInLeft" data-wow-delay=".4s" data-wow-duration="1s">
                  <div class="footer-sitemap">
              <p style="color:#fff"><strong>SITEMAP</strong></p>
                      <ul>
                          <li><a href="#home">Home</a></li>
                          <li><a href="#about">About Us</a></li>
                          <li><a href="#work">How it Works</a></li>
                          <li><a href="#screenshots">Screenshot</a></li>
                          <li><a href="#download">Download</a></li>
                          <li><a href="#pricing-table">Pricing</a></li>
                      </ul>
                  </div>
              </div>
              <!-- End Footer Sitemap -->
              <!-- Start Footer Photos -->
          <div class="col-md-4 wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
              <p style="color:#fff"><strong>E-MAIL:</strong></p>
              <p></p><font color="white">{{$contact->contact_email}}</font></p>
              <p style="color:#fff"><strong>PHONE:</strong></p>
              <p></p><font color="white">{{ $contact->contact_phone }}</font></p>
              <a class="social-gradient text-center" href="{{ $contact->contact_instagram }}" target="_blank"><i  class='fa fa-instagram'></i></a>
              <a class="social-gradient text-center" href="{{ $contact->contact_facebook }}" target="_blank"><i  class='fa fa-facebook'></i></a>
              <a class="social-gradient text-center" href="{{ $contact->contact_twitter }}" target="_blank"><i  class='fa fa-twitter'></i></a>
          </div>

          @endforeach
              <!-- End Footer Photos -->
          </div>
          <!-- Start Copyright & Social Links -->
          <div class="row secRowFooter">
              <!-- Start Copyright -->
              <div class="col-md-8 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                  <div class="copyright-design">
                      <p>Copyright © 2018 Overpips. All Rights Reserved.</p>
                  </div>
              </div>
              <!-- End Copyright -->
              <!-- Start Social Links -->
              <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                  <div class="copyright-design">
                      <p><a style="color:#fff" href="/terms-and-conditions">Terms & Conditions</a></p>
                  </div>
              </div>
              <!-- End Social Links -->
          </div>
          <!-- End Copyright & Social Links -->
      </div><!-- end container -->
  </footer><!-- end footer02 -->

<!--
  End Footer Section
  ==================================== -->

<!--
  Start Back To Top
  ==================================== -->

<div id="scroll-top">
  <i class="fa fa-angle-up fa-2x"></i>
</div>

<!--
  End Back To Top
  ==================================== -->

<!--
  JS Files
  ==================================== -->

<!-- Plugins -->
<script data-cfasync="false" src="{{ asset('js/email-decode.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/map-conf.js') }}"></script>
<script src="{{ asset('js/particles-lines.js') }}"></script>
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj9b_nyz33KEaocu6ZOXRgqwwUZkDVEAw"></script>

<!-- Custom JS -->
<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>