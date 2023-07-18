@extends('layout.main')
@section('content')

<section class="">
    <div class="w-full h-full bg-[url('/public/img/landing-page/us2.jpg')] bg-cover bg-center bg-fixed backdrop-filter backdrop-blur-lg shadow-xl"> 
        <div class="container py-72">
            <h2 class="text-center text-4xl  md:text-6xl font-bold text-slate-100 ">Project XI PPLG 2</h2>
            <p class="text-center max-w-lg mx-auto text-xl md:text-2xl text-slate-100 font-medium mt-5">Ayo lihat project yang telah kami selesaikan dengan penuh semangat dan kerja keras.</p>
        </div>
    </div>

</section>

<div class="container pt-20 box-border">
    <div>
        <p class="text-2xl font-bold text-reddark">Project Kami XI PPLG 2.....</p>
    </div>
        <form action="{{ route('search') }}" method="get" class="my-5">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Cari judul project, deskripsi project" autocomplete="off" name="search">
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
            </div>
        </form>
        
    <div class="flex flex-wrap gap-y-4  justify-evenly">
        @foreach ($projects as $project)     
            <div class="w-full shadow-lg md:w-1/2 lg:w-1/4 relative group rounded-md overflow-hidden">
                <div class="w-full h-44">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="img-project" class="w-full h-full bg-cover bg-center group-hover:scale-110 transition-all duration-200">
                </div>
                <div class="p-5 pb-10 ">
                    <p class="font-bold text-lg">{{ $project->sistem }}</p>
                    <p class="font-semibold text-sm">Pembuat : {{ $project->user->name }}</p>
                    <p class="mb-5 mt-2 text-sm">{{ $project->keterangan }}</p>          
                </div>
                <div class="absolute bottom-2 left-2    ">
                    <a href="{{ $project->link }}" class="btn bg-primary text-white hover:bg-reddark ">Lihat</a>
                    @if ($project->vidio)
                    <!-- Modal toggle -->
                    <button data-modal-target="defaultModal-{{$project->id }}" data-modal-toggle="defaultModal-{{$project->id }}" class="inline text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-800" type="button">
                        Panduan
                    </button>
                    
                    <!-- Main modal -->
                    <div id="defaultModal-{{ $project->id }}" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Panduan {{ $project->sistem }}
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-10">
                                    <iframe class="w-full h-96" src="{{ $project->vidio }}" type="video/mp4">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        @endforeach

</div>
@endsection