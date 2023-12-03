@extends('layout.master')
@section('content')
    <section  class="home-section pt-10">
          <!-- Swiper -->
        <div id="home_section" class="swiper homeSwiper home">
            <div class="swiper-wrapper">
                {{-- element to be in loop --}}
                @if (isset($banners) && count($banners)>0)
                @foreach ($banners as $banner)
                    <div class="swiper-slide">
                        <div class="  md:px-20 px-5 pt-32 pb-10 lg:py-32   grid lg:grid-cols-2 grid-cols-1 gap-28">
                            <div class=" lg:flex lg:order-1 order-2 lg:mr-32">
                                <div class="my-auto">
                                    <h1 class="text-[#DF4838] font-bold text-5xl wow animate__animated animate__fadeInDown">{{$banner->title}}</h1>
                                    <p class="text-justify font-semibold text-xl my-10 text-gray-500 wow animate__animated animate__fadeInLeft">{{strip_tags($banner->content)}}</p>
                                    <div class="mt-10 wow animate__animated animate__fadeInDown animate__delay-1s">
                                        <a href="" class="px-9 btn hover:!bg-left  !bg-right duration-500 py-4 font-semibold text-xl rounded-md text-white" >Get started</a>
                                    </div>
                                    </div>
                            </div>
                            <div class="my-auto lg:order-2  order-1 flex lg:block">
                                <img class="animate-up-down" src ="{{ $banner->getFirstMediaUrl('banner') != null ? $banner->getFirstMediaUrl('banner') : null }}" alt="img">
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                    @else
                        <div class="swiper-slide">
                            <div class="home  md:px-20 px-5 lg:py-36 py-10 grid lg:grid-cols-2 grid-cols-1 gap-10 sm:gap-28">
                                <div class=" lg:flex lg:order-1 order-2 lg:mr-32">
                                    <div class="my-auto">
                                        <h1 class="text-[#DF4838] font-bold text-4xl wow animate__animated animate__fadeInDown">Deals with surgical and chemical products</h1>
                                        <p class="text-justify font-semibold text-xl my-10 text-gray-500 wow animate__animated animate__fadeInLeft">At Galaxy Trade Concern, we take pride in being at the forefront of innovation and quality in the realm of surgical and chemical products. With a relentless commitment to advancing healthcare and industrial solutions, we strive to be your go-to partner for excellence.
                                        </p>
                                        <div class="mt-10 wow animate__animated animate__fadeInDown animate__delay-1s">
                                            <!-- <a href="" class="px-9 btn hover:!bg-left  !bg-right duration-500 py-4 font-semibold text-xl rounded-md text-white" >Get started</a> -->
                                        </div>
                                        </div>
                                </div>
                                <div class="my-auto lg:order-2  order-1 flex lg:block">
                                    <img class="animate-up-down" src="{{asset('images/image-removebg-preview.png')}}" alt="">
                                </div>
                                
                            </div>
                        </div>
                    @endif
                {{-- end of element to be in loop --}}
                
            </div>
            <div class="swiper-button-next home-swiper-button-next"></div>
            <div class="swiper-button-prev home-swiper-button-prev"></div>
        </div>

        <!-- Swiper JS -->

        {{-- achievement --}}
        {{-- desktop view --}}
        <div class="lg:block hidden absolute achievement w-[300px] h-[550px] top-32 z-50 left-1/2 rounded-l-full border-l-[3px] duration-500 border-red-600">
            <!-- <div id="home-achievement-circle-1" class="absolute circle home-achievement-circle-1 overflow-hidden w-[130px] h-[130px]  rounded-full  bg-[#162052] text-white hover:scale-110  cursor-pointer duration-500">
                <div class="content absolute inset-[10px] flex z-[3]">
                    <h2 class="m-auto font-[520]">+ <span class="text-xl font-semibold tracking-[0.2rem] count">{{$achievement->projects ?? 100}}</span><br>PROJECTS</h2>

                </div>
            </div>
            <div onmouseover="mouseFunction()" onmouseout="mouseFunction()" class="absolute z-[10] circle home-achivement-circle-2 overflow-hidden w-[130px] h-[130px] flex rounded-full bg-[#162052] text-white hover:scale-110 duration-500 cursor-pointer">
                <div class="content absolute inset-[10px] flex z-[3]">
                    <h2 class="m-auto font-[520] uppercase">+ <span class="text-xl font-semibold tracking-[0.2rem] count">{{$achievement->companies ?? 100}}</span><br>companies</h2>
                </div>
            </div>
            <div id="home-achievement-circle-3" class="absolute circle home-achievement-circle-3 overflow-hidden w-[130px] h-[130px] flex rounded-full text-white bg-[#162052] hover:scale-110 duration-500 cursor-pointer">
                <div class="content absolute inset-[10px] flex z-[3]">
                    <h2 class="m-auto font-[520] uppercase">+ <span class="text-xl font-semibold tracking-[0.2rem] count">{{$achievement->clients ?? 100}}</span><br>clients</h2>
                </div>
            </div> -->
        </div>
        {{-- end of desktop view --}}
        {{-- mobile view --}}
        <!-- <div class="achievement-mobile lg:hidden grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-10 py-10 px-40">
            <div class="relative circle overflow-hidden mx-auto w-[130px] h-[130px] flex rounded-full text-white bg-[#162052] hover:scale-110 duration-500 cursor-pointer">
                <div class="content absolute inset-[10px] flex z-[3]">
                    <h2 class="m-auto font-[520] uppercase">+ <span class="text-xl font-semibold tracking-[0.2rem] count">{{$achievement->projects ?? 100}}</span><br>Projects</h2>
                </div>
            </div>
            <div class="relative circle mx-auto overflow-hidden w-[130px] h-[130px] flex rounded-full text-white bg-[#162052] hover:scale-110 duration-500 cursor-pointer">
                <div class="content absolute inset-[10px] flex z-[3]">
                    <h2 class="m-auto font-[520] uppercase">+ <span class="text-xl font-semibold tracking-[0.2rem] count">{{$achievement->clients ?? 100}}</span><br>Clients</h2>
                </div>
            </div>
            <div class="relative circle mx-auto overflow-hidden w-[130px] h-[130px] flex rounded-full text-white bg-[#162052] hover:scale-110 duration-500 cursor-pointer">
                <div class="content absolute inset-[10px] flex z-[3]">
                    <h2 class="m-auto font-[520] uppercase">+ <span class="text-xl font-semibold tracking-[0.2rem] count">{{$achievement->companies ?? 100}}</span><br>Companies</h2>
                </div>
            </div>
        </div> -->
        {{-- end of mobile view --}}
        {{-- end of achievement --}}
        
        {{-- our services --}}
        <div id="services_section" class="md:px-20 px-5 pt-10 services">
            <div class="wow animate__animated animate__fadeInUp">
                <div class="flex">
                    <div class="relative moveLine px-12 py-2 mx-auto  border-2  rounded-md shadow-lg shadow-gray-300">
                        <h2 class="text-red-600 font-[600] text-md   text-center ">Our services</h2>
                        <div class="circle"></div>
                        <div class="circle-2"></div>
                    </div>
                </div>
            </div>
            <h2 class="mt-8 lg:text-4xl text-xl font-semibold  text-center wow animate__animated animate__zoomIn">Chemical and Surgical Equipments All Over Nepal</h2>
            
            @if (isset($services) && count($services)>0)
            <div class="hidden lg:grid lg:grid-cols-4  my-10 wow animate__animated animate__zoomIn h-auto min-h-[500px]">
                <div class="button-div">
                    {{-- element to be in loop --}}
                    @foreach ($services as $index => $service)
                        
                    <div class="flex mt-6">
                        <button  data-target="content-{{$service->id}}" class="home-services-button {{$index === 0 ? 'active':''}} capitalize text-sm items-center flex py-3 px-4 ml-auto bg-white shadow-xl rounded-xl hover:bg-slate-200 w-[250px] duration-500">
                        {{$service->title}}
                        </button>
                    </div>
                    @endforeach
                    {{-- end of element to be in loop --}}
                </div>
                <div class="col-span-3 px-10 content-div relative">
                    @foreach ($services as $index => $service)
                        
                    <div id="content-{{$service->id}}" class="home-services-content {{$index === 0 ? 'active':''}} p-5 white lg:h-full rounded-xl content grid grid-cols-2 gap-5">
                        <div class="flex">
                            <div class="m-auto">
                                <h2 class="mb-5 font-bold text-xl capitalize">{{$service->title}}</h2>
                                <p class="text-justify">{{strip_tags($service->content)}}</p>
                            </div>
                        </div>
                        <div class=" w-full flex">
                            <img class="w-full my-auto object-cover object-center rounded-xl" src ="{{ $service->getFirstMediaUrl('service') != null ? $service->getFirstMediaUrl('service') : null }}" alt="image">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- mobile screen --}}
            <div class="lg:hidden grid grid-cols-2 gap-4 mt-10">
                    <a  class=" btn capitalize text-white text-sm hover:!bg-right hover:-translate-y-2 items-center flex py-3 px-4 shadow-xl rounded-xl duration-500">
                        Chemical
                    </a>
                    <a  class=" btn capitalize text-white text-sm hover:!bg-right hover:-translate-y-2 items-center flex py-3 px-4 shadow-xl rounded-xl duration-500">
                        Surgical
                    </a>
            </div>
            {{-- end of mobile screen --}}
            @else
            <div class="hidden lg:grid lg:grid-cols-4 grid-cols-2 my-10 wow animate__animated animate__zoomIn h-[50vh]">
                <div class="button-div">
                    <div class="flex mt-6">
                        <button data-target="content-1" class="home-services-button active capitalize text-sm items-center flex py-3 px-4 ml-auto bg-white shadow-xl rounded-xl hover:bg-slate-200 w-[250px] duration-500">
                            <i class=" mr-3  fa-solid fa-code text-xl text-[#2D85C6]"></i>Chemical
                            
                        </button>
                    </div>
                    <div class="flex mt-6">
                        <button data-target="content-2" class="home-services-button capitalize text-sm items-center flex py-3 px-4 ml-auto bg-white shadow-xl rounded-xl hover:bg-slate-200 w-[250px]  duration-500">
                            <i class=" mr-3  fa fa-bullhorn text-xl text-[#2D85C6] -rotate-45"></i>Surgical
    
                        </button>
                    </div>
                   
                </div>
                <div class="col-span-3 px-10 content-div relative">
                    
                    <div id="content-1" class="home-services-content active p-5 white lg:h-full rounded-xl content grid grid-cols-2 gap-5">
                        <div class="flex">
                            <div class="m-auto">
                                <h2 class="mb-5 font-bold text-xl capitalize">Chemical</h2>
                                <p class="text-justify">Discover tailored chemical solutions with Galaxy Trade Concern. Our precision formulations, stringent quality assurance, and eco-friendly options cater to diverse industries. Partner with us for effective, responsible, and high-quality chemical products meeting your specific needs.</p>
                            </div>
                        </div>
                        <div class=" w-full">
                            <img class="w-full  object-cover object-center rounded-xl" src="{{asset('images/chemical.jpg')}}" alt="">
                        </div>
                    </div>
                    <div id="content-2" class="home-services-content p-5 white h-full rounded-xl content grid grid-cols-2 gap-5">
                        <div class="flex">
                            <div class="m-auto">
                                <h2 class="mb-5 font-bold text-xl capitalize">Surgical</h2>
                                <p class="text-justify">Galaxy Trade Concern offers cutting-edge surgical instruments designed for precision and efficiency across various medical specialties. Our commitment to quality and comprehensive training ensures healthcare professionals have the best tools for optimal patient care.</p>
                            </div>
                        </div>
                        <div class=" w-full flex">
                            <img class="w-full my-auto rounded-xl" src="{{asset('images/surgical.jpg')}}" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
            {{-- mobile screen --}}
            <div class="lg:hidden grid grid-cols-2 gap-4 mt-10">
                <button data-target="mobile-content-1" class="mobileServicesBtn btn capitalize text-white text-sm hover:!bg-right -translate-y-2 items-center flex py-3 px-4 shadow-xl rounded-xl duration-500">
                    Chemical
                </button>
                <button data-target="mobile-content-2" class=" mobileServicesBtn btn capitalize text-white text-sm hover:!bg-right hover:-translate-y-2 items-center flex py-3 px-4 shadow-xl rounded-xl duration-500">
                    Surgical
                </button>
            </div>
            <div class="relative h-[60vh] sm:hidden">
                <div id="mobile-content-1" class="absolute mobileServicesBtn-content active top-0 left-0 w-full h-full p-5 white lg:h-full rounded-xl content">
                    <h2 class="mb-5 font-bold text-xl capitalize">Chemical</h2>
                    <div class=" w-full">
                        <img class="w-full  object-cover object-center rounded-xl" src="{{asset('images/chemical.jpg')}}" alt="">
                    </div>
                    <div class="flex mt-5">
                        <div class="m-auto">
                            <p class="text-justify">Discover tailored chemical solutions with Galaxy Trade Concern. Our precision formulations, stringent quality assurance, and eco-friendly options cater to diverse industries. Partner with us for effective, responsible, and high-quality chemical products meeting your specific needs.</p>
                        </div>
                    </div>
                </div>
                <div id="mobile-content-2" class="absolute mobileServicesBtn-content top-0 left-0 w-full h-full p-5 white lg:h-full rounded-xl content">
                    <h2 class="mb-5 font-bold text-xl capitalize">Surgical</h2>
                    <div class=" w-full">
                        <img class="w-full  object-cover object-center rounded-xl" src="{{asset('images/surgical.jpg')}}" alt="">
                    </div>
                    <div class="flex mt-5">
                        <div class="m-auto">
                            <p class="text-justify">Galaxy Trade Concern offers cutting-edge surgical instruments designed for precision and efficiency across various medical specialties. Our commitment to quality and comprehensive training ensures healthcare professionals have the best tools for optimal patient care.</p>
                        </div>
                    </div>
                </div>

                
            </div>
            {{-- end of mobile screen --}}
            @endif
        </div>
    
    
        {{-- end of our services --}}
        {{-- slider --}}
        <div id="products_section" class="md:px-36 px-5 pb-20 sm:pt-20  relative">
            <div class="wow animate__animated animate__fadeInUp">
                <div class="flex">
                    <div class="relative moveLine px-12 py-2 mx-auto  border-2  rounded-md shadow-lg shadow-gray-300">
                        <h2 class="text-red-600 font-[600] text-md   text-center ">Our Products</h2>
                        <div class="circle"></div>
                        <div class="circle-2"></div>
                    </div>
                </div>
            </div>
            
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 mt-10">
                <div class="wow animate__animated animate__zoomIn">
                    <div class="swiper sliderSwiper">
                        <div class="swiper-wrapper">
                            @if (isset($sliders) && count($sliders)>0)
                            {{-- element to be in loop --}}
                            @foreach ($sliders as $slider)
                                
                            <div class="swiper-slide cursor-pointer">
                              <img class="rounded-xl object-cover object-center w-full h-full" src="{{ $slider->getFirstMediaUrl('slider') != null ? $slider->getFirstMediaUrl('slider') : null }}" alt="image" />
                            </div>
                            @endforeach
                            {{-- end of element to be in loop --}}
                            @else    
                            <div class="swiper-slide cursor-pointer">
                              <img class="rounded-xl object-cover object-center w-full h-full" src="{{asset('images/surgical.jpg')}}" />
                            </div>
                            <div class="swiper-slide cursor-pointer">
                              <img class="rounded-xl object-cover object-center w-full h-full" src="{{asset('images/surgical2.jpeg')}}" />
                            </div>
                            <div class="swiper-slide cursor-pointer">
                              <img class="rounded-xl object-cover object-center w-full h-full" src="{{asset('images/surgical3.jpeg')}}" />
                            </div>
                            @endif
                        </div>
                      </div>
                </div>
                <div class="wow animate__animated animate__fadeInLeft home-digital-marketing-section">
                    <div class="w-1/6 mx-auto lg:mx-0">
                        <img class="w-full" src="{{asset('images/image-removebg-preview.png')}}" alt="">
                    </div>
                    @if (!empty($digitalMarketing))
                        <h2 class="text-4xl font-semibold text-center lg:text-left">{{$digitalMarketing->title}}</h2>
                        <div class="grid grid-cols-2 gap-5 mt-5">
                            @if(count($digitalMarketing->subpackage)>0)
                            @foreach ($digitalMarketing->subpackage as $subpackage)
                                <a href="{{route('services.individual',$subpackage->slug)}}" class=" btn capitalize text-white text-sm hover:!bg-right hover:-translate-y-2 items-center flex py-3 px-4 shadow-xl rounded-xl duration-500">
                                    {{$subpackage->title}}
                                </a>
                            @endforeach
                            @endif
                            
                        </div>
                    @else
                        <h2 class="text-4xl font-semibold text-[#2D85C6] text-center lg:text-left">Surgical And Chemical Products</h2>
                        <div class="mt-5">
                            <p>
                                Galaxy Trade Concern is your comprehensive solution provider, delivering cutting-edge surgical instruments for precise and efficient medical procedures across diverse specialties. Our commitment to quality extends to chemical services, offering tailored formulations that meet stringent industry standards. From precision in surgery to eco-friendly chemical solutions, we ensure your needs are met with excellence, innovation, and a customer-centric approach.
                            </p>
                        </div>
                        <!--<div class="grid grid-cols-2 gap-5 mt-5">-->
                        <!--    <a href="#" class=" btn capitalize text-white text-sm hover:!bg-right hover:-translate-y-2 items-center flex py-3 px-4 shadow-xl rounded-xl duration-500">-->
                        <!--        <i class=" mr-3  fa fa-bullhorn text-xl "></i>-->
                        <!--        Social Media Marketing-->
                        <!--    </a>-->
                           
                        <!--</div>-->
                    @endif
                </div>
            </div>
            <div class="swiper-pagination slider-swiper-pagination !bottom-8"></div>
        </div>
        {{-- end of slider --}}
        
        
        {{-- about proprietor section --}}
        <div id="about_section" class="md:px-36 px-5 py-10 ">
            <div class="wow animate__animated animate__fadeInUp">
                <div class="flex">
                    <div class="relative moveLine px-12 py-2 mx-auto  border-2  rounded-md shadow-lg shadow-gray-300">
                        <h2 class="text-red-600 font-[600] text-md   text-center ">About Proprietor</h2>
                        <div class="circle"></div>
                        <div class="circle-2"></div>
                    </div>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 mt-10 gap-8">
                <div class="my-auto md:order-1 order-2">
                <h2 class="font-bold text-2xl mb-5">Sirish Chaudhary, Proprietor</h2>
                    <p class="text-justify">
                   
                    At the helm of Galaxy Trade Concern is Sirish Chaudhary, the visionary proprietor and driving force behind our commitment to excellence. With a profound passion for advancing healthcare and industrial solutions, Sirish Chaudhary has led the company with a keen focus on innovation, quality, and customer satisfaction. Their extensive experience in the industry, coupled with a dedication to staying at the forefront of advancements, ensures that Galaxy Trade Concern continues to be a trusted partner in delivering top-tier surgical and chemical products</p>
                </div>
                <div class="md:order-2 order-1">  
                    <img class="w-[350px]" src="{{asset('images/propritor.jpg')}}" alt="">
                </div>
            </div>
        </div>
        {{-- end of about proprietor section --}}
    
        {{-- request on quote --}}
        <div id="contact_section" class="md:px-36 px-5 md:py-10 request-on-quote">
            
            <div class="grid lg:grid-cols-2 grid-cols-1 lg:gap-36 gap-4 mt-20">
                <div class="pr-20">
                    <div class="wow animate__animated animate__zoomIn">
                        <div class="flex">
                            
                            <div class="relative moveLine px-3 py-2 border-2  rounded-md shadow-lg shadow-gray-400">
                                <h2 class="text-white font-[600] text-md">Request On Quote</h2>
                                <div class="circle !bg-black"></div>
                                <div class="circle-2 !bg-black"></div>
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-4 text-4xl font-semibold text-white wow animate__animated animate__zoomIn" >To make requests for further information, contact us via our social channels.</h2>
                </div>
                
                <div class="">
                    <form method="POST" class="wow animate__animated animate__zoomInLeft text-sm" action="" >
                        @csrf
                        <div>
                            <label class="text-white font-semibold" for="name">NAME</label>
                            <input id="name" value="{{old('name')}}" name="name" class="w-full px-2 border-2 text-white placeholder:text-white outline-none focus:!outline-0 bg-transparent rounded-xl h-14 mt-3" placeholder="Your Name"  type="text">
                            @error('name')
                                    <p class="text-sm text-red-600 pt-2">* {{$message}}</p>
                            @enderror
                        </div>
                        <div class="mt-8">
                            <label class="text-white font-semibold" for="email">EMAIL</label>
                            <input id="email" value="{{old('email')}}" name="email" class="w-full px-2 border-2 bg-transparent placeholder:text-white text-white rounded-xl h-14 mt-3 outline-none" placeholder="Your email"  type="text">
                            @error('email')
                                    <p class="text-sm text-red-600 pt-2">* {{$message}}</p>
                            @enderror
                        </div>
                        <div class="mt-8">
                            <label class="text-white font-semibold" for="phone">PHONE</label>
                            <input id="phone" value="{{old('phone')}}" name="phone" class="w-full px-2 border-2 bg-transparent placeholder:text-white text-white rounded-xl h-14 mt-3 outline-none" placeholder="Your phone"  type="text">
                            @error('phone')
                                    <p class="text-sm text-red-600 pt-2">* {{$message}}</p>
                            @enderror
                        </div>
                        <div class="mt-10">
                            <input type="submit" class="py-4 px-9 cursor-pointer rounded-md font-semibold  hover:bg-red-600 bg-red-500 text-white transition-colors ease-linear" value="Request (Not Done Yet!)">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- end of request on quote --}}

        {{-- testimonial section --}}
        <!-- <section class="testimonial-section mobile:px-20 sm:px-5 lg:px-20 py-10">
            <div class="wow animate__animated animate__fadeInUp">
                <div class="flex">
                    <div class="relative moveLine px-12 py-2 mx-auto border-2  rounded-md shadow-lg shadow-gray-300">
                        <h2 class="text-red-600 font-[600] text-md   text-center wow animate__animated animate__fadeInUp">Testimonials</h2>
                        <div class="circle"></div>
                        <div class="circle-2"></div>
                    </div>
                </div>
            </div>
            <div class="swiper testimonial-swipper wow animate__animated animate__zoomIn">
                <div class="swiper-wrapper py-10 !p-0">
                    @if (isset($testimonials) && count($testimonials)>0)
                    @foreach ($testimonials as $testimonial )
                    <div class="swiper-slide">
                        <div class="overflow-hidden w-full m-4 flex justify-center h-full  shadow-xl bg-[#DF4838]">
                            <div class="bg-white rounded-tl-full w-full h-full ">
                                <div class="flex">
                                    <div class="flex mx-auto mt-10 items-center">
                                        <div class="p-1 bg-white rounded-full w-[100px] h-[100px]">
                                            <img class="object-cover object-center w-full h-full rounded-full" src="{{$testimonial->getFirstMediaUrl('testimonial') != null ? $testimonial->getFirstMediaUrl('testimonial') : null }}" alt="image" class="rounded-full" />
                                        </div>
                                        <div>
                                            <div class="font-bold text-stone-700 mx-4">{{$testimonial->name}}</div>
                                            <div class="text-sm w-[200px] font-medium text-stone-500 hover:text-stone-500 mx-4">
                                                <a href="#" class="">{{$testimonial->position}}, {{$testimonial->company}}</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-2 mt-5 flex mx-10">
                                    <p class="text-stone-700 mx-auto text-sm text-center">{{strip_tags($testimonial->message)}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="swiper-slide">
                        <div class="overflow-hidden w-full m-4 flex justify-center h-full  shadow-xl bg-[#DF4838]">
                            <div class="bg-white rounded-tl-full w-full h-full ">
                                        <div class="flex">
                                            <div class="flex mx-auto mt-10 items-center">
                                                <div class="p-1 bg-white rounded-full">
                
                                                    <img src="https://source.unsplash.com/100x100/?girl" alt="" class="rounded-full" />
                                                </div>
                                                <div>
                                                    <div class="font-bold text-stone-700 mx-4">Elina Gilbert</div>
                                                    <div class="text-sm font-medium text-stone-500 hover:text-stone-500 mx-4"><a
                                                            href="#">ShareHolder, amazing infosys</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-2 mt-5 flex mx-10">
                                            <p class="text-stone-700 mx-auto text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eligendi culpa saepe ullam natus? Cumque veniam quod adipisci cum, in nemo laboriosam tenetur aut, quaerat quisquam facilis itaque harum maxime.</p>
                                        </div>
            
            
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="overflow-hidden w-full m-4 flex justify-center h-full  shadow-xl bg-[#DF4838]">
                            <div class="bg-white rounded-tl-full w-full h-full ">
                                        <div class="flex">
                                            <div class="flex mx-auto mt-10 items-center">
                                                <div class="p-1 bg-white rounded-full">
                
                                                    <img src="https://source.unsplash.com/100x100/?girl" alt="" class="rounded-full" />
                                                </div>
                                                <div>
                                                    <div class="font-bold text-stone-700 mx-4">Elina Gilbert</div>
                                                    <div class="text-sm font-medium text-stone-500 hover:text-stone-500 mx-4"><a
                                                            href="#">ShareHolder, amazing infosys</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-2 mt-5 flex mx-10">
                                            <p class="text-stone-700 mx-auto text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eligendi culpa saepe ullam natus? Cumque veniam quod adipisci cum, in nemo laboriosam tenetur aut, quaerat quisquam facilis itaque harum maxime.</p>
                                        </div>
            
            
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="overflow-hidden w-full m-4 flex justify-center h-full  shadow-xl bg-[#DF4838]">
                            <div class="bg-white rounded-tl-full w-full h-full ">
                                        <div class="flex">
                                            <div class="flex mx-auto mt-10 items-center">
                                                <div class="p-1 bg-white rounded-full">
                
                                                    <img src="https://source.unsplash.com/100x100/?girl" alt="" class="rounded-full" />
                                                </div>
                                                <div>
                                                    <div class="font-bold text-stone-700 mx-4">Elina Gilbert</div>
                                                    <div class="text-sm font-medium text-stone-500 hover:text-stone-500 mx-4"><a
                                                            href="#">ShareHolder, amazing infosys</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-2 mt-5 flex mx-10">
                                            <p class="text-stone-700 mx-auto text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eligendi culpa saepe ullam natus? Cumque veniam quod adipisci cum, in nemo laboriosam tenetur aut, quaerat quisquam facilis itaque harum maxime.</p>
                                        </div>
            
            
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="overflow-hidden w-full m-4 flex justify-center h-full  shadow-xl bg-[#DF4838]">
                            <div class="bg-white rounded-tl-full w-full h-full ">
                                        <div class="flex">
                                            <div class="flex mx-auto mt-10 items-center">
                                                <div class="p-1 bg-white rounded-full">
                
                                                    <img src="https://source.unsplash.com/100x100/?girl" alt="" class="rounded-full" />
                                                </div>
                                                <div>
                                                    <div class="font-bold text-stone-700 mx-4">Elina Gilbert</div>
                                                    <div class="text-sm font-medium text-stone-500 hover:text-stone-500 mx-4"><a
                                                            href="#">ShareHolder, amazing infosys</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-2 mt-5 flex mx-10">
                                            <p class="text-stone-700 mx-auto text-sm text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis eligendi culpa saepe ullam natus? Cumque veniam quod adipisci cum, in nemo laboriosam tenetur aut, quaerat quisquam facilis itaque harum maxime.</p>
                                        </div>
            
            
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="swiper-pagination testimonial-pagination"></div>
            </div>
        </section> -->
        {{-- end of testimonial section --}}
        <!--{{-- brands --}}-->
        <!--<div class="md:px-36 px-5 py-10 mt-10">-->
        <!--    <div class="wow animate__animated animate__fadeInUp">-->
        <!--        <div class="flex">-->
        <!--            <div class="relative moveLine px-12 py-2 mx-auto border-2  rounded-md shadow-lg shadow-gray-300">-->
        <!--                <h2 class="text-red-600 font-[600] text-md   text-center wow animate__animated animate__fadeInUp">Brands</h2>-->
        <!--                <div class="circle"></div>-->
        <!--                <div class="circle-2"></div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--    <h2 class="mt-2 text-4xl font-semibold text-center wow animate__animated animate__zoomIn">Top companies we have worked with</h2>-->
        <!--    <div class="grid lg:grid-cols-8 mobile:grid-cols-3 grid-cols-2  gap-2 my-14 wow animate__animated animate__zoomIn">-->
        <!--        @if (isset($companies) && count($companies)>0)-->
        <!--            @foreach ($companies as $company )-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{$company->getFirstMediaUrl('company') != null ? $company->getFirstMediaUrl('company') : null }}" alt="image">-->
        <!--            </div>-->
        <!--            @endforeach-->
        <!--        @else-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/publisher.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/logo company.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/samsung.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/soundware.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/sample.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/company.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/brand.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/fruity.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/publisher.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/logo company.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/samsung.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/soundware.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/sample.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/company.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/brand.png')}}" alt="">-->
        <!--            </div>-->
        <!--            <div class="h-16 overflow-hidden flex items-center">-->
        <!--                <img class="w-full object-cover object-center" src="{{asset('images/fruity.png')}}" alt="">-->
        <!--            </div>-->
        <!--        @endif-->
        <!--    </div>-->
        <!--</div>-->
        <!--{{-- end of brands --}}-->
    </section>

    <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
 <script>
   var swiper = new Swiper(".homeSwiper", {
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      loop:true,
     pagination: {
       el: ".home-swiper-pagination",
       clickable: true,

     },
     navigation: {
        nextEl: ".home-swiper-button-next",
        prevEl: ".home-swiper-button-prev",
      },
   });
 </script>
 <script>

    var swiper = new Swiper(".sliderSwiper", {
      spaceBetween: 30,
      loop: true,
      effect: "fade",
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".slider-swiper-pagination",
        clickable: true,
      },
    });
  </script>
    <script>
        var swiper = new Swiper(".testimonial-swipper", {
            autoplay: {
              delay: 2500,
              disableOnInteraction: false,
            },
          pagination: {
            el: ".testimonial-pagination",
            clickable: true,
          },
          breakpoints: {
            
        640: {
            slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        
      },
        });
    </script>
@endsection
@section('css')
 <!-- Link Swiper's CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
 
    <style>
         @keyframes moveUpDown {
    0%, 100% {
      transform: translateY(20px);
    }
    50% {
      transform: translateY(-20px); /* Adjust the distance as needed */
    }
  }
         .animate-up-down {
            animation: moveUpDown 3s ease-in-out infinite; /* Adjust the duration as needed */
        }


        .home{
            background: rgb(239, 219, 208);
            background: linear-gradient(360deg, rgb(239, 219, 214) 26%, rgba(255,255,255,0.9725023798581933) 100%); 
        }
    .home-section .swiper {
      width: 100%;
      height: 100%;
    }

    .home-section .swiper-slide {
      background-position: center;
      background-size: cover;
    }

    .home-section .swiper-slide img {
      display: block;
      width: 100%;
    }
    .home-section .swiper-pagination-bullet{
      padding: 0 15px;
      cursor: pointer;
      border-radius: 0px;
      border-radius: 13px;
      transition: all 0.3s ease; 
      background-color: #2D85C6;
    }
    .home-section .swiper-pagination-bullet-active{
      background-color: red;
      padding: 0 30px;
    }
    .request-on-quote{
        background: linear-gradient(to right, rgba(229, 30, 30, 0.8), rgba(215, 178, 176, 0.85)), url('images/lining.jpg');
        background-repeat: no-repeat;
        background-position: 0 0;
        background-size: cover;
        position: relative; 
    }

    /* home css */
    .home-section .home .btn{
        background: linear-gradient(to right,black,#DF4838,#DF4838);
        background-size: 200%;
    }
    .homeSwiper {
      width: 100%;
      /* padding-top: 50px; */
      /* padding-bottom: 50px; */
    }

     .homeSwiper .swiper-slide {
      background-position: center;
      background-size: cover;
      /* width: 300px; */
      /* height: 300px; */
      cursor: pointer;
    }
    /*end of home css */


    /* testimonial slider css */
    .testimonial-section .swiper {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }

     .testimonial-section .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
      cursor: pointer;
    }
    /* end of testimonial slider css */

    /* achievemnet css */
    .achievement .circle::before{
        content: '';
        position: absolute;
        inset: -20px 0;
        background: linear-gradient(315deg,#00ccff,#d400d4);
        transition: 0.5s;
        animation: rotate360 4s linear infinite;

    }

   
    .achievement .circle::after{
        content: '';
        position: absolute;
        inset: 3px;
        background: #DF4838;
        z-index: 1;
        border-radius: 50%;

    }
    .achievement .circle{
        top:13rem;
        left: -4rem;
    }
    .home-achievement-circle-1.active{
        left: 2.5rem;
        top: 0;

    }
    .home-achievement-circle-3.active{
        left: 2.5rem;
        top: 75%;

    }
    .achievement-mobile .circle::before{
        content: '';
        position: absolute;
        inset: -20px 0;
        background: linear-gradient(315deg,#00ccff,#d400d4);
        transition: 0.5s;
        animation: rotate360 4s linear infinite;

    }

   
    .achievement-mobile .circle::after{
        content: '';
        position: absolute;
        inset: 3px;
        background: #2D85C6;
        z-index: 1;
        border-radius: 50%;

    }
    
    /* end of achievement css */

    /* services css */
    .home-section .services .button-div button{
        box-shadow: -2px 0px 25px 0px rgba(178,161,161,0.75);
    -webkit-box-shadow: -2px 0px 25px 0px rgba(178,161,161,0.75);
    -moz-box-shadow: -2px 0px 25px 0px rgba(178,161,161,0.75); 
    position: relative;
    /* z-index: 10; */
    }
    .home-section .services .button-div button::before{
        position: absolute;
        content: '';
        top: 50%;
        left: 100%;
        width: 0%;
        height: 3px;
        border-radius: 100px;
        background-color:  rgb(220 38 38);
        transition: all 0.5s ease;
    }
   
    .home-section .services .button-div button.active::before{
        width: 16%;
    }
    .home-section .services .content-div .content{
        position: absolute;
        top: 0;
        bottom: 0;
        /* right: 0; */
        /* left: -100%; */
        width: 100%;
        overflow: hidden;
        /* height: 100%; */
        opacity: 0;
        z-index: 99;
        transition: all 0.5s ease;
        box-shadow: -2px 0px 25px 0px rgba(178,161,161,0.75);
    -webkit-box-shadow: -2px 0px 25px 0px rgba(178,161,161,0.75);
    -moz-box-shadow: -2px 0px 25px 0px rgba(178,161,161,0.75); 
    }
    .home-section .services .content-div .content.active{
         opacity: 1;
    }

    .mobileServicesBtn-content{
        opacity: 0;
    }

    .mobileServicesBtn-content.active{
        opacity: 1;
    }

    .home-services-button.active{
        /* transform: translateY(-0.75rem); */
        background-color: rgb(226 232 240);
    }
    .services .btn{
        background: linear-gradient(to right, #2b388f, #00aaff,#2b388f);
        background-size: 200%;
    }
  
    /* end of services css */

    /* digital marketing section */
    .home-digital-marketing-section .btn{
        background: linear-gradient(to right,black,#DF4838,black);
        /* background: linear-gradient(to right, #2b388f, #00aaff,#2b388f); */
        background-size: 200%;
    }
    /*end of digital marketing section */
    


    </style>
@endsection

@section('js')
<script>
$(document).ready(function() {
    var section = $('.numbers');
    var hasEntered = false;

    animateCount();

    $(window).scroll(animateCount);

    function animateCount() {
        var scrollPos = $(window).scrollTop();

        if (scrollPos <= 20 && !hasEntered) {
            hasEntered = true;

            $('.count').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
    }
});




    </script>

    {{-- home services section scripte --}}
    <script>
    $(document).ready(function() {
    //   $('.home-services-button').mouseenter(function() {
    //     const target = $(this).data('target');
    //     setHomeServicesActiveContent(target);
    //     $('.home-services-button').removeClass('active');
    //     $(this).addClass('active');
    //   });
    // On desktop, the code uses mouseenter event
    $('.home-services-button').mouseenter(function() {
      const target = $(this).data('target');
      setHomeServicesActiveContent(target);
      $('.home-services-button').removeClass('active');
      $(this).addClass('active');
    });

    // On mobile, the code will use click event
    $('.home-services-button').on('click', function() {
      const target = $(this).data('target');
      setHomeServicesActiveContent(target);
      $('.home-services-button').removeClass('active');
      $(this).addClass('active');
    });
    
    function setHomeServicesActiveContent(target) {
        $('.home-services-content').removeClass('active');
        $('#' + target).addClass('active');
    }
    $('.mobileServicesBtn').on('click',function(){
        const target = $(this).data('target');
        $('.mobileServicesBtn').removeClass('-translate-y-2');
        $('.mobileServicesBtn-content').removeClass('active');
        $('#' + target).addClass('active');
        $(this).addClass('-translate-y-2');

        
      });

   
    
    });
    </script>
    {{--end of home services section scripte --}}

    {{-- achievement section js --}}
    <script>
    function mouseFunction()
    {
        console.log("working");
        var circle1=document.getElementById("home-achievement-circle-1");
        var circle3=document.getElementById("home-achievement-circle-3");
        circle1.classList.toggle('active');
        circle3.classList.toggle('active');
        animateCount();
    }
    </script>
    {{-- end of  achievement section js --}}

    
@endsection