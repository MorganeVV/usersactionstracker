<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Users Actions Tracker</title>
</head>
<body>
    <header>
        <h1>Hoe de acties van gebruikers achterhalen in Laravel?</h1>
    </header>

    <main>
        @yield("main")
    </main>

    <footer><p>Created by - Morgane Van Velthoven</p></footer>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('js/ajax.js') }}"></script>
@yield("script")

</html>