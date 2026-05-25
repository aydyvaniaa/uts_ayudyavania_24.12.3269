@extends('layouts.admin')

@section('page_title', 'Kelola Partner')
@section('page_subtitle', 'Manajemen data partner')

@section('content')

<div class="max-w-7xl mx-auto px-6 py-10">

    <div class="flex justify-between items-center mb-8">

        <div>
            <h1 class="text-4xl font-extrabold text-slate-800">
                Manajemen Partner
            </h1>

            <p class="text-slate-500 mt-2">
                Kelola data partner website
            </p>
        </div>

        <a href="{{ route('admin.partners.create') }}"
            class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-2xl font-bold shadow-lg transition">

            + Tambah Partner

        </a>

    </div>

    <!-- Search -->
    <div class="bg-white rounded-3xl shadow p-6 mb-8">

        <form method="GET" class="flex gap-4">

            <input type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari partner..."
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
                    <th class="px-6 py-4 text-left">Nama Partner</th>
                    <th class="px-6 py-4 text-left">Logo</th>
                    <th class="px-6 py-4 text-center">Action</th>

                </tr>

            </thead>

            <tbody>

                @forelse($partners as $partner)

                <tr class="border-t hover:bg-slate-50 transition">

                    <td class="px-6 py-4">
                        {{ $partner->id }}
                    </td>

                    <td class="px-6 py-4 font-semibold text-slate-700">
                        {{ $partner->name }}
                    </td>

                    <td class="px-6 py-4">

                        <img src="{{ $partner->logo_url }}"
                            alt="Logo Partner"
                            class="w-20 h-20 object-cover rounded-2xl border border-slate-200 shadow-sm">

                    </td>

                    <td class="px-6 py-4">

                        <div class="flex justify-center gap-3">

                            <a href="{{ route('admin.partners.edit', $partner->id) }}"
                                class="px-4 py-2 bg-yellow-400 hover:bg-yellow-500 rounded-xl font-bold text-sm transition">

                                Edit

                            </a>

                            <form action="{{ route('admin.partners.destroy', $partner->id) }}"
                                method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-xl font-bold text-sm transition">

                                    Delete

                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td colspan="4"
                        class="text-center py-10 text-slate-500">

                        Data partner belum ada

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection