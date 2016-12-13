@extends('layouts.master')

@section('content')
<head>
    <meta charset="UTF-8">
    <title>Add recyclesilo | HISFA</title>
    <link rel="stylesheet" href="/css/form-add-style.css">
</head>

<body>
    <div class=container>
        <div class="row">
            <div class="panel panel-default" id="formAdd">
                <h1>add</h1>
                <h3>recyclesilo</h3>
                
                <form class="addForm" role="form" id="editInBlock" method="POST" action="">
                    {{ csrf_field() }}
                    
                    <div class="totalAdd">
                        <label for="textName">
                            Silonr°:
                        </label>
                        <input type="number" min="1" class="form-control" id="textName" name="textName" placeholder="1" required="">
                    </div>

                    <div class="totalAdd">
                        <label for="txtHardheid">
                            Hardness:
                        </label>
                        <select name="txtHardheid" id="txtHardheid">
                            <option value="Soft">
                                Soft
                            </option>
                            <option value="Medium">
                                Medium
                            </option>
                            <option value="Hard">
                                Hard
                            </option>
                        </select>
                    </div>

                    <div class="totalAdd">
                        <button type="submit" id="CreateMaterialbutton" name="CreateMaterialbutton" class="btn btn-primary" aria-label="">
                            save
                        </button>
                    </div>
                
                </form>
            </div>
        </div>
    </div>
</body>
@endsection

