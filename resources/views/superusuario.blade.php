<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>
    @extends('layouts.layout')

    @section('title', 'SuperUsuario')

    @section('content')

        <!-- Agregar header -->

        <div class="min-h-screen flex flex-col">

        @include('partials.header')

            <!-- SECCIÓN INTERMEDIA -->
            <section class="flex h-screen">
                <!-- Sección 1/5 -->
                <div class="w-1/5 bg-white mt-3 flex flex-col">
                    <!-- Título Administrador -->
                    <div class="flex items-center justify-center space-x-2">
                        <img src="/icons/layoutdashboard.svg" alt="Perfil Icon"
                            class="w-8 h-8 mb-2 md:w-5 md:h-5 lg:w-8 lg:h-8">
                        <div class="font-bold mb-2 text-[#2B3674] text-center hidden md:block md:text-sm lg:text-lg">
                            ADMINISTRADOR</div>
                    </div>

                    <!-- Líneas separadoras -->
                    <div class="w-full mb-2 border-t border-black"></div>
                    <div class="w-full border-t border-black"></div>

                    <!-- Botón cuadrado -->
                    <button class="bg-white w-full h-12 flex items-center space-x-2" onclick="showSection('home')">
                        <img src="/icons/home.svg" alt="Perfil Icon"
                            class="w-8 h-8 mx-auto md:ml-6 md:mx-0 md:w-5 md:h-5 lg:w-8 lg:h-8 lg:ml-8">
                        <h1 class="font-bold text-left text-[#2B3674] hidden md:block mx-auto lg:text-lg lg:ml-10">HOME</h1>
                    </button>

                    <div class="w-full border-t-4 border-color[#A3AED0]"></div>

                    <!-- Botón cuadrado -->
                    <!-- Botón cuadrado -->
                    <button class="bg-white hover:bg-[#F8FD65] w-full h-12 flex items-center justify-center space-x-2 group"
                        onclick="showSection('usuarios')">
                        <!-- SVG Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-8 h-8 md:w-5 md:h-5 lg:w-8 lg:h-8 text-[#A3AED0] user-icon">
                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                            <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                        <!-- Texto -->
                        <h1 class="text-center text-[#A3AED0] hidden md:block lg:text-lg button-text">
                            Usuarios
                        </h1>
                    </button>

                    <div class="w-full border-t-4 border-color-[#A3AED0]"></div>

                    <!-- Botón cuadrado -->
                    <button class="bg-white hover:bg-[#F8FD65] w-full h-12 flex items-center justify-center space-x-2 group"
                        onclick="showSection('escuelas')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#A3AED0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="w-8 h-8 md:w-5 md:h-5 lg:w-8 lg:h-8 user-icon">
                            <path d="M3 21l18 0" />
                            <path d="M3 10l18 0" />
                            <path d="M5 6l7 -3l7 3" />
                            <path d="M4 10l0 11" />
                            <path d="M20 10l0 11" />
                            <path d="M8 14l0 3" />
                            <path d="M12 14l0 3" />
                            <path d="M16 14l0 3" />
                        </svg>
                        <h1 class="text-center text-[#A3AED0] hidden md:block lg:text-lg button-text">
                            Escuelas</h1>
                    </button>


                    <div class="w-full border-t-4 border-color[#A3AED0]"></div>
                    <!-- Botón cuadrado -->
                    <button class="bg-white hover:bg-[#F8FD65] w-full h-12 flex items-center justify-center space-x-2"
                        onclick="showSection('aulas')">

                        <svg class="w-8 h-8 md:w-5 md:h-5 lg:w-8 lg:h-8 text-[#A3AED0] user-icon" fill="currentColor"
                            height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M467.309,16.768H221.454c-6.128,0-11.095,4.967-11.095,11.095v86.451l12.305-7.64c3.131-1.945,6.475-3.257,9.884-3.978
                                                                                                                                                                                                                                                        V38.958h223.665v160.016H232.549v-25.89l-22.19,13.778v23.208c0,6.128,4.967,11.095,11.095,11.095h245.855
                                                                                                                                                                                                                                                        c6.127,0,11.095-4.967,11.095-11.095V27.863C478.404,21.735,473.436,16.768,467.309,16.768z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M306.001,78.356c-2.919-3.702-8.285-4.335-11.986-1.418l-38.217,30.133c3.649,2.385,6.85,5.58,9.301,9.527
                                                                                                                                                                                                                                                        c0.695,1.117,1.298,2.266,1.834,3.431l37.651-29.687C308.286,87.424,308.92,82.057,306.001,78.356z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <circle cx="121.535" cy="31.935" r="31.935" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M252.01,124.728c-4.489-7.229-13.987-9.451-21.218-4.963l-31.206,19.375c-0.13-25.879-0.061-12.145-0.144-28.811
                                                                                                                                                                                                                                                        c-0.101-20.005-16.458-36.281-36.464-36.281h-15.159c-12.951,33.588-8.779,21.12-19.772,49.63l4.623-20.131
                                                                                                                                                                                                                                                        c0.32-1.508,0.088-3.08-0.655-4.43l-6.264-11.393l5.559-10.109c0.829-1.508-0.264-3.356-1.985-3.356h-15.271
                                                                                                                                                                                                                                                        c-1.72,0-2.815,1.848-1.985,3.356l5.57,10.13l-6.276,11.414c-0.728,1.325-0.966,2.865-0.672,4.347l4.005,20.172
                                                                                                                                                                                                                                                        c-2.159-5.599-17.084-44.306-19.137-49.63H80.093c-20.005,0-36.363,16.275-36.464,36.281l-0.569,113.2
                                                                                                                                                                                                                                                        c-0.042,8.51,6.821,15.443,15.331,15.486c0.027,0,0.052,0,0.079,0c8.473,0,15.364-6.848,15.406-15.331l0.569-113.2
                                                                                                                                                                                                                                                        c0-0.018,0-0.036,0-0.053c0.024-1.68,1.399-3.026,3.079-3.013c1.68,0.012,3.034,1.378,3.034,3.058l0.007,160.381
                                                                                                                                                                                                                                                        c14.106-0.6,27.176,4.488,36.981,13.423v-62.568h7.983v71.773c5.623,8.268,8.914,18.243,8.914,28.974
                                                                                                                                                                                                                                                        c0,9.777-2.732,18.928-7.469,26.731c4.866,0.023,9.592,0.669,14.099,1.861c6.076-5.271,13.385-9.151,21.437-11.136
                                                                                                                                                                                                                                                        c0-279.342-0.335-106.627-0.335-229.418c0-1.779,1.439-3.221,3.218-3.224c1.779-0.004,3.224,1.432,3.232,3.211
                                                                                                                                                                                                                                                        c0.054,10.807,0.224,44.59,0.283,56.351c0.028,5.579,3.07,10.708,7.953,13.407c4.874,2.694,10.835,2.554,15.583-0.394
                                                                                                                                                                                                                                                        l54.604-33.903C254.276,141.458,256.499,131.957,252.01,124.728z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <circle cx="429.221" cy="322.831" r="33.803" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M511.459,405.811c-0.107-21.176-17.421-38.404-38.598-38.404c-9.137,0-76.583,0-84.781,0
                                                                                                                                                                                                                                                        c3.637,7.068,5.704,15.069,5.704,23.55c0,9.005-2.405,18.413-7.5,26.782c18.904,0.764,35.468,10.91,45.149,25.897h40.579v-37.43
                                                                                                                                                                                                                                                        c0-1.842,1.46-3.352,3.301-3.415s3.402,1.345,3.526,3.182c0,0,0,0,0,0.002l0.19,37.661h32.621L511.459,405.811z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M290.469,390.956c0-8.629,2.138-16.763,5.894-23.92c-22.009,0-47.852,0-75.267,0c3.472,6.939,5.437,14.756,5.437,23.029
                                                                                                                                                                                                                                                        c0,9.721-2.73,18.926-7.469,26.731c15.558,0.074,29.912,6.538,40.283,17.267c10.054-9.822,23.759-15.914,38.836-15.995
                                                                                                                                                                                                                                                        C292.948,409.616,290.469,400.126,290.469,390.956z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M264.819,288.655c-18.668,0-33.804,15.132-33.804,33.803c0,18.628,15.107,33.803,33.804,33.803
                                                                                                                                                                                                                                                        c18.518,0,33.803-14.965,33.803-33.803C298.622,303.808,283.517,288.655,264.819,288.655z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path
                                        d="M123.217,390.065c0-8.252,1.956-16.053,5.411-22.98c-1.457-0.072,4.672-0.049-89.485-0.049
                                                                                                                                                                                                                                                        c-21.068,0-38.491,17.138-38.598,38.404l-0.192,38.196c14.907,0,17.906,0,32.621,0l0.191-38.031
                                                                                                                                                                                                                                                        c0.01-1.884,1.541-3.402,3.423-3.397c1.882,0.006,3.404,1.532,3.404,3.414v38.014h45.727c9.855-15.754,26.8-25.646,45.243-26.406
                                                                                                                                                                                                                                                        C125.956,409.168,123.217,399.865,123.217,390.065z" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <circle cx="175.934" cy="389.933" r="34.198" />
                                </g>
                            </g>
                            <g>
                                <g>
                                    <circle cx="342.07" cy="390.821" r="34.198" />
                                </g>
                            </g>
                            <!-- Fin Mas contenido del SVG -->
                        </svg>
                        <h1 class="text-center text-[#A3AED0] hidden md:block lg:text-lg button-text">Aulas</h1>
                    </button>

                    <!-- Líneas separadoras -->
                    <div class="w-full mb-2 border-t border-black"></div>
                    <div class="w-full border-t border-black"></div>


                    <div class="flex items-center text-left">
                        <div class="font-bold text-lg my-2 md:block mx-auto md:ml-7 lg:text-lg lg:mx-10">OTROS</div>
                    </div>

                    <div class="w-full border-t-4 border-color[#A3AED0]"></div>


                    <!-- Botón cuadrado -->

                    <!-- Botón cuadrado -->
                    <button class="bg-white hover:bg-[#F8FD65] w-full h-12 flex items-center justify-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" class="w-8 h-8 md:w-8 md:h-5 lg:w-8 lg:h-8 user-icon-4">
                            <path d="M6 18l0 -5" />
                            <path d="M10 18l0 -8" />
                            <path d="M14 18l0 -6" />
                        </svg>
                        <h1 class="text-center text-[#000000] hidden md:block lg:text-lg">Gráficos</h1>
                    </button>


                    <div class="w-full border-t-4 border-color[#A3AED0]"></div>
                    <!-- Botón cuadrado -->
                    <button class="bg-white hover:bg-[#F8FD65] w-full h-12 flex items-center justify-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                            stroke-width="2" class="w-8 h-8 md:w-8 md:h-5 lg:w-8 lg:h-8 user-icon-5">
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                            </path>
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                        </svg>

                        <h1 class="text-center text-[#000000] hidden md:block lg:text-lg">Configuración</h1>
                    </button>


                    <div class="w-full border-t-4 border-color[#A3AED0]"></div>
                    <!-- Botón cuadrado -->
                    <button class="bg-white hover:bg-[#F8FD65] w-full h-12 flex items-center justify-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="w-8 h-8 md:w-8 md:h-5 lg:w-8 lg:h-8 user-icon-6">
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M12 16v.01" />
                            <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
                        </svg>
                        <h1 class="text-center text-[#000000] hidden md:block lg:text-lg">Ayuda</h1>
                    </button>

                    <div class="w-full border-t-4 border-color[#A3AED0]"></div>

                </div>

        <!-- Sección 4/5 -->
        <div class="w-4/5 bg-[#303030] py-4 px-0">
            <div>
                    <div id="home" class="content-section">
                        <div class="grid grid-cols-3 gap-0.5 lg:">
                            <!-- Botones con iconos -->
                            <div class="bg-white px-1 py-1  mx-1 my-1 md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-md border border-[#A3AED0] bg-transparent text-[#000000]">
                                <img src="/icons/user.svg" alt="ID de Usuario" class="w-5 h-5 xl:w-8 xl:h-8">
                                <h1 class="text-center text-xs md:text-sm lg:text-lg xl:text-2xl">Usuarios</span>
                                <span class="text-center text-xs md:text-sm lg:text-lg xl:text-2xl">150</span>
                            </div>

                            <!-- Botones con iconos -->
                            <div class="bg-white px-1 py-1  mx-1 my-1 md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-md border border-[#A3AED0] bg-transparent text-[#000000]">
                                <img src="/icons/calendar.svg" alt="ID de Usuario" class="w-5 h-5 xl:w-8 xl:h-8">
                                <h1 class="text-center text-xs md:text-sm lg:text-lg xl:text-2xl">Reservas</span>
                                <span class="text-center text-xs md:text-sm lg:text-lg xl:text-2xl">26</span>
                            </div>

                            <!-- Botones con iconos -->
                            <div class="bg-white px-1.2 py-1  mx-1 my-1 md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-md border border-[#A3AED0] bg-transparent text-[#000000]">
                                <img src="/icons/sand_clock.svg" alt="ID de Usuario" class="w-5 h-5 xl:w-8 xl:h-8">
                                <h1 class="text-center text-xs md:text-sm lg:text-lg xl:text-2xl">Horas Ocupadas</span>
                                <span class="text-center text-xs md:text-sm lg:text-lg xl:text-2xl">128</span>
                            </div>
                        </div>
                        <div>

                        <div class="overflow-x-auto mx-10 rounded-lg mt-4 bg-white p-4 sm:overflow-hidden">
                            <div class="grid grid-cols-[170px_1fr] min-w-[400px]">
                                <!-- Sección 1/3 -->
                                <div class="col-span-1">
                                    <div class="flex items-center">
                                        <img src="/icons/calendar.svg" alt="Calendario" class="w-6 h-6 mr-2 text-center">
                                        <span class="text-xs md:text-sm lg:text-lg xl:text-2xl">Marzo</span>
                                    </div>

                                    <div class="mt-4 text-xs md:text-sm lg:text-lg xl:text-2xl">30</div>

                                    <div class="mt-4 text-xs md:text-sm lg:text-lg xl:text-2xl">Total de horas libres reservadas</div>

                                    <div class="flex items-center mt-4">
                                        <img src="/icons/check_blue.svg" alt="Reservadas" class="w-4 h-4 mr-1 xl:w-8 xl:h-8">
                                        <span class="text-xs md:text-sm lg:text-lg xl:text-2xl" style="color:blue;">Reservadas</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <img src="/icons/check_green.svg" alt="Libres" class="w-4 h-4 mr-1 xl:w-8 xl:h-8">
                                        <span class="text-xs md:text-sm lg:text-lg xl:text-2xl" style="color:green;">Libres</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <img src="/icons/check_red.svg" alt="Fijas" class="w-4 h-4 mr-1 xl:w-8 xl:h-8">
                                        <span class="text-xs md:text-sm lg:text-lg xl:text-2xl" style="color:red;">Fijas</span>
                                    </div>
                                </div>

                                <!-- Sección 2/3 -->
                                <div class="col-span-1">
                                    <!-- Aquí se puede agregar el HTML para mostrar el reporte -->
                                    <div id="column-chart"></div> <!-- Sección para el gráfico -->

                                    <div class="mt-2">
                                            <div id="column-chart"></div>
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                <div id="usuarios" class="content-section hidden">
                    <!-- Contenedor principal -->
                    <div class="flex flex-col h-screen">
                        <!-- Sección fija superior -->
                        <div class="sticky top-0 bg-[#303030] z-10">
                            <!-- Barra de búsqueda -->
                            <div class="flex justify-center mb-4">
                                <div class="flex items-center border rounded p-2 w-1/2">
                                    <img src="/icons/busqueda.svg" alt="Search Icon" class="w-5 h-5 mr-2">
                                    <input type="text" placeholder="Buscar..." class="border-none flex-1">
                                </div>
                            </div>

                            <!-- Línea separadora -->
                            <hr class="border-t-2 border-[#FFFFFF] my-2">

                            <!-- Encabezados fijos de la tabla -->
                            <div class="grid grid-cols-6 gap-4 mt-4 mb-4">
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/id_user.svg" alt="ID de Usuario" class="w-5 h-5">
                                    <span class="text-center text-sm">ID de Usuario</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/user2.svg" alt="Usuario" class="w-5 h-5">
                                    <span class="text-center text-sm">Usuario</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/user_picture.svg" alt="Foto" class="w-5 h-5">
                                    <span class="text-center text-sm">Foto</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/role.svg" alt="Rol" class="w-5 h-5">
                                    <span class="text-center text-sm">Rol</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/correo.svg" alt="Correo" class="w-5 h-5">
                                    <span class="text-center text-sm">Correo</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/objetive.svg" alt="Acción" class="w-5 h-5">
                                    <span class="text-center text-sm">Acción</span>
                                </div>
                            </div>
                            
                            <!-- Línea separadora después de los encabezados -->
                            <hr class="border-t-2 border-[#FFFFFF] my-2">
                        </div>

                        <!-- Contenedor con scroll para los datos -->
                        <div class="flex-1 overflow-y-auto">
                            <?php
                            $usuarios = [
                                [ "id" => 1, "nombre" => "Juan Pérez", "foto" => "/imagenes/HOMBRE DEFAULT.jpg", "rol" => "Super Usuario", "correo" => "juan.perez@example.com" ],
                                [ "id" => 2, "nombre" => "Ana Gómez", "foto" => "/imagenes/MUJER DEFAULT.jpg", "rol" => "Supervisora", "correo" => "ana.gomez@example.com" ],
                                [ "id" => 3, "nombre" => "Luis Martínez", "foto" => "/imagenes/HOMBRE DEFAULT.jpg", "rol" => "Administrador de Aulas", "correo" => "luis.martinez@example.com" ],
                                [ "id" => 4, "nombre" => "María López", "foto" => "/imagenes/MUJER DEFAULT.jpg", "rol" => "Colaboradora", "correo" => "maria.lopez@example.com" ],
                                [ "id" => 5, "nombre" => "Carlos Sánchez", "foto" => "/imagenes/HOMBRE DEFAULT.jpg", "rol" => "Usuario", "correo" => "carlos.sanchez@example.com" ],
                                [ "id" => 6, "nombre" => "Laura Torres", "foto" => "/imagenes/MUJER DEFAULT.jpg", "rol" => "Colaboradora", "correo" => "laura.torres@example.com" ],
                                [ "id" => 7, "nombre" => "Manuel Dorado", "foto" => "/imagenes/HOMBRE DEFAULT.jpg", "rol" => "Administrador de Aulas", "correo" => "manuel.dorado@example.com" ],
                            ];

                            foreach ($usuarios as $usuario) {
                                echo '<div class="grid grid-cols-6 gap-4">
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $usuario["id"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $usuario["nombre"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">
                                        <img src="' . $usuario["foto"] . '" alt="' . $usuario["nombre"] . '" class="w-10 h-10 rounded-full">
                                    </div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $usuario["rol"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $usuario["correo"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">
                                        <button class="bg-[#60C6F7] text-white px-4 py-2 rounded-md hover:bg-[#180E9A] !important">Editar</button>
                                        <button class="bg-[#FE663B] text-white px-4 py-2 rounded-md ml-3 hover:bg-[#9B0D14] !important">Borrar</button>
                                    </div>
                                </div>
                                <hr class="border-t-2 border-[#FFFFFF] my-2">';
                            }
                            ?>
                        </div>

                        <!-- Botón para agregar usuario (fijo en la parte inferior) -->
                        <div class="sticky bottom-0 bg-[#303030] py-4 flex justify-end">
                            <button onclick="abrirModalUsuario()" class="bg-yellow-500 border border-black text-black px-4 py-2 rounded-md flex items-center">
                                <img src="/icons/circle_plus.svg" alt="Agregar Usuario" class="w-5 h-5 mr-2"> Agregar Usuario
                            </button>
                        </div>
                    </div>
                </div>

                <div id="escuelas" class="content-section hidden">
                    <!-- Contenedor principal -->
                    <div class="flex flex-col h-screen">
                        <!-- Sección fija superior -->
                        <div class="sticky top-0 bg-[#303030] z-10">
                            <!-- Encabezados fijos de la tabla -->
                            <div class="grid grid-cols-5 gap-4 mb-5 mt-2">
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/id_user.svg" alt="ID de Usuario" class="w-5 h-5">
                                    <span class="text-center text-sm">Escuela</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/user2.svg" alt="Usuario" class="w-5 h-5">
                                    <span class="text-center text-sm">Colaborador</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/user_picture.svg" alt="Foto" class="w-5 h-5">
                                    <span class="text-center text-sm">Número de Aulas</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/role.svg" alt="Rol" class="w-5 h-5">
                                    <span class="text-center text-sm">Aulas</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/objetive.svg" alt="Acción" class="w-5 h-5">
                                    <span class="text-center text-sm">Acción</span>
                                </div>
                            </div>
                            
                            <!-- Línea separadora después de los encabezados -->
                            <hr class="border-t-2 border-[#FFFFFF] my-2">
                        </div>

                        <!-- Contenedor con scroll para los datos -->
                        <div class="flex-1 overflow-y-auto">
                            <?php
                            $escuelas = [
                                [ "nombre" => "Educación Inicial", "colaborador" => "Juan Pérez", "numero_aulas" => rand(1, 5), "aulas" => '<div class="flex items-center justify-center w-8 h-8 rounded-xl bg-[#D0DB3D]"><img src="/icons/eye.svg" alt="Aula" class="w-5 h-5"></div>'],
                                [ "nombre" => "Educación Primaria", "colaborador" => "Ana Gómez", "numero_aulas" => rand(1, 5), "aulas" => '<div class="flex items-center justify-center w-8 h-8 rounded-xl bg-[#D0DB3D]"><img src="/icons/eye.svg" alt="Aula" class="w-5 h-5"></div>'],
                                [ "nombre" => "Historia y Geografía", "colaborador" => "Luis Martínez", "numero_aulas" => rand(1, 5), "aulas" => '<div class="flex items-center justify-center w-8 h-8 rounded-xl bg-[#D0DB3D]"><img src="/icons/eye.svg" alt="Aula" class="w-5 h-5"></div>'],
                                [ "nombre" => "Matemáticas", "colaborador" => "María López", "numero_aulas" => rand(1, 5), "aulas" => '<div class="flex items-center justify-center w-8 h-8 rounded-xl bg-[#D0DB3D]"><img src="/icons/eye.svg" alt="Aula" class="w-5 h-5"></div>'],
                                [ "nombre" => "Ciencias de la Comunicación", "colaborador" => "Carlos Sánchez", "numero_aulas" => rand(1, 5), "aulas" => '<div class="flex items-center justify-center w-8 h-8 rounded-xl bg-[#D0DB3D]"><img src="/icons/eye.svg" alt="Aula" class="w-5 h-5"></div>'],
                                [ "nombre" => "Idiomas", "colaborador" => "Laura Torres", "numero_aulas" => rand(1, 5), "aulas" => '<div class="flex items-center justify-center w-8 h-8 rounded-xl bg-[#D0DB3D]"><img src="/icons/eye.svg" alt="Aula" class="w-5 h-5"></div>'],
                                [ "nombre" => "Filosofía, Psicología y Ciencias Sociales", "colaborador" => "Manuel Dorado", "numero_aulas" => rand(1, 5), "aulas" => '<div class="flex items-center justify-center w-8 h-8 rounded-xl bg-[#D0DB3D]"><img src="/icons/eye.svg" alt="Aula" class="w-5 h-5"></div>'],
                                [ "nombre" => "Lengua y Literatura", "colaborador" => "Pedro Ruiz", "numero_aulas" => rand(1, 5), "aulas" => '<div class="flex items-center justify-center w-8 h-8 rounded-xl bg-[#D0DB3D]"><img src="/icons/eye.svg" alt="Aula" class="w-5 h-5"></div>'],
                            ];

                            foreach ($escuelas as $escuela) {
                                echo '<div class="grid grid-cols-5 gap-4">
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $escuela["nombre"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $escuela["colaborador"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $escuela["numero_aulas"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $escuela["aulas"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">
                                        <button class="bg-[#60C6F7] text-white px-4 py-2 rounded-md hover:bg-[#180E9A] !important">Editar</button>
                                        <button class="bg-[#FE663B] text-white px-4 py-2 rounded-md ml-3 hover:bg-[#9B0D14] !important">Borrar</button>
                                    </div>
                                </div>
                                <hr class="border-t-2 border-[#FFFFFF] my-2">';
                            }
                            ?>
                        </div>

                        <!-- Botón para agregar escuela (fijo en la parte inferior) -->
                        <div class="sticky bottom-0 bg-[#303030] py-4 flex justify-end">
                            <button onclick="abrirModalEscuela()" class="bg-yellow-500 border border-black text-black px-4 py-2 rounded-md flex items-center">
                                <img src="/icons/circle_plus.svg" alt="Agregar Escuela" class="w-5 h-5 mr-2"> Agregar Escuela
                            </button>
                        </div>
                    </div>
                </div>

                <div id="aulas" class="content-section hidden">
                    <!-- Contenedor principal -->
                    <div class="flex flex-col h-screen">
                        <!-- Sección fija superior -->
                        <div class="sticky top-0 bg-[#303030] z-10">
                            <!-- Barra de búsqueda -->
                            <div class="flex justify-center mb-4">
                                <div class="flex items-center border rounded p-2 w-1/2">
                                    <img src="/icons/busqueda.svg" alt="Search Icon" class="w-5 h-5 mr-2">
                                    <input type="text" placeholder="Buscar..." class="border-none flex-1">
                                </div>
                            </div>

                            <!-- Línea separadora -->
                            <hr class="border-t-2 border-[#FFFFFF] my-2">

                            <!-- Encabezados fijos de la tabla -->
                            <div class="grid grid-cols-6 gap-4 mt-4 mb-4">
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/id_user.svg" alt="ID de Aula" class="w-5 h-5">
                                    <span class="text-center text-sm">Aula</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/user2.svg" alt="Capacidad" class="w-5 h-5">
                                    <span class="text-center text-sm">Capacidad</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/user_picture.svg" alt="Número de Sillas" class="w-5 h-5">
                                    <span class="text-center text-sm">Número de Sillas</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/role.svg" alt="Número de Piso" class="w-5 h-5">
                                    <span class="text-center text-sm">Número de Piso</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/correo.svg" alt="Escuela" class="w-5 h-5">
                                    <span class="text-center text-sm">Escuela</span>
                                </div>
                                <div class="bg-gray-200 p-2 mx-auto md:mx-5 lg:mx-10 flex items-center space-x-2 rounded-3xl border border-[#A3AED0] bg-transparent text-[#A3AED0]">
                                    <img src="/icons/objetive.svg" alt="Acción" class="w-5 h-5">
                                    <span class="text-center text-sm">Acción</span>
                                </div>
                            </div>
                            
                            <!-- Línea separadora después de los encabezados -->
                            <hr class="border-t-2 border-[#FFFFFF] my-2">
                        </div>

                        <!-- Contenedor con scroll para los datos -->
                        <div class="flex-1 overflow-y-auto">
                            <?php
                            $escuelas = [
                                "Educación Inicial", "Educación Primaria", "Historia y Geografía", 
                                "Matemáticas", "Ciencias de la Comunicación", "Idiomas", 
                                "Filosofía, Psicología y Ciencias Sociales", "Lengua y Literatura"
                            ];

                            $aulas = [];
                            for ($i = 1; $i <= 10; $i++) {
                                $capacidad = rand(30, 50);
                                $numero_sillas = rand(5, $capacidad);
                                $numero_piso = rand(1, 3);
                                $escuela = $escuelas[array_rand($escuelas)];
                                $aulas[] = [
                                    "id" => "A0" . $i,
                                    "capacidad" => $capacidad,
                                    "numero_sillas" => $numero_sillas,
                                    "numero_piso" => $numero_piso,
                                    "escuela" => $escuela
                                ];
                            }

                            foreach ($aulas as $aula) {
                                echo '<div class="grid grid-cols-6 gap-4">
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $aula["id"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $aula["capacidad"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $aula["numero_sillas"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $aula["numero_piso"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">' . $aula["escuela"] . '</div>
                                    <div class="flex items-center text-[#FFFFFF] justify-center p-2">
                                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-[#180E9A] !important">Editar</button>
                                        <button class="bg-red-500 text-white px-4 py-2 rounded-md ml-3 hover:bg-[#9B0D14] !important">Borrar</button>
                                    </div>
                                </div>
                                <hr class="border-t-2 border-[#FFFFFF] my-2">';
                            }
                            ?>
                        </div>

                        <!-- Botón para agregar aula (fijo en la parte inferior) -->
                        <div class="sticky bottom-0 bg-[#303030] py-4 flex justify-end">
                            <button onclick="abrirModalAula()" class="bg-yellow-500 border border-black text-black px-4 py-2 rounded-md flex items-center">
                                <img src="/icons/circle_plus.svg" alt="Agregar Aula" class="w-5 h-5 mr-2"> Agregar Aula
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para agregar aula (agregar antes del cierre del div id="aulas") -->
        <div id="modalAgregarAula" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
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
        <div id="modalAgregarUsuario" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
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
            <div id="modalAgregarEscuela" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
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


        <!-- Agregar el JavaScript necesario (agregar antes del cierre del body) -->
        <script>
            function abrirModalAula() {
                document.getElementById('modalAgregarAula').classList.remove('hidden');
                document.getElementById('modalAgregarAula').classList.add('flex');
            }

            function cerrarModalAula() {
                document.getElementById('modalAgregarAula').classList.add('hidden');
                document.getElementById('modalAgregarAula').classList.remove('flex');
            }

            // Manejar el envío del formulario
            document.getElementById('formAgregarAula').addEventListener('submit', function(e) {
                e.preventDefault();
                // Aquí puedes agregar la lógica para procesar los datos del formulario
                const formData = new FormData(this);
                console.log('Datos del formulario:', Object.fromEntries(formData));
                cerrarModalAula();
            });
        </script>

        
        <script>
            function abrirModalUsuario() {
                document.getElementById('modalAgregarUsuario').classList.remove('hidden');
                document.getElementById('modalAgregarUsuario').classList.add('flex');
            }

            function cerrarModalUsuario() {
                document.getElementById('modalAgregarUsuario').classList.add('hidden');
                document.getElementById('modalAgregarUsuario').classList.remove('flex');
            }

            // Manejar el envío del formulario
            document.getElementById('formAgregarUsuario').addEventListener('submit', function(e) {
                e.preventDefault();
                // Aquí puedes agregar la lógica para procesar los datos del formulario
                const formData = new FormData(this);
                console.log('Datos del formulario:', Object.fromEntries(formData));
                cerrarModalUsuario();
            });
        </script>


        <script>
            function abrirModalEscuela() {
                document.getElementById('modalAgregarEscuela').classList.remove('hidden');
                document.getElementById('modalAgregarEscuela').classList.add('flex');
            }

            function cerrarModalEscuela() {
                document.getElementById('modalAgregarEscuela').classList.add('hidden');
                document.getElementById('modalAgregarEscuela').classList.remove('flex');
            }

            // Manejar el envío del formulario
            document.getElementById('formAgregarEscuela').addEventListener('submit', function(e) {
                e.preventDefault();
                // Aquí puedes agregar la lógica para procesar los datos del formulario
                const formData = new FormData(this);
                console.log('Datos del formulario:', Object.fromEntries(formData));
                cerrarModalEscuela();
            });
        </script>


            </section>

            <!-- Script modificar colores de iconos -->

            <script>
                // Colores iniciales
                let user_color1 = '#A3AED0';
                let user_color2 = '#A3AED0';
                let user_color3 = '#A3AED0';
                let user_color4 = '#000000';
                let user_color5 = '#000000';
                let user_color6 = '#000000';

                // Cambia dinámicamente el color de un icono específico
                function changeUserIconColor(selector, newColor) {
                    const icon = document.querySelector(selector);
                    if (icon) {
                        if (selector === '.user-icon-3') {
                            icon.setAttribute('fill', newColor);
                        }
                        icon.setAttribute('stroke', newColor);
                        // icon.setAttribute('fill', newColor);
                    }
                }

                // Cambiar colores de diferentes iconos
                changeUserIconColor('.user-icon-1', user_color1);
                changeUserIconColor('.user-icon-2', user_color2);
                changeUserIconColor('.user-icon-3', user_color3);
                changeUserIconColor('.user-icon-4', user_color4);
                changeUserIconColor('.user-icon-5', user_color5);
                changeUserIconColor('.user-icon-6', user_color6);

            </script>

            <!-- Fin Script modificar colores de iconos -->


            <!-- SCRIPT PARA DESPLEGAR EL CUADRO DEBAJO PARA OPCIONES DE PERFIL-->
            <script>
                function showSection(section) {
                    // Ocultar todas las secciones
                    const sections = document.querySelectorAll('.content-section');
                    sections.forEach(sec => sec.classList.add('hidden'));

                    // Mostrar la sección seleccionada
                    document.getElementById(section).classList.remove('hidden');

                    // Cambiar el color de los botones
                    const buttons = document.querySelectorAll('button');
                    buttons.forEach(btn => {
                        const isSelected = btn.getAttribute('onclick')?.includes(section);
                        const icon = btn.querySelector('.user-icon');
                        const text = btn.querySelector('.button-text');

                        if (isSelected) {
                            btn.classList.add('bg-[#F8FD65]');
                            btn.classList.remove('bg-white');

                            if (icon) {
                                icon.setAttribute('stroke', '#000');
                                icon.classList.remove('text-[#A3AED0]');
                                icon.classList.add('text-black');
                            }

                            if (text) {
                                text.classList.remove('text-[#A3AED0]');
                                text.classList.add('text-black');
                            }
                        } else {
                            btn.classList.remove('bg-[#F8FD65]');
                            btn.classList.add('bg-white');

                            if (icon) {
                                icon.setAttribute('stroke', '#A3AED0');
                                icon.classList.add('text-[#A3AED0]');
                                icon.classList.remove('text-black');
                            }

                            if (text) {
                                text.classList.add('text-[#A3AED0]');
                                text.classList.remove('text-black');
                            }
                        }
                    });
                }

                // Mostrar la sección HOME por defecto al cargar la página
                window.addEventListener('load', function() {
                    showSection('home'); // Mostrar la sección HOME por defecto
                });
            </script>




            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const options = {
                        colors: ["#0000FF", "#FF0000"],
                        series: [
                            {
                                name: "Horas Reservadas",
                                color: "#0000FF",
                                data: [
                                    { x: "Lunes", y: 231 },
                                    { x: "Martes", y: 122 },
                                    { x: "Miércoles", y: 63 },
                                    { x: "Jueves", y: 421 },
                                    { x: "Viernes", y: 122 },
                                    { x: "Sábado", y: 323 },
                                    { x: "Domingo", y: 111 },
                                ],
                            },
                            {
                                name: "Horas Libres",
                                color: "#008000",
                                data: [
                                    { x: "Lunes", y: 232 },
                                    { x: "Martes", y: 113 },
                                    { x: "Miércoles", y: 341 },
                                    { x: "Jueves", y: 224 },
                                    { x: "Viernes", y: 522 },
                                    { x: "Sábabado", y: 411 },
                                    { x: "Domingo", y: 243 },
                                ],
                            },
                            {
                                name: "Horas Fijas",
                                color: "#FF0000",
                                data: [
                                    { x: "Lunes", y: 150 },
                                    { x: "Martes", y: 150 },
                                    { x: "Miércoles", y: 150 },
                                    { x: "Jueves", y: 150 },
                                    { x: "Viernes", y: 150 },
                                    { x: "Sábado", y: 150 },
                                    { x: "Domingo", y: 150 },
                                ],
                            },
                        ],
                        chart: {
                            type: "bar",
                            height: "300px",
                            fontFamily: "Inter, sans-serif",
                            toolbar: {
                                show: false,
                            },
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: "80%",
                                borderRadiusApplication: "end",
                                borderRadius: 8,
                            },
                        },
                        tooltip: {
                            shared: true,
                            intersect: false,
                            style: {
                                fontFamily: "Inter, sans-serif",
                            },
                        },
                        states: {
                            hover: {
                                filter: {
                                    type: "darken",
                                    value: 1,
                                },
                            },
                        },
                        stroke: {
                            show: true,
                            width: 0,
                            colors: ["transparent"],
                        },
                        grid: {
                            show: false,
                            strokeDashArray: 4,
                            padding: {
                                left: 2,
                                right: 2,
                                top: -14
                            },
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        legend: {
                            show: false,
                        },
                        xaxis: {
                            floating: false,
                            labels: {
                                show: true,
                                style: {
                                    fontFamily: "Inter, sans-serif",
                                    cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                                }
                            },
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false,
                            },
                        },
                        yaxis: {
                            show: false,
                        },
                        fill: {
                            opacity: 1,
                        },
                    }

                    // Verifica si el elemento existe antes de renderizar el gráfico
                    const chartElement = document.getElementById("column-chart");
                    if (chartElement && typeof ApexCharts !== 'undefined') {
                        const chart = new ApexCharts(chartElement, options);
                        chart.render();
                    } else {
                        console.error("ApexCharts no está disponible o el elemento no se encontró.");
                    }
                });
            </script>

            @include('partials.footer')

        </div>
    @endsection
</body>

</html>