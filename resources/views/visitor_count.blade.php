
@extends('frontend.main_master')

@section('index')
<head>
    <title>Visitor Count</title>
</head>
<body>
    @foreach ($visitorsPerProject as $visitor)
        <li>{{ $visitor->project }}: {{ $visitor->count }}</li>
    @endforeach
</body>
@endsection
