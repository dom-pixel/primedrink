<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>Prime Drink</title>
    @include('layouts.web.head')
</head>
<body style="overflow: visible;">
<div id="wrapper">
    <header class="header">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-offset-1 col-md-10">
                    <nav class="navbar yamm navbar-default">
                        <div class="container-full">
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">

            </div>
        </div>
    </footer>
</div>

@include('layouts.web.footer-script')

</body>
</html>
