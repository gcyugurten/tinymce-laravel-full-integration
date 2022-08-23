@extends('layout')



@push('css')
    <script src="https://cdn.tiny.cloud/1/your-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
@endpush 

@section('content')

    <div class="bg-white rounded p-4 mt-4 shadow-sm">

        <h3 class="special-heading pb-4"> Create a new article </h3>

        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="content">
                    <strong>Content</strong>
                    <span class="text-danger">*</span>
                </label>

                <textarea 
                    class="@if($errors->has('content')) border-danger @endif" 
                    name="content" id="content">{!! old('content') !!}</textarea>
                
            </div>

            <button type="submit" class="btn btn-success p-2">Save</button>
            
        
        </form>
    </div>
    
    
@endsection



@push('js')
    <script>
        tinymce.init({
            selector: 'textarea#content',
            plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
            toolbar_mode: 'floating',
            automatic_uploads : true,
            images_upload_url : "/posts/create/upload-image",
            image_title: true,
        });

    </script>
 
@endpush
