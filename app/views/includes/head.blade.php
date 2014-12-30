<title>
    @section('title')
   		Laravel with Angular
    @show
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- CSS are placed here -->
{{ HTML::style('css/style.css') }}
{{ HTML::style('css/bootstrap.min.css') }}
{{-- HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.3.8/angular.js') --}}
 {{ HTML::script('js/angular.js') }}
{{ HTML::script('js/angularBooter.js') }}
<script>
	window.myApp = new AngularBooter('myApp');
</script>
