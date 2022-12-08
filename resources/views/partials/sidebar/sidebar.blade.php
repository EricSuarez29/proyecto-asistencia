@php
$routes = [
[
'label' => 'Dashboard',
'routeName' => 'dashboard',
'icon' => 'ni ni-tv-2',
'color' => 'text-primary',
],
[
'label' => 'Listas de Asistencia',
'routeName' => 'attendanceList',
'icon' => 'fa-duotone fa-square-list', 
'color' => 'text-default',
],
[
'label' => 'Asistencias de grupos',
'routeName' => 'savedGroups',
'icon' => 'fa-duotone fa-square-list', 
'color' => 'text-default',
],
[
'label' => 'Maestros',
'routeName' => 'teachers.index',
'icon' => 'ni ni-single-02',
'color' => 'text-yellow',
],
[
'label' => 'Grupos',
'routeName' => 'group',
'icon' => 'fas fa-users',
'color' => 'text-info',
],
// [
// 'label' => 'Alumnos',
// 'routeName' => 'pupils',
// 'icon' => 'ni ni-planet',
// 'color' => 'text-orange',
// ]*/
];
@endphp

<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">

        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="../assets-old/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">

            <div class="collapse navbar-collapse" id="sidenav-collapse-main">

                <ul class="navbar-nav">
                    @foreach ($routes as $route)

                    @include('partials.sidebar.nav-item', $route)

                    @endforeach
                </ul>

                <hr class="my-3">

            </div>
        </div>
    </div>
</nav>