<div class="articles">
    <img class="imge" id="ChangeImg4" src="/storage/post/{{$post->thumbnail}}" alt="Изображение" title="Изображение">
    <div class="px-4 py-2 mt-2 bg-dark">
        <h2 class="font-bold text-2xl text-gray-800">{{$post->title}}</h2>
        <p2 class="sm:text-sm text-xs text-gray-700 px-2 mr-1 my-3">
            {!! $post->preview !!}
        </p2>
    </div>
</div>
