@extends('layouts.new')

@section('title', 'My Child Page')

@section('sidebar')
    @@parent
    <p>This is sidebar in child and it is appended.</p>
@endsection
    
@section('content')
    <div>
        <p>This is child content</p>
    </div>
    
@endsection