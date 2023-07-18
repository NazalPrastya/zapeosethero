
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
        <link href="build/assets/app-2fe07cf3.css" rel="stylesheet">
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
      {{-- <div id="preloader"></div> --}}
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
                        <a href="/#home" class="text-base text-dark py-2 mx-3 flex group-hover:font-bold hover:text-primary active:font-bold active:text-black ">Home</a>
                      </li>

                      <li class="group">
                        <a href="#aboutUs" class="text-base text-dark py-2 mx-3 flex group-hover:font-bold hover:text-primary active:font-bold active:text-black ">About Us</a>
                      </li>

                      
                      <li class="group">
                        <a href="#project" class="text-base text-dark py-2 mx-3 flex group-hover:font-bold hover:text-primary active:font-bold active:text-black ">Project</a>
                      </li>
                      
                      <li class="group">
                        <a href="#galery" class="text-base text-dark py-2 mx-3 flex group-hover:font-bold hover:text-primary active:font-bold active:text-black">Galery</a>
                      </li>pre

                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </header>
        {{-- End Navbar --}}

        {{-- ramadhan --}}
        {{-- <section id="eid" class="pt-32">
          <div class="container">
            <div class="flex flex-wrap">
              <div class="w-full">
                <h3>Selamat Hari Raya idul fitri </h3>
                <p>Kami segenap keluarga besar XI PPLG 2 SMK Negeri 1 Ciomas mengucapkan <span>taqabbalallahu minna wa minkum minal aidin wal faizin</span></p>
              </div>
            </div>
          </div>
        </section> --}}
        {{-- end ramadhan --}}

        {{-- Jumbotron Start --}}
<section id="home" class="pt-32 h-screen pb-12 lg:pb-20 rounded-bl-[10rem] lg:rounded-bl-[13rem] bg-secondary">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full text pl-5 lg:w-1/2 relative" data-aos="fade-right" data-aos-duration="2000">
    
                {{-- Hiasan --}}
                <img src="/img/landing-page/hiasan/Polygon.svg" alt="polygon" class="absolute z-[1] top-5 -left-10 rotate-12 lg:-left-16" data-aos="zoom-in" data-aos-duration="2000">
    
                <img src="/img/landing-page/hiasan/Ellipse.svg" width="60" alt="polygon" class="absolute z-[1] scale-75 -top-12 right-0 rotate-12 lg:right-5" data-aos="zoom-in" data-aos-duration="2500">
    
                <img src="/img/landing-page/hiasan/Rectangle.svg" width="60" alt="polygon" class="scale-50 absolute z-[1] bottom-0 right-0 rotate-12 lg:bottom-20 lg:right-14" data-aos="zoom-in" data-aos-duration="3000">
                {{-- Hiasan --}}
    
                <h1 class="text-3xl font-[700] max-w-md text-primary lg:text-5xl">Zapeosethero</h1>
                <p class="font-semibold italic text-reddark">(zazzy people on second teory room)</p>
                <p class="text-base mt-7 mb-10 lg:text-lg lg:max-w-lg">Welcome to our website <span class="text-reddark font-semibold">11 PPLG 2</span> batch 14 <span class="text-darkblue font-semibold">SMKN 1 Ciomas.</span> Let's take a look at some of our work, and our fun.</p>
                <a href="#aboutUs" class="text-lg font-semibold rounded-full shadow-lg mt-5 py-4 px-12 bg-babyblue hover:bg-primary hover:text-white transition-all duration-500">See More</a>
            </div>
            <div class="image w-full  pb-16 lg:w-1/2 relative" data-aos="zoom-in" data-aos-duration="2000">
                <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" class="absolute">
                    <path fill="#e44c30" d="M48.7,-68.6C62.2,-67.1,71.7,-52.1,71.1,-37.2C70.4,-22.3,59.8,-7.6,57.5,8.2C55.1,24.1,61.1,41.2,56.2,51C51.3,60.9,35.3,63.5,21.7,62.1C8.1,60.6,-3.2,55,-12.7,49.4C-22.2,43.8,-29.9,38.2,-43.1,32.2C-56.3,26.2,-75.1,19.9,-79.8,9.4C-84.5,-1,-75.2,-15.6,-67.4,-30C-59.6,-44.4,-53.3,-58.7,-42.3,-61.4C-31.3,-64.1,-15.6,-55.2,1,-56.7C17.6,-58.2,35.2,-70.2,48.7,-68.6Z" transform="translate(100 100)" />
                  </svg>
                <img src="/img/landing-page/student.svg" alt="PPLG 2" class="mx-auto scale-125  ">
            </div>
        </div>
    </div>
    </section>
    {{-- Jumbotron End --}}
    
    {{-- Start About US --}}
    <section id="aboutUs" class="py-36">
        <div class="container relative">
            <h2 class="text-center text-3xl font-[700] text-primary" data-aos="zoom-in" data-aos-duration="2000">Tentang XI PPLG 2</h2>
            <p class="text-center text-darkblue font-medium" data-aos="zoom-in" data-aos-duration="2000">(Pengembangan Perangkat Lunak dan Gim)</p>
            <p class="text-center text-base pt-5 md:mx-auto md:max-w-lg md:pt-5" data-aos="zoom-in" data-aos-duration="2000">pada tahun 2021 saat covid akan mengakhiri masanya<span class="text-reddark font-medium"> PPLG 2 angkatan 14  </span>  lahir untuk menjadi murid <span class="text-darkblue font-medium">SMKN 1 Ciomas.</span>dan berlanjut menjadi <span class="text-reddark font-medium">XI PPLG 2</span> di tahun 2022</p>
            <div class="pt-5 md:pt-10 flex flex-wrap gap-y-3 md:flex-row md:mx-20 pb-10" data-aos="fade-up" data-aos-duration="2000">
                <div class="w-1/2 md:w-1/4 flex flex-col items-center justify-center mx-auto" >
                    <span class="text-4xl font-bold text-primary ">36</span>
                    <p class="font-semibold text-lg">Murid</p>
                </div>
    
                <div class="w-1/2 md:w-1/4 flex flex-col items-center justify-center mx-auto" >
                    <span class="text-4xl font-bold text-primary ">18</span>
                    <p class="font-semibold text-lg">Laki - laki</p>
                </div>
    
                <div class="w-1/2 md:w-1/4 flex flex-col items-center justify-center mx-auto" >
                    <span class="text-4xl font-bold text-primary ">18</span>
                    <p class="font-semibold text-lg">Perempuan</p>
                </div>
    
                <div class="w-1/2 md:w-1/4 flex flex-col items-center justify-center mx-auto" >
                    <img src="/img/landing-page/pa-rizki.png" alt="Pa-rizki-ramadhan" class="w-16 rounded-full">
                    <p class="font-semibold text-lg text-center">Pa Rizki Ramadan <p>(Wali Kelas)</p></p>
                </div>
    
                <div class="mx-auto block justify-center content-center items-center mt-5" >
                    <a href="/murid" class="btn bg-babyblue font-semibold hover:bg-darkblue hover:text-white duration-200 mx-auto text-center">Lihat lebih banyak...</a>
                </div>
            </div>
    
             <div class="absolute -left-14 md:-left-16 -z-10 -bottom-56">
                <svg width="300" height="300" class="md:scale-125" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#ADE2E4" d="M31.2,-51.3C41.1,-42.2,50.2,-34.6,61.2,-24C72.2,-13.3,85.2,0.4,86.6,14.6C87.9,28.9,77.7,43.7,65.8,56.3C53.8,69,40.1,79.5,26.3,78.4C12.5,77.4,-1.3,64.6,-17,59.4C-32.7,54.2,-50.2,56.4,-57.6,49.2C-65,41.9,-62.3,25.3,-63,10C-63.7,-5.2,-67.7,-19,-65.9,-33.1C-64.1,-47.1,-56.4,-61.5,-44.5,-69.6C-32.5,-77.7,-16.3,-79.5,-2.8,-75.1C10.7,-70.8,21.3,-60.3,31.2,-51.3Z" transform="translate(100 100)" />
                  </svg>
            </div>
    
            <div class="absolute -left-20 md:-left-24 -z-10 -bottom-72">
                <svg width="340" height="340" class="md:scale-125" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#e44c30" d="M31.2,-51.3C41.1,-42.2,50.2,-34.6,61.2,-24C72.2,-13.3,85.2,0.4,86.6,14.6C87.9,28.9,77.7,43.7,65.8,56.3C53.8,69,40.1,79.5,26.3,78.4C12.5,77.4,-1.3,64.6,-17,59.4C-32.7,54.2,-50.2,56.4,-57.6,49.2C-65,41.9,-62.3,25.3,-63,10C-63.7,-5.2,-67.7,-19,-65.9,-33.1C-64.1,-47.1,-56.4,-61.5,-44.5,-69.6C-32.5,-77.7,-16.3,-79.5,-2.8,-75.1C10.7,-70.8,21.3,-60.3,31.2,-51.3Z" transform="translate(100 100)" />
                  </svg>
            </div>
    
        </div>
    </section>
    {{-- End About US --}}
    
    

    {{-- Start Project --}}
    <section id="project" class="py-24 bg-[url('/public/img/landing-page/bg-project2.png')] bg-cover bg-center bg-fixed shadow-lg">
        <h3 class="text-3xl text-center font-bold text-slate-200">Project Kami</h3>
        <div class="container flex flex-wrap justify-center items-center">
            <div class="w-full content md:w-1/2">
                <p class="font-semibold text-lg pt-5 text-slate-200 md:max-w-md md:text-2xl">Ayo lihat beberapa project yang telah kami selesaikan</p>
                <p class="pt-5 text-white md:max-w-sm md:text-lg">Berikut merupakan project project yang diselesaikan oleh kami.ayo lihat lebih banyak tentang project yang telah kami selesaikan.</p>
            </div>
    
            <div class="w-full mt-5 md:w-1/2 flex mx-auto justify-center items-center" >
                <a href="/project" class="px-10 py-4 font-semibold bg-primary text-white rounded-md hover:bg-reddark transition-all duration-300">Lihat beberapa project kami</a>
            </div>
        </div>
    </section>
    
    {{-- End Project --}}

    {{-- Start Galery --}}
      <section id="galery" class="py-20 shadow-md" >
        <p class="text-3xl font-bold text-center mb-10">Our Galery</p>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2">
          <div class="w-full overflow-hidden rounded-sm shadow-sm relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <img src="/img/galery/1.JPG" alt="galery" class="w-full h-full bg-cover bg-center bg-fixed hover:scale-105 transition-all duration-300">
            <div class="absolute bottom-0 left-2">
              <p class="text-white font-normal">23-02-2023</p>
            </div>
          </div>  

          <div class="w-full overflow-hidden rounded-sm shadow-sm relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <img src="/img/galery/2.JPG" alt="galery" class="w-full h-full bg-cover bg-center bg-fixed hover:scale-105 transition-all duration-300">
            <div class="absolute bottom-0 left-2">
              <p class="text-white font-normal">23-02-2023</p>
            </div>
          </div>  

          <div class="w-full overflow-hidden rounded-sm shadow-sm relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <img src="/img/galery/3.JPEG" alt="galery" class="w-full h-full bg-cover bg-center bg-fixed hover:scale-105 transition-all duration-300">
            <div class="absolute bottom-0 left-2">
              <p class="text-white font-normal">21-07-2022</p>
            </div>
          </div>  

          <div class="w-full overflow-hidden rounded-sm shadow-sm relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <img src="/img/galery/4.JPG" alt="galery" class="w-full h-full bg-cover bg-center bg-fixed hover:scale-105 transition-all duration-300">
            <div class="absolute bottom-0 left-2">
              <p class="text-white font-normal">21-04-2022</p>
            </div>
          </div>  

          <div class="w-full overflow-hidden rounded-sm shadow-sm relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <img src="/img/galery/5.JPG" alt="galery" class="w-full h-full bg-cover bg-center bg-fixed hover:scale-105 transition-all duration-300">
            <div class="absolute bottom-0 left-2">
              <p class="text-white font-normal">25-11-2022</p>
            </div>
          </div>  

          <div class="w-full h-60 overflow-hidden rounded-sm shadow-sm relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <img src="/img/galery/6.JPG" alt="galery" class="w-full h-full bg-cover bg-center bg-fixed hover:scale-105 transition-all duration-300">
            <div class="absolute bottom-0 left-2">
              <p class="text-white font-normal">05-10-2022</p>
            </div>
          </div>  

          <div class="w-full h-60 overflow-hidden rounded-sm shadow-sm relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <img src="/img/galery/7.JPG" alt="galery" class="w-full h-full bg-cover bg-center bg-fixed hover:scale-105 transition-all duration-300">
            <div class="absolute bottom-0 left-2">
              <p class="text-white font-normal">17-08-2022</p>
            </div>
          </div>  

          <div class="w-full h-60 overflow-hidden rounded-sm shadow-sm relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <img src="/img/galery/8.JPG" alt="galery" class="w-full h-full bg-cover bg-center bg-fixed hover:scale-105 transition-all duration-300">
            <div class="absolute bottom-0 left-2">
              <p class="text-white font-normal">18-07-2022</p>
            </div>
          </div>  

          <div class="w-full h-60 overflow-hidden rounded-sm shadow-sm relative" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="300">
            <img src="/img/galery/9.JPG" alt="galery" class="w-full h-full bg-cover bg-center bg-fixed hover:scale-105 transition-all duration-300">
            <div class="absolute bottom-0 left-2">
              <p class="text-white font-normal">10-05-2022</p>
            </div>
          </div>

        </div>  
      
      </section>
    {{-- End Galery --}}
        
        @include('layout.footer')

      @vite('resources/js/app.js')
      <script src="/build/assets/app-e0cce75.js"></script>
      <script src="../path/to/flowbite/dist/flowbite.js"></script>
      <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
  </body>
</html>
