<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100  border border-gray-200  p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form action="/register" method="post" class="mt-10">
                {{-- Cross Site Request Forgery  
                 "prevents faking a request from one site to another"--}}
                @csrf
                <x-form.input name="name" required/>
                    
                <x-form.input name="username" required/>

                <x-form.input name="email" type='email' required/>

                <x-form.input name="password" type='password' autocomplete="new-password" required/>

                        <div class="mb-6">       
                                    <x-submit-button>
                                        Register
                                    </x-submit-button>
                            </div>
            </form>
        </main>
    </section>
</x-layout>