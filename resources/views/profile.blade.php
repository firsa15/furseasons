<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
  <div class="main-container">
    <nav id="desktop-nav">
                <div class="nav">
                    <div class="logo">
                        <a href="/"><img src="{{ URL('assets\logo.png')}}" alt="logo" width="130"></a>
                    </div>
                    <div class="nav-icon">
                        <!-- <a href="#"><img src="{{ URL('assets\search.svg')}}" alt="search-icon"></a> -->
                        <a href="{{ url('cart') }}"><img src="{{ URL('assets\shopping-cart.svg')}}" alt="cart-icon">
                        @if (session('cart_count', 0) > 0)
                            <span class="badge bg-danger">
                                {{ session('cart_count') }}
                            </span>
                        @endif
                        </a>
                        
                    </div>
                </div>
    </nav>
  </div>
</body>
</html>
