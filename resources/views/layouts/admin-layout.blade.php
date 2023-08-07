<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <aside>
        <nav>
            <ul>
                <li><a href="/admin/">Dashboard</a></li>
                <li><a href="/admin/blog">Blog</a></li>
                <li><a href="/admin/fasilitas">Fasilitas</a></li>
                <li><a href="/admin/promo">Promo</a></li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <input type="submit" value="Logout">
                    </form>
                </li>
            </ul>
        </nav>
    </aside>
    <main>
        @yield('content')
    </main>
</body>

</html>
