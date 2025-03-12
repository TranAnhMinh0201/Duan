<!DOCTYPE html>
<html>
    <head>
        @include('backend.dashboard.com.head')
    </head>
    
    <body>
        <div id="wrapper">
            @include('backend.dashboard.com.sidebar')

            <div id="page-wrapper" class="gray-bg">
                @include('backend.dashboard.com.nav')
                @include($template)
                @include('backend.dashboard.com.footer')
            </div>
        </div>
            @include('backend.dashboard.com.script')
    </body>
</html>
