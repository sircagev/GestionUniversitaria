@extends('layouts.app')

@section('content')
<div class="bg-gray-100 py-6 flex flex-col justify-center sm:py-12 h-[calc(100vh-72px)]">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div
            class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div class="max-w-md mx-auto">
                <div>
                    <h1 class="text-2xl font-semibold">Sign Up University Managment</h1>
                </div>
                <div class="divide-y divide-gray-200">
                    <form  action="{{route('signup')}}" class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7"
                        method="POST">
                        @csrf
                        <div class="relative">
                            <input autocomplete="off" id="name" name="name" type="text"
                                class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                placeholder="Complete Name" />
                            <label for="name"
                                class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">First
                                Name</label>
                        </div>
                        <div class="relative">
                            <input autocomplete="off" id="lastname" name="lastname" type="text"
                                class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                placeholder="Email address" />
                            <label for="lastname"
                                class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Last
                                Name</label>
                        </div>
                        <div class="relative">
                            <input autocomplete="off" id="email" name="email" type="text"
                                class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                placeholder="Email address" />
                            <label for="email"
                                class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email
                                Address</label>
                        </div>
                        <div class="relative">
                            <input autocomplete="off" id="password" name="password" type="password"
                                class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600"
                                placeholder="Password" />
                            <label for="password"
                                class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                        </div>
                        <div class="relative inline-flex justify-between">
                            <p class="pr-[15px]">Role:</p>
                            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                                <path
                                    d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                                    fill="#648299" fill-rule="nonzero" />
                            </svg>
                            <select class="border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none w-full" name="role">
                                <option>Choose a role</option>
                                <option>Administrador</option>
                                <option>Estudiante</option>
                                <option>Profesor</option>
                            </select>
                        </div>
                        <div class="relative">
                            <input type="submit" value="Sign Up" class="bg-blue-500 text-white rounded-md px-2 py-1" />
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection