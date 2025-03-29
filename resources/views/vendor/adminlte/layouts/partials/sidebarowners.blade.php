<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (!Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->email }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i>
                        {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            {{-- <li class="header">{{ trans('adminlte_lang::message.header') }}</li> --}}
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ route('owners.owners.home') }}"><i class='fa fa-dashboard'></i>
                    <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-map-marker'></i> <span>Áreas comunes</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('admin.common-areas.index') }}">Ver Áreas Comunes</a></li>
                    {{-- <li><a href="{{ route('admin.common-areas.create') }}">Agregar Área Común</a></li> --}}
                </ul>
            </li>
            <li><a href="{{ route('owners.billing-notices.list') }}"><i class='fa fa-clipboard'></i> <span>Cartelera
                        Digital</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-pencil-square-o'></i> <span>Recibos</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('owners.billing-notices.list') }}">Ver Recibos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-money'></i> <span>Mis Pagos</span> <i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('owners.payments.index') }}">Reportar Pago</a></li>
                    <li><a href="{{ route('owners.payments.history') }}">Ver Historial de Pagos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-user-secret'></i> <span>Seccion de Auditoria</span><i
                        class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#"><i class='fa fa-gears'></i> <span>Gastos</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('admin.expenses.index') }}">Ver lista Gastos</a></li>
                            {{-- <li><a href="{{ route('admin.expenses.create') }}">Agregar Gasto</a></li> --}}
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class='fa fa-file-text-o'></i> <span>Facturación</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('admin.invoices.index') }}">Ver Facturas</a></li>
                            {{-- <li><a href="{{ route('admin.invoices.create') }}">Agregar Factura</a></li> --}}
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class='fa fa-arrow-circle-o-down'></i> <span>Cobros</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('admin.billing-notices.index') }}">Ver Cobros</a></li>
                            {{-- <li><a href="{{ route('admin.billing-notices.create') }}">Crear Cobro</a></li> --}}
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class='fa fa-arrow-circle-o-up'></i> <span>Pagos</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('admin.payments.index') }}">Ver Pagos</a></li>
                            <li><a href="{{ route('admin.payments.unconfirmed') }}">Ver Pagos No Confirmados</a></li>
                            {{-- <li><a href="{{ route('admin.payments.createOwner') }}">Crear Pago</a></li> --}}
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#"><i class='fa fa-bar-chart'></i> <span>Estadísticas</span> <i
                                class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('admin.statistics.index') }}">Ver Estadísticas</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-newspaper-o"></i> <span>Noticias</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('admin.news.index') }}"><i class="fa fa-eye"></i> Ver Noticias</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gears"></i> <span>Configuración</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('admin.config.indexPayConfiguration') }}"><i
                                        class="fa fa-circle-o"></i>
                                    Fecha Límite de Pago</a></li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-bank"></i> Bancos
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('admin.banks-condominium.index') }}"><i
                                                class="fa fa-eye"></i> Ver
                                            Bancos</a></li>
                                    {{-- <li><a href="{{ route('admin.banks-condominium.create') }}"><i class="fa fa-plus"></i> Agregar Banco</a></li> --}}
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-bank"></i> Cuentas Bancarias
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('admin.banks-condominium.index') }}"><i
                                                class="fa fa-eye"></i> Ver
                                            Cuenta</a></li>
                                    {{-- <li><a href="{{ route('admin.banks-condominium.create') }}"><i class="fa fa-plus"></i> Agregar Cuenta</a></li> --}}
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#"><i class="fa fa-cc-visa"></i> Formas de Pago
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="{{ route('admin.ways-to-pay.index') }}"><i class="fa fa-eye"></i>
                                            Ver</a>
                                    </li>
                                    {{-- <li><a href="{{ route('admin.ways-to-pay.create') }}"><i class="fa fa-plus"></i> Agregar</a></li> --}}
                                </ul>
                            </li>
                            {{-- <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li> --}}
                        </ul>
                    </li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
