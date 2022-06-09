<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liveroom</title>
    <link rel="stylesheet" href=" {{  asset('css/style.css')  }} "/> 
</head>
<body>
    <div class="drag-area"> 
        <form method="post" action="{{ Route('insert.file') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="video"/>
            <p>
                @if($errors->has('video'))
                    {{ $errors->first('video') }}
                @endif    
            </p>
            <input type="submit" name="click"/>   
        </form>      
    </div> 
</body>
</html>