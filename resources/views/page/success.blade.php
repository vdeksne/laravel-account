@extends('layout.default')

@section('content')
<div class="container flex flex-col md:flex-row flex-wrap my-6 font-bold
    lg:mt-8  text-3xl">
    <h1 class="text-gray-900 page-title title-font">
        <span class="base" data-ui-id="page-title-wrapper">Hello, {{ $first_name ?? '' }} {{ $last_name ?? ''  }}! </span>
    </h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button data-test="logout" type="submit" class="btn btn-primary">Logout</button>
    </form>
</div>
@stop