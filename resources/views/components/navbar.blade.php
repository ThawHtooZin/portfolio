<style>
    /* Navbar */
    .navbar {
        background-color: rgba(0, 0, 0, 0.5);
        /* Starts with semi-transparent */
        transition: background-color 0.5s ease;
        z-index: 999;
    }

    /* Background color transition on scroll */
    .navbar.scrolled {
        background-color: rgba(15, 15, 15, 0.905);
        /* Fully opaque when scrolled */
    }

    /* Hover Effects: Underline Animation */
    .navbar a {
        position: relative;
        text-decoration: none;
        color: white;
        transition: color 0.3s ease;
    }

    /* Underline effect for links */
    .navbar a::before {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 0;
        background-color: white;
        transition: width 0.3s ease-out;
    }

    /* On hover, underline slides in */
    .navbar a:hover::before {
        width: 100%;
    }

    /* Link Color Shift */
    .navbar a:hover {
        color: #f0e68c;
        /* Change to a soft yellow */
    }

    /* Link Glow Effect */
    .navbar a:hover {
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
        /* Soft glow */
        transition: text-shadow 0.3s ease-in-out;
    }

    /* Logo animation on load */
    @keyframes expandIn {
        0% {
            width: 0;
        }

        100% {
            width: auto;
        }
    }

    .logo-animation {
        font-family: 'Pacifico', cursive;
        /* Apply unique font family to the logo */
        transition: transform 0.3s ease-in-out;
        /* Smooth transition effect */
    }

    .logo-animation:hover {
        transform: scale(1.1);
        /* Slightly enlarge the logo on hover */
    }
</style>
<div class="navbar bg-galaxy py-3 flex items-center fixed top-0 w-full">
    <div class="w-50 mx-10 lg:mx-20">
        <h1 class="text-white text-xl p-2 pr-5 bg-pink-500 inline-block logo-animation"
            style="border-top-right-radius: 20px; border-bottom-right-radius: 20px; overflow: hidden;">
            ThawHtooZin
        </h1>
    </div>
    <div class="w-100 hidden lg:block">
        <ul class="flex gap-10">
            <li class="text-white">
                <a href="#home">Home</a>
            </li>
            <li class="text-white">
                <a href="#myskills">My Skills</a>
            </li>
            <li class="text-white">
                <a href="#myprojects">My Projects</a>
            </li>
            <li class="text-white">
                <a href="#contactme">Contact Me</a>
            </li>
        </ul>
    </div>
    <div class="ml-auto mr-7">
        <p class="text-gold">
            Member of <a href="https://protechmm.com/" class="relative inline-block">ProTechMM
                <span class="absolute top-0 -right-1 translate-x-1/2 -translate-y-1/2 text-lg rotate-45">👑</span>
            </a>
        </p>
    </div>
</div>

<script>
    // Add the scrolled class to the navbar when you scroll down
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>
