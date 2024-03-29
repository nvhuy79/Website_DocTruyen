<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <title>Sách truyện</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
      {{-- Menu --}}
      <div class="container" style=" font-size: 18px;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">               
          <div class="collapse navbar-collapse my-2" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Doctruyen.com</a>
                </li>
    
                <li class="nav-item">
                  <a class="nav-link active" href="{{url('/')}}" aria-current="page" href="#">Trang chủ</a>
                </li>
    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Danh mục truyện
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @foreach($danhmuc as $key => $danh)
                      <a class="dropdown-item" href="{{url('danh-muc/'.$danh->slug_danhmuc)}}">{{$danh->tendanhmuc}}</a>
                      @endforeach
                    </ul>
                    </li>
    
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Thể loại
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      @foreach($theloai as $key => $the)
                      <a class="dropdown-item" href="{{url('the-loai/'.$the->slug_theloai)}}">{{$the->tentheloai}}</a>
                      @endforeach
                    </ul>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="{{url('tim-kiem')}}" method="GET" >
                <input class="form-control mr-sm-2" type="search" name="tukhoa" placeholder="Tìm kiếm truyện, tác giả" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
          </div>
        </nav>
      </div>

          {{-- Slider --}}
          @yield('slide')
          @yield('content')
          {{-- footer --}}
          <div class="container">
          <footer>
            <div class="text-center">
              <div class="card-header">
                Footer
              </div>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Quay về đầu trang</a>
              </div>
            </div>
          </footer>
          </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        
        <script type="text/javascript" >

        $('.owl-carousel').owlCarousel(
          {
            loop:true,
            margin:10,
            nav:true,
            responsive:
            {
              0:{items:1},
              600:{items:3},
              1000:{items:5}
            }
          });
        </script>
        <script type="text/javascript" >
          $('.custom-select').on('change',function(){
            var url = $(this).val();
            if(url){
              window.location = url;
            }
            return false;
          });

          current_chapter();
          function current_chapter(){
            var url = window.location.href;
            $('.custom-select').find('option[value="'+url+'"]').attr("selected",true);
          }
        </script>
    </body>
</html>
