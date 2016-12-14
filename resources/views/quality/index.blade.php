@extends('layouts.master')

@section('content')
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/quality-style.css">
    <title>Quality | HISFA</title>
</head>
   
<body>
    <div class="container">
        <h1>Quality | HISFA</h1>
        
        <div class="blockTotal">
            <div class="row">
            @foreach ($data as $qualities)
               <div class="blockList">
                    <li class="qualityList">
                        <h1>{{ $qualities->name }}</h1>
                        <p id="txtHard">Hardness: {{ $qualities->hardness }}</p>
                        <a href="/quality/edit/{{$qualities->id}}" id="edit">Edit</a>
                        <a href="/quality/remove/{{$qualities->id}}" id="delete">Delete</a>
                    </li>
                    
                    
                </div>
                @endforeach
             </div> 
             <div id="new-silo" class=silo-stats-stat onclick="window.location.href='/quality/add'">
                <span class="icon-plus glyphicon glyphicon-plus"></span>
                </div>  
        </div>
    </div>
    
    
     

    
</body>
    
            
            
        
        
        
        </div>
@endsection