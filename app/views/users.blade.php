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


        <div class="col-md-8">
<?php
	if (array_key_exists('submit', $data))
	{
		//echo Pre::render($data);

	    $faker = Faker::create();

	    $count_input = (int)$data['number'];

	    //echo $data['number'];

	    if ((int)$data['number'] < 0)
		{
			$count = 1;
		}
		if ((int)$data['number'] > 99)
		{
			$count = 99;
		}
		else $count = (int)$data['number'];
		//echo 'Count is'.$count;
	 }
?>

		@if (array_key_exists('submit', $data))

			<h2>Here are your users:</h2>

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
       </div>

      <hr>
    </div> 
	</div><!-- /container -->

@stop