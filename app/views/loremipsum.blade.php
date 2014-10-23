@extends('master')

@section ('content')

<!--PHP Logic Section-->

    <div class="jumbotron">
      <div class="container">
        <h1>Fake Text Maker</h1>
        <p>Here's the text that describes how to fake some text.</p>
      </div>
    </div>

<form class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="container">

<div class="control-group">
  <label class="control-label" for="number">How Many Paragraphs?</label>
  <div class="controls">
    <input id="number" name="number" placeholder="1-99" class="input-mini" type="text">
    
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="submit"></label>
  <div class="controls">
    <button id="submit" name="submit" class="btn btn-primary">Fake It Up!</button>
  </div>
</div>

</div> <!--close container-->

<!--Place for output-->
<div class="container">
<?php
	if (isset($data))
	{
		//echo Pre::render($data);
		if ((int)$data < 0)
		{
			$count = 1;
		}
		if ((int)$data > 99)
		{
			$count = 99;
		}

		else $count = $data;
		$generator = new LoremIpsum();
	    $paragraphs = $generator->getParagraphs($count);
	}
?>

		@if (isset($data))
			<h2>Here is your text:</h2>
		   	{{implode('<p>', $paragraphs);}} 
	   	@endif

</div>

</fieldset>
</form>

@stop