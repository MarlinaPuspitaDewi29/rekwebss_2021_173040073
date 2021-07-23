@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    
    {!! $post->body !!}

    <a href="/posts">Back to Posts</a>

@endsection

{{-- Post::create([
    'title' => 'Judul Dua'
    'slug' => 'judul-ke-dua',
    'excerpt' => 'Lorem ipsum ke dua',
    'body' => '<p>lorem, ipsum dolor sit amet consectetur adipisicing elit. </p><p> aperiam ad quia magnam voluptates suscipit quas inventore hic dolorum quisquam et, consequuntur rerum deserunt, amet pariatur necessitatibus alias eos, eum nostrum fugit</p>. <p> aliquam soluta ipsum pariatur accusantium reprehenderit consequatur beatae nostrum non, eos tenetur! Nostrum, ut doloribus quidem harum illum quia, voluptatem ipsam tempore earum ab aspernatur fuga accusamus dicta provident saepe voluptatibus deserunt dolorem et doloremque nemo! In ea enim cum odio facilis veritatis voluptatem blanditiis vitae? Corporis asperiores velit quod tempore non illo reprehenderit laborum unde distinctio necessitatibus nulla, sed ab dolorem nam, debitis facere recusandae quo alias quas? Est, non? Neque officia quos tempore, illum enim id eligendi, nemo itaque quia cumque ullam optio vel quo beatae. Voluptatibus accusantium ea inventore, eaque soluta hic beatae iste? Accusamus quam laboriosam voluptatibus vel nemo voluptatum veritatis soluta sapiente beatae provident porro, reiciendis at alias animi nesciunt facere. Qui!</p>'
]) --}}