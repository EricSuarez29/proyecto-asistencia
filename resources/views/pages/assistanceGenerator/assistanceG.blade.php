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
                                        <input type="text" id="txtMatter" class="form-control" placeholder="Materia">
                                    </div>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label class="form-control-label" for="input-first-name">Grupo:</label>
                                    <select class="form-control">
                                        <option selected></option>
                                        <option value="">IDGS704</option>
                                        <option value="">EVN704</option>
                                        <option value="">LT704</option>
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
                                    <input class="form-check-input" type="checkbox" value="" id="checkMonday" checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Lunes
                                    </label>
                                </div>
                                <div class="form-check col-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkTuesday"
                                        checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Martes
                                    </label>
                                </div>
                                <div class="form-check col-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkWednesday"
                                        checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Miércoles
                                    </label>
                                </div>
                                <div class="form-check col-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkThursday"
                                        checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Jueves
                                    </label>
                                </div>
                                <div class="form-check col-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkFriday" checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Viernes
                                    </label>
                                </div>
                                <div class="form-check col-2">
                                    <input class="form-check-input" type="checkbox" value="" id="checkSaturday"
                                        checked>
                                    <label class="form-control-label" for="flexCheckChecked">
                                        Sábado
                                    </label>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="txtDayMonday" class="form-control" placeholder="dia">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="txtDayTuesday" class="form-control" placeholder="dia">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="txtDayWednesday" class="form-control"
                                            placeholder="dia">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="txtDayThursday" class="form-control"
                                            placeholder="dia">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="txtDayFriday" class="form-control" placeholder="dia">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <input type="text" id="txtDaySaturday" class="form-control"
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
                                                id="textCourseStartDate" value="">
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
                                                type="textCourseEndDate" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-lg-6 form-group">
                                    <label class="form-control-label" for="input-first-name">Tipo de periodo:</label>
                                    <select class="form-control">
                                        <option selected></option>
                                        <option value="Cuatrimestre">Cuatrimestre</option>
                                        <option value="Semestre">Semestre</option>
                                        <option value="Ciclo anual">Ciclo anual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row " style="margin-left: 1px;">
                                <div style="color:#5e72e4;">
                                    <label class="form-control-label">Parciales:</label>
                                </div>
                            </div>
                            <div class="row" style="margin-left: 12px;">
                                <div class="input-daterange datepicker row align-items-center">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">1</span>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Inicio</span>
                                            </div>
                                            <input class="form-control" placeholder="Fecha inicio" type="text"
                                                id="txtPartialOne" value="">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Fin</span>
                                                </div>
                                                <input class="form-control" placeholder="Fecha fin" type="text"
                                                    id="txtPartialEndOne" value="">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-daterange datepicker row align-items-center">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">2</span>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Inicio</span>
                                            </div>
                                            <input class="form-control" placeholder="Fecha inicio" type="text"
                                                id="txtPartialTwo" value="">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Fin</span>
                                                </div>
                                                <input class="form-control" placeholder="Fecha fin" type="text"
                                                    id="txtPartialEndTwo" value="">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-daterange datepicker row align-items-center">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">3</span>
                                            </div>
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Inicio</span>
                                            </div>
                                            <input class="form-control" placeholder="Fecha inicio" type="text"
                                                id="txtPartialThree" value="">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Fin</span>
                                                </div>
                                                <input class="form-control" placeholder="Fecha fin" type="text"
                                                    id="txtPartialEndThree" value="">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row " style="margin-left: 1px;">
                                <div style="color:#5e72e4;">
                                    <label class="form-control-label">Periodo vacacional intermedio:</label>
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
                                                id="txtHolidayPeriodI" value="">
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
                                                id="txtHolidayPeriodIEnd" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row " style="margin-left: 1px;">
                                <div style="color:#5e72e4;">
                                    <label class="form-control-label">Día(s) Inhabil(es)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class='col-12'>
                                    <div class="table-responsive">
                                        <table class="table table-hover align-items-center table-flush text-center">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th scope="col" class="sort" data-sort="name">Fecha</th>
                                                    <th scope="col" class="sort" data-sort="budget">Descripcción
                                                    </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div class="input-daterange datepicker row align-items-center">
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input class="form-control" placeholder="Fecha" type="text"
                                                            id="fechaInabilOne" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input class="form-control" type="text"
                                                            placeholder="Descripcción" id="fechaInabilOneEnd"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-daterange datepicker row align-items-center">
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input class="form-control" placeholder="Fecha" type="text"
                                                            id="fechaInabilTwo" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input class="form-control" type="text"
                                                            placeholder="Descripcción" id="fechaInabilOneTwoEnd"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-daterange datepicker row align-items-center">
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input class="form-control" placeholder="Fecha" type="text"
                                                            id="fechaInabilThree" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <input class="form-control" type="text"
                                                            placeholder="Descripcción" id="fechaInabilThreeEnd"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type='hidden' name='id' id="id">
                    </form>
                </div>
                <div class='text-center my-3'>
                    <button type="button" class="btn btn-outline-default">Guardar</button>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
