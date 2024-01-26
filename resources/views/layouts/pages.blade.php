

<!DOCTYPE html>
<html lang="en">

<head>
   @include('Kidder.includes.head')
</head>

<body>
    
        @include('Kidder.includes.Spinner')


        @include('Kidder.includes.Navbar')






@yield('content')









@include('Kidder.includes.Footer')

       
@include('Kidder.includes.BackToTop')
@include('Kidder.includes.js')
</body>

</html>