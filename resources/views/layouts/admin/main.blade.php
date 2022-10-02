<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('includes.admin.style')

  @push('addonStyle')
      <style>
        .Landingpage {
          padding-left: 10px;
        }
      </style>
  @endpush
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    @include('layouts.admin.header')
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    @include('layouts.admin.sidebar')
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>@yield('pageTitle')</h1>
      <nav style="--bs-breadcrumb-divider: '>';">
        <ol class="breadcrumb">
            @yield('breadcrumb')
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard mb-5">
      <div class="row">
        @yield('content')
      </div>
    </section>

  </main><!-- End #main -->

  @include('layouts.admin.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('includes.admin.script')

</body>

</html>