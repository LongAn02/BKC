<!doctype html>
<html lang="en">
    <head>
    <!-- start head -->
        @include('layout.head')
    <!-- end head -->
    </head>
    <body>
        <!-- start header -->
        @include('layout.header')
        <!-- end header -->

        <!-- start navigation -->
        @include('layout.navigation')
        <!-- end navigation -->

        <!-- start section -->
        @yield('main_content')
        <!-- end section -->

        <!-- start footer -->
        @include('layout.footer')
        <!-- end footer -->

        @include('layout.icon_scroll_shopping_cart')

    <!-- start script -->
        @include('layout.script')
    <!-- end script -->
    </body>
</html>

