<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <title>@yield('titulo') - Clínica</title>
</head>

<body>
    @include('base.menu')
    <div class="md:container md:mx-auto px-8">
        @yield('content')
    </div>
    @include('base.footer')
</body>
</html>

