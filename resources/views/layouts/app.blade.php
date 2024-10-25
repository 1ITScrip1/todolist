
<html>
    <body class="p-3 mb-2 bg-dark-subtle text-dark-emphasis">
    <head>

        <div class="dropdown" data-bs-theme="dark">

        <title> Aplicatie pentru organizarea task-urilor</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    </head>

    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-2 text-white">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">TODOapp</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Toate task-urile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tasks/create">Creeaza un task</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <div class=" container">
        @yield('content')
        </div>
    </body>
</div>
</body>
</html>
