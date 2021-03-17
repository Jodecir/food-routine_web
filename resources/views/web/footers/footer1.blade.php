<!-- //footer style One -->
<footer id="footerOne"  class="footer-area footer-content footer-one footer-desktop d-none d-lg-block d-xl-block">
  <div class="container">   
    <div class="row">
        <div class="col-12 col-lg-4"> 
          <h1>Entre em Contato Conosco</h1>
          <form action="" class="form contact">
            <div class="row">
              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label for="name" class="sr-only">Nome</label>
                  <input type="text" class="form-control" id="name" placeholder="Nome">
                </div> <!-- end .form-group -->

                <div class="form-group">
                  <label for="email" class="sr-only">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div> <!-- end .form-group -->

                <div class="form-group">
                  <label for="subject" class="sr-only">Assunto</label>
                  <input type="text" class="form-control" id="subject" placeholder="Assunto">
                </div> <!-- end .form-group -->
              </div> <!-- end .form> .row> .col-md-4 -->

              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label for="message" class="sr-only">Mensagem</label>
                  <textarea name="message" id="message" placeholder="Mensagem"></textarea>
                </div> <!-- end .form-group -->
              </div>
            </div> <!-- end .form> .row -->
            <button class="btn btn-default contact-submit custom-btn" type="submit">ENVIAR</button>
            </form> <!-- end .form -->
          <figure>        
            <a href="{{ URL::to('/')}}" class="logo" data-toggle="tooltip" data-placement="bottom" title="@lang('website.logo')">
              @if($result['commonContent']['settings']['sitename_logo']=='name')
              <?=stripslashes($result['commonContent']['settings']['website_name'])?>
              @endif
          
              @if($result['commonContent']['settings']['sitename_logo']=='logo')
              <img class="img-fluid" src="{{asset('').$result['commonContent']['settings']['website_logo']}}" alt="<?=stripslashes($result['commonContent']['settings']['website_name'])?>">
              @endif
            </a>
          </figure>
          <ul class="mail">
            <li>
              <a href="mailto:{{$result['commonContent']['setting'][3]->value}}" data-toggle="tooltip" data-placement="bottom" title="@lang('website.mail')">
              <i class="fas fa-envelope"></i>{{$result['commonContent']['setting'][3]->value}}</a>
              </a>

            </li>
          </ul>
          <p>
            @lang('website.Footer text 1')
          </p>
          <ul class="socials">
            <li>
              @if(!empty($result['commonContent']['setting'][50]->value))
                  <a href="{{$result['commonContent']['setting'][50]->value}}" class="fab fb fa-facebook-square" data-toggle="tooltip" data-placement="bottom" title="@lang('website.facebook')"></a>
              @else
              <a href="{{$result['commonContent']['setting'][50]->value}}" class="fab fb fa-facebook-square" data-toggle="tooltip" data-placement="bottom" title="@lang('website.facebook')"></a>
              @endif
            </li> 
            <li>
              @if(!empty($result['commonContent']['setting'][52]->value))
                  <a href="{{$result['commonContent']['setting'][52]->value}}"  class="fab tw fa-twitter-square" data-toggle="tooltip" data-placement="bottom" title="@lang('website.twitter')"></a>
              @else
                  <a href="#" class="fab tw fa-twitter-square" data-toggle="tooltip" data-placement="bottom" title="@lang('website.twitter')"></a>
              @endif
            </li>

            <li>
              @if(!empty($result['commonContent']['setting'][51]->value))
                  <a href="{{$result['commonContent']['setting'][51]->value}}" class="fab sk fa-google" data-toggle="tooltip" data-placement="bottom" title="@lang('website.google')"></a>
              @else
                  <a href="#"><i class="fab sk fa-google"  data-toggle="tooltip" data-placement="bottom" title="@lang('website.google')"></i></a>
              @endif
            </li>

            <li>
              @if(!empty($result['commonContent']['setting'][53]->value))
                  <a href="{{$result['commonContent']['setting'][53]->value}}" class="fab ig fa-instagram" data-toggle="tooltip" data-placement="bottom" title="@lang('website.Instagram')"></a>
              @else
                  <a href="#" class="fab ig fa-instagram" data-toggle="tooltip" data-placement="bottom" title="@lang('website.Instagram')"></a>
              @endif
            </li>                  
          </ul>
          </div>
          <div class="col-12 col-lg-2">
            <div class="single-footer">
              <h5>                    
                @lang('website.Quick Links')
              </h5>
            </div>
            <div class="single-footer single-footer-left">
          
              <ul class="links-list pl-0">
                <li> <a href="{{ URL::to('/')}}" data-toggle="tooltip" data-placement="left" title="@lang('website.Home')">@lang('website.Home')</a> </li>
                <li> <a href="{{ URL::to('/shop')}}" data-toggle="tooltip" data-placement="left" title="@lang('website.Shop')">@lang('website.Shop')</a> </li>
                <li> <a href="{{ URL::to('/orders')}}" data-toggle="tooltip" data-placement="left" title="@lang('website.Orders')">@lang('website.Orders')</a> </li>
                <li> <a href="{{ URL::to('/viewcart')}}" data-toggle="tooltip" data-placement="left" title="@lang('website.Shopping Cart')">@lang('website.Shopping Cart')</a> </li>           
                <li> <a href="{{ URL::to('/wishlist')}}" data-toggle="tooltip" data-placement="left" title="@lang('website.Wishlist')">@lang('website.Wishlist')</a> </li>   
                          
              </ul>
            </div>
        </div>
        <div class="col-12 col-lg-2">
            <div class="single-footer">
                <h5>                    
                    @lang('website.Personalization')
                </h5>
              </div>
    
          <ul class="links-list pl-0">
            @if(count($result['commonContent']['pages']))
              @foreach($result['commonContent']['pages'] as $page)
                  <li> <a href="{{ URL::to('/page?name='.$page->slug)}}" data-toggle="tooltip" data-placement="left" title="{{$page->name}}">{{$page->name}}</a> </li>
              @endforeach
            @endif
            <li> <a href="{{ URL::to('/contact')}}" data-toggle="tooltip" data-placement="left" title="@lang('website.Contact Us')">@lang('website.Contact Us')</a> </li>

          </ul>
        </div>
      <div class="col-12 col-lg-4">
          <div class="single-footer">
            <h5>                  
              @lang('website.Instagram Feed')
            </h5>
          </div>
          <div class="row">
          <div class="col-12">
        <div class="instagram-content" id="instagram-feed">       
          
              </div>
          </div>

      
          </div>
      </div>
  </div>
  </div>
  <div class="container-fluid p-0">
    <div class="copyright-content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="footer-info">
                <p> ©&nbsp;@lang('website.Copy Rights'), Todos os Direitos Reservados
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</footer>