@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <!-- FormValidation -->
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Create Note</h5>
                <form class="row g-6 fv-plugins-bootstrap5 fv-plugins-framework" method="POST" action="{{ route('notes.store') }}" id="noteForm">
                    @csrf
                    <div class="card-body px-4">
                        <div class="col-md-12 fv-plugins-icon-container">
                            <label class="form-label" for="noteTitle">Title</label>
                            <input type="text" id="noteTitle" class="form-control" placeholder="Note Title" name="title">
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                        </div>
                        <div class="col-md-12 fv-plugins-icon-container mt-2">
                            <label class="form-label" for="noteDesc">Description</label>
                            <div id="noteDesc" style="min-height: 100px;"></div>
                            <!-- Hidden input to hold the Quill editor content -->
                            <input type="hidden" name="description" id="description">
                        </div>

                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
<script>
    const quill = new Quill('#noteDesc', {
        theme: 'snow'
    });

    // Handle form submission
    document.getElementById('noteForm').addEventListener('submit', function() {
        // Transfer the Quill content to the hidden input
        document.getElementById('description').value = quill.root.innerHTML;
    });
</script>
@endpush