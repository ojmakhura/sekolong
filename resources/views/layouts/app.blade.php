<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Botshabelo Primary School</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
        
		.navbar-menu {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		.navbar-menu-link {
			float: right;
		}

		.navbar-menu-link {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		/* Change the link color to #111 (black) on hover */
		navbar-menu-link:hover {
			background-color: #111;
		}

		.active {
			background-color: #4CAF50;
		}
		
		.main-body{
			width: 800px;
			margin: 0 auto;
		}
		
		.sidebar{			
			width: 200px;
			height: 400px
			float: left;
		}
		.content_  {
    width: 600px;
    background: #ffffff;
    height: 400px;
    margin-left: 200px;
}
    </style>
    
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Botshabelo Pimary School
                </a>
            </div>
        </div>
        <div class="navbar-menu">
			<ul>
				<li class="navbar-menu-link"><a href="{{ url('/') }}">Home</a></li>
				<li class="navbar-menu-link"><a href="{{ url('/students') }}">Students</a></li>
				<li class="navbar-menu-link"><a href="{{ url('/levels') }}">Levels</a></li>
				<li class="navbar-menu-link"><a href="{{ url('/groups') }}">Groups</a></li>
				<li class="navbar-menu-link"><a href="{{ url('/users') }}">Users</a></li>
				<li class="navbar-menu-link"><a href="{{ url('/subjects') }}">Subjects</a></li>
			</ul>
		</div>
    </nav>
    <div class="main-body">
		<div class="sidebar">side bar</div>
	<div class="content_" id="content">
		@if (Session::has('message'))		
			<div class="flash alert-info">			
				<p>{{ Session::get('message') }}</p>		
			</div>	
		@endif 
		@if ($errors->any())		
			<div class='flash alert-danger'>			
				@foreach ( $errors->all() as $error )
					<p>{{ $error }}</p>			
				@endforeach		
			</div>	
		@endif
		
		@yield('content')
	</div>
     </div>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
