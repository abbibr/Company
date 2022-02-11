<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus icon'></i>
        <div class="logo_name">abbibr</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <form action="{{ route('search') }}" method="get">
          <i class='bx bx-search'></i>
          <input type="text" placeholder="Search..." name="query_search" autocomplete="off">
          <span class="tooltip">Search</span>
        </form>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
      <li>
       <a href="{{ route('user') }}">
         <i class='bx bx-user' ></i>
         <span class="links_name">User</span>
       </a>
       <span class="tooltip">User</span>
     </li>
     <li>
       <a href="{{ route('phonenumber') }}">
         <i class='bx bx-phone' ></i>
         <span class="links_name">Phone Number</span>
       </a>
       <span class="tooltip">Phone</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-cog' ></i>
         <span class="links_name">Setting</span>
       </a>
       <span class="tooltip">Setting</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="{{ asset('img/mine.jpg') }}" alt="profileImg">
           <div class="name_job">
             <div class="name">Abbosov Ibrohim</div>
             <div class="job">Fullstack Developer</div>
           </div>
         </div>
         <a href="/"><i class='bx bx-log-out' id="log_out" ></i></a>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Dashboard</div>

      @yield('content')
  </section>
  <script src="{{ asset('js/nav.js') }}"></script>

</body>
</html>