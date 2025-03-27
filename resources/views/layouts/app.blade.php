<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <!-- Outros meta tags, etc. -->
    @vite('resources/css/app.css')  <!-- Referência ao arquivo CSS simples -->
</head>
<body>



    

    <div id="app">
        @yield('content')
        @yield('scripts')
    </div>




    @vite('resources/js/app.js')
</body>
</html>
