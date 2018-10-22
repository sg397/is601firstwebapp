<!doctype html>
<html lang="en">

@include ('includes.head')

<body>

<div class="container">
    <header>
        @include('includes.menu')

    </header>

    <main role="main">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        @include ('includes.jsfooter')
        @include ('includes.footer')

    </footer>
</div>
</body>

</html>


