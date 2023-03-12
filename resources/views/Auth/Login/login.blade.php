{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- component -->
    <div class="bg-gray-100 h-screen w-screen">
        <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
            @if (Session('error'))
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0" style="height: 500px">
                <div class="flex flex-col w-full md:w-1/2 p-4">
                    <div class="flex flex-col flex-1 justify-center mb-8">
                        <h1 class="text-4xl text-center font-thin">Welcome Back</h1>
                        <div class="w-full mt-4">
                            <form class="form-horizontal w-3/4 mx-auto" method="POST"
                                action="{{ route('postLogin') }}">
                                @csrf
                                <div class="flex flex-col mt-4">
                                    <input id="email" type="text"
                                        class="flex-grow h-8 px-2 border rounded border-grey-400" name="email"
                                        value="" placeholder="Email">
                                </div>
                                <div class="flex flex-col mt-4">
                                    <input id="password" type="password"
                                        class="flex-grow h-8 px-2 rounded border border-grey-400" name="password"
                                        required placeholder="Password">
                                </div>
                                <div class="flex flex-col mt-8">
                                    <button type="submit"
                                        class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded">
                                        Login
                                    </button>
                                </div>
                            </form>
                            <div class="text-center mt-4">
                                <a class="no-underline hover:underline text-blue-dark text-xs" href="">
                                    Forgot Your Password?
                                </a>
                            </div>
                            <div class="text-center mt-4">
                                <a class="no-underline hover:underline text-blue-dark text-xs"
                                    href="{{ route('register') }}">
                                    Create An Account Sign Up Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block md:w-1/2 rounded-r-lg"
                style="background: url({{ asset('assets/img/c.jpg') }}); background-size: cover; background-position: center center;">
                </div>
            </div>
        </div>
    </div>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | E-Comp</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="bg-gray-200 w-full min-h-screen flex items-center justify-center">
        <div class="w-full py-8">
            <div
            class="bg-white w-5/6 md:w-3/4 lg:w-2/3 xl:w-[500px] 2xl:w-[550px] mt-8 mx-auto px-16 py-8 rounded-lg shadow-2xl">
                <h2 class="text-center text-2xl font-bold tracking-wide text-gray-800">Sign In</h2>
                <p class="text-center text-sm text-gray-600 mt-2">Already have an account? <a href="#"
                        class="text-blue-600 hover:text-blue-700 hover:underline" title="Sign In">Sign in here</a></p>

                <form class="my-8 text-sm" method="POST" action="{{ route('postLogin') }}">
                    @csrf
                    <div class="flex flex-col my-4">
                        <label for="email" class="text-gray-700">Email Address</label>
                        <input type="email" name="email" id="email"
                            class="mt-2 p-2 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                            placeholder="Enter your email">
                    </div>

                    <div class="flex flex-col my-4">
                        <label for="password" class="text-gray-700">Password</label>
                        <div x-data="{ show: false }" class="relative flex items-center mt-2">
                            <input :type=" show ? 'text' : 'password'" name="password" id="password"
                                class="flex-1 p-2 pr-10 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                                placeholder="Enter your password" type="password">
                            <button @click="show = !show" type="button"
                                class="absolute right-2 bg-transparent flex items-center justify-center text-gray-700">
                                <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                    </path>
                                </svg>

                                <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    {{-- <div class="flex flex-col my-4">
                        <label for="password_confirmation" class="text-gray-700">Password Confirmation</label>
                        <div x-data="{ show: false }" class="relative flex items-center mt-2">
                            <input :type=" show ? 'text' : 'password'" name="password_confirmation"
                                id="password_confirmation"
                                class="flex-1 p-2 pr-10 border border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded text-sm text-gray-900"
                                placeholder="Enter your password again" type="password">
                            <button @click="show = !show" type="button"
                                class="absolute right-2 bg-transparent flex items-center justify-center text-gray-700">
                                <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                    </path>
                                </svg>

                                <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div> --}}

                    <div class="flex items-center">
                        <label for="remember_me" class="text-gray-700">Don't have an account? <a
                                href="#" class="text-blue-600 hover:text-blue-700 hover:underline">Create One</a></label>
                    </div>

                    <div class="my-4 flex items-center justify-end space-x-4">
                        <button type="submit"
                            class="bg-blue-600 hover:bg-blue-700 rounded-lg px-8 py-2 text-gray-100 hover:shadow-xl transition duration-150 uppercase">Sign
                            In</button>
                    </div>
                </form>

                <div class="flex items-center justify-between">
                    <div class="w-24 h-[1px] bg-gray-300"></div>
                    <span class="text-sm uppercase mx-6 text-gray-400">Forgot your password?</span>
                    <div class="w-24 h-[1px] bg-gray-300"></div>
                </div>

                <div class="text-sm">
                    <a href="#"
                        class="flex items-center justify-center space-x-2 text-gray-600 my-2 py-2 bg-gray-100 hover:bg-gray-200 rounded">
                        <span>Forgot Password</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
