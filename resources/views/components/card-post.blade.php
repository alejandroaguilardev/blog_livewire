@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if($post->image)
        <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="{{$post->name}}">
    @else
    <img class="w-full h-72 object-cover object-center" src="{{asset('img/no-image.jpg')}}" alt="{{$post->name}}">
    @endif
    
    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{route('posts.show',$post)}}">{{$post->name}}</a>
        </h1>
        <div class="text-base text-gray-600">
            {!!$post->extract!!}
        </div>
        <div class="px-6 pt-2 pb-2">
            @foreach ($post->tags as $tag)
                <a href="{{route('posts.tag',$tag)}}" class="inline-block rounded-full bg-{{$tag->colour}}-500 text-white px-3 text-sm mr-2">{{$tag->name}}</a>                            
            @endforeach
            
        </div>

    </div>
</article>