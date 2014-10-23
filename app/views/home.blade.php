@extends('master')

@section ('title')
	Developer's Toolkit
@stop

@section ('content')

<body>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Developer's Toolkit</h1>
        <p>Here's the text that describes the project.</p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Fake Some Users</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="/users" role="button">Let's Get Fakin'! &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Fake Some Text</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="/lipsum" role="button">Let's Get Fakin'! &raquo;</a></p>
       </div>
      <hr>
    </div> <!-- /container -->

@stop