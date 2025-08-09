<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>META-CRUD</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
    <div class="container py-4">

    <header class="bg-primary text-white py-3 mb-4 rounded">
    <div class="d-flex justify-content-between align-items-center">
        <!-- Logo à esquerda -->
        <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 40px; margin-left: 15px;">

        <!-- Título centralizado -->
        <h2 class="text-center flex-grow-1 m-0" style="margin-right: 40px;">META-CRUD</h2>

        <!-- Espaço em branco para balancear visualmente com o logo -->
        <div style="width: 40px; margin-right: 15px;"></div>
    </div>
</header>



        <!-- Mensagem de sucesso com desaparecimento automático -->
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                {{ session('success') }}
            </div>

            <script>
                setTimeout(function () {
                    let alert = document.getElementById('success-alert');
                    if (alert) {
                        alert.classList.remove('show');
                        alert.classList.add('hide');
                    }
                }, 4000); // 4 segundos da Mensagem
            </script>
        @endif

        <!-- Aqui vai o conteúdo das páginas -->
        @yield('content')
    </div>

    <footer class="text-center mt-5 bg-primary text-white py-3 rounded">
            <hr class="border-white">
            <p class="mb-0">Desenvolvimento feito por "JEFERSON GOMES" • META-CRUD © {{ date('Y') }}</p>
    </footer>




    <!-- Bootstrap JS (para alertas, modais, etc) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- jQuery e jQuery Mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script>
        $('#telefone').mask('(00) 00000-0000');
    </script>

</body>
</html>
