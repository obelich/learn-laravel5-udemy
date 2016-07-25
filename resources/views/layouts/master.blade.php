<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title', 'Default')</title>
        <meta charset=UTF-8>

        <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css">
        @yield('styles')


    </head>
    <body>
    <?php echo count($errors);  ?>
    @if (count($errors) > 0 )
      {{$errors}}
      <div>
        <ul>
          @foreach($errors->all() as $error)
            <li>{{  $error }}</li>
          @endforeach
        </ul>
      </div>

    @endif


    @include('partials.header')

        <div class="">
            @yield('content', 'Esperando contenido')
        </div>
    <div class="centered">
        <a href="{{ route('niceaction', ['action' => 'greet'])  }}">Greet</a>
        <a href="{{ route('niceaction', ['action' => 'hug'])  }}">Hug</a>
        <a href="{{ route('niceaction', ['action' => 'salute'])  }}">Salute</a>
    </div>

        <script href="{{ asset('js/main.css') }}" ></script>
    </body>
</html>
