@extends('dashboard.layout.layout')
@section('content')
<div class="container">
    <p class="text-3xl font-semibold">Edit Project </p>

    
<form class="mt-3" method="post" action="{{ route('updateProject', $project->id) }}" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <input type="hidden" name="user_id">
    <input type="hidden" name="oldImage" value="{{ $project->image }}">

    @if ((Auth::guard('admin')->user()))     
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pembuat</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " name="user_id">
        @foreach ($siswas as $siswa)    
        <option value="{{ $siswa->id }}">{{ $siswa->name }}</option>
        @endforeach

        </select>
    @endif

    <div class="mb-6">
      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul Sistem</label>
      <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('sistem')
          is_invalid
      @enderror" placeholder="Sistem Informasi Kang Cimol" name="sistem" value="{{ old('sistem', $project->sistem) }}">
      @error('sistem')
          <div class="feedback">
            {{ $message }}
          </div>
      @enderror
    </div>
    <div class="mb-6">
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi Singkat</label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 @error('keterangan')
            is_invalid
        @enderror" placeholder="masukan deskripsi singkat tentang sistem mu jgn panjang panjang yah" name="keterangan">{{ old('keterangan', $project->keterangan) }}</textarea>
        @error('keterangan')
            <div class="feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="relative z-0 w-full group">  
        <div class="flex box-border">
            @if ($project->image)
            <img src="{{ asset('storage/'. $project->image) }}" width="200px" height="100px" id="img-preview" class="img-preview bg-white mr-5 border-4 ring-2 ring-blue-400 border-[#0F4061] ">             
            @else
            <img width="200px" height="100px" id="img-preview" class="img-preview bg-white mr-5 border-4 ring-2 ring-blue-400 border-[#0F4061] ">      
            @endif       
            <div class="w-full">
            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload thumbnail sistem *ukuran 1280x720px biar bagus</label>
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

    <div class="mb-6 mt-5">
        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">link yang udh dihosting</label>
        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('link')
            is_invalid
        @enderror" placeholder="blablabla.xipplg2.com" name="link" value="{{ old('link', $project->link) }}">
        @error('link')
        <div class="feedback">
            {{ $message }}
        </div>
        @enderror
      </div>

      <div class="mb-6 mt-5">
        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">link vidio</label>
        <input type="text" id="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('vidio')
            is_invalid
        @enderror" placeholder="https://youtu.be/urtvpt08EJY" name="vidio" value="{{ old('vidio', $project->vidio) }}">
        @error('vidio')
        <div class="feedback">
            {{ $message }}
        </div>
        @enderror
      </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
  </form>
  
</div>
@endsection