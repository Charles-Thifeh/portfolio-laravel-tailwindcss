<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body class="bg-gray-100">
   <!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-gray-800" >
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 lg:mx-32" >
      <div class="relative flex items-center justify-between h-16" >
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden md:hidden" >
          <!-- Mobile menu button-->
          <button
          type="button"
          class="mobile-menu-button inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
          aria-controls="mobile-menu"
          aria-expanded="false"

          >
            <span class="sr-only">Open main menu</span>
            <!--
              Icon when menu is closed.

              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Icon when menu is open.

              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
           <h2 class="text-white">Charles Thifeh</h2>
        </div>
          <div class="hidden sm:block sm:ml-6 md:block md:ml-6">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Home</a>

              <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

              <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact Me</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          <button type="button" class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <span class="sr-only">View notifications</span>
            <!-- Heroicon name: outline/bell -->
            <i class="fab fa-github"></i>
          </button>


        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden hidden md:hidden" id="mobile-menu">
      <ul class="px-2 pt-2 pb-3 space-y-1">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <li><a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Home</a>
        </li>

        <li><a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
        </li>

        <li><a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Contact Me</a>
        </li>

      </ul>
    </div>
  </nav>

  <section>
    <div class="py-12 bg-gray-200 lg:mx-32 drop-shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid justify-items-center w-full mb-8">
                <div class="rounded-lg h-48 w-32 bg-red-300">
                    <img
                    src="{{asset('images/1640035291781.jpg')}}"
                    alt=""
                    class="h-48 w-32 rounded-lg " />
                </div>
            </div>

          <div class="text-center">
            <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Akinmusire Charles Boluwatife</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
              Web Developer
            </p>
            <p class="mt-4 max-w-2xl text-l text-gray-500 lg:mx-auto">
              BSc in Computer Science, Diploma in Web Design and Computer Networking
            </p>
          </div>

          <div class="mt-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
              <div class="relative">
                <dt>
                  <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                    <!-- Heroicon name: outline/globe-alt -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                  </div>
                  <p class="ml-16 text-lg leading-6 font-medium text-gray-900">iBuild with simplicity</p>
                </dt>
                <dd class="mt-2 ml-16 text-base text-gray-500">
                    Creating easy to use websites and software systems. And also putting the right amount of elegance.
                </dd>
              </div>

              <div class="relative">
                <dt>
                  <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                    <!-- Heroicon name: outline/scale -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                    </svg>
                  </div>
                  <p class="ml-16 text-lg leading-6 font-medium text-gray-900">iBuild with transparency</p>
                </dt>
                <dd class="mt-2 ml-16 text-base text-gray-500">
                  Totally engaging the stakeholders during the requirements, design and development phases. Plus I have good human relationships.
                </dd>
              </div>

              <div class="relative">
                <dt>
                  <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                    <!-- Heroicon name: outline/lightning-bolt -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                  </div>
                  <p class="ml-16 text-lg leading-6 font-medium text-gray-900">iBuild with efficency</p>
                </dt>
                <dd class="mt-2 ml-16 text-base text-gray-500">
                  In striving to bring to reality the bigger picture of becoming the best, making faster, better and optimal websites and software systems in the best time frame is an addiction. The only addiction I'm comfortable with.
                </dd>
              </div>

              <div class="relative">
                <dt>
                  <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                    <!-- Heroicon name: outline/annotation -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                  </div>
                  <p class="ml-16 text-lg leading-6 font-medium text-gray-900">iBuild with feedback</p>
                </dt>
                <dd class="mt-2 ml-16 text-base text-gray-500">
                  I believe one can only grow by gaining knowledge with the right attitude. In order to create the best websites or software systems for you, we welcome your feedbacks with love and warm embrace. Plus we need it during the testing and implementation phase.
                </dd>
              </div>
            </dl>
          </div>
        </div>
      </div>

      <div class="py-12 bg-gray-200 lg:mx-32 drop-shadow-lg my-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h6 class="mt-1 sm:text-3xl">
                  Technologies
                </h6>
                {{-- <p class="mt-2 max-w-2xl text-l text-gray-500 lg:mx-auto">
                  Feedbacks are welcomed
                </p> --}}
              </div>
        </div>

      </div>

      <div class="tech tech-inline py-12 bg-transparent lg:mx-32 drop-shadow-lg">
        <div class="tech py-12 md:w-32 sm:w-16 md:h-32 sm:h-16 bg-gray-100 lg:mx-8 items-center" id="css">
            <img src="{{asset('images/css3-alt-brands.svg')}}" alt="" class="css-img">
            <div class="hide">
                <div class="text-right">
                    <p>Experience: 3 years</p>
                    <p>Skill: 78%</p>
                    <p>Projects:  10</p>
                </div>
            </div>
        </div>
        <div class="tech py-12 md:w-32 sm:w-16 md:h-32 sm:h-16 bg-gray-100 lg:mx-8" id="css">
            <img src="{{asset('images/vuejs-brands.svg')}}" alt="" class="css-img">
            <div class="hide">
                <div class="text-right">
                    <p>Experience: 3 months</p>
                    <p>Skill: 56%</p>
                    <p>Projects:  2</p>
                </div>
            </div>

        </div>
        <div class="tech py-12 md:w-32 sm:w-16 md:h-32 sm:h-16 bg-gray-100 lg:mx-8" id="css">
            <img src="{{asset('images/laravel-brands.svg')}}" alt="" class="css-img">
            <div class="hide">
                <div class="text-right">
                    <p>Experience: 2 years</p>
                    <p>Skill: 87%</p>
                    <p>Projects:  5</p>
                </div>
            </div>
        </div>
        <div class="tech py-12 md:w-32 sm:w-16 md:h-32 sm:h-16 bg-gray-100 lg:mx-8" id="css">
            <div class="hide">
                <div class="text-right">
                    <p>Experience: 3 years</p>
                    <p>Skill: 82%</p>
                    <p>Projects:  8</p>
                </div>
            </div>
            <img src="{{asset('images/python-brands.svg')}}" alt="" class="css-img">

        </div>
      </div>

      <div class="tech-inline py-12 bg-transparent lg:mx-32 drop-shadow-lg">
        <div class="tech py-12 md:w-32 sm:w-16 md:h-32 sm:h-16 bg-gray-100 lg:mx-8" id="css">
            <img src="{{asset('images/js-brands.svg')}}" alt="" class="css-img2">
            <div class="hide">
                <div class="text-right">
                    <p>Experience: 1.5 years</p>
                    <p>Skill: 72%</p>
                    <p>Projects:  5</p>
                </div>
            </div>
        </div>
        <div class="tech py-12 md:w-32 sm:w-16 md:h-32 sm:h-16 bg-gray-100 lg:mx-8" id="css">
            <img src="{{asset('images/icons8-flutter.svg')}}" alt="" class="css-img2">
            <div class="hide">
                <div class="text-right">
                    <p>Experience: 6 months</p>
                    <p>Skill: 57%</p>
                    <p>Projects:  1</p>
                </div>
            </div>
        </div>
        <div class="tech py-12 md:w-32 sm:w-16 md:h-32 sm:h-16 bg-gray-100 lg:mx-8" id="css">
            <img src="{{asset('images/icons8-figma.svg')}}" alt="" class="css-img2">
            <div class="hide">
                <div class="text-right">
                    <p>Experience: 8 months</p>
                    <p>Skill: 70%</p>
                    <p>Projects:  3</p>
                </div>
            </div>
        </div>
        <div class="tech py-12 md:w-32 sm:w-16 md:h-32 sm:h-16 bg-gray-100 lg:mx-8" id="css">
            <div class="hide">
                <div class="text-right">
                    <p>Experience: 5 years</p>
                    <p>Skill: 95%</p>
                    <p>Projects:  10</p>
                </div>
            </div>
            <img src="{{asset('images/html5-brands.svg')}}" alt="" class="css-img2">
        </div>
      </div>


    <div class="py-12 bg-gray-200 lg:mx-32 drop-shadow-lg my-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h6 class="mt-1 sm:text-3xl">
                  Clients
                </h6>
                {{-- <p class="mt-2 max-w-2xl text-l text-gray-500 lg:mx-auto">
                  Feedbacks are welcomed
                </p> --}}
              </div>
        </div>

      </div>

  </section>

</body>
<script>
	// Grab HTML Elements
	const btn = document.querySelector("button.mobile-menu-button");
	const menu = document.querySelector("#mobile-menu");

	// Add Event Listeners
	btn.addEventListener("click", () => {
	menu.classList.toggle("hidden");
	});

    gsap.registerPlugin(ScrollTrigger);
    var tl = gsap.timeline();
    tl.from('#mobile-menu',{
        y: '-70%',
        opacity: 0,
        duration: 2
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/gsap.min.js" integrity="sha512-gWlyRVDsJvp5kesJt4cSdPPLZIBdln/uSwzYgUicQcbTgRNQE4QhP5KUBIYlLYLkiKIQiuD7KUMHzqGNW/D2bQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.0/ScrollTrigger.min.js" integrity="sha512-K7WgwKJAJIRoRV8yDALsY4+CZhsWKk0gVFotVxC2RzCRyoEVyWH1DRDjxw2DdBKdZdBMPr4cacHbYbNco9wOvQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.min.js" defer></script>
</html>
