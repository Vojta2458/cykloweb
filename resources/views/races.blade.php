@extends('layouts.app2')
@section('content')


<br>
@if (session('success'))
    <br>
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <br>
    <br>
@endif

@if (session('error'))
    <br>
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    <br>
    <br>
@endif

@if($data->isEmpty())
    <p>Nebyly nalezené žádné závody</p>
@else
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2 text-left">ID</th>
                <th class="px-4 py-2 text-left">Název</th>
                <th class="px-4 py-2 text-left">Odkaz</th>
                <th class="px-4 py-2 text-left">Země</th>
                <th class="px-4 py-2 text-left">Typ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $race)
                <tr>
                    <td class="border px-4 py-2">{{ $race->id }}</td>
                    <td class="border px-4 py-2">{{ $race->default_name }}</td>
                    <td class="border px-4 py-2">{{ $race->link }}</td>
                    <td class="border px-4 py-2"><span class="fi fi-{{ $race->country }}"></span></td>
                    <td class="border px-4 py-2">{{ $race->type }}</td>
                    @auth
                    <td class="border px-4 py-2"><form method="POST" action="/delete/{{ $race->id }}">
    @csrf
    @method('DELETE')
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" type="submit" id="deleteButton">Smazat</button>
</form></td>
                    <td class="border px-4 py-2"><a href="/{{ $race->default_name }}/{{ $race->id }}/edit" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">Editovat</a></td>
                   @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
<br>


      
      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
{{ $data->links() }}
@endsection