@extends('layouts.app')

@selection('title', 'Grupo')

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
                                <li class="breadcrumb-item"><a href="{{ route('group') }}">Grupos</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('main')
    <div class='row justify-content-center'>
        <div class='col-lg-12'>
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Grupo</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        @csrf
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Carrera</label>
                                        <input type="text" id="se" class="form-control"
                                            placeholder="Carrera">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Número de grupo</label>
                                        <input type="text" id="input-last-name" class="form-control"
                                            placeholder="Número de grupo">
                                    </div>
                                </div>
                                </div>
                                <input type='hidden' name='id' id="id">
                            </div>
                        </div>
                    </form>
                    <div class='row justify-content-center'>
                    <div class='col-lg-4'>
                        <div class="card" style="margin-left: 30px;">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Alumnos</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    @csrf
                                    <div class="pl-lg-2">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-first-name">Nombre</label>
                                                    <input type="text" id="input-first-name" class="form-control"
                                                        placeholder="Nombre">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-last-name">Apellido Paterno</label>
                                                    <input type="text" id="input-last-name" class="form-control"
                                                        placeholder="Apellido Paterno">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-last-name">Apellido Materno</label>
                                                    <input type="text" id="input-last-name" class="form-control"
                                                        placeholder="Apellido Materno">
                                                </div>
                                            </div>
                                            <input type='hidden' name='id' id="id">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class='col-lg-8'>
                        <div class="card" style="margin-right: 30px;">
                            <div class="card-header border-0">
                                <h3 class="mb-0 text-center">Listado de Alumnos</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col" class="sort" data-sort="name">Nombre</th>
                                            <th scope="col" class="sort" data-sort="budget">Apellidos</th>
                                            <th scope="col" class="sort" data-sort="status">Estatus</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td>
                                                <span class="name mb-0 text-sm"></span>
                                            </td>
                                            <td class="budget">
                                                
                                            </td>
                                            <td>
                                                <span class="badge badge-dot mr-4">
                                                    <i class="bg-success"></i>
                                                    <span class="status"></span>
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('teachers.show', 'hola') }}" class='btn btn-outline-primary btn-sm'>
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class='text-center my-3'>
                        <button type="button" class="btn btn-outline-default">Guardar</button>
                    </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
