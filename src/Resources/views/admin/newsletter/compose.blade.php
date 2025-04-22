@extends('admin::layouts.content')

@section('page_title')
    Compose Newsletter
@stop

@section('content')
    <form method="POST" action="{{ route('admin.newsletter.send') }}">
        @csrf

        <div class="form-group">
            <label>Subject</label>
            <input type="text" name="subject" class="control" required />
        </div>

        <div class="form-group">
            <label>Content</label>
            <textarea id="newsletter-editor" name="content" class="control" rows="15" required></textarea>
        </div>

        <button class="btn btn-primary">Send Newsletter</button>
    </form>
@stop

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#newsletter-editor',
            height: 500,
            menubar: true,
            plugins: 'lists link image preview code',
            toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image | preview code',
        });
    </script>
@endpush
