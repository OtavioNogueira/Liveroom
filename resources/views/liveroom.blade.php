<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/cardvideo.css">
  <title>Liveroom</title>
</head>
<!-- Toda essa primeira div faz parte do cabecalho, eh so adicionar um estilo nele agr --> 
<!-- Qualquer coisa, so copiar a linha 14 do arquivo welcome.blade.php e dps ir alterando --> 
<body>
    <header>

    <div class="cabecalho">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="logoimg">
                    <a href="{{ url('/') }}">
                    <img src="{{asset('img/Logo10.png')}}" alt="logo">
                    </a>
                </div>

</header>

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="linkperfil">Perfil</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Cadastrar</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
  <div id=uploadedvideo> 
      @foreach($data as $row)
      <a class="titulovideo" href="{{asset('upload')}}/{{$row['video']}}"> <h5> {{$row['titulo']}} </h5> </a>
        <video width="400" height="200">
            <source src="{{asset('upload')}}/{{$row['video']}}" type="video/mp4">
        </video>
        <a href="{{asset('upload')}}/{{$row['video']}}"> <button> Assistir </button> </a>  
      @endforeach
  </div>
</body>
</html>
 

