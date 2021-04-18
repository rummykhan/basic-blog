@extends('layouts.admin-layout')



@section('content')

    Welcome {{ auth()->user()->name }}!

@endsection
