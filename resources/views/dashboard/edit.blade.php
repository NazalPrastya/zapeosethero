@extends('dashboard.layout.layout')
@section('content')
    <div class="container">
        <p class="text-3xl font-semibold">Edit Profile {{ $siswa->name }}</p>     
       
        <form class="mt-3" method="post" action="/dashboard/siswa/{{ $siswa->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <input type="hidden" value="{{ $siswa->image }}" name="oldImage">
            <div class="mb-6">
              <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
              <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('name')
                  is_invalid
              @enderror" placeholder="Dino bin Ikhlash" name="name" value="{{ old('name', $siswa->name) }}" autocomplete="off">
              @error('name')
                  <div class="feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="mb-6">           
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " name="kelamin">
                    @if ($siswa->kelamin == 'Perempuan')
                    <option selected value="{{ $siswa->kelamin }}">{{ $siswa->kelamin }}</option>
                    <option value="Laki-laki">Laki-laki</option>
                    @elseif($siswa->kelamin == 'Laki-laki')
                    <option selected value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    @endif
                </select>
            </div>
           
            <div class="mb-6">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('email')
                    is_invalid
                @enderror" placeholder="Dino bin Ikhlash" name="email" value="{{ old('email',$siswa->email) }}" autocomplete="off">
                @error('email')
                    <div class="feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>

            <div class="mb-6 mt-5">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram *jgn pake"@"</label>
                <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('instagram')
                    is_invalid
                @enderror" placeholder="fuwamifu_" name="instagram" value="{{ old('instagram',$siswa->instagram) }}" autocomplete="off">
                @error('instagram')
                <div class="feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="relative z-0 w-full group">  
                <div class="flex box-border">
                    @if ($siswa->image)
                    <img src="{{ asset('storage/'. $siswa->image) }}" width="300px" height="300px" id="img-preview" class="img-preview bg-white mr-5 border-4 ring-2 ring-blue-400 border-[#0F4061] ">             
                    @else
                    <img width="300px" height="300px" id="img-preview" class="img-preview bg-white mr-5 border-4 ring-2 ring-blue-400 border-[#0F4061] ">      
                    @endif       
                    <div class="w-full">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload Profile Picture ukuran 1:1(kotak) ye</label>
                    <input name="image" type="file" id="image" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:border-1 focus:border-sky-600 @error('image')
                    is_invalid
                    @enderror" id="file_input" type="file" value="{{ old('image') }}" onchange="previewImage()" >
                    @error('image')
                    <div class="feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>

              <div class="mt-5 mb-5">
                <label for="biodata" class="form-label">isi Kalimat yang menggambarkan diri lu atau quotes apapun bebas dah</label>
                <input id="biodata" type="hidden" name="biodata" required value="{{ old('biodata', $siswa->biodata) }}" class="@error('biodata')
                is_invalid
                @enderror">
            <trix-editor input="biodata"></trix-editor>
                @error('biodata')
                    <div class="feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          </form>
    </div>
@endsection