@extends('header.header')
@section('content')
    <div id="root">
        @extends('admin.sidebar.sidebar')
        <div class="relative md:ml-64 bg-gray-100">
            <!-- Header -->
            <div class="relative bg-gray-800 pb-32 pt-12">
                <div class="px-4 md:px-10 mx-auto w-full">
                    <div>
                        <!-- Card stats -->
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                                >
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div
                                                class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                            >
                                                <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                    Traffic
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-800">
                            350,897
                          </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                                                >
                                                    <i class="far fa-chart-bar"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mt-4">
                        <span class="text-green-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 3.48%
                        </span>
                                            <span class="whitespace-no-wrap">
                          Since last month
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                                >
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div
                                                class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                            >
                                                <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                    New users
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-800">
                            2,356
                          </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"
                                                >
                                                    <i class="fas fa-chart-pie"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mt-4">
                        <span class="text-red-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 3.48%
                        </span>
                                            <span class="whitespace-no-wrap">
                          Since last week
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                                >
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div
                                                class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                            >
                                                <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                    Sales
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-800">
                            924
                          </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500"
                                                >
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mt-4">
                        <span class="text-orange-500 mr-2">
                          <i class="fas fa-arrow-down"></i> 1.10%
                        </span>
                                            <span class="whitespace-no-wrap">
                          Since yesterday
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                                <div
                                    class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                                >
                                    <div class="flex-auto p-4">
                                        <div class="flex flex-wrap">
                                            <div
                                                class="relative w-full pr-4 max-w-full flex-grow flex-1"
                                            >
                                                <h5 class="text-gray-500 uppercase font-bold text-xs">
                                                    Performance
                                                </h5>
                                                <span class="font-semibold text-xl text-gray-800">
                            49,65%
                          </span>
                                            </div>
                                            <div class="relative w-auto pl-4 flex-initial">
                                                <div
                                                    class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500"
                                                >
                                                    <i class="fas fa-percent"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-sm text-gray-500 mt-4">
                        <span class="text-green-500 mr-2">
                          <i class="fas fa-arrow-up"></i> 12%
                        </span>
                                            <span class="whitespace-no-wrap">
                          Since last month
                        </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 md:px-10 mx-auto w-full -m-24">
                <div class="flex flex-wrap">
                    <div class="w-full lg:w-8/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-200 border-0"
                        >
                            <div class="rounded-t bg-white mb-0 px-6 py-6">
                                <div class="text-center flex justify-between">
                                    <h6 class="text-gray-800 text-xl font-bold">My account</h6>
                                    <button
                                        class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                                        type="button"
                                    >
                                        Settings
                                    </button>
                                </div>
                            </div>
                            <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                                <form>
                                    <h6
                                        class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase"
                                    >
                                        User Information
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label
                                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    htmlFor="grid-password"
                                                >
                                                    Username
                                                </label>
                                                <input
                                                    type="text"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                    value="lucky.jesse"
                                                />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label
                                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    htmlFor="grid-password"
                                                >
                                                    Email address
                                                </label>
                                                <input
                                                    type="email"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                    value="jesse@example.com"
                                                />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label
                                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    htmlFor="grid-password"
                                                >
                                                    First Name
                                                </label>
                                                <input
                                                    type="text"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                    value="Lucky"
                                                />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-6/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label
                                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    htmlFor="grid-password"
                                                >
                                                    Last Name
                                                </label>
                                                <input
                                                    type="text"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                    value="Jesse"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mt-6 border-b-1 border-gray-400"/>

                                    <h6
                                        class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase"
                                    >
                                        Contact Information
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-12/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label
                                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    htmlFor="grid-password"
                                                >
                                                    Address
                                                </label>
                                                <input
                                                    type="text"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                    value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09"
                                                />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label
                                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    htmlFor="grid-password"
                                                >
                                                    City
                                                </label>
                                                <input
                                                    type="email"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                    value="New York"
                                                />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label
                                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    htmlFor="grid-password"
                                                >
                                                    Country
                                                </label>
                                                <input
                                                    type="text"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                    value="United States"
                                                />
                                            </div>
                                        </div>
                                        <div class="w-full lg:w-4/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label
                                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    htmlFor="grid-password"
                                                >
                                                    Postal Code
                                                </label>
                                                <input
                                                    type="text"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                    value="Postal Code"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="mt-6 border-b-1 border-gray-400"/>

                                    <h6
                                        class="text-gray-500 text-sm mt-3 mb-6 font-bold uppercase"
                                    >
                                        About Me
                                    </h6>
                                    <div class="flex flex-wrap">
                                        <div class="w-full lg:w-12/12 px-4">
                                            <div class="relative w-full mb-3">
                                                <label
                                                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                                    htmlFor="grid-password"
                                                >
                                                    About me
                                                </label>
                                                <textarea
                                                    type="text"
                                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full ease-linear transition-all duration-150"
                                                    rows="4"
                                                >
                                A beautiful UI Kit and Admin for JavaScript & Tailwind CSS. It is Free
                                and Open Source.
                              </textarea
                              >
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                        <div
                            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg mt-16"
                        >
                            <div class="px-6">
                                <div class="flex flex-wrap justify-center">
                                    <div class="w-full px-4 flex justify-center">
                                        <div class="relative">
                                            <img
                                                alt="..."
                                                src="../../assets/img/team-2-800x800.jpg"
                                                class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px"
                                            />
                                        </div>
                                    </div>
                                    <div class="w-full px-4 text-center mt-20">
                                        <div class="flex justify-center py-4 lg:pt-4 pt-8">
                                            <div class="mr-4 p-3 text-center">
                          <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                          >
                            22
                          </span>
                                                <span class="text-sm text-gray-500">Friends</span>
                                            </div>
                                            <div class="mr-4 p-3 text-center">
                          <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                          >
                            10
                          </span>
                                                <span class="text-sm text-gray-500">Photos</span>
                                            </div>
                                            <div class="lg:mr-4 p-3 text-center">
                          <span
                              class="text-xl font-bold block uppercase tracking-wide text-gray-700"
                          >
                            89
                          </span>
                                                <span class="text-sm text-gray-500">Comments</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-12">
                                    <h3
                                        class="text-xl font-semibold leading-normal mb-2 text-gray-800 mb-2"
                                    >
                                        Jenna Stones
                                    </h3>
                                    <div
                                        class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase"
                                    >
                                        <i
                                            class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"
                                        ></i>
                                        Los Angeles, California
                                    </div>
                                    <div class="mb-2 text-gray-700 mt-10">
                                        <i
                                            class="fas fa-briefcase mr-2 text-lg text-gray-500"
                                        ></i>
                                        Solution Manager - Creative Tim Officer
                                    </div>
                                    <div class="mb-2 text-gray-700">
                                        <i
                                            class="fas fa-university mr-2 text-lg text-gray-500"
                                        ></i>
                                        University of Computer Science
                                    </div>
                                </div>
                                <div class="mt-10 py-10 border-t border-gray-300 text-center">
                                    <div class="flex flex-wrap justify-center">
                                        <div class="w-full lg:w-9/12 px-4">
                                            <p class="mb-4 text-lg leading-relaxed text-gray-800">
                                                An artist of considerable range, Jenna the name taken
                                                by Melbourne-raised, Brooklyn-based Nick Murphy
                                                writes, performs and records all of his own music,
                                                giving it a warm, intimate feel with a solid groove
                                                structure. An artist of considerable range.
                                            </p>
                                            <a
                                                href="javascript:void(0);"
                                                class="font-normal text-pink-500"
                                            >
                                                Show more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    @extends('admin.footer.footer')
@endsection
