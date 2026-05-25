@extends('layouts.admin')

@section('page_title', 'Kelola Partner')
@section('page_subtitle', 'Manajemen data partner')

@section('content')

<div class="max-w-2xl mx-auto px-6 py-10">

    <div class="bg-white rounded-3xl shadow p-8">

        <h1 class="text-3xl font-extrabold text-slate-800 mb-8">
            Tambah Partner
        </h1>

        <form action="{{ route('admin.partners.store') }}"
            method="POST"
            class="space-y-6">

            @csrf

            <div>

                <label class="block mb-2 font-bold text-slate-700">
                    Nama Partner
                </label>

                <input type="text"
                    name="name"
                    placeholder="Masukkan nama partner"
                    class="w-full border border-slate-200 rounded-2xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">

            </div>

            <div>

                <label class="block mb-2 font-bold text-slate-700">
                    Logo URL
                </label>

                <input type="text"
                    name="logo_url"
                    placeholder="Masukkan link logo"
                    class="w-full border border-slate-200 rounded-2xl px-5 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">

            </div>

            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-4 rounded-2xl font-bold transition">

                Simpan Partner

            </button>

        </form>

    </div>

</div>

@endsection