<!-- Id Field -->
<!--<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $category->id !!}</p>
</div>-->

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $category->name !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p><img class = "img-large" src = "{{url('/uploads/'.$category->image)}}" /></p>
</div>

<!-- Created At Field 
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $category->created_at !!}</p>
</div>

 Updated At Field 
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $category->updated_at !!}</p>
</div>-->

