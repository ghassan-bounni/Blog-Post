<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100  border border-gray-200  p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Login!</h1>
              <form action="/sessions" method="post" class="mt-10">
                {{-- Cross Site Request Forgery  
                 "prevents faking a request from one site to another"--}}
                @csrf
                        <x-form.input name="email" type='email' autocomplete="username" required/>

                        <x-form.input name="password" type='password' autocomplete="current-password" required/>

                        <div class="mb-6">       
                                    <x-submit-button>
                                        Login
                                    </x-submit-button>
                            </div>
            </form>
               </main>
    </section>
</x-layout>