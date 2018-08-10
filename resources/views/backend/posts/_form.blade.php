<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
	{!! Form::label('title','Title',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="form-control">
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
		{!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
	{!! Form::label('image', 'Gambar', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="col-md-6 col-sm-6 col-xs-12">
		{!! Form::file('image') !!}
		{!! $errors->first('image', '<p class="help-block">:message</p>') !!}

		@if (isset($post) && $post->image !== '')
			<div class="row">
					<div class="col-md-6">
						<br><br>
						<div class="thumbnail">
						<img src="{{ url($post->ImageUrl) }}" class="img-rounded">
					</div>
					</div>
				</div>
		@endif
	</div>
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
	{!! Form::label('body', 'Body', ['class'=>'control-label col-md-3 col-sm-3 col-xs-12']) !!}
	<div class="form-control">
		{!! Form::textarea('body', null, ['class'=>'form-control'])!!}
		{!! $errors->first('body', '<p class="help-block">:message</p>') !!}
	</div>
</div>

<div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
    {!! Form::label('category_id','Category',['class' => 'control-label col-md-3 col-sm-3 col-xs-12']) !!} 
	<div class="col-md-6 col-sm-6 col-xs-12">
      {!! Form::select('category_id', App\Category::pluck('name', 'id'), null, ['placeholder' => 'Pilih Category', 'class' => 'form-control col-md-7 col-xs-12']) !!}

      @if ($errors->has('category_id'))
             <span class="help-block">
             {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
             </span>
      @endif
</div>
	</div>

{!! Form::hidden('author_id', Auth::user()->id) !!}

<div class="form-group">
	<div class="col-md-2 col-sm-2 col-xs-12 col-md-offset-3">
		{!! Form::submit(isset($data) ? 'Simpan' : 'Simpan', ['class' => 'btn btn-primary']) !!}
	</div>
</div>

@section('js')

<script type="text/javascript">
 CKEDITOR.replace( 'body', {
  extraPlugins: 'codesnippet',
  codeSnippet_theme: 'monokai_sublime'
} );
</script>

@endsection