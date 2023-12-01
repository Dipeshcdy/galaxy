<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- fav icon --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('images/favnth.png')}}">
    
    {{-- goole fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    {{--end of goole fonts --}}


    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    {{-- end of jquery cdn --}}

    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- end of font awesome cdn --}}

    {{-- data aos cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    {{--end of data aos cdn --}}

    @vite('resources/css/app.css')

    {{-- custom-css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    {{-- end of custom-css --}}
    @yield('css')
    <title>{{config('app.name')}}</title>
</head>
<body>
    
{{-- go to top --}}
<a href="#" id="scrollToTop" class="opacity-0 transition-all ease-linear rounded-full text-white bg-[#DF4838] py-[10px] px-[15px] fixed bottom-5 left-5 z-50 border-2 border-[#DF4838] hover:bg-transparent hover:!text-[#DF4838]" ><i class="fa fa-angle-double-up text-xl " aria-hidden="true"></i></a>
{{--end of go to top --}}
    @include('include.nav')
    @yield('content')
    @include('include.footer')
</body>
<script src="{{asset('js/script.js')}}"></script>
@yield('js')
<script>
    new WOW().init();
</script>
</html>