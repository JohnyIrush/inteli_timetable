<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="/theme/ui/icons.css">


        <!-- Nucleo Icons -->
        <link href="/theme/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="/theme/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="/theme/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- CSS Files -->
        <link id="pagestyle" href="/theme/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css" integrity="sha512-sVSECYdnRMezwuq5uAjKQJEcu2wybeAPjU4VJQ9pCRcCY4pIpIw4YMHIOQ0CypfwHRvdSPbH++dA3O4Hihm/LQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css" integrity="sha512-P9vJUXK+LyvAzj8otTOKzdfF1F3UYVl13+F8Fof8/2QNb8Twd6Vb+VD52I7+87tex9UXxnzPgWA3rH96RExA7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/regular.min.css" integrity="sha512-d2x1oQUT6HACW9UlXxWI6XrIBDrEE5z2tit/+kWEdXdVYuift7sm+Q6ucfGWQr1F0+GD9/6eYoYDegw2nm05Vw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css" integrity="sha512-tk4nGrLxft4l30r9ETuejLU0a3d7LwMzj0eXjzc16JQj+5U1IeVoCuGLObRDc3+eQMUcEQY1RIDPGvuA7SNQ2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased g-sidenav-show  bg-gray-100">
        @inertia

     
     <!--   Core JS Files   -->
     <script src="/theme/assets/js/core/popper.min.js" defer></script>
     <script src="/theme/assets/js/core/bootstrap.min.js" defer></script>
     <script src="/theme/assets/js/plugins/perfect-scrollbar.min.js" defer></script>
     <script src="/theme/assets/js/plugins/smooth-scrollbar.min.js" defer></script>

     <!-- Github buttons -->
     <script async defer src="https://buttons.github.io/buttons.js" defer></script>
     <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
     <script src="/theme/assets/js/soft-ui-dashboard.min.js?v=1.0.3" defer></script>
     

     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js" defer></script>
     <script src="/theme/components/charts/google/barchart.js" defer></script> 
     <script src="/theme/components/charts/google/columnchart.js" defer></script>
     <script>
          var win = navigator.platform.indexOf('Win') > -1;
          if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
              damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
          }
     </script>
    </body>
</html>
