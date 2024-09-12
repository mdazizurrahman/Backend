@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <a href="{{ route('notes.create') }}" class="btn btn-primary me-2 mb-2">Create Note</a>

    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            @foreach($notes as $note)
            <div class="card mb-2">
                <div class="d-flex align-items-end row">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $note->title }}</h5>

                        {!! $note->description !!}

                        <a href="javascript:;" class="btn btn-sm btn-outline-primary">Edit Note</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection