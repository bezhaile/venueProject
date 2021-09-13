<div class="form-group {{ $errors->has('Name_of_Venue') ? 'has-error' : ''}}">
    <label for="Name_of_Venue" class="control-label text-dark">{{ 'Name of Venue' }}</label>
    <input class="form-control" name="Name_of_Venue" type="text" id="Name_of_Venue" value="{{ isset($post->Name_of_Venue) ? $post->Name_of_Venue : ''}}" >
    {!! $errors->first('Name_of_Venue', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
    <label for="location" class="control-label text-dark">{{ 'Location' }}</label>
    <textarea class="form-control" rows="5" name="location" type="textarea" id="location" >{{ isset($post->location) ? $post->location : ''}}</textarea>
    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Number_of_sits') ? 'has-error' : ''}}">
    <label for="Number_of_sits" class="control-label text-dark">{{ 'Number of sits' }}</label>
    <textarea class="form-control" rows="5" name="Number_of_sits" type="textarea" id="Number_of_sits" >{{ isset($post->Number_of_sits) ? $post->Number_of_sits : ''}}</textarea>
    {!! $errors->first('Number_of_sits', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label text-dark">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($post->image) ? $post->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
