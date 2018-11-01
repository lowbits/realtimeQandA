@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="border w-full rounded p-8 shadow-md">
        <p class="text-grey-dark text-xl font-bold">Question:</p>
        <p class="mb-2">{{$thread->owner->name}} asked {{ \Carbon\Carbon::parse($thread->created_at)->diffForHumans() }}</p>
        <p>{{$thread->body}}</p>
    </div>
</div>
@endsection