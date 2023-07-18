@extends('layout.main')
@section('content')
    <div class="container pt-20">
        <p class="text-2xl md:text-3xl font-semibold text-reddark">Siswa Siswi XI PPLG 2....</p>

        <div class="mt-10 flex flex-wrap justify-center gap-y-3">

            @foreach ($siswas as $siswa)      
                <div class="w-full p-5 shadow-md rounded-md group md:w-1/2 lg:w-1/4 relative">
                    <div class="w-10 h-10 p-2.5 bg-slate-200 shadow-xl block text-center rounded-full justify-center">
                        <span class="my-auto justify-center font-semibold text-center mt-2">{{ $siswa->id }}</span>
                    </div>
                    <img src="{{ asset('/storage/' . $siswa->image) }}" alt="murid" class="w-40 h-40 rounded-full mx-auto group-hover:scale-110 transition-all duration-500 shadow-xl">
                    <div class="mt-5 pb-5">
                        <p class="font-semibold text-lg capitalize">{{ $siswa->name }}</p>
                        <p class="mb-2 pb-3 after:content[''] after:block after:border-b-2 after:border-primary after:transition-all duration-400 after:origin-left after:scale-x-0 group-hover:after:scale-x-50">{{ $siswa->kelamin }}</p>
                        <p class="text-sm">{!! $siswa->biodata !!}</p>
                    </div>
                    <div class="mt-3 flex justify-end gap-2 absolute bottom-0 right-3">
                        @if ($siswa->instagram)
                        <a href="https://www.instagram.com/{{ $siswa->instagram }}" class="text-4xl  hover:text-rose-700" target="_blank"><i class='bx bxl-instagram '></i></a>
                        @endif
                    </div>
                </div>
            @endforeach

        </div>  
    </div>
@endsection