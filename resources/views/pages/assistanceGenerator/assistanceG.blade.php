@extends('layouts.app')

@selection('title', 'Listas')

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
                                <li class="breadcrumb-item"><a href="{{ route('assistanceGenerator') }}">Generar
                                        Asistencia</a></li>
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
                            <h3 class="mb-0">Lista de asistencia</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="pl-lg-4">
                            <div style="color:#5e72e4;">
                                <i class="fa-light fa-gear"></i>
                                <label class="form-control-label">Datos Curso</label>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Materia:</label>
                                        <input type="text" id="se" class="form-control" placeholder="Materia">
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="form-control-label" for="input-first-name">Grupo:</label>
                                    <select class="form-control">
                                        <option selected></option>
                                        <option value="1">IDGS704</option>
                                        <option value="2">EVN704</option>
                                        <option value="3">LT704</option>
                                    </select>
                                </div>
                            </div>
                            <div style="color:#5e72e4;">
                                <i class="fa-light fa-gear"></i>
                                <label class="form-control-label">Datos de fecha</label>
                            </div>
                            <div style="color:#5e72e4;">
                                <label class="form-control-label">Datos de clase</label>
                            </div>
                            <div class="row " style="margin-left: 8px;">
                                <div class="form-check col-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Lunes
                                    </label>
                                </div>
                                <div class="form-check col-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Martes
                                    </label>
                                </div>
                                <div class="form-check col-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Miércoles
                                    </label>
                                </div>
                                <div class="form-check col-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Jueves
                                    </label>
                                </div>
                                <div class="form-check col-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Viernes
                                    </label>
                                </div>
                                <div class="form-check col-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Sábado
                                    </label>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="input-last-name" class="form-control" placeholder="dia">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="input-last-name" class="form-control"
                                            placeholder="dia">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="input-last-name" class="form-control"
                                            placeholder="dia">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="input-last-name" class="form-control"
                                            placeholder="dia">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="input-last-name" class="form-control"
                                            placeholder="dia">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="input-last-name" class="form-control"
                                            placeholder="dia">
                                    </div>
                                </div>
                            </div>
                            <div class="row " style="margin-left: 1px;">
                                <div style="color:#5e72e4;">
                                    <label class="form-control-label">Intervalo del periodo del curso</label>
                                </div>
                            </div>
                            <div class="input-daterange datepicker row align-items-center">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Fecha inicio" type="text"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input class="form-control" placeholder="Fecha fin" type="text"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-lg-6 form-group">
                                    <label class="form-control-label" for="input-first-name">Tipo de periodo:</label>
                                    <select class="form-control">
                                        <option selected></option>
                                        <option value="1">Cuatrimestre</option>
                                        <option value="2">Semestre</option>
                                        <option value="3">Ciclo anual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row " style="margin-left: 1px;">
                                <div style="color:#5e72e4;">
                                    <label class="form-control-label">Parciales:</label>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 1px;">
                                <div class="input-daterange datepicker row align-items-center">
                                    <div class="col">
                                        <div class="form-group">
                                            <div class="input-group">
                                                    <input class="form-control col-3" type="text" value="">
                                                <input class="form-control" placeholder="Fecha inicio" type="text" value="">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                    <input class="form-control col-3" type="text" value="">
                                                <input class="form-control" placeholder="Fecha inicio" type="text" value="">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <input type='hidden' name='id' id="id">
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
