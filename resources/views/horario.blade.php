<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
@extends('layouts.layout')

@section('title', 'Horario')

@section('content')



<div class="min-h-screen flex flex-col">

@include('partials.header')

<section class="bg-[#1414b8] text-white py-8 flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-base font-extrabold text-center lg:text-2xl lg:font-extrabold">SISTEMA DE GESTION DE AULAS Y HORARIOS</h1>
    </div>
</section>


<!-- SECCIÓN INTERMEDIA -->
    <!-- TITULO + INFORMACION ADICIONAL -->
    <div class="p-4 bg-white flex flex-col sm:flex-row justify-between">
        <div>
            <h1 class="text-base text-black lg:text-3xl">Escuela Profesional: Educación Inicial</h1>
            <h1 class="text-base text-black lg:text-3xl">Secretaria de la Escuela: Alicia Gutierrez</h1>
        </div>
        <!-- Selector de escuela (visible solo en pantallas pequeñas) -->
        <div class="mt-4 sm:hidden">
            <h2 class="text-xs font-semibold mb-2">Seleccionar Escuela</h2>
            <select class="w-full p-2 border border-gray-300 rounded-md">
                <option value="escuela1">Escuela 1</option>
                <option value="escuela2">Escuela 2</option>
                <option value="escuela3">Escuela 3</option>
                <option value="escuela4">Escuela 4</option>
                <!-- Agrega más escuelas según sea necesario -->
            </select>
        </div>
        <!-- Selector de aula (visible solo en pantallas pequeñas) -->
        <div class="mt-4 sm:hidden">
            <h2 class="text-xs font-semibold mb-2">Seleccionar Aula</h2>
            <select class="w-full p-2 border border-gray-300 rounded-md">
                <option value="aula1">Aula 1</option>
                <option value="aula2">Aula 2</option>
                <option value="aula3">Aula 3</option>
                <option value="aula4">Aula 4</option>
                <!-- Agrega más aulas según sea necesario -->
            </select>
        </div>
    </div>
    <!-- FIN TITULO + INFORMACION ADICIONAL -->

    
    <div class="flex flex-row p-4">

        <!-- HORARIO -->

        <div class="flex-1 pr-4">
        <!-- Primera fila: Cabecera de días -->
        <div class="grid grid-cols-7 border border-gray-300 rounded-md">
            <div class="bg-gray-800 text-[10px] text-white font-bold text-center py-2 lg:text-3xl lg:text-center">Hora</div>
            <div class="bg-gray-800 text-[10px] text-white font-bold text-center py-2 lg:text-3xl lg:text-center">Lunes</div>
            <div class="bg-gray-800 text-[10px] text-white font-bold text-center py-2 lg:text-3xl lg:text-center">Martes</div>
            <div class="bg-gray-800 text-[10px] text-white font-bold text-center py-2 lg:text-3xl lg:text-center">Miércoles</div>
            <div class="bg-gray-800 text-[10px] text-white font-bold text-center py-2 lg:text-3xl lg:text-center">Jueves</div>
            <div class="bg-gray-800 text-[10px] text-white font-bold text-center py-2 lg:text-3xl lg:text-center">Viernes</div>
            <div class="bg-gray-800 text-[10px] text-white font-bold text-center py-2 lg:text-3xl lg:text-center">Sábado</div>
        </div>

        <!-- Filas dinámicas: Horario -->
        <div class="grid grid-rows-15">
            <!-- Primera fila horario de 7 a 8 AM -->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-1">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">7:00 - 8:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-7-8"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-7-8"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-7-8"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-7-8"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-7-8"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-7-8"></div>
            </div>
            <!-- Segunda fila horario de 8 a 9 AM -->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">8:00 - 9:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-8-9"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-8-9"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-8-9"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-8-9"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-8-9"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-8-9"></div>
            </div>
            <!-- Tercera fila horario de 9 a 10 AM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">9:00 - 10:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-9-10"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-9-10"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-9-10"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-9-10"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-9-10"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-9-10"></div>
            </div>

            <!-- Tercera fila horario de 10 a 11 AM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">10:00 - 11:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-10-11"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-10-11"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-10-11"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-10-11"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-10-11"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-10-11"></div>
            </div>

            <!-- Tercera fila horario de 11 a 12 AM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">11:00 - 12:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-11-12"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-11-12"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-11-12"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-11-12"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-11-12"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-11-12"></div>
            </div>
            
            <!-- Tercera fila horario de 12 a 13 PM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">12:00 - 13:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-12-13"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-12-13"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-12-13"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-12-13"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-12-13"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-12-13"></div>
            </div>
            
            <!-- Tercera fila horario de 13 a 14 PM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">13:00 - 14:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-13-14"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-13-14"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-13-14"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-13-14"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-13-140"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-13-14"></div>
            </div>
             
            <!-- Tercera fila horario de 14 a 15 PM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">14:00 - 15:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-14-15"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-14-15"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-14-15"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-14-15"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-14-15"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-14-15"></div>
            </div>

            <!-- Tercera fila horario de 15 a 16 PM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">15:00 - 16:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-15-16"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-15-16"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-15-16"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-15-16"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-15-16"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-15-16"></div>
            </div>

            <!-- Tercera fila horario de 16 a 17 PM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">16:00 - 17:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-16-17"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-16-17"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-16-17"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-16-17"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-16-17"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-16-17"></div>
            </div>

            <!-- Tercera fila horario de 17 a 18 PM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">17:00 - 18:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-17-18"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-17-18"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-17-18"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-17-18"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-17-18"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-17-18"></div>
            </div>

            <!-- Tercera fila horario de 18 a 19 PM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">18:00 - 19:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-18-19"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-18-19"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-18-19"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-18-19"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-18-19"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-18-19"></div>
            </div>

            <!-- Tercera fila horario de 19 a 20 PM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">19:00 - 20:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-19-20"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-19-20"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-19-20"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-19-20"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-19-20"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-19-20"></div>
            </div>

            <!-- Tercera fila horario de 20 a 21 PM-->
            <div class="grid grid-cols-7 border border-gray-300 rounded-md" id="row-2">
            <div class="bg-gray-200 text-xs text-center py-2 font-semibold lg:text-xl lg:text-center">20:00 - 21:00</div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-lunes-20-21"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-martes-20-21"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-miercoles-20-21"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-jueves-20-21"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-viernes-20-21"></div>
            <div class="border border-gray-300 py-2 text-center rounded-md" id="block-sabado-20-21"></div>
            </div>

        </div>
        </div>

        <!-- Selector de escuela y aula (visible solo en pantallas grandes) -->
        <div class="w-1/4 p-4 border-r border-gray-300 hidden sm:block">
            <select class="w-full p-2 border border-gray-300 rounded-md mb-4">
                <option value="escuela1">Escuela 1</option>
                <option value="escuela2">Escuela 2</option>
                <option value="escuela3">Escuela 3</option>
                <option value="escuela4">Escuela 4</option>
            </select>
            <select class="w-full p-2 border border-gray-300 rounded-md">
                <option value="aula1">Aula 1</option>
                <option value="aula2">Aula 2</option>
                <option value="aula3">Aula 3</option>
                <option value="aula4">Aula 4</option>
            </select>

        </div>
        <!-- FIN Selector de escuela y aula-->
 

        </div>

        <!-- Paginación -->
        <div class="flex justify-end mt-4">
        <button class="px-4 py-2 mb-8 mr-4 bg-blue-500 text-white rounded-lg hover:bg-black transition ml-2">Semana Anterior</button>
        <button class="px-4 py-2 mb-8 mr-4 bg-blue-500 text-white rounded-lg hover:bg-black transition ml-2">Semana Siguiente</button>
        </div>


    <!-- FIN HORARIO -->

<script>
    // Cursos disponibles
    const cursos = ['Práct.', 'Inglés', 'Mate.', 'Física', 'Comu.', 'Historia', 'Química', 'Biología', 'Arte', 'Deportes'];

    // Bloques ocupados (fijos)
    const bloquesOcupados = [
        { dia: 'lunes', inicio: '7:00', fin: '9:00', curso: 'Mate.' },
        { dia: 'lunes', inicio: '11:00', fin: '13:00', curso: 'Física' },
        { dia: 'martes', inicio: '9:00', fin: '11:00', curso: 'Inglés' },
        { dia: 'martes', inicio: '14:00', fin: '16:00', curso: 'Historia' },
        { dia: 'miércoles', inicio: '8:00', fin: '10:00', curso: 'Química' },
        { dia: 'miércoles', inicio: '15:00', fin: '17:00', curso: 'Comu.' },
        { dia: 'jueves', inicio: '10:00', fin: '12:00', curso: 'Arte' },
        { dia: 'jueves', inicio: '18:00', fin: '20:00', curso: 'Deport.' },
        { dia: 'viernes', inicio: '7:00', fin: '9:00', curso: 'Práct.' },
        { dia: 'viernes', inicio: '13:00', fin: '15:00', curso: 'Biología' }
    ];

    // Bloques reservados (fijos)
    const bloquesReservados = [
        { dia: 'lunes', inicio: '9:00', fin: '11:00', curso: 'Inglés' },
        { dia: 'lunes', inicio: '13:00', fin: '15:00', curso: 'Historia' },
        { dia: 'martes', inicio: '11:00', fin: '13:00', curso: 'Mate.' },
        { dia: 'martes', inicio: '16:00', fin: '18:00', curso: 'Física' },
        { dia: 'miércoles', inicio: '10:00', fin: '12:00', curso: 'Química' },
        { dia: 'miércoles', inicio: '17:00', fin: '19:00', curso: 'Arte' },
        { dia: 'jueves', inicio: '12:00', fin: '14:00', curso: 'Deport.' },
        { dia: 'jueves', inicio: '20:00', fin: '21:00', curso: 'Comu.' },
        { dia: 'viernes', inicio: '9:00', fin: '11:00', curso: 'Práct.' },
        { dia: 'viernes', inicio: '15:00', fin: '17:00', curso: 'Biología' }
    ];

    // Pintar bloques ocupados en el horario
    function pintarBloquesOcupados(bloques) {
        bloques.forEach((bloque) => {
            const dias = {
                lunes: 'lunes',
                martes: 'martes',
                miercoles: 'miercoles',
                jueves: 'jueves',
                viernes: 'viernes',
                sabado: 'sabado',
            };

            const horaInicio = parseInt(bloque.inicio.split(':')[0]);
            const horaFin = parseInt(bloque.fin.split(':')[0]);

            for (let hora = horaInicio; hora < horaFin; hora++) {
                const idBloque = `block-${dias[bloque.dia]}-${hora}-${hora + 1}`;
                const celda = document.getElementById(idBloque);

                if (celda) {
                    celda.innerText = bloque.curso;
                    celda.classList.add('bg-red-500'); // Color rojo para bloques ocupados
                    celda.classList.add('text-xs', 'md:text-sm', 'lg:text-xl');
                }
            }
        });
    }

    // Pintar bloques reservados en el horario
    function pintarBloquesReservados(bloques) {
        bloques.forEach((bloque) => {
            const dias = {
                lunes: 'lunes',
                martes: 'martes',
                miercoles: 'miercoles',
                jueves: 'jueves',
                viernes: 'viernes',
                sabado: 'sabado',
            };

            const horaInicio = parseInt(bloque.inicio.split(':')[0]);
            const horaFin = parseInt(bloque.fin.split(':')[0]);

            for (let hora = horaInicio; hora < horaFin; hora++) {
                const idBloque = `block-${dias[bloque.dia]}-${hora}-${hora + 1}`;
                const celda = document.getElementById(idBloque);

                if (celda) {
                    celda.innerText = bloque.curso;
                    celda.classList.add('bg-yellow-500'); // Color amarillo para bloques reservados
                    celda.classList.add('text-xs', 'md:text-sm', 'lg:text-xl');
                }
            }
        });
    }

    // Llamada inicial
    pintarBloquesOcupados(bloquesOcupados);
    pintarBloquesReservados(bloquesReservados);
</script>



<!-- FIN SECCIÓN INTERMEDIA -->



@include('partials.footer')

</div>
@endsection
</body>
</html>
