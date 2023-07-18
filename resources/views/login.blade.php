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
    <body class="bg-gray-200">
        <div class="md:container md:my-28">
            <div class="flex flex-col md:flex-row md:shadow-lg justify-center ">
                <div class="w-full bg-gradient-to-tl from-reddark via-primary to-secondary p-8 md:w-1/2 rounded-r-[2rem]">
                    <p class="text-6xl font-bold max-w-sm my-auto md:my-24 text-white grad">Welcome Back</p>
                </div> 
                
                <div class="w-full p-8 md:w-1/2">
                    <p class="text-4xl font-semibold"> Login</p>  
                    <p class="mt-4">Welcome back broh, ayo otak atik akun lu dah..</p>   
                    {{-- Alert --}}
                    @if (session()->has('loginError'))
                        
                    <div id="alert-2" class="flex p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                        <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Info</span>
                        <div class="ml-3 text-sm font-medium">
                          {{ session('loginError') }}
                        </div>
                        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                          <span class="sr-only">Close</span>
                          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                      </div>  
                    @endif

                    {{-- End Alert --}}
                        <form class="mt-10" action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email')
                                is_invalid
                            @enderror" placeholder="boleh@gmail.com" name="email" autocomplete="off">
                            @error('email')
                                <div class="feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="mb-6 relative">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('password')
                                is_invalid
                            @enderror" name="password" placeholder="enter password">
                            <span id="showToggle" onclick="toggle()"><i class="bx bx-show text-3xl text-primary hover:text-darkblue focus:text-darkblue absolute top-8 right-3"></i></span>
                            @error('password')
                                <div class="feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <button type="submit" class="text-white bg-primary hover:bg-reddark focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>

                            <a href="/" class="block text-end underline text-blue-800 hover:text-blue-900">Kembali..</a>
                        </form>
  
  
                </div>
            </div>
        </div>


      @vite('resources/js/app.js')
      <script src="../path/to/flowbite/dist/flowbite.js"></script>
      <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>

      <script>
        function toggle() {
        var password = document.getElementById("password");
        var togglePassword = document.getElementById("showToggle");
        if (password.type === "password") {
            password.type = "text";
        } else {
            password.type = "password";
        }
    }
      </script>
  </body>
</html>