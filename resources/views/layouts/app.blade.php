<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>
</head>
<body>
    <ul>
        <li><a href="{{ route('accueil') }}">Accueil</a></li>
        <li><a href="{{ route('roles.index') }}">Role</a></li>
        <li><a href="{{ route('users.index') }}">User</a></li>
        <li><a href="{{ route('addresses.index') }}">Address</a></li>
        <li><a href="{{ route('contacts.index') }}">Contact</a></li>
        <li><a href="{{ route('nationalities.index') }}">Nationality</a></li>
        <li><a href="{{ route('civilstates.index') }}">Civilstate</a></li>
        <li><a href="{{ route('lawyers.index') }}">Lawyer</a></li>
        <li><a href="{{ route('lawfirms.index') }}">Lawfirm</a></li>
    </ul>
    @yield('content')
</body>
</html>