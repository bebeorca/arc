@extends('layouts.main')

@section('bodycon')

    <div>

        {{-- <div class="pt-40 pb-40">
            <div class="bg-prim-y w-full h-max text-white flex items-center justify-center rounded-md ">
                <h1 id="welcome-title" class="text-justify p-9">Selamat datang di layanan rental mobil kami, tempat terpercaya untuk memenuhi
                    kebutuhan perjalanan Anda dengan kenyamanan dan fleksibilitas yang tinggi. Kami menawarkan beragam pilihan
                    kendaraan berkualitas mulai dari mobil keluarga hingga kendaraan mewah, siap menemani setiap perjalanan Anda.
                    Dengan tim profesional kami yang siap memberikan pelayanan terbaik, kami berkomitmen untuk menyediakan
                    pengalaman rental yang mudah, aman, dan memuaskan. Nikmati kemudahan memesan secara online atau langsung datang
                    ke lokasi kami, dan rasakan kebebasan menjelajahi destinasi favorit Anda tanpa khawatir. Percayakan perjalanan
                    Anda kepada kami, karena kepuasan dan keamanan Anda adalah prioritas utama kami.</h1>
            </div>
        </div> --}}

        <div class="h-screen grid items-center justify-center">
            <div>
                <div class="flex flex-wrap justify-center gap-8 items-center px-10 ">
                    @foreach ($mobils as $mobil)
                        <div class="bg-prim-y text-white w-56 h-72 rounded-lg grid hover:scale-110 transition-transform">
                            <div class="bg-white m-2 rounded-xl flex items-center justify-center">
                                <img src="{{ $mobil[1] }}" alt="" class="overflow-hidden max-h-28">
                            </div>
                            <div class="flex justify-center">
                                <h1>{{ $mobil[0] }}</h1>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="flex gap-2 justify-center items-center pb-40 mt-11">
                    <a href="">
                        <div class="flex justify-center text-white bg-prim-y h-max w-auto p-3 mx-2 rounded-full items-center hover:scale-110 transition-transform">
                            <img src="{{asset('images/wa.svg')}}" alt="" class="w-7 h-7">
                            <h1>Pilihan mobil lainnya</h1>
                        </div>    
                    </a>
                    <a href="">
                        <div class="flex justify-center text-white bg-prim-y h-max w-auto p-3 mx-2 rounded-full items-center hover:scale-110 transition-transform">
                            <img src="{{asset('images/wa.svg')}}" alt="" class="w-7 h-7">
                            <h1>Hubungi kami</h1>
                        </div>
                    </a>
                </div>
            </div>
    
        </div>
    
        
    </div>

    
@endsection
