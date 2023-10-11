
@include('partials.header')
<nav x-data="{ open: false }" class="bg-gray-800 text-white fixed w-full z-20 top-0 left-0 border-gray-400-px-2 sm:px-4 py-2.5 ">
    <div  class="container flex flex-wrap justify-between item-center">
        <a href="/">
            <span class="self-center text-xl font-semibold whitespace-nowrap">
                Student System
            </span>
        </a>
        <button @click="open = !open" data-collapse-toggle="navbar-main" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </button>
        
        <div x-show="open" class=" w-full md:block md:w-auto" id="navbar-main">
            <ul class="flex flex-col md:flex-row px-4 ">
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 ">
                        Sign in
                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 ">
                        Sign Up
                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 ">
                        Log Out
                    </a>
                </li>
            </ul>
        </div>
        <div hidden class=" w-full md:block md:w-auto" id="navbar-main">
            <ul class="flex flex-col md:flex-row px-4 ">
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 ">
                        Sign in
                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 ">
                        Sign Up
                    </a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 ">
                        Log Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
  
</nav>

<header class="max-w-lg mx-auto mt-5">
    <a href="">
        <h1 class="text-4xl font-bold text-white text-center">Student List</h1>
    </a>
</header>
<section class="mt-10">
    <div class="overflow-x-auto relative">
        <table class="w-96 mx-auto w-full text-sm text-left-text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        First Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Last Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Age
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class="bg-gray-800 border-b text-white">
                    <td class="py-4 px-6 ">
                        {{$student->first_name}}
                    </td>
                    <td class="py-4 px-6 ">
                        {{$student->last_name}}
                    </td>
                    <td class="py-4 px-6 ">
                        {{$student->email}}
                    </td>
                    <td class="py-4 px-6 ">
                        {{$student->age}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@include('partials.footer')


    {{-- <h1 class="text-3xl font-bold underline">
    Hello world!
    </h1>
    <ul>
    @foreach ($students as $student)
    <li>
            {{$student->gender}} {{$student->gender_count}}
    </li>
    @endforeach

    </ul> --}}