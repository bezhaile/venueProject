<div class="form-group {{ $errors->has('Name_of_Venue') ? 'has-error' : ''}}">
    <label for="Name_of_Venue" class="control-label">{{ 'Name_of_Venue' }}</label>
    <input class="form-control" name="Name_of_Venue" type="text" id="Name_of_Venue" value="{{ isset($imagesofvenue->Name_of_Venue) ? $imagesofvenue->Name_of_Venue : ''}}" >
    {!! $errors->first('Name_of_Venue', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
    <label for="location" class="control-label">{{ 'Location' }}</label>
    <textarea class="form-control" rows="5" name="location" type="textarea" id="location" >{{ isset($imagesofvenue->location) ? $imagesofvenue->location : ''}}</textarea>
    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Number_of_sits') ? 'has-error' : ''}}">
    <label for="Number_of_sits" class="control-label">{{ 'Number_of_sits' }}</label>
    <textarea class="form-control" rows="5" name="Number_of_sits" type="textarea" id="Number_of_sits" >{{ isset($imagesofvenue->Number_of_sits) ? $imagesofvenue->Number_of_sits : ''}}</textarea>
    {!! $errors->first('Number_of_sits', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Uploade_Images') ? 'has-error' : ''}}">
    <label for="Uploade_Images" class="control-label">{{ 'Uploade_Images' }}</label>
    <input class="form-control" name="Uploade_Images" type="file" id="Uploade_Images" value="{{ isset($imagesofvenue->Uploade_Images) ? $imagesofvenue->Uploade_Images : ''}}" >
    {!! $errors->first('Uploade_Images', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
