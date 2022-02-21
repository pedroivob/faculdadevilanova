<!-- Sidebar Menu -->
<nav class="mt-2" >
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active bg-success">
                <i class="nav-icon fas fa-headset"></i>
                <p>
                    Administrador
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('cursos.index') }}"
                        class="nav-link {{ request()->is('cursos*') ? 'active' : '' }}">
                        <i class="nav-icon 	fas fa-laptop-code"></i>
                        <p>
                            Cursos<span class="badge badge-info right">
                                @php
                                echo DB::table('cursos')
                                ->select('id')
                                ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('alunos.index') }}"
                        class="nav-link {{ request()->is('alunos*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Alunos
                            <span class="badge badge-info right">
                                @php
                                echo DB::table('alunos')
                                ->select('id')
                                ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('planos-financeiros.index') }}"
                        class="nav-link {{ request()->is('planos-financeiros*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-money-bill-wave"></i>
                        <p>Plano Financeiro
                            <span class="badge badge-info right">
                                @php
                                echo DB::table('planos_financeiros')
                                ->select('id')
                                ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('professores.index') }}"
                        class="nav-link {{ request()->is('professores*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Professores
                            <span class="badge badge-info right">
                                @php
                                echo DB::table('professores')
                                ->select('id')
                                ->count();
                                @endphp
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/aulas" class="nav-link  {{ request()->is('aulas*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Aulas
                            <span class="badge badge-info right">
                                <span class="badge badge-info right">
                                    @php
                                    echo DB::table('aulas')
                                    ->select('id')
                                    ->count();
                                    @endphp
                                </span>
                            </span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/endpoints/api" class="nav-link  {{ request()->is('endpoints/api*') ? 'active' : '' }} ">
                        <i class="nav-icon 	fas fa-code"></i>
                        <p>
                            Endpoints </p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->