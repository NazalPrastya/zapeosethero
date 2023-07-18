
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/img/landing-page/logo.png" class="scale-150">

        <title>SMKN 1 Ciomas | 11 PPLG 2</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/sidebar.css">

        {{-- TRIX EDITOD --}}
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
        <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

        <style>
           trix-toolbar [data-trix-button-group="file-tools"]{
          display: none;
        }
            body {
                /* font-family: 'Comfortaa', cursive; */
                font-family: 'Poppins', sans-serif;
                /* font-weight: 600 */
            }
        </style>

          @vite('resources/css/app.css')
    </head>
    <body>
    @include('sweetalert::alert')
        <div class="sidebar close">
            <ul class="nav-links space-y-2">
              <li class="rounded-l-full mx-auto text-center">
                <a href="/dashboard" class="text-center mx-auto py-5">
                  <span class="link_name font-[1000] text-center mx-auto text-3xl tracking-wider text-[#ffaa29]" style="-webkit-text-stroke: 0.1rem white">Welcome</span>
                </a>
              </li>
        
              <li class="group ml-3 rounded-l-full hover:bg-[#eeeeee] {{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard" class="group ">
                  <i class="bx bxs-dashboard group-hover:text-[#FFAA29]  {{ Request::is('dashboard') ? 'text-[#FFAA29]' : 'text-[#eee]' }}"></i>
                  <span class="link_name font-bold group-hover:text-[#ffaa29] {{ Request::is('dashboard') ? 'text-[#FFAA29]' : 'text-[#eee]' }}">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                  <li><a class="link_name" href="/dashboard">Dashboard</a></li>
                </ul>
              </li>

              @if  ((Auth::guard('admin')->user()))
                
              <li class="group ml-3 rounded-l-full hover:bg-[#eeeeee] {{ Request::is('dashboard/murid') ? 'active' : '' }}">
                <a href="/dashboard/murid" class="group ">
                  <i class="bx bxs-user group-hover:text-[#FFAA29]  {{ Request::is('dashboard/murid') ? 'text-[#FFAA29]' : 'text-[#eee]' }}"></i>
                  <span class="link_name font-bold group-hover:text-[#ffaa29] {{ Request::is('dashboard/murid') ? 'text-[#FFAA29]' : 'text-[#eee]' }}">Murid</span>
                </a>
                <ul class="sub-menu blank">
                  <li><a class="link_name" href="/dashboard/murid">Murid</a></li>
                </ul>
              </li>
              
              @endif

              <li class="group ml-3 rounded-l-full hover:bg-[#eeeeee] {{ Request::is('dashboard/project*') ? 'active' : '' }}">
                <a href="/dashboard/project" class="group ">
                  <i class="bx bx-briefcase group-hover:text-[#FFAA29]  {{ Request::is('dashboard/project*') ? 'text-[#FFAA29]' : 'text-[#eee]' }}"></i>
                  <span class="link_name font-bold group-hover:text-[#ffaa29] {{ Request::is('dashboard/project*') ? 'text-[#FFAA29]' : 'text-[#eee]' }}">Project</span>
                </a>
                <ul class="sub-menu blank">
                  <li><a class="link_name" href="/dashboard/murid">Project</a></li>
                </ul>
              </li>
              
              @if  ((Auth::guard('user')->user()))
              <li class="group ml-3 rounded-l-full hover:bg-[#eeeeee] {{ Request::is('dashboard/change-password*') ? 'active' : '' }}">
                <a href="/dashboard/change-password" class="group ">
                  <i class="bx bx-user group-hover:text-[#FFAA29]  {{ Request::is('dashboard/change-password*') ? 'text-[#FFAA29]' : 'text-[#eee]' }}"></i>
                  <span class="link_name font-bold group-hover:text-[#ffaa29] {{ Request::is('dashboard/change-password*') ? 'text-[#FFAA29]' : 'text-[#eee]' }}">Ganti Password</span>
                </a>
                <ul class="sub-menu blank">
                  <li><a class="link_name" href="/dashboard/murid">Ganti Password</a></li>
                </ul>
              </li>
              @endif

              @if  ((Auth::guard('admin')->user()))
              <li class="group ml-3 rounded-l-full hover:bg-[#eeeeee] {{ Request::is('dashboard/saran*') ? 'active' : '' }}">
                <a href="/dashboard/saran" class="group ">
                  <i class="bx bx-message group-hover:text-[#FFAA29]  {{ Request::is('dashboard/saran*') ? 'text-[#FFAA29]' : 'text-[#eee]' }}"></i>
                  <span class="link_name font-bold group-hover:text-[#ffaa29] {{ Request::is('dashboard/saran*') ? 'text-[#FFAA29]' : 'text-[#eee]' }}">Saran</span>
                </a>
                <ul class="sub-menu blank">
                  <li><a class="link_name" href="/dashboard/murid">Saran</a></li>
                </ul>
              </li>
              @endif

            </ul>
          </div>

          <section class="home-section">
            <div class="home-content">
              <i class="bx bx-menu"></i>
              {{-- @if ((Auth::guard('admin')->user())) --}}
                  
              <div class="absolute right-3  top-5">
                <div class="w-auto justify-end text-end items-end">
                <form action="/logout" method="post" class="inline-block text-end items-end">
                  @csrf
                  <button type="submit" class="p-1 px-2 bg-red-600 rounded-lg text-white font-bold hover:bg-red-700">Logout</button>
                </form>
               </div>
              </div> 
            {{-- @endif --}}
            </div>
            @yield('content')
          </section>


      @vite('resources/js/app.js')
      <script src="../path/to/flowbite/dist/flowbite.js"></script>
      <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();

         // Responsive sidebar
         let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
                arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });

        // Preview Image
        function previewImage()
        {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('#img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
      </script>
  </body>
</html>
