<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li>
                <a href="{{url('Inicio')}}">
                    <i class="fa fa-home"></i>
                    <span>Inicio</span>
                </a>
            </li>
            @if (auth()->user()->rol=="Doctor")
                <li>
                    <a href="{{url('Citas/'.auth()->user()->id)}}">
                        <i class="fa fa-medkit"></i>
                        <span>Citas</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('Pacientes')}}">
                        <i class="fa fa-users"></i>
                        <span>Pacientes</span>
                    </a>
                </li>
            @endif
            @if (auth()->user()->rol=="secretaria")
                <li>
                    <a href="{{url('Consultorios')}}">
                        <i class="fa fa-medkit"></i>
                        <span>consultorios</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('Doctores')}}">
                            <i class="fa fa-user-md"></i>
                            <span>Doctores</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('Pacientes')}}">
                        <i class="fa fa-users"></i>
                        <span>Pacientes</span>
                    </a>
                </li>
            @endif
        </ul>
    </section>
</aside>
    