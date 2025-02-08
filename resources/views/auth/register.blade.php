@extends('layouts.layout')

@section('content')
<section class="bg-gray-50 dark:bg-gray-900 min-h-screen flex items-center justify-center">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0" style="max-width: 90vw; max-height: 90vh;">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700" style="max-width: 400px;">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                  <img src="{{ asset('imagenes/logoUNT.png') }}" alt="Logo UNT" class="mx-auto mb-2">
                  <p class="text-center text-gray-700 dark:text-gray-300">Facultad de Educación y Ciencias de la Comunicación</p>
              </h1>
              <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div>
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                      <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') is-invalid @enderror">
                      @error('name')
                          <span class="text-sm text-red-600 dark:text-red-400" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo Electrónico</label>
                      <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('email') is-invalid @enderror">
                      @error('email')
                          <span class="text-sm text-red-600 dark:text-red-400" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña</label>
                      <input id="password" type="password" name="password" required autocomplete="new-password" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('password') is-invalid @enderror">
                      @error('password')
                          <span class="text-sm text-red-600 dark:text-red-400" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
                  <div>
                      <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirmar Contraseña</label>
                      <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  </div>
                  <button type="submit" class="w-full text-black bg-gray-400 hover:bg-blue-500  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                      Registrarse
                  </button>
                  <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                      ¿Ya tienes cuenta? <a href="{{ route('login') }}" class="font-medium text-red-400 hover:underline dark:text-red-500">Inicia Sesión</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
@endsection
