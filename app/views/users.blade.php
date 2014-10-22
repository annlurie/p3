@extends('master')

@section('title')
Fake People Maker
@stop

@section('content')

    <div class="jumbotron">
      <div class="container">
        <h1>Fake People Maker</h1>
        <p>Here's the text that describes how to fake a person.</p>
      </div>
    </div>

<div class="container">
<form class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="number">How Many Fake People?</label>
  <div class="controls">
    <input id="number" name="number" placeholder="1-99" class="input-xlarge" required="" type="text">
    
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="control-group">
  <label class="control-label" for="attributes">Give Those Fakers Fake Qualities</label>
  <div class="controls">
    <label class="checkbox" for="attributes-0">
      <input name="attributes" id="attributes-0" value="Email Address" type="checkbox">
      Email Address
    </label>
    <label class="checkbox" for="attributes-1">
      <input name="attributes" id="attributes-1" value="Phone Number" type="checkbox">
      Phone Number
    </label>
    <label class="checkbox" for="attributes-2">
      <input name="attributes" id="attributes-2" value="Date of Birth" type="checkbox">
      Date of Birth
    </label>
    <label class="checkbox" for="attributes-3">
      <input name="attributes" id="attributes-3" value="Lorem Ipsum Bio(m)" type="checkbox">
      Lorem Ipsum Bio(m)
    </label>
    <!-- If I get ambitious, I will use long/lat attributes of Faker PLUS ANOTHER PACKAGE TBD
    	to get some place names for my fake people.
        <label class="checkbox" for="attributes-4">
      <input name="attributes" id="attributes-4" value="Location" type="checkbox">
      Location
    </label>
    -->
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="submit"></label>
  <div class="controls">
    <button id="submit" name="submit" class="btn btn-primary">Fake 'Em Up!</button>
  </div>
</div>

</fieldset>
</form>
</div>


@stop