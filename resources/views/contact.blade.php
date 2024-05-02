@extends('master')

@section('contect')
    <h1>Contact 1</h1>
    <p>{{ $name }}</p>

    @if ($name != "Gonzalo")
        Tu nombre no es Gonzalo        
    @else
        <h2>Tu nombre es Gonzalo</h2>
    @endif

    <ul>
        @foreach ([1,2,3,4,5] as $item)
            <li>
                {{ $item }}
            </li>
        @endforeach
    </ul>
@endsection