<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/cardvideo.css">
  <title>Liveroom</title>
</head>
<!-- Toda essa primeira div faz parte do cabecalho, eh so adicionar um estilo nele agr --> 
<!-- Qualquer coisa, so copiar a linha 14 do arquivo welcome.blade.php e dps ir alterando --> 
<body>
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Perfil</a>
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
        <video width="550" height="280">
            <source src="{{asset('upload')}}/{{$row['video']}}" type="video/mp4">
        </video>
        <h5> {{$row['titulo']}} </h5>
      @endforeach
  </div>
</body>
</html>
 

