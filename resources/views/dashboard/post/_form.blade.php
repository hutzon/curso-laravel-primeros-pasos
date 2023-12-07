      
      @csrf
      <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                    Título
                </label>
                <input 
                class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" 
                id="title" 
                name="title" 
                type="text" 
                placeholder="Título del post"
                value="{{ old('title',$post->title)}}"
                >
                
            </div>
            <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="slug">
                    Slug
                </label>
                <input 
                class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white" 
                id="slug" 
                name="slug" 
                type="text" 
                placeholder="Título del post"
                value="{{ old('slug',$post->slug)}}"
                >
            </div>
            @if (isset($task) && $task == "edit")
                <div class="w-full px-3 md:w-1/2">
                
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="image">
                        Imagen
                    </label>
                    <input 
                    class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="image" 
                    name="image" 
                    type="file"
                    >
                </div>
            @endif
            
        </div>
        <div class="flex flex-wrap mb-6 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="description">
                    Descripción
                </label>
                <textarea 
                class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" 
                id="description" 
                name="description" 
                rows="5" 
                placeholder="Descripción del post"
                >{{ old('description',$post->description)}}</textarea>
            </div>
        </div>
        <div class="flex flex-wrap mb-2 -mx-3">
            <div class="w-full px-3">
                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="content">
                    Contenido
                </label>
                <textarea 
                class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" 
                id="content" 
                name="content" 
                rows="5" 
                placeholder="Contenido del post"
                >{{ old('content',$post->content)}}</textarea>
            </div>
        </div>
        <div class="relative">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="category_id">
                    Categoria
            </label>
            <select name="category_id" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="category_id">
            @foreach ($categories as $title => $id)
                <option {{ old('category_id',$post->category_id) == $id ? 'selected' : ''}} value="{{$id}}">{{$title}}</option>
            @endforeach
            </select>
        </div>
        <div class="relative">
            <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="posted">
                    Posteado
            </label>
            <select name="posted" class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" id="posted">
                <option {{ old('posted',$post->posted) == 'yes' ? 'selected' : ''}} value="yes">Si</option>
                <option {{ old('posted',$post->posted) == 'not' ? 'selected' : ''}} value="not">No</option>
            </select>
        </div>
        <button type="submit" class="px-4 py-2 mt-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
            Enviar
        </button>