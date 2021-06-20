<x-app-layout>
    <div class='container py-8'>
        <h1 class="text-4xl font-bold  ">{{$post->name}}</h1>

        <div class="text-lg text-gray-500 mb-2">
            {!!$post->extract!!}
        </div>

        <div class = "grid grid-cols-1  lg:grid-cols-3 gap-6">
            <div class="lg:col-span-2">
                <figure>
                    @if($post->image)
                        <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="{{$post->name}}">
                    @else
                        <img class="w-full h-72 object-cover object-center" src="{{asset('img/no-image.jpg')}}" alt="{{$post->name}}">
                    @endif
                </figure>

                <div class="text-base text-gray-500 mt-4 "> 
                    {!!$post->body!!}
                </div>
            </div>
            
            <aside>
                <h1 class="text-2xl font-bold text-gray-700 mb-4">Más en {{$post->category->name}} </h1>
                @foreach ($relateds as $related)
                    <li class="mb-4 list-none">
                        <a class="flex" href="{{route('posts.show', $related)}}">
                            @if($related->image)
                                <img class="w-30 h-20 object-cover object-center" src="{{Storage::url($related->image->url)}}" alt="{{$related->name}}">
                            @else
                                <img class="w-30 h-20 object-cover object-center" src="{{asset('img/no-image.jpg')}}" alt="{{$related->name}}">
                            @endif
                            <span class="ml-2 text-gray-600">{{$related->name}}</span>
                        </a>
                    </li>
                @endforeach
            </aside>
        </div>
</div>

     
</x-app-layout>