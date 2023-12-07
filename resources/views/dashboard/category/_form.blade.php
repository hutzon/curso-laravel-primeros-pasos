      
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
                value="{{ old('title',$category->title)}}"
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
                value="{{ old('slug',$category->slug)}}"
                >

        <button type="submit" class="px-4 py-2 mt-3 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
            Enviar
        </button>