@extends('layouts.app')

@selection('title', 'Grupos')

@section('header')
    <div class="header bg-default pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fas fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('savedGroups') }}">Asistencias de grupos</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    {{-- <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('groupList') }}" class="btn btn-neutral">Nuevo</a>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('main')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <div class="text-white">
                        <a href="#" class="btn " >
                            <i class="fa-light fa-filter-list"></i>
                        </a>
                        <div  style="text-align: right">
                            <a href="{{ route('assistanceGenerator') }}" class="btn btn-outline-default">
                            <i class="fa-regular fa-circle-plus">Nueva lista</i>
                        </a>
                        </div>
                    </div>                    
                </div>
                <div class="container-fluid ">
                <div class="row">
                <div class='col-lg-4'>
                    <div class="card" >
                        <div class="card-body" style="background-color: #172b4d">
                            <div class="text-white" style="text-align: right">
                                <a href="#" class="btn " >
                                    <i class="fa-solid fa ellipsis"></i>
                                </a>
                            </div>
                                <div class="pl-lg-2">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <a href="#" class="btn " >
                                                <span class="h1 text-white">IDGS704</span><br>
                                                <span class="h1 text-white">ARQ</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4'>
                    <div class="card" >
                        <div class="card-body" style="background-color: #172b4d ">
                            <div class="text-white" style="text-align: right">
                                <a href="#" class="btn " >
                                    <i class="fa-solid fa ellipsis"></i>
                                </a>
                            </div>
                                <div class="pl-lg-2">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <a href="#" class="btn " >
                                                <span class="h1 text-white">EVN704</span><br>
                                                <span class="h1 text-white">SEG</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4'>
                    <div class="card" >
                        <div class="card-body" style="background-color: #172b4d">
                            <div class="text-white" style="text-align: right">
                                <a href="#" class="btn " >
                                    <i class="fa-solid fa ellipsis"></i>
                                </a>
                            </div>
                                <div class="pl-lg-2">
                                    <div class="row">
                                        <div class="col-lg-12 text-center">
                                            <a href="#" class="btn " >
                                                <span class="h1 text-white">LT704</span><br>
                                                <span class="h1 text-white">ADM</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                    </div>
                </div>
            </div>
        @endsection
