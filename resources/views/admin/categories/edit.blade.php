@extends('layouts.admin')

@section('page_title', 'Kelola Partner')
@section('page_subtitle', 'Manajemen data partner')

@section('content')

<div class="max-w-2xl mx-auto px-6 py-10">

    <div class="bg-white rounded-3xl shadow p-8">

        <h1 class="text-3xl font-extrabold mb-8">
            Edit Kategori
        </h1>

        <form action="{{ route('admin.categories.update', $category->id) }}"
            method="POST"
            class="space-y-6">

            @csrf
            @method('PUT')

            <div>

                <label class="block mb-2 font-bold">
                    Nama Kategori
                </label>

                <input type="text"
                    name="name"
                    value="{{ $category->name }}"
                    class="w-full border border-slate-200 rounded-2xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">

            </div>

            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-4 rounded-2xl font-bold transition">

                Update Kategori

            </button>

        </form>

    </div>

</div>

@endsection