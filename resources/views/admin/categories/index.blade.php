@extends('layouts.admin')

@section('page_title', 'Kelola Partner')
@section('page_subtitle', 'Manajemen data partner')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10">

    <div class="flex justify-between items-center mb-8">

        <div>
            <h1 class="text-4xl font-extrabold text-slate-800">
                Manajemen Kategori
            </h1>

            <p class="text-slate-500 mt-2">
                Kelola data kategori website
            </p>
        </div>

        <a href="{{ route('admin.categories.create') }}"
            class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-2xl font-bold shadow-lg transition">

            + Tambah Kategori

        </a>

    </div>

    <!-- Search -->
    <div class="bg-white rounded-3xl shadow p-6 mb-8">

        <form method="GET" class="flex gap-4">

            <input type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari kategori..."
                class="w-full border border-slate-200 rounded-2xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">

            <button type="submit"
                class="px-6 py-3 bg-slate-900 text-white rounded-2xl font-bold hover:bg-black transition">

                Cari

            </button>

        </form>

    </div>

    <!-- Table -->
    <div class="bg-white rounded-3xl shadow overflow-hidden">

        <table class="w-full">

            <thead class="bg-slate-100">

                <tr>

                    <th class="px-6 py-4 text-left">ID</th>
                    <th class="px-6 py-4 text-left">Nama Kategori</th>
                    <th class="px-6 py-4 text-center">Action</th>

                </tr>

            </thead>

            <tbody>

                @forelse($categories as $category)

                <tr class="border-t hover:bg-slate-50 transition">

                    <td class="px-6 py-4">
                        {{ $category->id }}
                    </td>

                    <td class="px-6 py-4 font-semibold">
                        {{ $category->name }}
                    </td>

                    <td class="px-6 py-4">

                        <div class="flex justify-center gap-3">

                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                                class="px-4 py-2 bg-yellow-400 hover:bg-yellow-500 rounded-xl font-bold text-sm">

                                Edit

                            </a>

                            <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-xl font-bold text-sm">

                                    Delete

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="3" class="text-center py-10 text-slate-500">

                        Data kategori belum ada

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection