<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>

    <body ng-app="myApp">  
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

        @yield('page-script')

    </body>
</html>