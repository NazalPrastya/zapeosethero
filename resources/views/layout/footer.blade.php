{{-- Start Footer --}}
<footer id="contact" class="pt-20 ">
    <div class="container">
        <div class="flex flex-col md:flex-row justify-center gap-3">
            <div class="w-full md:w-1/2">
                <h3 class="text-3xl"><img src="img/landing-page/logo.png" alt="logo" width="80" class="inline"> Zapeosethero</h3>
                 <p class="text-sm">Buat kegembiraan bersama kelas 11 PPLG 2 <h1>SMKN 1 Ciomas</h1></p>
                 <p class="text-xl font-semibold pt-3">Social Media</p>
                 <a href="https://www.instagram.com/rpl2azzy/" target="_blank" class="hover:text-primary">Instagram</a>
            </div>
            
            <div class="w-full md:w-1/2">      
                <p class="text-xl font-semibold pt-3">Pesan</p>
                <form action="{{ route('tambah-saran') }}" method="post" class="pt-3">
                    @csrf
                    <div class="mb-6">
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pengirim :</label>
                    <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('sender')
                        is_invalid
                    @enderror" placeholder="Nama kalian" name="sender" value="{{ old('sender') }}">
                    @error('sender')
                        <div class="feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-6">      
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan :</label>
                        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('message')
                            is_invalid
                        @enderror" placeholder="Masukan saran" name="message">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn bg-primary text-white hover:bg-reddark">Submit</button>
                </form>
                
            </div>
         </div>

          <div class="w-full justify-center text-center py-5 border-t-2 mt-5 border-primary">
                 <p class="text-base">Create with <i class='bx bxs-coffee text-xl text-amber-900' ></i> By Nazal absen 25</p>
          </div>
    </div>
</footer>
{{-- End Footer --}}