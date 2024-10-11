@props([
    'title',
    'active',
    'content',

])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title> {{ $title }} </title>

    <style>
        .welcome{
            min-height: calc(100vh - 56px);
        }
    </style>
</head>
<body class="d-flex flex-column boder vh-100">
    <x-menu.navbar active="{{ $active }}" />
    
    <div class="container {{ $active == 'welcome' ? 'd-flex justify-content-center welcome' : '' }}">{{ $content }}</div>
    
    <script src="https://kit.fontawesome.com/61b248fb6c.js" crossorigin="anonymous"></script>
    
</body>
</html>