<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
     <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; line-height: 1.5; color: #333; background-color: #f9f9f9; margin: 0; padding: 20px; }
        .container {  margin: 0 auto; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        h1 { color: #2c3e50; text-align: center; margin-bottom: 10px; font-size: 24px; }
        h2 { color: #34495e; font-size: 20px; border-bottom: 2px solid #ecf0f1; padding-bottom: 10px; margin-top: 40px; }
        .tabs { display: flex; gap: 10px; margin-bottom: 20px; flex-wrap: wrap; }
        .tab { padding: 10px 20px; background: #e0e0e0; border-radius: 20px; cursor: pointer; font-weight: 500; transition: all 0.2s; }
        .tab.active { background: #3498db; color: white; }
        table { width: 100%; border-collapse: collapse; margin-bottom: 20px; font-size: 14px; }
        thead { background-color: #f8f9fa; }
        th, td { border: 1px solid #dee2e6; padding: 10px; text-align: left; vertical-align: top; }
        th { font-weight: 600; color: #495057; }
        .notes { background-color: #3ca2eb90; border-left: 4px solid #838dd2; padding: 15px; margin-top: 20px; font-size: 13px; color: #120576; }
        .notes h3 { margin-top: 0; color: #150265; }
        .notes ul { margin: 5px 0 0 20px; padding: 0; }
        .disclaimer { font-size: 12px; color: #6c757d; text-align: center; margin-top: 40px; }
        .excel-download-btn {  top: 20px; right: 20px;  padding: 10px 15px; border-radius: 6px; text-decoration: none; font-size: 14px; font-weight: 600; border: none; cursor: pointer; transition: background 0.2s; display: flex; align-items: center; gap: 8px; } .excel-download-btn:hover { background: #72bbff; }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/"><img src="storage/img/ico.png" alt="logo"
                            width="180"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link  {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                                    href="/">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  {{ request()->is('about') ? 'active' : '' }}" aria-current="page"
                                    href="/about">О компании</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('contacts') ? 'active' : '' }}"
                                    href="/contacts">Контакты</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Клиентам
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="/uslugi">Услуги</a></li>
                                    <li><a class="dropdown-item" href="/tarifi">Тарифы</a></li>
                                    <li><a class="dropdown-item" href="/template">Типовые шаблоны договоров</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            @yield('content')

            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center"> <a href="/"
                        class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1" aria-label="Bootstrap">
                        <svg class="bi" width="30" height="24" aria-hidden="true">
                            <use xlink:href="#bootstrap"></use>
                        </svg> </a> <span class="mb-3 mb-md-0 text-body-secondary">© 2026 ООО "МРТС Терминал"</span>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Instagram"><svg
                                class="bi" width="24" height="24" aria-hidden="true">
                                <use xlink:href="#instagram"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="text-body-secondary" href="#" aria-label="Facebook"><svg
                                class="bi" width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg></a></li>
                </ul>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
     <script>
        function showTab(tabName) {
            const contents = document.querySelectorAll('.tab-content');
            const tabs = document.querySelectorAll('.tab');
            contents.forEach(c => c.style.display = 'none');
            tabs.forEach(t => t.classList.remove('active'));
            
            document.getElementById(tabName).style.display = 'block';
            event.target.classList.add('active');
        }
    </script>
</body>

</html>
