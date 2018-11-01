@extends('layouts.app')

@section('content')

    <div class="container mx-auto">
        <h1 class="text-2xl text-grey-darkest mb-8">Threads</h1>
        
        

        <div class="w-full border-b mb-8"></div>

        @foreach ($threads as $thread)
            <div class="w-full border rounded p-8 relative mb-4">
                <div class="absolute pin-t pin-r mt-2 mr-3">options</div>
                <a href="{{route('threads.show', ['thread' => $thread])}}" class="text-xl text-grey-darkest no-underline font-bold hover:text-blue mb-2">Title</a>
                <p class="text-md text-grey">{{$thread->body}}</p>
            </div>
        @endforeach
        
    </div>


@endsection
