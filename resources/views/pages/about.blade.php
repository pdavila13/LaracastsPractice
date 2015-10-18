@extends('app')

@section('content')

    <h1>About</h1>

    <h3>People I Like:</h3>

    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>



    <p>
        Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non
        metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec
        elit. Donec ullamcorper nulla non metus auctor fringilla.
    </p>

@stop