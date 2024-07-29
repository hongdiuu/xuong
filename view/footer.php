  <!-- FOOTER START -->
  <div class="footer dark-bg">
    <div class="container">
      <div class="footer-inner">
        <div class="footer-top">
          <div class="row">
            <div class="col-md-8">
              <div class="f-logo left-side"> <a href="index.html"> <img src="images/footer-logo.png" alt="Honour"> </a> </div>
              <p>Passage of Lorem Ipsum, you need toe sure there isn't anything embarrassing hidden in the middle of text.  All the Lorem Ipsum </p>
            </div>
            <div class="col-md-4">
              <div class="footer_social right-side float-none-sm pt-sm-15 center-sm mt-sm-15">
                <ul class="social-icon">
                  <li><a title="Facebook" class="facebook"><i class="fa fa-facebook"> </i></a></li>
                  <li><a title="Twitter" class="twitter"><i class="fa fa-twitter"> </i></a></li>
                  <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin"> </i></a></li>
                  <li><a title="RSS" class="rss"><i class="fa fa-rss"> </i></a></li>
                  <li><a title="Pinterest" class="pinterest"><i class="fa fa-pinterest"> </i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-middle">
          <div class="row">
            <div class="col-md-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Address</h3>
                <ul class="footer-block-contant address-footer">
                  <li class="item"> <i class="fa fa-map-marker"> </i>
                    <p>150-A Appolo aprtment, opp. Hopewell Junction, Allen st Road, new york-405001.</p>
                    <hr>
                  </li>
                  <li class="item"> <i class="fa fa-envelope-o"> </i>
                    <p> <a>infoservices@honour.com </a> </p>
                    <hr>
                  </li>
                  <li class="item"> <i class="fa fa-phone"> </i>
                    <p>(+91) 9834567890</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Tag</h3>
                <ul class="footer-block-contant tagcloud">
                  <li><a>Orange</a></li>
                  <li><a>Neutral</a></li>
                  <li><a>Print</a></li>
                  <li><a>Tan</a></li>
                  <li><a>Purple</a></li>
                  <li><a>Yellow</a></li>
                  <li><a>White</a></li>
                  <li><a>Metallic</a></li>
                  <li><a>Red</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Services</h3>
                <ul class="footer-block-contant link">
                  <li><a><span>■</span> About Us</a></li>
                  <li><a><span>■</span> Jobs</a></li>
                  <li><a><span>■</span> Affiliates</a></li>
                  <li><a><span>■</span> Contact</a></li>
                  <li><a><span>■</span> About Us</a></li>
                  <li><a><span>■</span> Jobs</a></li>
                  <li><a><span>■</span> Affiliates</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 f-col">
              <div class="footer-static-block"> <span class="opener plus"></span>
                <h3 class="title">Contact Us</h3>
                <div class="footer-block-contant">
                  <form>
                    <div class="field">
                      <input type="text" placeholder="Name" required>
                    </div>
                    <div class="field">
                      <input type="email" placeholder="Email" required>
                    </div>
                    <div class="field">
                      <textarea name="Message" placeholder="Message" required id="message" cols="5" rows="2"></textarea>
                    </div>
                    <div class="field">
                      <button title="Subscribe" class="btn-color">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="footer-bottom align-center">
          <div class="site-link">
            <ul>
              <li><a>Cycling</a>|</li>
              <li><a>Running</a>|</li>
              <li><a>Swimming</a>|</li>
              <li><a>Football</a>|</li>
              <li><a>Golf</a>|</li>
              <li><a>Tools</a>|</li>
              <li><a>Bedding</a>|</li>
              <li><a>Food</a>|</li>
              <li><a>Furniture</a>|</li>
              <li><a>Kitchen</a>|</li>
              <li><a>Lighting</a></li>
            </ul>
          </div>
          <div class="copy-right">© 2017  All Rights Reserved. Design By <a href="#">WebcoTheme</a></div>
          <div class="payment">
            <ul class="payment_icon">
              <li class="discover"><a></a></li>
              <li class="visa"><a></a></li>
              <li class="mastro"><a></a></li>
              <li class="paypal"><a></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="scroll-top">
    <div id="scrollup"></div>
  </div>
  <!-- FOOTER END --> 
</div>
<script src="js/jquery-1.12.3.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery-ui.min.js"></script> 
<script src="js/fotorama.js"></script>
<script src="js/jquery.magnific-popup.js"></script>  
<script src="js/owl.carousel.min.js"></script> 
<script src="js/custom.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('form').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the form from submitting normally

            // Show confirmation dialog
            var confirmDialog = confirm('Bạn chắc chắn muốn thuê sản phẩm này?');

            // If user confirms, display success message
            if (confirmDialog) {
                alert('Bạn đã đặt hàng thành công!');
                // Here you can submit the form using AJAX or any other desired action
            }
        });
    });
</script>

</body>

<!-- Mirrored from webcotheme.com/honour/demo2/hon001/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 26 Nov 2023 08:26:49 GMT -->
</html>