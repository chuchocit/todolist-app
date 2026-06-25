<!DOCTYPE html>
<html>

<head>

<title>
@yield('title')
</title>


@vite([
'resources/css/app.css',
'resources/js/app.js'
])


</head>


<body>


<nav class="navbar navbar-dark bg-primary">

<div class="container">

<a class="navbar-brand">
TaskFlow
</a>


</div>

</nav>



<div class="container mt-4">


@yield('content')


</div>



</body>

</html>