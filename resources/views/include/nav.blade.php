{{-- nav bar --}}
<nav id="navbar" class=" navbar py-3 bg-transparent  transition-all ease-linear  fixed top-0 left-0 right-0 w-full z-[999]">
    <div class="flex  xl:px-20  md:px-20 px-5 lg:px-5  justify-between w-full">
        <div class="mobile:w-[250px] w-[180px] z-[999]">
            <a href="{{route('home')}}" ><img class="w-full" src="{{asset('images/logo3.png')}}" alt=""></a>
        </div>
        <div id="mobnav" class="text-[15px] lg:flex md:px-20 px-5 lg:px-0 md:text-lg mx-0 mobnav  pt-24 lg:pt-0 lg:w-full w-[80%]">
            <div class="lg:m-auto">
                <ul class="flex text-[15px]  nav-container">
                    <li class="mx-4 my-2 lg:my-auto "><a href="#home_section"  class="nav-link">Home</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="#services_section"  class="nav-link">Services</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="#products_section"  class="nav-link">Products</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="#about_section"  class="nav-link">About Proprietor</a></li>
                    <li class="mx-4 my-2 lg:my-auto "><a href="#contact_section"  class="nav-link">Contact Us</a></li>
                </ul>
            </div>
        </div>
        
        <div class="mt-3 lg:hidden mobile-icon cursor-pointer" id="mobile-icon" onclick="menuBtn()" >
            <span class="line-1"></span>
            <span class="line-2"></span>
            <span class="line-3"></span>
        </div>
    </div>
</nav>
{{-- end of nav bar --}}