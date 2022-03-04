
<!DOCTYPE html>
<html lang="en">

@includeIf('Painel.Layout.head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@includeIf('Painel.Layout.preloader')

@includeIf('Painel.Layout.navbar')

@includeIf('Painel.Layout.leftnavbar')

@includeif('Painel.Layout.iconessuperioresadireita')    

@includeif('Painel.Layout.sidebar')

@yield('content')

@includeIf('Painel.Layout.endpage')