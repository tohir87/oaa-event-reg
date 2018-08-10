<!DOCTYPE html>
<html lang ="en">
    @include('layout.header')
    <body class="skin-purple sidebar-collapse">
        <div>
            @include('layout.top_menu')
            @include('layout.side_bar')
            
            @yield('content')
            <!-- Footer script goes here -->
            @include('layout.footer')
        </div><!-- ./wrapper -->
       @include('layout.footer_script')
    </body>
</html>