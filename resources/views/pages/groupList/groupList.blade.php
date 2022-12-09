@extends('layouts.app')

@selection('title','Listado de Grupos')

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
                            <li class="breadcrumb-item"><a href="{{ route('groupList') }}">Lista de grupos</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('groupList') }}" class="btn btn-neutral">Nuevo</a>
                </div>
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
                <h3 class="mb-0">Listado de Grupos</h3>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="career">Carrera</th>
                            <th scope="col" class="sort" data-sort="groupNumber">Nùmero de grupo</th>
                            <th scope="col" class="sort" data-sort="numberStudents">Nùm. Alumnos</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        <tr>
                            <td>
                                <span class="name mb-0 text-sm">    </span>
                            </td>
                            <td class="budget">
                                
                            </td>
                            <td class="budget">
                                
                            </td>
                            <td>
                                <a 
                                {{-- href="{{ route('groupList.show', 'hola' ) }}" --}}
                                 class='btn btn-outline-primary btn-sm'>
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

