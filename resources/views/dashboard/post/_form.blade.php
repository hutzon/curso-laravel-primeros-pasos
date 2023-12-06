      
      @csrf
      <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">
                    Título
                </label>
                <input 
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                id="title" 
                name="title" 
                type="text" 
                placeholder="Título del post"
                value="{{ old('title',$post->title)}}"
                >
                
            </div>
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="slug">
                    Slug
                </label>
                <input 
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" 
                id="slug" 
                name="slug" 
                type="text" 
                placeholder="Título del post"
                value="{{ old('slug',$post->slug)}}"
                >
            </div>
            @if (isset($task) && $task == "edit")
                <div class="w-full md:w-1/2 px-3">
                
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
                        Imagen
                    </label>
                    <input 
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                    id="image" 
                    name="image" 
                    type="file"
                    >
                </div>
            @endif
            
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                    Descripción
                </label>
                <textarea 
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                id="description" 
                name="description" 
                rows="4" 
                placeholder="Descripción del post"
                >{{ old('description',$post->description)}}</textarea>
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="content">
                    Contenido
                </label>
                <textarea 
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" 
                id="content" 
                name="content" 
                rows="8" 
                placeholder="Contenido del post"
                >{{ old('content',$post->content)}}</textarea>
            </div>
        </div>
        <div class="relative">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category_id">
                    Categoria
            </label>
            <select name="category_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="category_id">
            @foreach ($categories as $title => $id)
                <option {{ old('category_id',$post->category_id) == $id ? 'selected' : ''}} value="{{$id}}">{{$title}}</option>
            @endforeach
            </select>
        </div>
        <div class="relative">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="posted">
                    Posteado
            </label>
            <select name="posted" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="posted">
                <option {{ old('posted',$post->posted) == 'yes' ? 'selected' : ''}} value="yes">Si</option>
                <option {{ old('posted',$post->posted) == 'not' ? 'selected' : ''}} value="not">No</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Enviar
        </button>