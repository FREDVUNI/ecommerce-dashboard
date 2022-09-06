<footer class="footer">
  <div class="footer-inner">
    <div class="footer-top">
      <div class="container">
        <div class="footer-top-outer">
        </div>
        <div class="footer-middle mtb-60">
          <div class="row">
            <div class="col-md-3 f-col">
              <div class="footer-static-block">
                <span class="opener plus"></span>
                <div>
                  <div class="footer-static-block">
                    <span class="opener plus"></span>
                    <div class="f-logo">
                      <h3 class="title">LOCATION<span></span></h3>
                    </div>
                    <ul class="footer-block-contant address-footer">
                      <li class="item">
                        <i class="fa fa-map-marker"></i>
                        <p>1st Floor Basiima Building Bombo Rd, 
                          Plot 402 Makerere Kavule
                        </p>
                      </li>
                      <li class="item">
                        <i class="fa fa-envelope-o"></i>
                        <p>
                          <a>info@earlcommunications.com</a>
                        </p>
                      </li>
                      <li class="item">
                        <i class="fa fa-phone"></i>
                        <p>+256 784912802</p>
                      </li>
                      <li class="item">
                        <i class="fa fa-phone"></i>
                        <p>+256 752075362</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 f-col">
              <div class="footer-static-block">
                <span class="opener plus"></span>
                <h3 class="title">CUSTOMER SERVICES<span></span></h3>
                <ul class="footer-block-contant link">
                  <li><a href="indexd773.html?route=product/manufacturer">Help & FAQ</a></li>
                  <li><a href="index4dd2.html?route=account/voucher">Payment Methods</a></li>
                  <li><a href="index3d18.html?route=affiliate/login">Shipping & Delivery</a></li>
                  <li><a href="indexe223.html?route=account/newsletter">Terms & Conditions</a></li>
                  <li><a href="indexf110.html?route=product/special">Privacy Policy</a></li>
                  <li><a href="indexf110.html?route=product/special">Sell with Earl</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 f-col">
              <div class="footer-static-block">
                <span class="opener plus"></span>
                <h3 class="main_title title">About Earl<span></span></h3>
                <ul class="list-unstyled footer-block-contant">
                  <li><a href="indexe223.html?route=account/account">About us</a></li>
                  <li><a href="indexe223.html?route=account/order">Services</a></li>
                  <li><a href="indexe223.html?route=account/wishlist">Portfolio</a></li>
                  <li><a href="indexe223.html?route=account/newsletter">Contact us</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 f-col">
              <div class="footer-static-block">
                <span class="opener plus"></span>
                <script>
                  function subscribe1()
                  {
                    var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    var email = $('#txtemail1').val();
                    if(email != "") {
                      if(!emailpattern.test(email)) {
                        $('#txtemail1').focus();
                        $('#txtemail1').css('border','1px solid #F00');
                        return false;
                      }
                      else {
                        $.ajax({
                          url: 'index.php?route=extension/module/newsletters/news',
                          type: 'post',
                          data: 'email=' + $('#txtemail1').val(),
                          dataType: 'json',         
                          success: function(json) {
                            $(".newsletter-msg").html(json.message);
                          }
                        });
                        return false;
                      }
                    }
                    else {
                      $('#txtemail1').focus();
                      $('#txtemail1').css('border','1px solid #F00');
                      return false;
                    }
                  }
                </script>
                <div class="newsletter-inner mb-20">
                  <div class="newsletter">
                    <div class="theme-newsletter newsletter-title">
                      <h3 class="title">Earn With Earl</h3>
                    </div>
                    <ul class="footer-block-contant link">
                      <li><a href="indexd773.html?route=product/manufacturer">Sell on Earl</a></li>
                      <li><a href="index4dd2.html?route=account/voucher">Become a Sales Consultant</a></li>
                      <li><a href="index3d18.html?route=affiliate/login">Be a Logistic Service Provider</a></li>
                      <li><a href="indexe223.html?route=account/newsletter">Become an Engineer</a></li>
                    </ul>
                    <!--form id="newsletter-validate-detailnew" class="form subscribe" action="#" method="post">
                      <div class="form-group required field newsletter m-0">
                        <div class="control newsletter-box">        
                          <input type="email" name="txtemail1" id="txtemail1" value="" placeholder="Your email address" class="form-control input-text" />
                          <div class="action subscribe primary">
                            <button type="submit" class="btn btn-color" onclick="return subscribe1();">Go</button>
                          </div>
                        </div>
                        <span class="newsletter-msg"></span>
                      </div>
                      </form-->
                  </div>
                </div>
                <div>
                  <div class="footer_social  pt-xs-15 mt-xs-15">
                    <h3 class="title">Follow us</h3>
                    <ul class="social-icon">
                      <li><a class="facebook" title="Facebook"><i class="fa fa-facebook"> </i></a></li>
                      <li><a class="twitter" title="Twitter"><i class="fa fa-twitter"> </i></a></li>
                      <li><a class="instagram" title="Instagram"><i class="fa fa-instagram"> </i></a></li>
                      <li><a class="linkedin" title="Linkedin"><i class="fa fa-linkedin"> </i></a></li>
                      <li><a class="youtube" title="Youtube"><i class="fa fa-youtube"> </i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-middle">
        <div class="container">
          <div class="row">
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="row">
                <div class="col-sm-12">
                  <div class="copyright center-xs"><span>Copyright &copy; 
                    <script type="text/javascript">$(document.write(new Date().getFullYear()))</script> All rights reserved</span></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xs-12">
              <div class="footer-bottom-outer2">
                <div>
                  <div class="payment left-side float-none-xs center-xs">
                    <ul class="payment_icon">
                      <li class="paypal"><a><img src="<?php echo base_url('assets/');?>images/cash.png" alt="Sidebar Banner" class="img-responsive"></a></li>
                      <li class="mastro"><a><img src="<?php echo base_url('assets/');?>images/momo.jpg" alt="Sidebar Banner" class="img-responsive"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom-outer2">
    </div>
  </div>
</footer>
<div class="scroll-top">
  <div id="scrollup"></div>
</div>
<script type="text/javascript">
  var live_search = {
    selector: '#search input[name=\'search\']',
    text_no_matches: 'There is no product that matches the search criteria.',
    height: '50px'
  }
  
  $(document).ready(function() {
    var html = '';
    html += '<div class="live-search">';
    html += ' <ul>';
    html += ' </ul>';
    html += '<div class="result-text"></div>';
    html += '</div>';
  
    //$(live_search.selector).parent().closest('div').after(html);
    $(live_search.selector).after(html);
  
    $(live_search.selector).autocomplete({
      'source': function(request, response) {
        var filter_name = $(live_search.selector).val();
        var module_live_search_min_length = '(int)1';
        if (filter_name.length < module_live_search_min_length) {
          $('.live-search').css('display','none');
        }
        else{
          var html = '';
          html += '<li style="text-align: center;height:75px;">';
          html += '<img class="loading" src="catalog/view/theme/default/image/loading.gif" />';
          html += '</li>';
          $('.live-search ul').html(html);
          $('.live-search').css('display','block');
  
          $.ajax({
            url: 'index.php?route=product/live_search&filter_name=' +  encodeURIComponent(filter_name),
            dataType: 'json',
            success: function(result) {
              var products = result.products;
              $('.live-search ul li').remove();
              $('.result-text').html('');
  
              if (!$.isEmptyObject(products)) {
                var show_image = "1";
                var show_price = "1";
                var show_description = "0";
                $('.result-text').html('<a href="http://aaryaweb.info/opc/healthstore/healthstore3/fastfood/index.php?route=product/search&amp;search='+filter_name+'" class="view-all-results">View all results ('+result.total+')</a>');
  
                $.each(products, function(index,product) {
                  var html = '';
  
                  html += '<li>';
                  html += '<a href="' + product.url + '" title="' + product.name + '">';
                  //console.log(show_image);
                  if(product.image && show_image == "1"){
                    html += ' <div class="product-image"><img alt="' + product.name + '" src="' + product.image + '"></div>';
                  }
                  html += '<div class="product-detail-live">  <div class="product-name">' + product.name ;
                  if(show_description == "1"){
                    html += '<p>' + product.extra_info + '</p>';
                  }
                  html += '</div>';
                  if(show_price == "1"){
                    if (product.special) {
                      html += ' <div class="product-price"><span class="special">' + product.price + '</span><span class="price">' + product.special + '</span></div>';
                    } else {
                      html += ' <div class="product-price"><span class="price">' + product.price + '</span></div>';
                    }
                  }
                  html += '</div><span style="clear:both"></span>';
                  html += '</a>';
                  html += '</li>';
                  $('.live-search ul').append(html);
                });
              } else {
                var html = '';
                html += '<li style="text-align: center;height:10px;">';
                html += live_search.text_no_matches;
                html += '</li>';
  
                $('.live-search ul').html(html);
              }
              $('.live-search ul li').css('height',live_search.height);
              $('.live-search').css('display','block');
              return false;
            }
          });
        }
      },
      'select': function(product) {
        $(live_search.selector).val(product.name);
      }
    });
  
    $(document).bind( "mouseup touchend", function(e){
      var container = $('.live-search');
      if (!container.is(e.target) && container.has(e.target).length === 0)
      {
        container.hide();
      }
    });
  });
</script>
<div id="toTop" class="hidden-xs"></div>
</body>
</html>