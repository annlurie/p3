@extends('master')

@section('title')
Fake People Maker
@stop

@section('content')

    <div class="jumbotron">
      <div class="container">
        <h1>Fake People Maker</h1>
        <p>Let's get to fakin'! Enter the number of fake users you'd like to create, and use the 
        	checkboxes to give them some additional attributes.</p>
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


<!--HERE IS MY SECOND FORM THAT I'M USING TO TRY OUT BLADE SYNTAX
{{ Form::open(array('url' => '/users', 'method' => 'get')) }}
{{ Form::label('number', 'How Many Fake People?'); }}
{{ Form::text('number', '0-99'); }}
{{ Form::number('name', '44'); }}
{{ Form::close() }}
-->
</div>


<div class="col-md-8">
<?php
	if (array_key_exists('submit', $data))
	{
	    $faker = Faker::create();
	    echo Pre::render($data);
	    echo $data['number'];

		if (!is_numeric($data['number']))
		{
			$count = 5;
		}
	    else if ($data['number'] < 0)
		{
			$count = 1;
		}
		else if ((int)$data['number'] > 99)
		{
			$count = 99;
		}
		else $count = (int)$data['number'];
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

</div> 
</div><!-- /container -->

@stop