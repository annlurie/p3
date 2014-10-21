@extends('master')

@section('title')
Fake People Maker
@stop

@section('content')
<div class="container">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Fake People Maker</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="count">How Many Fake People?</label>
  <div class="controls">
    <input id="count" name="count" placeholder="1-99" class="input-small" type="text">
    
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="control-group">
  <label class="control-label" for="title"></label>
  <div class="controls">
    <label class="checkbox inline" for="title-0">
      <input name="title" id="title-0" value="Give Them Honorifics (Titles)" type="checkbox">
      Give Them Honorifics (Titles)
    </label>
  </div>
</div>

</fieldset>
</form>
</div>
@stop