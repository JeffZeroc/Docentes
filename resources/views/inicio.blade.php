@extends('layouts.app')

@section('title', 'Inicio')



@section('content')

    <div class="row justify-content-center">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container" style="width: 65%;">
                        <img src="{{ asset('img/SGRD.png') }}" height=""  class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
    @endsection


    @section('script')
        <!-- Page level custom scripts -->



    @endsection
