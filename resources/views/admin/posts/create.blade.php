<x-layout>

    <x-setting heading="Publish New Post">

        <form action="/admin/posts" method="post" class="mt-10" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" required/>

                <x-form.input name="slug" required/>

                <x-form.input name="thumbnail" type='file' required/>

                <x-form.textarea name="excerpt" required/>

                <x-form.textarea name="body" required/>

                <div class="mb-6">
                   <x-form.label name="category_id" />  
                   <select
                                id="category_id"
                                name="category_id"
                                class="rounded  p-2"
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

    </x-setting>
</x-layout>