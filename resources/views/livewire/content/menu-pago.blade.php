@section('title', 'Pago')


<section class="contenido">
    <form class="row g-3 m-3 needs-validation mb-5" novalidate>
        <div class="col-md-12 text-center">
            <h3>Pagos</h3>
            <hr>
        </div>
        <div class="col-md-3">
            <label class="form-label"> Buscar Por Numero Carnet</label>
            <div class="d-flex">
                <input type="search" class="form-control bg-c-bla" id="search" name="search"
                    placeholder="Numero de Identidad">
                <button type="button" class="btn bg-c-se co-bla   "><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="text-center">Nro. Identidad</th>
                <th scope="col" class="text-center">Nombre Completo</th>
                <th scope="col" class="text-center">Cerrera </th>
                <th scope="col" class="text-center">Saldo</th>
                <th scope="col" class="text-center">Pagos</th>
                <th scope="col" class="text-center">Total a Pagar</th>
                <th scope="col" class="text-center">Accion</th>
                <th scope="col" class="text-center">Detalles de pagos</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="text-center">9795157</th>
                <th scope="row" class="text-center">wilder poma flores</th>
                <td class="text-center">Sistemas Informaticos I</td>
                <td class="text-center">200</td>
                <td class="text-center">170</td>
                <td class="text-center">370</td>
                <td class="text-center">
                    <button class="btn bg-c-pri co-bla">Realizar Pago</button>
                </td>
                <td class="text-center">
                    <!-- Button trigger modal -->
<button type="button" class="btn btn bg-c-pri co-bla" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Detalle Pagos
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Detalles De los pagos Realizado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          no pago nada
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-c-pri co-bla" data-bs-dismiss="modal">Cerrar</button>
          
        </div>
      </div>
    </div>
  </div>
                </td>
            </tr>
        </tbody>
    </table>
</section>
