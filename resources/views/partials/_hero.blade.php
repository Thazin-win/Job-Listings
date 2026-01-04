<section
    class="flex flex-col items-center bg-gradient-to-b px-3 sm:px-10 overflow-hidden from-[#F5F7FF] via-[#fffbee] to-[#E6EFFF] pt-2 h-full bg-cover text-gray-800 pb-16 text-sm">
    <div
        class="flex flex-wrap items-center justify-center p-1.5 mt-24 mb-4 rounded-full border border-indigo-100 text-xs">
        <div class="flex items-center">
            <img class="size-7 rounded-full border-3 border-white"
                src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=50" alt="userImage1">
            <img class="size-7 rounded-full border-3 border-white -translate-x-2"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=50" alt="userImage2">
            <img class="size-7 rounded-full border-3 border-white -translate-x-4"
                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=50&h=50&auto=format&fit=crop"
                alt="userImage3">
        </div>

        <p class="-translate-x-2">Join community of 1m+ recruiters </p>
    </div>

    <h1
        class="text-6xl md:text-6xl text-center font-bold max-w-3xl mt-5 bg-gradient-to-r from-black to-[#748298] text-transparent bg-clip-text">
        The Modern Way to Hire & Get Hired
    </h1>
    <p class="text-slate-600 md:text-base max-md:px-2 text-center max-w-xl mt-8">
        Post opportunities to find the perfect candidates.
        Whether you're hiring or looking for work, we've got you covered.
    </p>

    <div>
        @auth
        @else
            <a href="/register"
                class="flex items-center gap-2 bg-slate-800 hover:bg-slate-900 text-white px-8 py-3 mt-8 rounded-full transition">
                <span>Sign Up to List a Gig</span>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.166 10h11.667m0 0L9.999 4.167M15.833 10l-5.834 5.834" stroke="#fff" stroke-width="1.8"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>

            {{-- <a href="/register"
                class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black">Sign
                Up to List a Gig</a> --}}
        @endauth
    </div>




    <div class="overflow-hidden w-full relative max-w-5xl mx-auto select-none mt-16">
        <div
            class="absolute left-0 top-0 h-full w-20 z-10 pointer-events-none bg-gradient-to-r from-[#f5f7ff] to-transparent">
        </div>

        <div class="marquee-inner flex will-change-transform min-w-[200%]">
            <div class="flex py-4" id="logo-container">
            </div>
        </div>

        <div
            class="absolute right-0 top-0 h-full w-20 md:w-40 z-10 pointer-events-none bg-gradient-to-l from-[#efe9f4] to-transparent">
        </div>
    </div>

</section>