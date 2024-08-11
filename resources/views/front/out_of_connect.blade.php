@extends('front.layouts.app')

@section('content')

    <body class="font-poppins text-[#030303] bg-[#F6F5FA] pb-[100px] px-4 sm:px-0">
        <nav
            class="container max-w-[1130px] mx-auto flex items-center flex-wrap justify-between p-4 rounded-[20px] bg-white mt-[30px] gap-y-3 sm:gap-y-0">
            <a href="index.html">
                <img src="assets/logos/logo.svg" alt="logo">
            </a>
            <ul class="flex items-center flex-wrap gap-x-[30px]">
                <li>
                    <a href="index.html"
                        class="hover:font-semibold hover:text-[#6635F1] transition-all duration-300">Browse</a>
                </li>
                <li>
                    <a href="category-auth.html"
                        class="hover:font-semibold hover:text-[#6635F1] transition-all duration-300">Categories</a>
                </li>
                <li>
                    <a href="" class="hover:font-semibold hover:text-[#6635F1] transition-all duration-300">My
                        Jobs</a>
                </li>
                <li>
                    <a href=""
                        class="hover:font-semibold hover:text-[#6635F1] transition-all duration-300">Wallets</a>
                </li>
                <li>
                    <a href="" class="hover:font-semibold hover:text-[#6635F1] transition-all duration-300">Help</a>
                </li>
            </ul>
            <div class="flex items-center gap-3">
                <p class="font-semibold">Hi, Shayna</p>
                <div class="w-[50px] h-[50px] rounded-full overflow-hidden flex shrink-0">
                    <img src="assets/photos/profile.png" class="w-full h-full object-cover" alt="photo">
                </div>
            </div>
        </nav>
        <div
            class="empty-state flex flex-col flex-1 items-center justify-center mx-auto gap-[50px] sm:min-h-[calc(100vh-212px)] max-sm:mt-[132px]">
            <div class="w-[100px] h-[100px] flex shrink-0">
                <img src="assets/icons/message-remove.svg" alt="icon">
            </div>
            <div class="flex flex-col gap-[6px] text-center w-[345px]">
                <p class="font-bold text-xl leading-[30px]">Out Of Connect :(</p>
                <p class="text-sm leading-[28px]">Connect yang Anda miliki telah habis sehingga proses apply pekerjaan tidak
                    berhasil.</p>
            </div>
            <div class="flex items-center w-[380px] gap-3 text-center">
                <a href="" class="p-[14px_20px] rounded-full bg-[#030303] font-semibold text-white w-full">Contact
                    CS</a>
                <a href="" class="p-[14px_20px] rounded-full bg-[#6635F1] font-semibold text-white w-full">Contact
                    CS</a>
            </div>
        </div>
    </body>
@endsection
