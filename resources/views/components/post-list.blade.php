<div class="container mx-auto p-10">
    <h1 class="text-5xl text-center py-12 font-bold	text-gray-800">الاستراحات المتوفره</h1>
    <ul class="grid grid-cols-1 gap-1 sm:grid-cols-2 md:grid-cols-3 md:gap-8">
        @foreach($posts as $post)
      <li class="bg-white dark:bg-gray-800 rounded-lg shadow-xl">
            <img
            class="object-cover object-center w-full h-44 opacity-90 rounded-lg group-hover:opacity-100 transition duration-500 ease-in-out"
             src="{{ asset('storage/photos/'. $post->image) }}" alt="avatar">

             <div class="mt-2">


            <div class="px-6 py-4 group-hover:bg-gray-200 dark:group-hover:bg-gray-700 rounded-lg transition duration-500 ease-in-out">
                <h1 class="text-xl font-semibold text-gray-800 dark:text-white transition duration-500 ease-in-out dark:group-hover:text-blue-200">{{ $post->title }}</h1>

                <p class="py-2 text-gray-700 dark:text-gray-400">
                   {{ Str::limit($post->body, 90)}}
                </p>
            </div>
             </div>
          </a>
    </li>
    @endforeach
    </ul>
  </div>
