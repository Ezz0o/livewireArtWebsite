<!--Component that represents the post element-->
<div class="shadow-md rounded-md overflow-hidden" style="background-color: bisque;">
  @if($post->image)
    <a href="/posts/{{$post->id}}">
    <img src="{{$post->image}}" alt="Post thumbnail"  style="width: 800px; height: 600px;">
    </a>
    @endif
    <div class="px-4 py-2">
      <h2 class="text-center">
        <a href="/{{$post->owner->name}}" class="text-xl font-medium text-gray-800 text-center">
          {{$post->owner->name}}
        </a>
      </h2>
      <h2 class="text-lg font-medium text-gray-800 text-center">{{$post->title}}</h2>
      @if($post->caption)
      <p class="text-gray-600 text-center whitespace-pre-line">{{$post->caption}}</p>
      @endif
    </div>
</div>