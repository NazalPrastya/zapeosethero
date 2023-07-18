@extends('dashboard.layout.layout')
@section('content')
    <div class="container">
        <p class="text-3xl font-semibold mb-5"> Project </p>

        <a href="{{ route('tambah-project') }}" class="btn bg-primary text-white font-semibold hover:bg-reddark">Tambah Project</a>
        <div class="flex flex-wrap gap-y-4 justify-start mt-5">
            @foreach ($projects as $project)             
            <div class="w-full shadow-lg md:w-1/2 lg:w-1/4 relative group rounded-md overflow-hidden">
                <div class="w-full h-44">
                <img src="{{ asset('storage/' . $project->image) }}" alt="" class="w-full h-full bg-cover bg-center group-hover:scale-110 transition-all duration-200">
                    
                {{-- <iframe class="" src="https://www.youtube.com/embed/urtvpt08EJY" type="video/mp4">
                </iframe> --}}
  
                </div>
                <div class="p-5 pb-10 ">
                    <p class="font-bold text-lg">{{ $project->sistem }}</p>
                    <p class="font-semibold text-sm">Pembuat : {{ $project->user->name }}</p>
                    <p class="mt-2 text-sm">{{ $project->keterangan }}</p>          
                </div>
                <div class="mb-5 text-center">
                    <a href="{{ $project->link }}" class="btn bg-primary text-white hover:bg-reddark" target="_blank">Lihat</a>
                    <a href="/dashboard/project/{{ $hash->encodeHex($project->id) }}/edit" class="btn bg-green-400 text-white hover:bg-green-800">Edit</a>
                    
                    
                    <!-- Modal toggle -->
                    <button data-modal-target="defaultModal-{{ $project->id }}" data-modal-toggle="defaultModal-{{ $project->id }}" class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-blue-800" type="button">
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
                                <div class="p-6 space-y-6">
                                    @if ($project->vidio)
                                    <iframe class="w-full h-96" src="{{ $project->vidio }}" type="video/mp4">
                                    @else
                                    <h1>Panduan Belum Dimasukan</h1>
                                    <a href="/dashboard/project/{{ $hash->encodeHex($project->id) }}/edit" class=" underline text-blue-600">Tambah Link</a>
                                    @endif
                                </iframe>
                                </div>
                            </div>
                        </div>
                    </div>

  
                    <form action="{{ route('deleteProject', $project->id) }}" method="post" class="inline">
                        @csrf
                        @method('delete')
                        <button class="btn bg-red-600 hover:bg-red-800 text-white"><i class="bx bx-trash"></i></button>
                    </form>
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection