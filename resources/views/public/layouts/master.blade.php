<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>いばらき文化振興財団</title>

       <link rel="dns-prefetch" href="//maxcdn.bootstrapcdn.com">
       <link rel="dns-prefetch" href="//fonts.googleapis.com">
       <link href="source/css/style.css" rel="stylesheet">
        
    </head>
    <body>
		@include('public.layouts.header')
    	@yield('content')
    	@include('public.layouts.footer')
    </body>
</html>
