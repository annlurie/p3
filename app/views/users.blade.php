@extends('master')

@section('title')
Fake People Maker
@stop

@section('content')
	<!-- Main jumbotron for headline content/description -->
    <div class="jumbotron">
      <div class="container">
        <h1>Fake People Maker</h1>
        <p>Let's get to fakin'! Enter the number of fake users you'd like to create, and use the 
        	checkboxes to give them some additional attributes.</p>
      </div>
    </div>

    <!--Two panels, one for input form, and one (hidden until form submitted) for output.-->
    <div class="container">
    <div class="row">
    <div class="col-md-4">

		<form class="form-horizontal" action = "/users">
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
		<label class="control-label" for="email">Give Those Fakers Fake Qualities</label>
		<div class="controls">
		    <label class="checkbox" for="email">
		      <input name="email" id="email" value="Email Address" type="checkbox">
		      Email Address
		    </label>
		    <label class="checkbox" for="phone">
		      <input name="phone" id="phone" value="Phone Number" type="checkbox">
		      Phone Number
		    </label>
		    <label class="checkbox" for="dob">
		      <input name="dob" id="dob" value="Date of Birth" type="checkbox">
		      Date of Birth
		    </label>
		    <label class="checkbox" for="bio">
		      <input name="bio" id="bio" value="Lorem Ipsum Bio(m)" type="checkbox">
		      Lorem Ipsum Bio(m)
		</label>
  		</div>
		</div>

		<!-- Submit Button -->
		<div class="control-group">
		  <label class="control-label" for="submit"></label>
		  <div class="controls">
		    <button id="submit" name="submit" class="btn btn-primary">Fake 'Em Up!</button>
		  </div>
		</div>

</fieldset>
</form>


<!--HERE IS MY SECOND FORM THAT I'M USING TO TRY OUT BLADE SYNTAX
{{ Form::open(array('url' => '/users', 'method' => 'get')) }}
{{ Form::label('number', 'How Many Fake People?'); }}
{{ Form::text('number', '0-99'); }}
{{ Form::number('name', '44'); }}
{{ Form::close() }}
-->
</div> <!--Closing left panel-->

<!--Right panel for output-->
<div class="col-md-8">

<!--Logic, validating input in 'number' field (which is text entry)-->
<?php
	// Only run this logic if 'submit' button has been clicked
	if (array_key_exists('submit', $data))
	{
		//Create a Faker object to generate results
	    $faker = Faker::create();
	    //echo Pre::render($data);
	    //echo $data['number'];

	    // If user enters a string that isn't a number, default output of 4 paras
		if (!is_numeric($data['number']))
		{
			$count = 4;
		}
		// If user enters 0 or negative number, output 1 para
	    else if ($data['number'] < 0)
		{
			$count = 1;
		}
		// If user enters 100 or higher, output 99 paras
		else if ((int)$data['number'] > 99)
		{
			$count = 99;
		}
		// If a valid number between 1-99 is entered, use that
		else $count = (int)$data['number'];
	 }
?>
		<!--For outputting results - again, only run if 'submit' was clicked-->
		@if (array_key_exists('submit', $data))

			<h2>Here are your users:</h2>
			<!--For loop that increments up to $count (defined above), printing a name and 
				checking data array for presence of each optional attribute, printing if found-->
			@for ($i = 0; $i < $count; $i++)
				<h4> {{$faker->name}} </h4>

				@if (array_key_exists('email', $data))
					<p>{{$faker->email}}<br>
				@endif
				@if (array_key_exists('phone', $data))
					{{$faker->phoneNumber}}<br>
				@endif
				@if (array_key_exists('dob', $data))
					{{$faker->date($format = 'Y-m-d', $max = '-13 years', $min = '-100 years')}}<br>
				@endif
				@if (array_key_exists('bio', $data))
					{{$faker->sentence($nbwords = 6)}}<br>
				@endif
			@endfor

	   	@endif
       </div><!--Closing right panel-->

</div><!-- Closing row-->
</div><!-- /container -->

@stop