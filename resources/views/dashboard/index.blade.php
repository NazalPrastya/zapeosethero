@extends('dashboard.layout.layout')
@section('content')
<div class="container">
    @if ((Auth::guard('admin')->user()))
    <p class="text-xl font-semibold">Welcome back admin {{ auth::guard('admin')->user()->name }}</p>
    @else
    <p class="text-xl font-semibold ">Welcome Back, {{ auth::guard('user')->user()->name }} </p>
    @endif
    
    @if ((Auth::guard('user')->user()))   
    <div class="mt-10 flex flex-wrap  gap-y-3">
            <div class="w-full p-5 shadow-md rounded-md group md:w-1/2 lg:w-1/3 bg-rose-600">
                <div class="w-10 h-10 p-2.5 bg-slate-200 shadow-xl block text-center rounded-full justify-center">
                    <span class="my-auto justify-center font-semibold text-center mt-2">{{ $siswa->id }}</span>
                </div>
                <img src="{{ asset('/storage/' . $siswa->image) }}" alt="murid" class="w-40 h-40 rounded-full mx-auto group-hover:scale-110 transition-all duration-300 shadow-xl ">
                <div class="mt-5">
                    <p class="font-semibold text-lg text-white">{{ $siswa->name }}</p>
                    <p class="text-sm ">{!! $siswa->biodata !!}</p>
                    <div class="mt-3 flex justify-end gap-2">
                        @if ($siswa->instagram)
                        <a href="https://www.instagram.com/{{ $siswa->instagram }}" class="text-4xl  hover:text-white" target="_blank"><i class='bx bxl-instagram '></i></a>
                        @endif
                        @if ($siswa->email)
                        <a href="https://www.{{ $siswa->email }}" class="text-4xl  hover:text-slate-300" target="_blank"><i class='bx bx-envelope'></i></i></a>
                        @endif
                        <a href="/dashboard/siswa/edit/{{ $hash->encodeHex($siswa->id) }}" class="btn bg-green-500 text-white hover:bg-green-800">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>  
    @endif


    {{-- Admin Interface --}}
    @if ((Auth::guard('admin')->user()))   
    <div class="mt-10 flex flex-wrap  gap-5">
        <div class="w-full p-5 shadow-md rounded-md group md:w-1/2 lg:w-1/4 bg-rose-600">
            <img src="{{ asset('/storage/murid/default.png' ) }}" alt="murid" class="w-40 h-40 rounded-full mx-auto group-hover:scale-110 transition-all duration-300 shadow-xl ">
            <div class="mt-5">
                <p class="font-semibold text-lg text-center">Jumlah Murid</p>
                <p class="font-semibold text-xl text-center">{{ $siswas->count() }}</p>
            </div>
        </div>

        <div class="w-full p-5 shadow-md rounded-md group md:w-1/2 lg:w-1/4 bg-teal-800">
            <img src="{{ asset('/storage/murid/projects.png' ) }}" alt="murid" class="w-40 h-40 rounded-full mx-auto group-hover:scale-110 transition-all duration-300 shadow-xl ">
            <div class="mt-5">
                <p class="font-semibold text-lg text-center">Jumlah Project</p>
                <p class="font-semibold text-xl text-center">{{ $projects->count() }}</p>
            </div>
        </div>
    </div>  
    @endif

</div>
@endsection