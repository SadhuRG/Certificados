<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- HEADER -->
<div class="w-full flex p-4 bg-white shadow-lg flex items-center fixed top-0 z-50">
    <div class="w-2/4 flex items-center justify-center">
        <a href="{{ url('/') }}" class="pl-30">
            <img src="/imagenes/logoDeSedipro.svg" alt="Descripción de la imagen" class="w-44 h-auto cursor-pointer">
        </a>
    </div>

    <!-- Botón de menú hamburguesa para móvil/tablet -->
    <div class="w-2/4 flex justify-end md:hidden">
        <button data-collapse-toggle="mobile-menu" type="button" 
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Abrir menú principal</span>
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Menú para desktop -->
    <div class="hidden w-2/4 md:flex justify-center">
        <a href="{{ route('login') }}"
            class="ml-1 mr-2 px-5 py-3 flex items-center justify-center bg-white hover:bg-[#E7C9EE] text-[#9636AD] font-semibold rounded-lg shadow-md transition-all duration-200 transform hover:scale-105 border-[#9636AD] border-2 lg:ml-2">
            <h1 class="flex items-center justify-center text-center text-xs text-[#9636AD] lg:text-xl lg:text-center">Crear Cuenta</h1>
        </a>
        <a href="{{ route('register') }}"
            class="ml-1 mr-2 px-5 py-3 flex items-center justify-center bg-[#9636AD] hover:bg-[#3454A1] font-semibold rounded-lg shadow-md transition-all duration-200 transform hover:scale-105 border-[#9636AD] hover:border-[#3454A1] border-2 lg:ml-2">
            <h1 class="flex items-center justify-center text-center text-xs text-white lg:text-xl lg:text-center">Iniciar Sesión</h1>
        </a>
    </div>

    <!-- Menú móvil -->
    <div class="hidden mt-5 fixed top-[72px] left-0 right-0 bg-white rounded-b-lg md:hidden transition-all duration-300" id="mobile-menu">
        <div class="items-center px-2 pt-2 pr-2 pb-2 space-y-1 bg-[#FFFFFF] rounded-b-lg shadow-[inset_0_12px_10px_-10px_rgba(0,0,0,0.3),0_12px_10px_-10px_rgba(0,0,0,0.4)]">
            <a href="{{ route('login') }}"
                class="block px-3 py-2 text-center text-base font-medium text-[#9636AD] bg-[#FFFFFF] hover:bg-[#E7C9EE] rounded-md">
                Crear Cuenta
            </a>
            <a href="{{ route('register') }}"
                class="block px-3 py-2 text-center text-base font-medium text-white bg-[#9636AD] hover:bg-[#3454A1] rounded-md">
                Iniciar Sesión
            </a>
        </div>
    </div>

    <script>
    document.querySelector('[data-collapse-toggle="mobile-menu"]').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        const mainContent = document.getElementById('main-content'); // Asegúrate de agregar este ID a tu contenido principal
        
        mobileMenu.classList.toggle('hidden');
        
        if (!mobileMenu.classList.contains('hidden')) {
            // Cuando el menú está abierto, añade margen al contenido
            mainContent.style.marginTop = '110px'; // Ajusta este valor según la altura de tu menú
        } else {
            // Cuando el menú está cerrado, regresa el margen a su valor original
            mainContent.style.marginTop = '20px'; // Altura original del header
        }
    });
    </script>    

</div>
<!-- FIN HEADER -->
</body>
</html>

