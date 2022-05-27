 <!-- SIDEBAR -->
 <nav class="sidebar">
     <header class="sideheader">
         <i class="fa-solid fa-arrow-right toggle"></i>
     </header>
     <div class="sidemenu">
         <div class="menu">
             <ul class="sideul">
                 {{-- menu principal --}}
                 <li class="sideli {{ request()->routeIs('principal') ? 'activo' : '' }}">
                     <a  href="{{ route('principal') }}">
                         <i class="fa-solid fa-house icon"></i>
                         <span class="text">Menu Principal</span>
                     </a>
                 </li>
                 {{-- menu registro --}}
                 <li class="sideli {{ request()->routeIs('Mregistro') ? 'activo' : '' }}">
                     <a  href="{{ route('Mregistro') }}">
                         <i class="fa-brands fa-bitcoin icon"></i>
                         <span class="text">Registro</span>
                     </a>
                   
                 </li>
                 {{-- menu inscripcion --}}
                 <li class="sideli  {{ request()->routeIs('inscripcion') ? 'activo' : '' }}">
                     <a  href="{{ route('inscripcion') }}">
                         <i class="fa-solid fa-award icon"></i>
                         <span class="text">Inscripción</span>
                     </a>
                
                 </li>
                 {{-- menu pago --}}
                 <li class="sideli  {{ request()->routeIs('pago') ? 'activo' : '' }}">
                     <a href="{{ route('pago') }}">
                         <i class="fa-solid fa-award icon"></i>
                         <span class="text">Pago</span>
                     </a>
                     
                 </li>
                 {{-- menu reporte --}}
                 <li class="sideli  {{ request()->routeIs('reporte') ? 'activo' : '' }}">
                    <a href="{{ route('reporte') }}">
                        <i class="fa-solid fa-award icon"></i>
                        <span class="text">Reporte</span>
                    </a>
                </li>
                 {{-- menu configuracion --}}
                 <li class="sideli  {{ request()->routeIs('configuracion') ? 'activo' : '' }}">
                    <a href="{{ route('configuracion') }}">
                        <i class="fa-solid fa-award icon"></i>
                        <span class="text">Configuracion</span>
                    </a>
                </li>

             </ul>
         </div>
     </div>
 </nav>
 <!-- SIDEBAR -->
