<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    Olá , {{ Auth::user()->name }}. Seja bem vindo ao seu painel administrativo
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <i class="nav-icon 	fas fa-laptop-code"></i>
                    <p>
                        <a href="/cursos"> Cursos</a><br>
                        <span class="badge badge-info right">
                            @php
                            echo DB::table("cursos")->select("id")->count();
                            @endphp
                        </span>
                    </p>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <i class="nav-icon fas fa-user-graduate"></i>
                    <p>
                        <a href="/alunos"> Alunos</a><br>
                        <span class="badge badge-info right">
                            @php
                            echo DB::table("alunos")->select("id")->count();
                            @endphp
                        </span>
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <i class="nav-icon 	 fas fa-money-bill-wave"></i>
                    <p>
                        <a href="/planos-financeiros"> Planos financeiros</a><br>
                        <span class="badge badge-info right">
                            @php
                            echo DB::table("planos_financeiros")->select("id")->count();
                            @endphp
                        </span>
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <i class="nav-icon fas fa-chalkboard-teacher"></i>
                    <p>
                        <a href="/professores">Professores</a><br>
                        <span class="badge badge-info right">
                            @php
                            echo DB::table("professores")->select("id")->count();
                            @endphp
                        </span>
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <i class="nav-icon fas fa-book-open"></i>
                    <p>
                        <a href="/aulas">Aulas</a><br>
                        <span class="badge badge-info right">
                            @php
                            echo DB::table("aulas")->select("id")->count();
                            @endphp

                        </span>
                    </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">

                <div class="card-body">
                    <i class="nav-icon 	fas fa-code"></i>
                    <p>
                        <a href="/endpoints/api">Endpoints</a><br>
                        <span class="badge badge-info right">


                        </span>
                    </p>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>