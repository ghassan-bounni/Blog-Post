<x-layout>
        <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100  border border-gray-200  p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Publish New Post</h1>
         <form action="/admin/posts" method="post" class="mt-10" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" />

                <x-form.input name="slug" />

                <x-form.input name="thumbnail" type='file' />

                <x-form.textarea name="excerpt" />

                <x-form.textarea name="body" />

                <div class="mb-6">
                   <x-form.label name="category_id" />  
                   <select
                                id="category_id"
                                name="category_id"
                                required
                                >

                                @foreach ( \App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}"
                                        {{old('category_id') == $category->id ? 'selected' : ''}}
                                        >
                                        {{ ucwords($category->name) }}
                                    </option>
                                @endforeach
                            </select> 
                </div>

                <x-form.error name="category_id" />

                        <div class="mb-6">       
                                    <x-submit-button>
                                        Publish
                                    </x-submit-button>
                            </div>
            </form>
            </main>
        </section>
</x-layout>