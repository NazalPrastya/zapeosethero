@extends('dashboard.layout.layout')
@section('content')
    <div class="container">
        <p class="text-3xl font-semibold">Tambah Siswa</p>     
       
        <form class="mt-3" method="post" action="{{ route('tambahSiswa') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="/murid/default.png" name="image">
            <div class="mb-6">
              <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
              <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('name')
                  is_invalid
              @enderror" placeholder="Dino bin Ikhlash" name="name" value="{{ old('name') }}">
              @error('name')
                  <div class="feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>
           
            <div class="mb-6">           
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " name="kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                </select>
              </div>

            <div class="mb-6">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email')
                    is_invalid
                @enderror" placeholder="Dino bin Ikhlash" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>

            <div class="mb-6 mt-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram</label>
                <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('instagram')
                    is_invalid
                @enderror" placeholder="fuwamifu_" name="instagram">
                @error('instagram')
                <div class="feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          </form>
    </div>
@endsection