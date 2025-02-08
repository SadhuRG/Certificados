<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
@extends('layouts.layout')

@section('title', 'Sistema de Gestion de Aulas y Horarios')

@section('content')

<div class="min-h-screen flex flex-col">

<!-- SECCIÓN PREINTERMEDIA -->
 
<div id="main-content" class="transition-all duration-300">



<div class="min-h-screen flex flex-col">

        @include('partials.header')

        <div class="pt-24">

            <!-- SECCIÓN INTERMEDIA -->
            <section class="flex flex-1 h-full">
                <!-- Sección 1/5 - Menú Lateral -->
                <div class="w-1/5 bg-white flex flex-col py-2 space-y-1 fixed top-24 bottom-0 overflow-y-auto">
                    <!-- Botón Dashboard -->
                    <div class="flex items-center">
                        <div class="w-2 h-12 bg-[#9636AD] rounded-r-lg"></div>
                        <button class="bg-[#9636AD] hover:bg-[#3553A2] h-12 flex-1 flex items-center justify-center space-x-2 group active-nav-button rounded-lg mx-7"
                            onclick="showSection('dashboard')" data-section="dashboard">
                            <h1 class="text-center text-white hidden md:block lg:text-lg">
                                Dashboard
                            </h1>
                        </button>
                    </div>

                    <!-- Botón Certificados -->
                    <div class="flex items-center">
                        <div class="w-2 h-12 bg-white rounded-r-lg"></div>
                        <button class="bg-white hover:bg-[#CF93DD] h-12 flex-1 flex items-center justify-center space-x-2 group nav-button rounded-lg mx-7"
                            onclick="showSection('certificados')" data-section="certificados">
                            <h1 class="text-center text-black hidden md:block lg:text-lg">
                                Certificados
                            </h1>
                        </button>
                    </div>

                    <!-- Botón Grupos -->
                    <div class="flex items-center">
                        <div class="w-2 h-12 bg-white rounded-r-lg"></div>
                        <button class="bg-white hover:bg-[#CF93DD] h-12 flex-1 flex items-center justify-center space-x-2 group nav-button rounded-lg mx-7"
                            onclick="showSection('grupos')" data-section="grupos">
                            <h1 class="text-center text-black hidden md:block lg:text-lg">
                                Grupos
                            </h1>
                        </button>
                    </div>

                    <!-- Botón Personas -->
                    <div class="flex items-center">
                        <div class="w-2 h-12 bg-white rounded-r-lg"></div>
                        <button class="bg-white hover:bg-[#CF93DD] h-12 flex-1 flex items-center justify-center space-x-2 group nav-button rounded-lg mx-7"
                            onclick="showSection('personas')" data-section="personas">
                            <h1 class="text-center text-black hidden md:block lg:text-lg">
                                Personas
                            </h1>
                        </button>
                    </div>

                    <!-- Botón Usuarios -->
                    <div class="flex items-center">
                        <div class="w-2 h-12 bg-white rounded-r-lg"></div>
                        <button class="bg-white hover:bg-[#CF93DD] h-12 flex-1 flex items-center justify-center space-x-2 group nav-button rounded-lg mx-7"
                            onclick="showSection('usuarios')" data-section="usuarios">
                            <h1 class="text-center text-black hidden md:block lg:text-lg">
                                Usuarios
                            </h1>
                        </button>
                    </div>

                    <!-- Botón Plantillas -->
                    <div class="flex items-center">
                        <div class="w-2 h-12 bg-white rounded-r-lg"></div>
                        <button class="bg-white hover:bg-[#CF93DD] h-12 flex-1 flex items-center justify-center space-x-2 group nav-button rounded-lg mx-7"
                            onclick="showSection('plantillas')" data-section="plantillas">
                            <h1 class="text-center text-black hidden md:block lg:text-lg">
                                Plantillas
                            </h1>
                        </button>
                    </div>

                    <!-- Botón Logos -->
                    <div class="flex items-center">
                        <div class="w-2 h-12 bg-white rounded-r-lg"></div>
                        <button class="bg-white hover:bg-[#CF93DD] h-12 flex-1 flex items-center justify-center space-x-2 group nav-button rounded-lg mx-7"
                            onclick="showSection('logos')" data-section="logos">
                            <h1 class="text-center text-black hidden md:block lg:text-lg">
                                Logos
                            </h1>
                        </button>
                    </div>
                </div>

        <!-- Sección 4/5 -->
        <div class="w-4/5 bg-[#EBF1FD] py-5 px-0 flex flex-col ml-[20%]">
            <div class="flex-1">
                <div id="dashboard" class="content-section">

                    <div class="flex items-center justify-between pb-4 px-10">
                        <h1 class="text-xs md:text-sm lg:text-lg xl:text-2xl">Certificados</h1>
                    </div>

                    <!-- INFORMACION PARA DASHBOARD-->
                    <div class="grid grid-cols-4 gap-6 pl-10 pr-20 ml-1 mr-3">
                        <!-- Botón Usuarios -->
                        <div class="bg-white px-4 py-4 rounded-md shadow-md bg-transparent text-[#000000] flex items-center flex-1">
                            <div>
                                <h1 class="ml-3 mb-3 text-xs md:text-sm lg:text-sm text-[#636466]">Usuarios</h1>
                                <h1 class="ml-3 font-medium text-xs md:text-sm lg:text-lg">40,689</h1>
                            </div>
                            <div class="bg-[#E5E4FF] p-4 py-4 rounded-lg ml-auto">
                                <img src="/imagenes/icons/1.svg" alt="Usuarios Icon" class="w-10 h-10">
                            </div>
                        </div>

                        <!-- Botón Grupos -->
                        <div class="bg-white px-4 py-2 rounded-md shadow-md bg-transparent text-[#000000] flex items-center flex-1">
                            <div>
                                <h1 class="ml-3 mb-3 text-xs md:text-sm lg:text-sm text-[#636466]">Grupos</h1>
                                <h1 class="ml-3 font-medium text-xs md:text-sm lg:text-lg">10,293</h1>
                            </div>
                            <div class="bg-[#FFF3D6] p-4 py-4 rounded-lg ml-auto">
                                <img src="/imagenes/icons/2.svg" alt="Grupos Icon" class="w-10 h-10">
                            </div>
                        </div>

                        <!-- Botón Certificados -->
                        <div class="bg-white px-4 py-2 rounded-md shadow-md bg-transparent text-[#000000] flex items-center flex-1">
                            <div>
                                <h1 class="ml-3 mb-3 text-xs md:text-sm lg:text-sm text-[#636466]">Certificados</h1>
                                <h1 class="ml-3 font-medium text-xs md:text-sm lg:text-lg">89,000</h1>
                            </div>
                            <div class="bg-[#D9F7E8] p-4 py-4 rounded-lg ml-auto">
                                <img src="/imagenes/icons/3.svg" alt="Certificados Icon" class="w-10 h-10">
                            </div>
                        </div>

                        <!-- Botón Pendientes -->
                        <div class="bg-white px-4 py-2 rounded-md shadow-md bg-transparent text-[#000000] flex items-center flex-1">
                            <div>
                                <h1 class="ml-3 mb-3 text-xs md:text-sm lg:text-sm text-[#636466]">Pendientes</h1>
                                <h1 class="ml-3 font-medium text-xs md:text-sm lg:text-lg">2,040</h1>
                            </div>
                            <div class="bg-[#FFDED1] p-4 py-4 rounded-lg ml-auto">
                                <img src="/imagenes/icons/4.svg" alt="Pendientes Icon" class="w-10 h-10">
                            </div>
                        </div>
                    </div>

                    <!-- GRAFICO DE LINEAS-->
                    <div class="px-10 pr-20 mr-3 ml-1 mt-5">
                        <div class="w-full bg-white rounded-lg shadow-lg dark:bg-gray-800 p-5">
                            <div class="flex justify-between pb-0">
                                <div>
                                    <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-2">Certificados</h5>
                                </div>
                            </div>
                            <!-- Agregar el div para el gráfico con una altura específica -->
                            <div id="labels-chart" style="height: 300px;"></div>
                        </div>
                    </div>

                    <!-- LIBRERIA APEXCHARTS ANTES DEL SCRIPT -->
                    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                    
                    <!-- SCRIPT PARA EL GRAFICO DE LINEAS-->
                    <script>
                        // Asegurarse de que el DOM esté cargado
                        document.addEventListener('DOMContentLoaded', function() {
                            const options = {
                                series: [{
                                    name: "Ventas",
                                    data: [3, 5, 2, 3, 1, 2, 4, 1, 3, 1, 2]
                                }],
                                chart: {
                                    height: 300,
                                    type: "line"
                                },
                                xaxis: {
                                    categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb', '08 Feb', '09 Feb', '10 Feb', '11 Feb']
                                }
                            };

                            // Verificar si el elemento existe y si ApexCharts está definido
                            if (document.getElementById("labels-chart") && typeof ApexCharts !== 'undefined') {
                                const chart = new ApexCharts(document.getElementById("labels-chart"), options);
                                chart.render();
                            }
                        });
                    </script>
                    <!-- FIN GRAFICO DE LINEAS-->

                    @include('partials.endingredes')

                </div>
                        
                <div id="certificados" class="content-section hidden">
                    <div class="flex items-center justify-between pb-4 px-10">
                        <h1 class="text-xs md:text-sm lg:text-lg xl:text-2xl">Certificados</h1>
                        <button id="reloadCertificados" class="p-2 bg-white hover:bg-gray-100 rounded-lg transition-all duration-200 shadow-md">
                            <img src="/imagenes/icons/reload.svg" alt="Recargar" class="w-5 h-5">
                        </button>
                    </div>
                    
                    <div class="mx-10">
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class="bg-[#F7FAFF] p-4 rounded-lg">
                                <div class="flex items-center gap-4">
                                    <div class="bg-white mb-4 p-2 rounded-lg shadow-lg">
                                        <img src="/imagenes/icons/Shearch Icon.svg" alt="Search Icon" class="w-5 h-5">
                                    </div>
                                    
                                    <div class="relative mt-1 mb-5 flex-1">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <input type="text" 
                                               id="table-search" 
                                               class="bg-white border shadow-md border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                               placeholder="Buscar por código, titular o grupo...">
                                    </div>

                                    <div class="flex items-center gap-4">
                                        <a href="{{ route('login') }}" 
                                            class="px-4 py-1.5 mb-4 flex items-center justify-center bg-white hover:bg-[#E7C9EE] text-[#9636AD] font-semibold rounded-lg shadow-md transition-all duration-200 transform hover:scale-105 border-[#9636AD] border-2">
                                            <img src="/imagenes/icons/plus.svg" alt="Search Icon" class="w-4 h-4 mr-2">
                                            <span class="text-center text-xs lg:text-sm">Añadir registro</span>
                                        </a>
                                        <a href="{{ route('register') }}" 
                                            class="px-4 py-1.5 mb-4 flex items-center justify-center bg-[#9636AD] hover:bg-[#3454A1] font-semibold rounded-lg shadow-md transition-all duration-200 transform hover:scale-105 border-[#9636AD] hover:border-[#3454A1] border-2">
                                            <img src="/imagenes/icons/upload.svg" alt="Search Icon" class="w-3.5 h-3.5 mr-2">
                                            <span class="text-center text-xs text-white lg:text-sm">Cargar Archivo</span>
                                        </a>
                                    </div>

                                </div>

                                <!-- Resto del contenido de la tabla -->
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-[#F7FAFF] border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col" class="px-6 py-3">ID</th>
                                            <th scope="col" class="px-6 py-3">Código</th>
                                            <th scope="col" class="px-6 py-3">Titular</th>
                                            <th scope="col" class="px-6 py-3">Grupo de Certificación</th>
                                            <th scope="col" class="px-6 py-3">Fecha de emisión</th>
                                            <th scope="col" class="px-6 py-3">Estado</th>
                                            <th scope="col" class="px-6 py-3 text-center">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($certificadosPaginados as $certificado)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="w-4 p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-search-{{ $certificado['id'] }}" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-search-{{ $certificado['id'] }}" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                {{ $certificado['id'] }}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{ $certificado['codigo'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $certificado['titular'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $certificado['grupo_certificacion'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $certificado['fecha_emision'] }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <span class="px-2 py-1 rounded-full text-sm {{ rand(0,1) ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                                    {{ rand(0,1) ? 'Validado' : 'Creado' }}
                                                </span>
                                            </td>
                                            <td class="px-6 py-4 text-center w-32">
                                                <div class="flex items-center justify-center space-x-3">
                                                    <button class="p-2 bg-blue-500 rounded-lg hover:scale-110 transition-transform w-10 h-10 flex items-center justify-center">
                                                        <img src="/imagenes/icons/editar.svg" alt="Editar" class="w-5 h-5">
                                                    </button>
                                                    <button class="p-2 bg-red-500 rounded-lg hover:scale-110 transition-transform w-10 h-10 flex items-center justify-center" data-certificado-id="{{ $certificado['id'] }}">
                                                        <img src="/imagenes/icons/borrar.svg" alt="Eliminar" class="w-5 h-5">
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- BOTONES DE PAGINACION -->
                                <div class="flex justify-between mt-5 gap-8">
                                    <!-- TEXTO AGREGADO-->
                                    <div class="text-sm text-black mt-6">
                                        {{ $certificadosPaginados->firstItem() }} - {{ $certificadosPaginados->lastItem() }} 
                                        de {{ $certificadosPaginados->total() }}
                                    </div>

                                    <!-- Botón Anterior -->
                                    <button type="button"
                                        data-url="{{ $certificadosPaginados->previousPageUrl() }}"
                                        class="flex items-center px-6 py-2 border {{ !$certificadosPaginados->onFirstPage() ? 'border-black text-black hover:bg-gray-100' : 'border-gray-300 text-gray-300 cursor-not-allowed' }}"
                                        {{ !$certificadosPaginados->onFirstPage() ? '' : 'disabled' }}>
                                        <span class="mr-2">&lt;&lt;</span>
                                        Anterior
                                    </button>

                                    <!-- Botón Siguiente -->
                                    <button type="button"
                                        data-url="{{ $certificadosPaginados->nextPageUrl() }}"
                                        class="flex items-center px-6 py-2 border {{ $certificadosPaginados->hasMorePages() ? 'border-black text-black hover:bg-gray-100' : 'border-gray-300 text-gray-300 cursor-not-allowed' }}"
                                        {{ $certificadosPaginados->hasMorePages() ? '' : 'disabled' }}>
                                        Siguiente
                                        <span class="ml-2">&gt;&gt;</span>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    @include('partials.endingredes')

                </div>

                <div id="grupos" class="content-section hidden">
                <h1>SECCION DE GRUPOS</h1>
                </div>

                <div id="personas" class="content-section hidden">
                <h1>SECCION DE PERSONAS</h1>
                </div>

                <div id="usuarios" class="content-section hidden">
                <h1>SECCION DE USUARIOS</h1>
                </div>

                <div id="plantillas" class="content-section hidden">
                <h1>SECCION DE PLANTILLAS</h1>
                </div>

                <div id="logos" class="content-section hidden">
                <h1>SECCION DE LOGOS</h1>
                </div>

            </div>
        </div>

        <!-- SCRIPT PARA MANEJAR EL DASHBARD -->
        <script>
        @vite('resources/js/admin.js')
        </script>
        
        <!-- SCRIPT PARA MANEJAR LOS BOTONES DE EDICION -->
        <script>
        @vite('resources/js/edit.js')
        </script>

        <!-- SCRIPT PARA MANEJAR LA PAGINACION CON AJAX -->
        <script>
        @vite('resources/js/paginacion.js')                       
        </script>

        <!-- SCRIPT PARA MANEJAR LA PAGINACION CON AJAX -->
        <script>
        @vite('resources/js/shearch.js')                       
        </script>

        <!-- SCRIPT PARA EL BORRADO -->
        <script>
        @vite('resources/js/borrar.js')                       
        </script>

        <!-- Modal para agregar aula (agregar antes del cierre del div id="aulas") -->
        <div id="modalAgregarCertificados" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white p-8 rounded-lg w-96">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Agregar Nueva Aula</h2>
                    <button onclick="cerrarModalAula()" class="text-gray-600 hover:text-gray-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <form id="formAgregarAula" class="space-y-4">
                    <!-- Campo Aula -->
                    <div>
                        <label for="nombreAula" class="block text-sm font-medium text-gray-700">Aula</label>
                        <input type="text" id="nombreAula" name="nombreAula" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <!-- Campo Capacidad -->
                    <div>
                        <label for="capacidad" class="block text-sm font-medium text-gray-700">Capacidad</label>
                        <input type="number" id="capacidad" name="capacidad" min="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <!-- Campo Número de Sillas -->
                    <div>
                        <label for="numeroSillas" class="block text-sm font-medium text-gray-700">Número de Sillas</label>
                        <input type="number" id="numeroSillas" name="numeroSillas" min="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <!-- Campo Número de Piso -->
                    <div>
                        <label for="numeroPiso" class="block text-sm font-medium text-gray-700">Número de Piso</label>
                        <input type="number" id="numeroPiso" name="numeroPiso" min="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <!-- Campo Escuela -->
                    <div>
                        <label for="escuela" class="block text-sm font-medium text-gray-700">Escuela</label>
                        <select id="escuela" name="escuela" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Seleccione una escuela</option>
                            <option value="Educación Inicial">Educación Inicial</option>
                            <option value="Educación Primaria">Educación Primaria</option>
                            <option value="Historia y Geografía">Historia y Geografía</option>
                            <option value="Matemáticas">Matemáticas</option>
                            <option value="Ciencias de la Comunicación">Ciencias de la Comunicación</option>
                            <option value="Idiomas">Idiomas</option>
                            <option value="Filosofía, Psicología y Ciencias Sociales">Filosofía, Psicología y Ciencias Sociales</option>
                            <option value="Lengua y Literatura">Lengua y Literatura</option>
                        </select>
                    </div>

                    <!-- Botones -->
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="cerrarModalAula()"
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                            Cancelar
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-yellow-500 text-black rounded-md hover:bg-yellow-600">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal para agregar usuario (agregar antes del cierre del div id="usuarios") -->
        <div id="modalAgregarGrupos" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white p-8 rounded-lg w-96">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Agregar Nuevo Usuario</h2>
                    <button onclick="cerrarModalUsuario()" class="text-gray-600 hover:text-gray-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <form id="formAgregarUsuario" class="space-y-4">
                    <!-- Campo Aula -->
                    <div>
                        <label for="nombreUsuario" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" id="nombreUsuario" name="nombreUsuario" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <!-- Campo Foto -->
                    <div>
                        <label for="fotoUsuario" class="block text-sm font-medium text-gray-700">Foto</label>
                        <div class="mt-1 flex items-center">
                            <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </span>
                            <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Seleccionar
                            </button>
                            <input type="file" id="fotoUsuario" name="fotoUsuario" class="hidden" accept="image/*">
                        </div>
                    </div>

                    <!-- Campo Escuela -->
                    <div>
                        <label for="rol" class="block text-sm font-medium text-gray-700">Rol</label>
                        <select id="rol" name="rol" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option value="">Seleccione un tipo de usuario</option>
                            <option value="Usuario">Usuario</option>
                            <option value="Colaborador">Colaborador</option>
                            <option value="Administrador de aulas">Administrador de aulas</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="Superusuario">Superusuario</option>
                        </select>
                    </div>

                    <!-- Campo Correo -->
                    <div>
                        <label for="correoUsuario" class="block text-sm font-medium text-gray-700">Correo</label>
                        <input type="email" id="correoUsuario" name="correoUsuario" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>

                    <!-- Botones -->
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="cerrarModalUsuario()"
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                            Cancelar
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-yellow-500 text-black rounded-md hover:bg-yellow-600">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal para agregar escuela (agregar antes del cierre del div id="escuela") -->
        <div id="modalAgregarPersonas" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white p-8 rounded-lg w-96">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Agregar Nuevo Escuela</h2>
                    <button onclick="cerrarModalEscuela()" class="text-gray-600 hover:text-gray-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <form id="formAgregarEscuela" class="space-y-4">
                    <!-- Campo Aula -->
                    <div>
                        <label for="nombreEscuela" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" id="nombreEscuela" name="nombreEscuela" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <!-- Campo Colaborador -->
                    <div>
                        <label for="nombreColaborador" class="block text-sm font-medium text-gray-700">Colaborador</label>
                        <input type="text" id="nombreColaborador" name="nombreColaborador" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <!-- Campo Número de Aulas -->
                    <div>
                        <label for="numeroAulas" class="block text-sm font-medium text-gray-700">Número de Aulas</label>
                        <input type="number" id="numeroAulas" name="numeroSillas" min="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="cerrarModalEscuela()"
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                            Cancelar
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-yellow-500 text-black rounded-md hover:bg-yellow-600">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div id="modalAgregarUsuarios" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white p-8 rounded-lg w-96">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Agregar Nuevo Escuela</h2>
                    <button onclick="cerrarModalEscuela()" class="text-gray-600 hover:text-gray-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <form id="formAgregarEscuela" class="space-y-4">
                    <!-- Campo Aula -->
                    <div>
                        <label for="nombreEscuela" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" id="nombreEscuela" name="nombreEscuela" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <!-- Campo Colaborador -->
                    <div>
                        <label for="nombreColaborador" class="block text-sm font-medium text-gray-700">Colaborador</label>
                        <input type="text" id="nombreColaborador" name="nombreColaborador" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <!-- Campo Número de Aulas -->
                    <div>
                        <label for="numeroAulas" class="block text-sm font-medium text-gray-700">Número de Aulas</label>
                        <input type="number" id="numeroAulas" name="numeroSillas" min="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="cerrarModalEscuela()"
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                            Cancelar
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-yellow-500 text-black rounded-md hover:bg-yellow-600">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div id="modalAgregarPlantillas" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white p-8 rounded-lg w-96">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Agregar Nuevo Escuela</h2>
                    <button onclick="cerrarModalEscuela()" class="text-gray-600 hover:text-gray-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <form id="formAgregarEscuela" class="space-y-4">
                    <!-- Campo Aula -->
                    <div>
                        <label for="nombreEscuela" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" id="nombreEscuela" name="nombreEscuela" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <!-- Campo Colaborador -->
                    <div>
                        <label for="nombreColaborador" class="block text-sm font-medium text-gray-700">Colaborador</label>
                        <input type="text" id="nombreColaborador" name="nombreColaborador" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <!-- Campo Número de Aulas -->
                    <div>
                        <label for="numeroAulas" class="block text-sm font-medium text-gray-700">Número de Aulas</label>
                        <input type="number" id="numeroAulas" name="numeroSillas" min="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="cerrarModalEscuela()"
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                            Cancelar
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-yellow-500 text-black rounded-md hover:bg-yellow-600">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div id="modalAgregarLogos" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
            <div class="bg-white p-8 rounded-lg w-96">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Agregar Nuevo Escuela</h2>
                    <button onclick="cerrarModalEscuela()" class="text-gray-600 hover:text-gray-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <form id="formAgregarEscuela" class="space-y-4">
                    <!-- Campo Aula -->
                    <div>
                        <label for="nombreEscuela" class="block text-sm font-medium text-gray-700">Nombre</label>
                        <input type="text" id="nombreEscuela" name="nombreEscuela" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <!-- Campo Colaborador -->
                    <div>
                        <label for="nombreColaborador" class="block text-sm font-medium text-gray-700">Colaborador</label>
                        <input type="text" id="nombreColaborador" name="nombreColaborador" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <!-- Campo Número de Aulas -->
                    <div>
                        <label for="numeroAulas" class="block text-sm font-medium text-gray-700">Número de Aulas</label>
                        <input type="number" id="numeroAulas" name="numeroSillas" min="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="cerrarModalEscuela()"
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                            Cancelar
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-yellow-500 text-black rounded-md hover:bg-yellow-600">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>


        </section>

        @include('partials.footer')

    </div> 

<!-- FIN SECCIÓN INTERMEDIA -->

@endsection


</body>
</html>

