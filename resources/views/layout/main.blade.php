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
        <style>
            body {
                /* font-family: 'Comfortaa', cursive; */
                font-family: 'Poppins', sans-serif;
                /* font-weight: 600 */
            }
        </style>

          @vite('resources/css/app.css')
    </head>
    <body class="bg-[#fafafa] sm:overflow-x-hidden overflow-x-hidden">
      <div id="preloader"></div>

    @include('sweetalert::alert')
        {{-- Start Navbar --}}
        <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
            <div class="container">
              <div class="flex items-center justify-between relative">
                <div class="px-4">
                  <a href="#home" class="font-[700] font-comforta text-xl lg:text-2xl text-black block py-0 tracking-tight"><img src="/img/landing-page/logo.png" alt="#" width="60" class="inline "> ZapeOsetherO</a>
                </div>
                <div class="flex items-center px-4">
                  <button id="hamburger" name="hamburger" class="block absoulute right-4 lg:hidden" type="button">
                    <span class="hamburger-line bg-black transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out"></span>
                    <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                  </button>
      
                  <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[200px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none font-[600]">
                    <ul class="block lg:flex font-comforta">
                      <li class="group">
                        <a href="/" class="text-base text-dark py-2 mx-3 flex group-hover:font-bold hover:text-primary active:font-bold">Home</a>
                      </li>

                      <li class="group">
                        <a href="/#aboutUs" class="text-base text-dark py-2 mx-3 flex group-hover:font-bold hover:text-primary active:font-bold ">About Us</a>
                      </li>

                      <li class="group">
                        <a href="/#galery" class="text-base text-dark py-2 mx-3 flex group-hover:font-bold hover:text-primary active:font-bold">Galery</a>
                      </li>

                      <li class="group">
                        <a href="/project" class="text-base text-dark py-2 mx-3 flex group-hover:font-bold hover:text-primary active:font-bold {{ Request::is('project') ? 'text-primary' : 'text-dark' }}">Project</a>
                      </li>
                      
                      <li class="group">
                        <a href="/murid" class="text-base py-2 mx-3 flex group-hover:font-bold hover:text-primary active:font-bold {{ Request::is('murid') ? 'text-primary' : 'text-dark' }}">Murid</a>
                      </li>

                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </header>
        {{-- End Navbar --}}

        @yield('content')

        @include('layout.footer')

      @vite('resources/js/app.js')
      <script src="../path/to/flowbite/dist/flowbite.js"></script>
      <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
  </body>
</html>