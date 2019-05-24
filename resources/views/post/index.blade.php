@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <ul class="list-group list-group-flush mb-3">
                @forelse($posts as $post)
                <li class="list-group-item">
                    სათაური: {{ $post->title }}
                    <small>აღწერა: {{ $post->description }}</small>
                    <form action="{{route('post.destroy', $post)}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-sm btn-danger">წაშლა</button>
                    </form>
                </li>
                @empty
                პოსტები არარის დამატებული
                @endforelse
            </ul>

            <nav aria-label="category navigation">
                <ul class="pagination d-flex justify-content-center">
                    {{$posts->links()}}
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection
