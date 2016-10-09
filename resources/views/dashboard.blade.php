<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HISFA -- Dashboard</title>
</head>
<body>
@foreach($primesilo as $k => $v)
    {{ $k }}
    @foreach ($v as $key => $value)
        {{ $key . ' => ' . $value }}
    @endforeach
@endforeach
</body>
</html>