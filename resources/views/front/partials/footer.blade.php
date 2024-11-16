<footer class="py-[60px] bg-[#333]">
    <div class="container max-w-screen-xl mx-auto ">
        <div class="flex md:justify-between flex-col md:flex-row border-b border-white-600 pb-5 px-3">
            @include('front.partials.svg.white-logo')
            <ul class="md:flex  flex-col md:flex-row  gap-5 text-white">
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">AUTHORS</a></li>
                <li><a href="#">SUBSRIPTIONS</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">ADVERTISE</a></li>
                <li><a href="#">PODCAST</a></li>
                <li><a href="#">CHANGELOG</a></li>
            </ul>
        </div>
        <div class="flex md:justify-between flex-col md:flex-row pt-5 gap-10 px-3">
            <div class="flex flex-col gap-2 text-white w-full px-3">
                <div>
                    Uncovering the Latest Stories.
                </div>
                <div>
                    Explore a wealth of resources, services, and information designed to meet your needs and interests
                </div>
            </div>
            <div class="flex md:justify-around justify-between w-full px-3">
                <div class="flex flex-col gap-2">
                    <span class="text-white">Category</span>
                    <ul class="flex flex-col gap-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Technology</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Business</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">World News</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Culture</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Health</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Sports</a></li>
                    </ul>
                </div>
                <div class="flex flex-col gap-2">
                    <span class="text-white ">Resources</span>
                    <ul class="flex flex-col gap-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Style Guide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms & Conditions</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Password</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">License</a></li>
                    </ul>
                </div>
            </div>
            <div class="w-full flex md:flex-row md:justify-between gap-3 flex-col px-3 ">
                <img class="md:w-[33%] w-full object-cover" src="{{ asset('front/assets/images/footer1.jpg') }}"
                    alt="footer-logo">
                <img class="md:w-[33%] md:py-0 py-5 w-full object-cover"
                    src="{{ asset('front/assets/images/footer2.jpg') }}" alt="footer-logo">
                <img class="md:w-[33%] w-full object-cover" src="{{ asset('front/assets/images/footer3.jpg') }}"
                    alt="footer-logo">
            </div>
        </div>
    </div>
</footer>
