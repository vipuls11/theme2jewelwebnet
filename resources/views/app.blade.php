<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document @yield('meta')</title>
     {{-- -----------------tailwind-------------- --}}
     <script src="https://cdn.tailwindcss.com"></script>
   
     {{-- -----------------fontawesome-------------- --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- -----------------google-font-------------- --}}
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
       <!-- -------------bootstrap--------------------- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

       {{-- ----------jquery------- --}}
       <script src="https://code.jquery.com/jquery-3.6.1.min.js"
       integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


       @livewireStyles
    </head>

<style>
     *{
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
            font-family: 'Source Sans Pro', sans-serif;
        }

        .container-1{
            width: 90%;
            margin: auto;
            }

</style>
<body>
   
  @php
  $Contacts=\App\Models\Contact::first();
 
  $Categories=\App\Models\Category::all();
  // $Sub_categories=\App\Models\Subcategory::all();
  @endphp
    @include('header')

    @yield('content')

   @include('footer')
   @livewireScripts
</body>
</html>