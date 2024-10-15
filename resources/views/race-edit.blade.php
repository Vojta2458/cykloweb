@extends('layouts.app2')
@section('content')

<div class="container mx-auto px-4">
    <h1 class="text-3xl py-4 border-b mb-10">Editace závodu {{ $race->default_name }}</h1>

    <form method="POST" action="/raceupdate/{{ $race->id }}" class="bg-white bg-accent-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="default_name">
                Název:
            </label>
            <input class="bg-accent appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-accent-outline" id="default_name" name="default_name" type="text" value="{{ $race->default_name }}">
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="link">
                Odkaz:
            </label>
            <input class="bg-accent appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-accent-outline" id="link" name="link" type="text" value="{{ $race->link }}" required>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="country">
                Země:
            </label>
            <input class="bg-accent appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-accent-outline" id="country" name="country" type="text" value="{{ $race->country }}" required>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="type">
                Typ:
            </label>
            <input class="bg-accent appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:bg-accent-outline" id="type" name="type" type="text" value="{{ $race->type }}" required>
        </div>

        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:bg-accent-outline" type="submit">
                Uložit
            </button>
        </div>
    </form>
</div>
@endsection