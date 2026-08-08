

  <!-- Navbar -->
    <!-- <nav class="navbar">
        <a href="{{ route('home.index') }}" class="navbar-brand">Logo</a>

        <div>
            <a href= "{{ route('home.index') }}" style="margin-right: 15px; text-decoration: none; color: #333;">
                Home
            </a> 

            <a href= "{{ route('home.about') }}" style="margin-right: 15px; text-decoration: none; color: #333;">
                About
            </a>
           
            <a href= "{{ route('products.index') }}" style="margin-right: 15px; text-decoration: none; color: #333;">
                Products
            </a>
        </div>
    </nav> -->
    <div class="w3-top w3-card" style="height:54px">
      <div class="w3-flex-bar w3-theme w3-left-align">
        <div class="admin-logo w3-bar-item w3-hide-medium w3-hide-small">
          <h5 class="" style="line-height:1; margin:0!important; font-weight:300">
            <a href="{{ route('home.index') }}" class="w3-button w3-bold">
              <img src="{{ asset('assets/admin-logo.png') }}" alt="w3mix" class="w3-image" width="26"> &nbsp; W3Admin </a>
          </h5>
        </div>
     
        <div >
              <a href= "{{ route('home.index') }}" >
                Home
            </a> 

            <a href= "{{ route('home.about') }}" >
                About
            </a>
           
            <a href= "{{ route('products.index') }}" >
                Products
            </a>
            @guest
            <a href= "{{ route('login.form') }}" >
                Login
            </a>
            <a href= "{{ route('register.form') }}" >
                Register
            </a>
            @endguest
            @auth
            <a href= "{{ route('products.list') }}" >
                List Products
            </a>
            <a href= "{{ route('logout') }}" >
                logout
            </a>
            @endauth
          </div>
        </div>
      </div>
    



