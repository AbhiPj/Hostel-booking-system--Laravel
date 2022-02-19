
@extends('layouts.user')

@section('content')

    <div class="content">
        <div class="slideshow-container">

{{--            Displaying primary Image--}}
                <div class="mySlides">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{ asset('images/' . $rooms['primaryImg']) }}">
{{--                    <div class="text">Caption Text</div>--}}
                </div>

{{--            Displaying additional images--}}
            @foreach (explode(',', $rooms['additionalImages']) as $image)
                <div class="mySlides">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{ asset('images/' . $image) }}">
                    {{--                    <div class="text">Caption Text</div>--}}
                </div>
            @endforeach
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
{{--        <br>--}}

        <div style="text-align:center; margin-top: 10px;margin-bottom: 10px">
            <span class="dot" onclick="currentSlide(1)"></span>
            <p hidden>{{$var=2}}</p>
            @foreach(explode(',', $rooms['additionalImages']) as $count)
                <span class="dot" onclick="currentSlide({{$var}})"></span>
                <p hidden>{{$var= $var +1}}</p>
                @endforeach
        </div>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;"    >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" style="border-right: grey solid 2px" href="#">Description</a>
                    <a class="nav-item nav-link" style="border-right: grey solid 2px" href="#">Services</a>
                    <a class="nav-item nav-link" style="border-right: grey solid 2px" href="#">Features</a>
                    <a class="nav-item nav-link" style="border-right: grey solid 2px" href="#">Pricing</a>
                    <a href="/user/rooms/booking/{{$id}}" class="btn btn-primary" style="margin-left: 56rem" >Book this room</a>

                </div>
            </div>
        </nav>
        <div style="display: flex;">
            <div style=" width: 58%;height: auto;min-height: 90vh; margin-top: 20px; border: solid 1px black; border-radius: 5px">
                <h2 style="margin: auto; color: grey">{{$rooms->roomName}}</h2>
                <p style="margin-top: 20px;color: grey;font-size: 15px">{{$rooms->about}}asdf asfa sdf asd fa sdf asd f asdf as fd asd fd  dsfasdf asdf
                asdfasdfa asdfasdfaf asdfasdfa asdfasdfa sdfasfa sdfa sdf asfasdf asd sdf asdf asfa sdf asd fa sdf asd f asdf as fd asd fd  dsfasdf asdf
                    asdfasdfa asdfasdfaf asdfasdfa asdfasdfa sdfasfa sdfa sdf asfasdf asd sdf</p>
                <br>
                <h2>Topic</h2>
                <ul>
                    <li>point</li>
                    <li>point</li>
                    <li>point</li>
                    <li>point</li>
                    <li>point</li>

                </ul>
            </div>
            <div style="margin-top: 20px;border: solid 1px black;width: 40%; margin-left: 20px; border-radius: 5px">
<h2> Header</h2>
            </div>



        </div>
{{--        <div style="background-color: blue">--}}
{{--            <a href="/user/rooms/booking/{{$id}}" class="btn btn-primary" style="right:0; position:fixed;">Book this room</a>--}}
{{--        </div>--}}
        <div>

        </div>
    </div>


    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
        }
    </script>
    <style>
        .content{
            height: auto;
            min-height: 100vh;
            width: 90%;
            margin: auto;
        }
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {
            display: none;
            height: 65vh;
            overflow: hidden;

        }
        img {
            vertical-align: middle;
            width: 100%;
            /*height: 70vh;*/
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        /* Slideshow container */
        .slideshow-container {
            /*max-width: 1000px;*/
            width: 100%;
            position: relative;
            margin: auto;

        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
    </style>
@endsection
