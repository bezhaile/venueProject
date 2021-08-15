<div class="form-group {{ $errors->has('Name of Venue') ? 'has-error' : ''}}">
    <label for="Name of Venue" class="control-label">{{ 'Name Of Venue' }}</label>
    <input class="form-control" name="Name of Venue" type="text" id="Name of Venue" value="{{ isset($imagesofvenue->Name of Venue) ? $imagesofvenue->Name of Venue : ''}}" >
    {!! $errors->first('Name of Venue', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
    <label for="location" class="control-label">{{ 'Location' }}</label>
    <textarea class="form-control" rows="5" name="location" type="textarea" id="location" >{{ isset($imagesofvenue->location) ? $imagesofvenue->location : ''}}</textarea>
    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Number of sits') ? 'has-error' : ''}}">
    <label for="Number of sits" class="control-label">{{ 'Number Of Sits' }}</label>
    <textarea class="form-control" rows="5" name="Number of sits" type="textarea" id="Number of sits" >{{ isset($imagesofvenue->Number of sits) ? $imagesofvenue->Number of sits : ''}}</textarea>
    {!! $errors->first('Number of sits', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Uploade Images') ? 'has-error' : ''}}">
    <label for="Uploade Images" class="control-label">{{ 'Uploade Images' }}</label>
    <input class="form-control" name="Uploade Images" type="file" id="Uploade Images" value="{{ isset($imagesofvenue->Uploade Images) ? $imagesofvenue->Uploade Images : ''}}" >
    {!! $errors->first('Uploade Images', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
