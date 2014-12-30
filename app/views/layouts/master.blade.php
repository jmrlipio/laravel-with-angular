<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>

    <body>  
        <header>
            @include('includes.header')
        </header>     
        <!-- Container -->
        <section id="wrapper">
            <div class="container-fluid">

                <!-- Content -->
                @yield('content')

            </div>
        </section>
        {{ HTML::script('js/jquery.js') }}
        {{ HTML::script('js/bootstrap.min.js') }}

    </body>
</html>