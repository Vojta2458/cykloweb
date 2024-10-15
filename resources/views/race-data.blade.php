</head>
<title>Data Závodů</title>
<style>
  body { font-family: DejaVu Sans, sans-serif; }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<span class="header">
    Data Závodů
</span>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Název</th>
            <th>Odkaz</th>
            <th>Země</th>
            <th>Typ</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
            <td >{{ $item->id }}</td>
            <td >{{ $item->default_name }}</td>
                <td >{{ $item->link }}</td>
                <td ><span class="fi fi-{{ $item->country }}"></span></td>
                <td >{{ $item->type }}</td>

              
            </tr>
        @endforeach
    </tbody>
    
</table>
<img src="data:image/png;base64,{{ base64_encode(file_get_contents( "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUI4i15pr2Sydm9286IJOizB5ZyuUZhRMT4A&s" )) }}"> 
<h1>GOAT</h1>
</body>