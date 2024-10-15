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
</style>

<x-layout>
    <main>
        <x-navbar></x-navbar>
        <div class="pt-60 ps-32 pb-60">
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
        <div class="pt-20">

        </div>
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
</script>
