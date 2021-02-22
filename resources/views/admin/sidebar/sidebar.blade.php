@section('dashboard_sidebar')
    <nav
    class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-no-wrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
>
    <div
        class="md:flex-col md:items-stretch md:min-h-full md:flex-no-wrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
    >
        <button
            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
            type="button"
            onclick="toggleNavbar('example-collapse-sidebar')"
        >
            <i class="fas fa-bars"></i>
        </button>
        <a
            class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
            href="../../index.html"
        >
            Welcome back, <br>{{ auth()->user()->full_name }}
        </a>
        <ul class="md:hidden items-center flex flex-wrap list-none">
            <li class="inline-block relative">
                <a
                    class="text-gray-600 block py-1 px-3"
                    href="#pablo"
                    onclick="openDropdown(event,'notification-dropdown')"
                ><i class="fas fa-bell"></i
                    ></a>
                <div
                    class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="notification-dropdown"
                >
                    <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Action</a
                    ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Another action</a
                    ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Something else here</a
                    >
                    <div class="h-0 my-2 border border-solid border-gray-200"></div>
                    <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Seprated link</a
                    >
                </div>
            </li>
            <li class="inline-block relative">
                <a
                    class="text-gray-600 block"
                    href="#pablo"
                    onclick="openDropdown(event,'user-responsive-dropdown')"
                ><div class="items-center flex">
                  <span
                      class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"
                  ><img
                          alt="..."
                          class="w-full rounded-full align-middle border-none shadow-lg"
                          src="../../assets/img/team-1-800x800.jpg"
                      /></span></div
                    ></a>
                <div
                    class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                    id="user-responsive-dropdown"
                >
                    <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Action</a
                    ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Another action</a
                    ><a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Something else here</a
                    >
                    <div class="h-0 my-2 border border-solid border-gray-200"></div>
                    <a
                        href="#pablo"
                        class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
                    >Seprated link</a
                    >
                </div>
            </li>
        </ul>
        <div
            class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded hidden"
            id="example-collapse-sidebar"
        >
            <div
                class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-gray-300"
            >
                <div class="flex flex-wrap">
                    <div class="w-6/12">
                        <a
                            class="md:block text-left md:pb-2 text-gray-700 mr-0 inline-block whitespace-no-wrap text-sm uppercase font-bold p-4 px-0"
                            href="../../index.html"
                        >
                            Notus JS
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button
                            type="button"
                            class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                            onclick="toggleNavbar('example-collapse-sidebar')"
                        >
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </div>
            <form class="mt-6 mb-4 md:hidden">
                <div class="mb-3 pt-0">
                    <input
                        type="text"
                        placeholder="Search"
                        class="px-3 py-2 h-12 border border-solid border-gray-600 placeholder-gray-400 text-gray-700 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
                    />
                </div>
            </form>
            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
                class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
                Admin Layout Pages
            </h6>
            <!-- Navigation -->

            <ul class="md:flex-col md:min-w-full flex flex-col list-none">
                <li class="items-center">
                    <a
                        href="./dashboard.html"
                        class="text-xs uppercase py-3 font-bold block text-indigo-600 hover:text-pink-600"
                    >
                        <i class="fas fa-tv mr-2 text-sm opacity-75"></i>
                        Dashboard
                    </a>
                </li>

                <li class="items-center">
                    <a
                        href="{{ route('settings') }}"
                        class="text-xs uppercase py-3 font-bold block text-gray-800 hover:text-gray-600"
                    >
                        <i class="fas fa-tools mr-2 text-sm text-gray-400"></i>
                        Settings
                    </a>
                </li>

                <li class="items-center">
                    <a
                        href="./tables.html"
                        class="text-xs uppercase py-3 font-bold block text-gray-800 hover:text-gray-600"
                    >
                        <i class="fas fa-table mr-2 text-sm text-gray-400"></i>
                        Tables
                    </a>
                </li>

                <li class="items-center">
                    <a
                        href="./maps.html"
                        class="text-xs uppercase py-3 font-bold block text-gray-800 hover:text-gray-600"
                    >
                        <i class="fas fa-map-marked mr-2 text-sm text-gray-400"></i>
                        Maps
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
                class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
                Auth Layout Pages
            </h6>
            <!-- Navigation -->

            <ul
                class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
                <li class="items-center">
                    <form action="{{ route('logout') }}" method="post" class="inline">
                        @csrf
                        <button type="submit" class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"><i class="fas fa-fingerprint text-gray-400 mr-2 text-sm"></i>Logout</button>
                    </form>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="my-4 md:min-w-full" />
            <!-- Heading -->
            <h6
                class="md:min-w-full text-gray-600 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
            >
                No Layout Pages
            </h6>
            <!-- Navigation -->

            <ul
                class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4"
            >
                <li class="items-center">
                    <a
                        href="../landing.html"
                        class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                    >
                        <i class="fas fa-newspaper text-gray-400 mr-2 text-sm"></i>
                        Landing Page
                    </a>
                </li>

                <li class="items-center">
                    <a
                        href="#"
                        class="text-gray-800 hover:text-gray-600 text-xs uppercase py-3 font-bold block"
                    >
                        <i class="fas fa-user-circle text-gray-400 mr-2 text-sm"></i>
                        Profile Page
                    </a>
                </li>
            </ul>

            <!-- Divider -->
        </div>
    </div>
</nav>
@endsection
