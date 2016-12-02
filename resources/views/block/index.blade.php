@extends('layouts.master')

@section('content')
    <head>
        <meta charset="UTF-8">
        <title>Account</title>
        <link rel="stylesheet" href="/css/block-style.css">

    </head>
    <div class="silo-container">
        <div class="silo-title">
        <h1>Stock blocks</h1>
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
                   <p> {{$block->quantity}} stk.</p>
                    <?php $result= round($block->height * $block->quantity * 1.03 *1.29, 2);
                    $totaal += $result;
                        $alltotaal += $result;?>
                    <p>{{$result}} m³</p>
                  </div>
            @endif
            @endforeach
                @if($totaal != 0)
            <p class="totalBlock">Totale inhoud: <?php echo $totaal ?> m3</p>
            @endif
                <a href="/block/add/{{$value->id}}" class="imgAddIcoon"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
            </div>
                </div>
            @endforeach
        <h5 class="totalAll">TOTAAL: <?php echo $alltotaal ?> m3</h5>
    </div>
@endsection
