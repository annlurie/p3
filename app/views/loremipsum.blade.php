@extends('master')

@section ('title')
Fake Text Maker
@stop

@section ('content')

<!--Header 'Jumbotron' with intro text-->
    <div class="jumbotron">
      <div class="container">
        <h1>Fake Text Maker</h1>
        <p>Here's the text that describes how to fake some text.</p>
      </div>
    </div>
<!--End Header-->

<!--Two-column body: Left column is input form, Right is output (if there's anything to output)-->
<div class="container">
  <div class="row">
  	<!--Left column with input form-->
    <div class="col-md-4">
		<form class="form-horizontal" action = "/lipsum">
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
			</div>
		</fieldset>
		</form>
    </div>
    <!--End left column-->

    <!--Right column, for output. Does not display if form has not been submitted.-->
    <div class="col-md-8">
    	<!--Logic for the page...which I know is a terrible place to put it...-->
		<?php
			//Has form been submitted?
			if (isset($data))
			{
				//echo Pre::render($data);

				//Upper and lower bounds for 
				if ((int)$data < 0)
				{
					$count = 1;
				}
				if ((int)$data > 99)
				{
					$count = 99;
				}
				else $count = (int)$data;

				$generator = new LoremIpsum();
			    $paragraphs = $generator->getParagraphs($count);
			}
		?>

		@if (isset($data))
			<h2>Here is your text:</h2>
		   	<p>{{implode('<p>', $paragraphs);}}</p>
	   	@endif
	   	</div>

  <hr>
</div>

@stop