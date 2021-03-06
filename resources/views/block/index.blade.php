@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/block-style.css">

    </head>
    <div class="silo-container" style="margin-top: 30px">
        <div class="silo-title">
        <h1>Stock blocks | HISFA</h1>
             </div>
        <?php $alltotaal=0; ?>
        @foreach($qualitys as $key => $value)
            <div class="block-total">
            <?php $totaal=0; ?>
            <h1>{{$value->name}}</h1>
                <div class="block-container">
            @foreach($allblocks as $block)
                @if($block->stok->id == $value->id)
                  <div class="block-group">
                   <h3> {{$block->height}} m</h3>
                   <p> {{$block->quantity}} blocks</p>
                    <?php $result= round($block->height * $block->quantity * 1.03 *1.29, 2);
                    $totaal += $result;
                        $alltotaal += $result;?>
                    <p>{{$result}} m³</p>
                    
                    <a href="/block/edit/{{$block->id}}" id="edit">Edit</a>
                    
                    <a href="/block/remove/{{$block->id}}" id="delete">Delete</a>
                    
                  </div>
            @endif

            @endforeach

            </div>
                <div class="totalAll2" >
                    @if($totaal != 0)
                        <p class="totalBlock">Total {{$value->name}}:
                            <?php echo $totaal ?> m3</p>
                    @endif
                </div>
                <div id="new-silo" class=silo-stats-stat onclick="window.location.href='/block/add/{{$value->id}}'">
                    <span class="icon-plus glyphicon glyphicon-plus"></span>
                </div>
                </div>
            @endforeach
        <h5 class="totalAll">Total: <?php echo $alltotaal ?> m3</h5>
    </div>
@endsection
