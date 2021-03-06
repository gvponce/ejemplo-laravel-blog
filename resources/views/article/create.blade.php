@extends('layouts.app')

@section('content')

{!! Form::open(['route' => 'writer.articles.store', 'method' => 'POST', 'files' => true]) !!}
	{!! Form::select('category_id', $categories_for_article, NULL, ['placeholder' => 'Escoger categoría', 'class' => 'form-control']) !!}
	{!! Form::text('title', null, ['class' => 'form-control border-0']) !!}
	{!! Form::text('summary', null, ['class' => 'form-control border-0']) !!}
	{!! Form::file('image_path', []) !!}
	{!! Form::textarea('text', null, ['id' => 'editor']) !!}
	{!! Form::submit('Guardar artículo', ['class' => 'btn btn-sm']) !!}
{!! Form::close() !!}
@endsection

@section('scripts')
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('js/ckeditor/es.js') }}"></script>
<script>
	ClassicEditor
		.create( document.querySelector( '#editor' ), {
			language: 'es'
		} )
		.then( editor => {
			window.editor = editor;
		} )
		.catch( error => {
			console.error( 'There was a problem initializing the editor.', error );
		} );
</script>
@endsection