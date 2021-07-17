@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    
    {!! $post->body !!}

    <a href="/posts">Back to Posts</a>

@endsection

{{-- Post::create([
    'title' => 'Judul Ke Empat',
    'excerpt' => '<p>ipsum dolor sit amet consectetur adipisicing elit. Laborum labore vel consequatur, sint, ratione optio exercitationem',
    'body' => '<p>ipsum dolor sit amet consectetur adipisicing elit. Laborum labore vel consequatur, sint, ratione optio exercitationem quo vitae explicabo tempore accusantium impedit rem non quos, ea laboriosam qui recusandae repudiandae temporibus ab ad doloribus eos dicta quidem! Eveniet nemo adipisci iusto odio atque labore quidem doloribus cumque aliquam, ad aperiam saepe ex autem voluptatibus ullam quis repellendus voluptatem! Sed commodi et quod, illum similique dolorem soluta, dignissimos, maiores qui consequatur nostrum cumque ex.</p><p> Molestiae architecto delectus porro atque nisi, mollitia odit cumque ad laboriosam aspernatur, doloremque, dolore dicta. Ducimus, consectetur.</p><p>Vel modi nemo, sed nulla harum deserunt! Illo eos facilis quia quo fuga magnam unde sequi, odio, quisquam quibusdam repudiandae illum quod rem deserunt voluptas ipsa dolores, repellat temporibus delectus at consequuntur nisi nulla culpa. Repellendus hic delectus ea similique, odio soluta fuga dolores sed esse iure exercitationem sit. Dolor id laboriosam ducimus est voluptas ratione enim amet esse necessitatibus!</p>'
])

<p>ipsum dolor sit amet consectetur adipisicing elit. Laborum labore vel consequatur, sint, ratione optio exercitationem quo vitae explicabo tempore accusantium impedit rem non quos, ea laboriosam qui recusandae repudiandae temporibus ab ad doloribus eos dicta quidem! Eveniet nemo adipisci iusto odio atque labore quidem doloribus cumque aliquam, ad aperiam saepe ex autem voluptatibus ullam quis repellendus voluptatem! Sed commodi et quod, illum similique dolorem soluta, dignissimos, maiores qui consequatur nostrum cumque ex.</p><p> Molestiae architecto delectus porro atque nisi, mollitia odit cumque ad laboriosam aspernatur, doloremque, dolore dicta. Ducimus, consectetur.</p><p>Vel modi nemo, sed nulla harum deserunt! Illo eos facilis quia quo fuga magnam unde sequi, odio, quisquam quibusdam repudiandae illum quod rem deserunt voluptas ipsa dolores, repellat temporibus delectus at consequuntur nisi nulla culpa. Repellendus hic delectus ea similique, odio soluta fuga dolores sed esse iure exercitationem sit. Dolor id laboriosam ducimus est voluptas ratione enim amet esse necessitatibus!</p> --}}