<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100  border border-gray-200  p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
              <form action="/sessions" method="post" class="mt-10">
                {{-- Cross Site Request Forgery  
                 "prevents faking a request from one site to another"--}}
                @csrf
                        <div class="mb-6">
                            <label for="email" class="block mb-2 uppercase font-bold text-xs  text-gray-700">
                                Email
                            </label>
                            
                            <input
                            class="border border-gray-400 p-2 w-full"
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            />
                        </div>

                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror

                        <div class="mb-6">
                                <label for="password" class="block mb-2 uppercase font-bold text-xs  text-gray-700">
                                    Password
                                </label>
                                
                                    <input
                                        class="border border-gray-400 p-2 w-full"
                                        type="password"
                                        id="password"
                                        name="password"
                                        required
                                        />
                            </div>

                            @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror

                        <div class="mb-6">       
                                    <button
                                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                                        type="submit"
                                        >
                                        Submit
                                     </button>
                            </div>
            </form>
               </main>
    </section>
</x-layout>