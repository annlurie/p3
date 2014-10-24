@extends('master')

@section ('title')
Fake Text Maker
@stop

@section ('content')

<!--Header 'Jumbotron' with intro text-->
    <div class="jumbotron">
      <div class="container">
        <h1>Fake Text Maker</h1>
        <p>Let's get to fakin'! Enter the number of paragraphs of fake text you'd like to create.</p>
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
			//Has form been submitted? If so, do some validation of input.
			if (isset($data))
			{
				//echo Pre::render($data);
				//If non-numeric string or negative number entered, output 1 paragraph.
				if (!is_numeric($data) || (int)$data < 0)
				{
					$count = 1;
				}
				//If more than 99 paras requested, output 1 paragraph.
				else if ((int)$data > 99)
				{
					$count = 99;
				}
				//If value between 1 & 99 entered, use value as count for generating output.
				else $count = (int)$data;

				//LoremIpsum object for generating text.
				$generator = new LoremIpsum();
				//Generate text with requested # of paras.
			    $paragraphs = $generator->getParagraphs($count);
			}
		?>
		<!--Output in right column, only if data has been passed to the view-->
		@if (isset($data))
			<h2>Here is your text:</h2>
		   	<p>{{implode('<p>', $paragraphs);}}</p>
	   	@endif
	   	</div>

</div><!--Closing right column-->
</div><!--Closing container-->

@stop