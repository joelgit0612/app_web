<div class="form-group {{$errors->has('title') ? 'alert alert-danger' : ''}}">
    <label for="title" class="control-label sr-only">Titre</label>
    <input type="text" id="title" name="title" placeholder="Titre de l'évenement" value="{{old('title') ?? $event->title}}" class="form-control">
    {!! $errors->first('title', '<span class="help-block">:message</span>')!!}
</div><br>

<div class="form-group {{$errors->has('description') ? 'alert alert-danger' : ''}}">
    <label for="description" class="control-label sr-only">Description</label>
    <textarea name="description" id="description" cols="30" rows="10" placeholder="Description de l'évenement" class="form-control">{{old('description') ?? $event->description}}</textarea>
    {!! $errors->first('description', '<span class="help-block">:message</span>')!!}
</div><br>

<div class="d-grid gap-2">
    <input type="submit" value="{{$submitButtonText}}" class="btn btn-primary">
</div><br>
