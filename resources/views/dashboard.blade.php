<x-app-layout>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/dashboard.css">
    <title>Liveroom</title>
</head>
<body>
    <div class="mt-2" x-show="! photoPreview">
        @if (Auth::user()->profile_photo_path)
            <div class="foto&nome">
                <img class="h-20 w-20 rounded-full object-cover" src="/storage/{{Auth::user()->profile_photo_path }}" alt="{{ Auth::user()->name }}" />
                {{ Auth::user()->name }}
            </div>
        @else
            <img class="h-8 w-8 rounded-full object-cover" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 
        @endif
    </div>
    <div class="inserirpodcast">
            <a href="{{ url('/index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Adicionar Podcast</a>      
    </div>
</body>
</html>
</x-app-layout>


