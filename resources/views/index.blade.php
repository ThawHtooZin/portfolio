<style>
    main {
        background-image: url('{{ asset('image/background_ufo.jpeg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
    }

    /* Text glow effect */
    .glow {
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 0 20px rgba(255, 255, 255, 0.5);
    }

    /* Letter styling */
    .letter {
        display: inline;
        /* Ensures letters stay inline */
    }

    /* Typing cursor */
    #name::after {
        content: '.';
        /* Cursor content */
        animation: blink 0.7s step-end infinite;
        /* Blinking animation */
    }

    /* Blinking effect for cursor */
    @keyframes blink {
        50% {
            opacity: 0;
            /* Blink effect */
        }
    }

    /* Class to hide cursor */
    .cursor-hidden::after {
        content: '';
        /* Remove the cursor content */
    }

    @keyframes star-glow {

        0%,
        100% {
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.7), 0 0 20px rgba(255, 255, 255, 0.5), 0 0 30px rgba(255, 255, 255, 0.3);
        }

        50% {
            text-shadow: 0 0 20px rgba(255, 255, 255, 1), 0 0 30px rgba(255, 255, 255, 0.8), 0 0 40px rgba(255, 255, 255, 0.6);
        }
    }

    .glow-loop {
        animation: star-glow 2s infinite;
    }

    @layer components {
        .view-detail {
            animation: white-glow 1.5s infinite alternate;
        }

        @keyframes white-glow {
            from {
                box-shadow: 0 0 5px #00f, 0 0 10px, #00f, 0 0 15px #00f;
            }

            to {
                box-shadow: 0 0 10px #00f, 0 0 20px #00f, 0 0 30px #00f;
            }
        }
    }

    .swiper-container {
        width: 100%;
        height: 100%;
    }

    /* Optional: Adjust container padding or margins if needed */
    .swiper-wrapper {
        padding: 0;
        margin: 0;
    }

    .swiper-slide {
        transform: scale(1) !important;
        transition: transform 0.3s ease-in-out !important;
    }

    .swiper-slide:hover {
        transform: scale(1.03) !important;
        /* Add hover scale effect */
    }

    /* Hover effect on the image */
    img:hover {
        box-shadow: 0px 10px 20px rgba(255, 255, 255, 0.6);
        transition: all 0.3s ease-in-out;
    }

    /* Custom styles for next/prev buttons */
    .swiper-button-next,
    .swiper-button-prev {
        color: white;
        font-size: 1.5rem;
    }

    .swiper-container {
        overflow-x: hidden;
        overflow-y: auto;
    }
</style>

<x-layout>
    <main>
        <x-navbar></x-navbar>
        {{-- Main Page --}}
        <div class="pt-60 sm:pl-8 md:pl-16 lg:pl-32 pl-8 pb-60" id="home">
            <!-- Main Heading with placeholder for the name -->
            <h1 class="text-6xl text-white font-IBM glow tracking-wide">
                HEYYY! I'm
                <span class="text-gold" id="name"></span>
            </h1>
            <h3 class="text-3xl text-white mt-4 font-light italic">Totally obsessed with <span
                    class="text-pink-500 font-semibold" id="dynamicText">TECHNOLOGY</span>.</h3>

            <p class="text-lg text-white w-96 mt-6 font-IBM">
                I'm an early member of <a href="https://protechmm.com/"
                    class="text-gold underline hover:text-pink-500 transition duration-300">ProTechMM</a> and proud
                co-founder! Always eager to explore new experiences, level up my skills, and take on exciting jobs!
            </p>
        </div>
        {{-- Main Page --}}

        {{-- Skill Page --}}
        <div class="min-h-screen flex flex-col justify-center from-galaxy bg-gradient-to-b to-primary bg-cover sm:py-auto scroll-mt-12"
            id="myskills">
            <h1 class="text-center text-4xl text-white glow-loop mb-8">My Skills</h1>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 px-4">
                <div
                    class="bg-gray-800 p-6 rounded-lg shadow-[0_0_15px_rgba(255,255,255,0.2)] opacity-0 transform translate-y-10 transition-all duration-500 ease-in-out card">

                    <h1 class="text-white text-center text-xl font-bold mb-4">Front-end Development</h1>
                    <div class="mb-4">
                        <label class="text-white">HTML</label>
                        <div class="relative w-full bg-gray-600 rounded-full h-3">
                            <div class="progress-bar absolute inset-0 bg-blue-500 h-full rounded-full"
                                style="width: 0%;">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white font-semibold">100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-white">CSS</label>
                        <div class="relative w-full bg-gray-600 rounded-full h-3">
                            <div class="progress-bar absolute inset-0 bg-blue-500 h-full rounded-full"
                                style="width: 0%;">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white font-semibold">100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-white">JavaScript</label>
                        <div class="relative w-full bg-gray-600 rounded-full h-3">
                            <div class="progress-bar absolute inset-0 bg-blue-500 h-full rounded-full"
                                style="width: 0%;">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white font-semibold">90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-white">jQuery</label>
                        <div class="relative w-full bg-gray-600 rounded-full h-3">
                            <div class="progress-bar absolute inset-0 bg-blue-500 h-full rounded-full"
                                style="width: 0%;">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white font-semibold">80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-white">Tailwind CSS</label>
                        <div class="relative w-full bg-gray-600 rounded-full h-3">
                            <div class="progress-bar absolute inset-0 bg-blue-500 h-full rounded-full"
                                style="width: 0%;">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white font-semibold">80%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-gray-800 p-6 rounded-lg shadow-[0_0_15px_rgba(255,255,255,0.2)] opacity-0 transform translate-y-10 transition-all duration-500 ease-in-out card">
                    <h1 class="text-white text-center text-xl font-bold mb-4">Back-end Development</h1>
                    <div class="mb-4">
                        <label class="text-white">PHP</label>
                        <div class="relative w-full bg-gray-600 rounded-full h-3">
                            <div class="progress-bar absolute inset-0 bg-blue-500 h-full rounded-full"
                                style="width: 0%;">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white font-semibold">80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-white">Laravel</label>
                        <div class="relative w-full bg-gray-600 rounded-full h-3">
                            <div class="progress-bar absolute inset-0 bg-blue-500 h-full rounded-full"
                                style="width: 0%;">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white font-semibold">80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-white">API</label>
                        <div class="relative w-full bg-gray-600 rounded-full h-3">
                            <div class="progress-bar absolute inset-0 bg-blue-500 h-full rounded-full"
                                style="width: 0%;">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white font-semibold">75%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="bg-gray-800 p-6 rounded-lg shadow-[0_0_15px_rgba(255,255,255,0.2)] opacity-0 transform translate-y-10 transition-all duration-500 ease-in-out card">
                    <h1 class="text-white text-center text-xl font-bold mb-4">Web Tools</h1>
                    <div class="mb-4">
                        <label class="text-white">Figma</label>
                        <div class="relative w-full bg-gray-600 rounded-full h-3">
                            <div class="progress-bar absolute inset-0 bg-blue-500 h-full rounded-full"
                                style="width: 0%;">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white font-semibold">65%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-white">ER Diagram</label>
                        <div class="relative w-full bg-gray-600 rounded-full h-3">
                            <div class="progress-bar absolute inset-0 bg-blue-500 h-full rounded-full"
                                style="width: 0%;">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white font-semibold">70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="text-white">TablePlus</label>
                        <div class="relative w-full bg-gray-600 rounded-full h-3">
                            <div class="progress-bar absolute inset-0 bg-blue-500 h-full rounded-full"
                                style="width: 0%;">
                                <span
                                    class="absolute inset-0 flex items-center justify-center text-white font-semibold">80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-16 px-8 lg:px-20">
                <p class="text-white text-center text-lg leading-relaxed lg:text-xl italic">
                    <span class="text-4xl lg:text-5xl text-blue-400">&ldquo;</span>
                    These skills represent my journey through the world of web development.
                    From mastering front-end design to diving into back-end logic, each one has
                    shaped how I approach problem-solving and build digital experiences. With every
                    project, I continue to refine these abilities, pushing myself to learn more and
                    deliver better solutions. This is just the beginning—I'm constantly evolving,
                    driven by a passion to create and innovate in the tech space.
                    <span class="text-4xl lg:text-5xl text-blue-400">&rdquo;</span>
                </p>
            </div>
        </div>
        {{-- Skill Page --}}


        {{-- My Projects Page --}}
        <div class="scroll-pt-24 pt-24 sm:pt-2 min-h-screen flex flex-col justify-center from-primary bg-gradient-to-b to-galaxy bg-cover sm:py-auto"
            id="myprojects">
            <h1 class="text-center text-4xl text-white glow-loop mb-8">My Projects</h1>

            <!-- Swiper Container -->
            <div
                class="p-4 px-12 swiper-container opacity-0 transform translate-y-10 transition-all duration-500 ease-in-out  project-card">
                <!-- Swiper Wrapper -->
                <div class="swiper-wrapper">
                    <!-- Swiper Slide -->
                    <div
                        class="swiper-slide sm:p-10 p-2 bg-slate-500 border rounded-lg shadow-[0_0_15px_rgba(255,255,255,0.6)] text-white transition-all duration-300 ease-in-out transform">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Project Image -->
                            <div class="sm:p-10">
                                <img src="{{ asset('image/LMS Project.png') }}"
                                    class="rounded-lg hover:shadow-lg hover:shadow-white transition-all duration-300">
                            </div>

                            <!-- Project Info -->
                            <div class="p-10 text-center lg:text-left">
                                <h1 class="text-3xl">Link Mark System (Trading, Import & Export)</h1>
                                <span class="text-lg">Made by <a href="https://www.protechmm.com" target="__blank"
                                        class="underline">ProTech</a></span>
                                <p class="mt-2 mb-4">
                                    <b>Link Mark System</b> is a comprehensive software solution tailored for the
                                    trading and
                                    import/export industry. It streamlines the management of commodities, inventory
                                    tracking, and logistics. This system allows users to efficiently handle and monitor
                                    country-specific trades, commodity details, and stock balances. Key features include
                                    robust data entry for tracking the movement of goods in and out, ensuring smooth
                                    operations, and maintaining accurate records for compliance and reporting. The
                                    platform also supports a scalable architecture, making it adaptable for growing
                                    business needs in the global trading market.
                                </p>
                                <x-primary-btn-disabled>Private Project</x-primary-btn-disabled>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-slide p-10 bg-slate-500 border rounded-lg shadow-[0_0_15px_rgba(255,255,255,0.6)] text-white transition-all duration-300 ease-in-out transform">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Project Image -->
                            <div class="sm:p-10">
                                <img src="{{ asset('image/Aronium POS.png') }}"
                                    class="rounded-lg hover:shadow-lg hover:shadow-white transition-all duration-300">
                            </div>

                            <!-- Project Info -->
                            <div class="p-10 text-center lg:text-left">
                                <h1 class="text-3xl">Aronium Point Of Sale (Clone Version)</h1>
                                <span class="text-lg">Made by Me.</span>
                                <p class="mt-2 mb-4">
                                    <b>Aronium POS Clone</b> is a customized version inspired by the original Aronium
                                    POS
                                    system. Built with small to medium businesses in mind, it offers intuitive features
                                    like inventory management, sales tracking, and real-time reporting, while
                                    maintaining simplicity and ease of use. This tailored solution ensures smooth
                                    point-of-sale operations, providing support for various payment methods, receipt
                                    printing, and offline functionality, all while focusing on user-friendly design.
                                    Though inspired by the original, this version introduces thoughtful improvements to
                                    better suit specific business needs.
                                </p>
                                <x-primary-btn href="https://github.com/ThawHtooZin/Aronium-POS-own"
                                    target="__blank">View
                                    Detail</x-primary-btn>
                            </div>
                        </div>
                    </div>
                    <div
                        class="swiper-slide p-10 bg-slate-500 border rounded-lg shadow-[0_0_15px_rgba(255,255,255,0.6)] text-white transition-all duration-300 ease-in-out transform">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Project Image -->
                            <div class="sm:p-10">
                                <img src="{{ asset('image/sbh project.jpg') }}"
                                    class="rounded-lg hover:shadow-lg hover:shadow-white transition-all duration-300">
                            </div>

                            <!-- Project Info -->
                            <div class="p-10 text-center lg:text-left">
                                <h1 class="text-3xl">Shwe Bhone Hein (Over Seas Employment Agency)</h1>
                                <span class="text-lg">Made by <a href="https://www.protechmm.com" target="__blank"
                                        class="underline">ProTech</a></span>
                                <p class="mt-2 mb-4">
                                    <b>Shwe Bhone Hein</b> is an official website for an overseas employment agency,
                                    designed
                                    to provide essential information and services for individuals seeking job
                                    opportunities abroad. The site is user-friendly and focuses on delivering clear,
                                    accessible details about available positions, application processes, and legal
                                    requirements. It also serves as a platform to connect job seekers with potential
                                    employers, offering a streamlined experience for those pursuing overseas employment.
                                    The clean design ensures ease of navigation, while the content emphasizes trust and
                                    professionalism in the recruitment process.
                                </p>
                                <x-primary-btn href="https://github.com/ThawHtooZin/Shwe-Bhone-Hein"
                                    target="__blank">View Detail</x-primary-btn>
                                <x-primary-btn href="https://shwebhonehein.com/" target="__blank" class="ml-2">Live
                                    Website</x-primary-btn>
                            </div>
                        </div>
                    </div>

                    <!-- Add more slides here as needed -->
                </div>
            </div>
        </div>
        {{-- My Projects Page --}}

    </main>
</x-layout>

<script>
    $(document).ready(function() {
        // NAME ANIMATION
        const name = "Thaw Htoo Zin";
        const nameElement = $('#name');

        // Function to simulate typing effect
        function typeName(name, index) {
            if (index < name.length) {
                nameElement.append(name[index]); // Append the current letter
                // Call the next letter after a delay
                setTimeout(function() {
                    typeName(name, index + 1);
                }, 200); // 200 milliseconds delay for typing effect
            } else {
                // Once typing is done, hide the cursor
                nameElement.addClass('cursor-hidden');
            }
        }

        // Start typing animation
        typeName(name, 0);

        // TEXT ANIMATION
        const texts = ['TECHNOLOGY', 'WEB DEVELOPMENT', 'SOFTWARE ENGINEERING']; // Array of texts
        let index = 0; // Initial index
        const dynamicText = $('#dynamicText'); // Target element

        function changeText() {
            // Slide out animation
            dynamicText.fadeOut(300, function() {
                index = (index + 1) % texts.length; // Increment index, loop back to 0
                dynamicText.text(texts[index]); // Change text
                // Slide in animation
                dynamicText.fadeIn(300); // Fade in with animation
            });
        }

        // Change text every 3 seconds
        setInterval(changeText, 3000); // 3000 milliseconds delay
    });

    $(window).on('scroll', function() {

        // Progress Bar
        // Define the progress percentages for each skill
        const progressData = {
            'HTML': '100%',
            'CSS': '100%',
            'JavaScript': '90%',
            'jQuery': '80%',
            'Tailwind CSS': '70%',
            'PHP': '80%',
            'Laravel': '80%',
            'API': '75%',
            'Figma': '65%',
            'ER Diagram': '70%',
            'TablePlus': '80%',
        };

        // Animate each progress bar
        $('.progress-bar').each(function() {
            const skillLabel = $(this).closest('.mb-4').find('label').text();
            const targetWidth = progressData[skillLabel];

            $(this).animate({
                width: targetWidth
            }, {
                duration: 2000, // Duration in milliseconds
                step: function(now) {
                    $(this).find('span').text(Math.round(now) +
                        '%'); // Update the text to show current progress
                }
            });
        });

        // JavaScript To Show Skill Cards
        $('.card').each(function() {
            var cardTop = $(this).offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();

            if (cardTop < windowBottom) {
                $(this).addClass(
                    ' translate-y-0 opacity-100'); // Fully visible and back to original position

                $(this).removeClass(
                    'translate-y-10 opacity-0' // Remove the fade-in effect
                );
            }
        });

        // JavaScript To Show Project Cards
        $('.project-card').each(function() {
            var cardTop = $(this).offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();

            if (cardTop < windowBottom) {
                $(this).addClass(
                    ' translate-y-0 opacity-100'); // Fully visible and back to original position

                $(this).removeClass(
                    'translate-y-10 opacity-0' // Remove the fade-in effect
                );
            }
        });
    });

    // Swiper JavaScripts
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 50,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
