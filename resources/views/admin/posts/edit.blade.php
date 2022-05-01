<x-layout>

    <x-setting :heading=" 'Edit Post: '. $post->title ">

        <form action="/admin/posts/{{ $post->id }}" method="post" class="mt-10" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <x-form.input name="title" :value="$post->title" required/>

                <x-form.input name="slug"  :value="$post->slug" required/>

                <x-form.input name="thumbnail" type='file'  :value="$post->thumbnail" /> 

                <x-form.textarea name="excerpt" required>{{ old('excerpt',$post->excerpt) }}</x-form.textarea>

                <x-form.textarea name="body" required>{{ old('body',$post->body) }}</x-form.textarea>

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
                                        {{old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}
                                        >
                                        {{ ucwords($category->name) }}
                                    </option>
                                @endforeach
                            </select> 
                </div>

                <x-form.error name="category_id" />

                        <div class="mb-6">       
                                    <x-submit-button>
                                        Update
                                    </x-submit-button>
                            </div>
            </form>

    </x-setting>
</x-layout>