@extends('layouts.Dashboard')

@section('dashboard')
<div class="pb-10">
    <h1 class="text-2xl font-semibold text-gray-900 dark:text-white">Edit Jenis</h1>
</div>

<div class="bg-white shadow-md sm:rounded-lg p-6 dark:bg-gray-800">
    <form method="POST" action="{{ route('jenis.update', $jenis->id) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nama_jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Jenis</label>
            <input type="text" name="nama_jenis" id="nama_jenis" value="{{ $jenis->nama_jenis }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
        </div>

        <div>
            <label for="kode_jenis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Jenis</label>
            <input type="text" name="kode_jenis" id="kode_jenis" value="{{ $jenis->kode_jenis }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
        </div>

        <div>
            <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>{{ $jenis->keterangan }}</textarea>
        </div>

        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update Jenis</button>
    </form>
</div>
@endsection
