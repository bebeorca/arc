<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <div class='cursor' id="cursor"></div>
    <title>{{ $title }}</title>
</head>

<body>

    <div class="flex items-center">

    </div>

    <div class="fixed mx-3 mt-6 top-0 right-0 flex justify-end z-40">
        <div class="flex gap-2">

            <a href="https://wa.me/6285343968624" target="_blank">
                <div
                    class="w-12 h-12 bg-prim-y border-2 border-prim-b rounded-md hover:scale-110 transition-transform flex items-center animate-bounce">
                    <img src="{{ asset('images/wa.svg') }}" alt="" class="p-2">
                </div>
            </a>

            <a href="">
                <div
                    class="w-12 h-12 bg-prim-y border-2 border-prim-b rounded-md hover:scale-110 transition-transform flex items-center animate-bounce">
                    <img src="{{ asset('images/ig.svg') }}" alt="" class="p-2 ">
                </div>
            </a>

        </div>
    </div>

    <div class="fixed bottom-0 left-0 m-3">
        <div class="flex gap-2">
            <div
                class="w-12 h-12 bg-prim-y border-2 border-prim-b rounded-md hover:scale-110 transition-transform flex items-center animate-bounce">
                <img src="{{ asset('images/arr-down.png') }}" alt="" class="p-2">
                <span class="text-white font-bold text-sm ml-3">SCROLL DOWN</span>
            </div>
        </div>
    </div>


    {{-- parallax --}}
    <div class="h-screen flex justify-center items-center overflow-hidden">
        <div id="logo" class="w-full bg-no-repeat bg-center bg-fixed grid items-center justify-center transition-transform ease-out">
            <img src="{{asset('images/logosvg.svg')}}" alt="">
            <h1 id="title" class="text-white font-bold text-2xl opacity-0 flex justify-center">Rental Mobil Makassar</h1>
        </div>
    </div>
    {{-- parallax --}}

    <div class="px-6">
        @yield('bodycon')
    </div>
</body>
<script>
    var cursor = document.getElementById("cursor");
    document.body.addEventListener("mousemove", function(e) {
        cursor.style.left = e.clientX + "px",
            cursor.style.top = e.clientY + "px";
    });

    document.addEventListener("DOMContentLoaded", function() {
        var replacers = document.querySelectorAll('[data-replace]');
        for (var i = 0; i < replacers.length; i++) {
            let replaceClasses = JSON.parse(replacers[i].dataset.replace.replace(/'/g, '"'));
            Object.keys(replaceClasses).forEach(function(key) {
                replacers[i].classList.remove(key);
                replacers[i].classList.add(replaceClasses[key]);
            });
        }
    });

    function animateOnScroll() {
        const element = document.getElementById('welcome-title');
        const elementTop = element.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (elementTop < windowHeight) {
            element.classList.add('animate-slide-up');
            window.removeEventListener('scroll', animateOnScroll);
        }
    }

    // Panggil fungsi saat halaman dimuat dan di-scroll
    document.addEventListener('DOMContentLoaded', animateOnScroll);
    window.addEventListener('scroll', animateOnScroll);

    function isDesktopView() {
        return window.innerWidth >= 768;
    }

    function changeWidth() {
        if (isDesktopView()) {
            var scroll = window.pageYOffset;
            var scaleFactor = Math.min(1 + (scroll / 500), 1.5); // Adjust as needed
            document.getElementById('logo').style.transform = 'scale(' + scaleFactor + ')';
        }
    }

    window.addEventListener('scroll', function() {
        if (isDesktopView()) {
            requestAnimationFrame(changeWidth);
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            const title = document.getElementById('title');
            title.classList.add('animate-fadeIn');
            title.style.opacity = '1'; // Set opacity to 1
        }, 1180); // Delay the animation by 2 seconds (2000 milliseconds)
    });
</script>

</script>

</html>
