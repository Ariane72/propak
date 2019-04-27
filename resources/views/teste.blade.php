<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
</head>

   
<body>
    
    <div id="app">
        <welcomecomp></welcomecomp>
    </div>
    
    <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
</body>

</html>