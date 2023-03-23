<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
          rel="stylesheet">
    <title>Klassy Cafe - Restaurant HTML Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body>
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.html" class="logo">
                        <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                    </a>
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="#about">About</a></li>
                        <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                        <li class="submenu">
                            <a href="javascript:;">Features</a>
                            <ul>
                                <li><a href="#">Features Page 1</a></li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a href="#">Features Page 4</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                        <li>
                        <li class="scroll-to-section bg-danger">
                            @auth()
                                <a href="{{ url('/showcart', Auth::user()->id) }}">
                                    Cart{{ $count }}
                                </a>
                            @endauth
                            @guest
                                Cart[0]
                            @endguest
                        </li>
                        <li>@if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                        @auth
                            <li>
                                <x-app-layout>
                                </x-app-layout>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}"
                                   class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a>
                            </li>

                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}"
                                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                </li>
                @endif
                @endauth
            </div>
            @endif

            </li>
            </ul>
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            </nav>
        </div>
    </div>
</header>

<div id="top">
    <table class="bg-secondary m-2 p-4">
        <tr class="p-4">
            <th class="text-center">Name</th>
            <th class="text-center">Price</th>
            <th class="text-center">Quantity</th>
            <th class="text-center">Action</th>
        </tr>


        <form action="{{ url('/orderconfirm') }}" method="POST">
            @csrf
            @foreach($data as $data)
                <tr class="text-center">
                    <td>
                        <input type="text" name="foodname[]" value="{{ $data->title }}" hidden="">
                        {{ $data->title }}
                    </td>
                    <td>
                        <input type="text" name="price[]" value="{{ $data->price }}" hidden="">
                        {{ $data->price }}
                    </td>
                    <td>
                        <input type="text" name="quantity[]" value="{{ $data->quantity }}" hidden="">
                        {{ $data->quantity }}
                    </td>
                </tr>
            @endforeach
            @foreach($data2 as $data2)
                <tr class="position-relative top-10">
                    <td><a href="{{ url('/remove', $data2->id) }}"
                           class="text-black btn btn-warning rounded-3 m-1">Remove</a></td>
                </tr>
        @endforeach
    </table>

    <div class="text-center">
        <button id="order" type="button" class="btn btn-primary mt-5">Order Now</button>
    </div>

    <div id="appear" style="display: none;" class="p-5">
        <div class="text-center p-2">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>

        <div class="text-center p-2">
            <label>Phone</label>
            <input type="number" name="phone" placeholder="Phone no">
        </div>

        <div class="text-center p-2">
            <label>Address</label>
            <input type="text" name="address" placeholder="Address">
        </div>

        <div class="text-center p-2">
            <input class="btn btn-success" type="submit" value="Confirm Order">
            <button id="close" type="button" class="btn btn-danger">Close</button>

        </div>
    </div>
    </form>
</div>


<script type="text/javascript">

    $("#order").click(
        function () {
            $("#appear").show();
        }
    );

    $("#close").click(
        function () {
            $("#appear").hide();
        }
    );

</script>
<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/isotope.js"></script>

<script src="assets/js/custom.js"></script>
<script>
    $(function () {
        var selectedClass = "";
        $("p").click(function () {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function () {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });
</script>
</body>
</html>
