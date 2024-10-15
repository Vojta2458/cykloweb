@extends('layouts.app2')

@section('content')


<br><br><br><br>

<div class="flex justify-center items-center">
    <div class="max-w-md w-full bg-white shadow-lg rounded-lg overflow-hidden">
        <img src="{{ asset('obrazky/rider/' . $data->photo) }}" alt="card-image" class="object-cover w-full h-full" />
        <div class="p-6">
            <h6 class="text-lg font-semibold text-gray-800">{{ $data->first_name }} {{ $data->last_name }}</h6>
            <p class="text-gray-600 mt-2">
                <span class="font-medium">Datum narození:</span> {{ $data->date_of_birth }} <br>
                <span class="font-medium">Místo narození:</span> {{ $data->place_of_birth }} <br>
                <span class="font-medium">Váha:</span> {{ $data->weight }} kg<br>
                <span class="font-medium">Výška:</span> {{ $data->height }} cm<br>
            </p>
            <div class="mt-6">
                <a href="/riders" class="btn btn-primary bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                    Vrátit zpět
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="inline w-4 h-4 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="flex justify-center items-center mt-10">
    <h4 class="block mb-2 text-2xl font-semibold text-blue-gray-900">Výsledky závodů</h4>
</div>

<div class="overflow-x-auto">
    <table class="table w-full table-striped">
        <thead>
            <tr>
                <th>Číslo Etapy</th>
                <th>Datum</th>
                <th>Vzdálenost</th>
                <th>Název závodu</th>
                <th>Pozice</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stagesData as $stage)
            <tr>
                <td>{{ $stage->stage_number }}</td>
                <td>{{ $stage->date }}</td>
                <td>{{ $stage->distance }} km</td>
                <td>{{ $stage->race_name }}</td>
                <td>{{ $stage->rank }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $stagesData->links() }}
</div>




@endsection