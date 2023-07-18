@extends('dashboard.layout.layout')
@section('content')
    <div class="container">
        <p class="text-3xl font-semibold mb-5">Daftar Murid....</p>
        <a href="/dashboard/murid/tambah" class="btn bg-primary text-white font-semibold hover:bg-reddark">Tambah Murid</a>
        
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                   Name
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswas as $siswa)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                    {{ $loop->iteration }}
                </th>
                <td class="px-6 py-4">
                    {{ $siswa->name }}
                </td>
                <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                    {{ $siswa->email }}
                </td>
                <td class="px-6 py-4">
                    <a href="/dashboard/siswa/edit/{{ $hash->encodeHex($siswa->id) }}"><i class="bx bx-edit text-xl text-green-400 hover:text-green-800"></i></a>
                    <form action="/dashboard/murid/{{ $siswa->id }}" method="post" class="inline">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="confirm('yakin mau hapus?')" ><i class="bx bx-trash text-xl text-red-500 hover:text-red-700"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

    </div>
@endsection