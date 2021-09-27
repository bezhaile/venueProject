<div class="form-group {{ $errors->has('Name_of_Venue') ? 'has-error' : ''}}">
    <label for="Name_of_Venue" class="control-label text-dark">{{ 'Name of Venue' }}</label>
    <input class="form-control" name="Name_of_Venue" type="text" id="Name_of_Venue" value="{{ isset($post->Name_of_Venue) ? $post->Name_of_Venue : ''}}" >
    {!! $errors->first('Name_of_Venue', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
    <label for="location" class="control-label text-dark">{{ 'Location' }}</label>
    <input class="form-control" rows="5" name="location" type="text" id="location" value="{{ isset($post->location) ? $post->location : ''}}" >
    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Number_of_sits') ? 'has-error' : ''}}">
    <label for="Number_of_sits" class="control-label text-dark">{{ 'Number of sits' }}</label>
    <input class="form-control" rows="5" name="Number_of_sits" type="text" id="Number_of_sits" value="{{ isset($post->Number_of_sits) ? $post->Number_of_sits : ''}}">
    {!! $errors->first('Number_of_sits', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    <label for="price" class="control-label text-dark">{{ 'Price' }}</label>
    <input class="form-control" rows="5" name="price" type="text" id="price" value="{{ isset($post->price) ? $post->price : ''}}">
    {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tel') ? 'has-error' : ''}}">
    <label for="tel" class="control-label text-dark">{{ 'Tel' }}</label>
    <input class="form-control" rows="5" name="tel" type="text" id="tel" value="{{ isset($post->tel) ? $post->tel : ''}}">
    {!! $errors->first('tel', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label text-dark">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($post->image) ? $post->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
