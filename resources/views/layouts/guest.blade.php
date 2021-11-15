<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
      Amber Loan
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Kevorn Callum" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
      .gradient {
        background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
      }
    </style>
    @livewireStyles()
  </head>
  <body class="gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    
    <div class="leading-normal tracking-normal text-white gradient">
    <!--Nav-->
    <nav id="header" class="fixed top-0 z-30 w-full text-white">
      <div class="container flex flex-wrap items-center justify-between w-full py-2 mx-auto mt-0">
        <div class="flex items-center pl-4">
          <a class="text-2xl font-bold text-white no-underline toggleColour hover:no-underline lg:text-4xl" href="{{route('landing')}}">
            <!--Icon from: http://www.potlabicons.com/ -->
            <svg class="inline h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
              <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
              <path
                class="plane-take-off"
                d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
              />
            </svg>
            Amber Loan
          </a>
        </div>
        <div class="block pr-4 lg:hidden">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 transition duration-300 ease-in-out transform hover:text-gray-900 focus:outline-none focus:shadow-outline hover:scale-105">
            <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="z-20 flex-grow hidden w-full p-4 mt-2 text-black bg-white lg:flex lg:items-center lg:w-auto lg:mt-0 lg:bg-transparent lg:p-0" id="nav-content">
          <ul class="items-center justify-end flex-1 list-reset lg:flex">
            <li class="mr-3">
                <a class="inline-block px-4 py-2 font-bold text-black no-underline hover:underline" href="{{route('checklist')}}">Business Loan CheckList</a>
              </li>
              <li class="mr-3">
                <a class="inline-block px-4 py-2 font-bold text-black no-underline hover:underline" href="{{route('apply')}}">Apply</a>
              </li>
          </ul>
        @guest
        <a href="{{route('login')}}">
          <button
            id="navAction"
            class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105"
          >
            Login
          </button>
          </a>
        @else
          <a href="{{route('home')}}">
          <button
            id="navAction"
            class="px-8 py-4 mx-auto mt-4 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow opacity-75 lg:mx-0 hover:underline lg:mt-0 focus:outline-none focus:shadow-outline hover:scale-105"
          >
            Dashboard
          </button>
          </a>
            {{-- <span>{{ Auth::user()->name }}</span> --}}
            
            <a href="{{ route('logout') }}"
                class="ml-10 no-underline hover:underline"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                {{ csrf_field() }}
            </form>
        @endguest
        </div>
      </div>
      <hr class="py-0 my-0 border-b border-gray-100 opacity-25" />
    </nav>
        <!--Hero-->
        <div class="pt-24">
            <div class="container flex flex-col flex-wrap items-center px-3 mx-auto md:flex-row">
              <!--Left Col-->
              <div class="flex flex-col items-start justify-center w-full text-center md:w-2/5 md:text-left">
                <p class="w-full uppercase tracking-loose">Amber Loan</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">
                  Secure and Legitimate Loans
                </h1>
                <p class="text-2xl leading-normal ">
                  Get reasonable loans today at Amber Loan!
                </p>
                <a href="{{route('apply')}}"><button class="px-8 py-4 mx-auto my-6 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow-lg lg:mx-0 hover:underline focus:outline-none focus:shadow-outline hover:scale-105">
                    Apply!
                  </button>
                  </a>
              </div>
              <!--Right Col-->
            <div class="w-full py-6 text-center md:w-3/5">
              <img class="z-50 w-full md:w-4/5" src="/image/loan.png" />
            </div>
            </div>
          </div>
          <div class="relative -mt-12 lg:-mt-24">
            <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                  <path
                    d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                    opacity="0.100000001"
                  ></path>
                  <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
                </g>
                <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <path
                    d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
                  ></path>
                </g>
              </g>
            </svg>
          </div>
          <section class="pt-10 bg-gray-100 pb-96">
          <div class="bg-gray-100 pb-96">
          @yield('content')
          
          @livewireScripts
          </div>
          </section>
          <div class="pb-20 bg-gray-100">
          </div>

          <svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
                <g class="wave" fill="#f8fafc">
                  <path
                    d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z"
                  ></path>
                </g>
                <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                  <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                    <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
                    <path
                      d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                      opacity="0.100000001"
                    ></path>
                    <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" opacity="0.200000003"></path>
                  </g>
                </g>
              </g>
            </g>
          </svg>
          <section class="container py-6 mx-auto mb-12 text-center">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
                Apply Today!
              </h1>
              <div class="w-full mb-4">
                <div class="w-1/6 h-1 py-0 mx-auto my-0 bg-white rounded-t opacity-25"></div>
              </div>
              <h3 class="my-4 text-3xl leading-tight">
                We offer the best loans!
              </h3>
              <a href="{{route('apply')}}"><button class="px-8 py-4 mx-auto my-6 font-bold text-gray-800 transition duration-300 ease-in-out transform bg-white rounded-full shadow-lg lg:mx-0 hover:underline focus:outline-none focus:shadow-outline hover:scale-105">
                Apply!
              </button>
              </a>
          </section>
          <!--Footer-->
    <footer class="bg-white">
        <div class="container px-8 mx-auto">
          <div class="flex flex-col w-full py-6 md:flex-row">
            <div class="flex-1 mb-6 text-black">
              <a class="text-2xl font-bold text-pink-600 no-underline hover:no-underline lg:text-4xl" href="{{route('landing')}}">
                <!--Icon from: http://www.potlabicons.com/ -->
                <svg class="inline h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
                  <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
                  <path
                    class="plane-take-off"
                    d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
                  />
                </svg>
                Amber Loan
              </a>
            </div>
            <div class="flex-1">
              <p class="text-gray-500 uppercase md:mb-6">Links</p>
              <ul class="mb-6 list-reset">
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                  <a href="{{route('apply')}}" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Apply</a>
                </li>
                <li class="inline-block mt-2 mr-2 md:block md:mr-0">
                  <a href="{{route('checklist')}}" class="text-gray-800 no-underline hover:underline hover:text-pink-500">Business Loan Checklist</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <a href="https://www.freepik.com/free-photos-vectors/background" class="text-gray-500">Background vector created by freepik - www.freepik.com</a>
      </footer>
    </div>




<script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  </body>
</html>
  