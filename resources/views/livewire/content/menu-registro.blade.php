@section('title', 'Registro')
<section class="contenido">
    <form class="row g-3 m-5">
     
        <div class="col-md-2">
            <label class="form-label">Numero Carnet</label>
            <input type="text" class="form-control bg-c-bla" id="inputEmail4">
        </div>
        <div class="col-md-3">
            <label class="form-label">Nombres</label>
            <input type="text" class="form-control bg-c-bla" id="inputPassword4">
        </div>
        
        <div class="col-md-3">
            <label class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control bg-c-bla" id="inputPassword4">
        </div>
        <div class="col-md-3">
            <label class="form-label">Apellido Materno</label>
            <input type="text" class="form-control bg-c-bla" id="inputPassword4">
        </div>
        <div class="col-md-1">
            <label class="form-label">Genero</label>
            <select id="inputState" class="form-select bg-c-bla" id="inputPassword4">
                <option selected>M</option>
                <option>F</option>
            </select>
        </div>

        <div class="col-md-2">
            <label class="form-label">Nacionalidad</label>
            <input type="text" class="form-control bg-c-bla" id="inputPassword4">
        </div>
        <div class="col-md-2">
            <label class="form-label">Lugar de Nacimiento</label>
            <input type="text" class="form-control bg-c-bla">
        </div>
        <div class="col-md-3">
            <label class="form-label">Direccion</label>
            <input type="text" class="form-control bg-c-bla">
        </div>
        <div class="col-md-3">
            <label class="form-label">Correo Electronico</label>
            <input type="text" class="form-control bg-c-bla">
        </div>
        <div class="col-md-2">
            <label class="form-label">Telefono</label>
            <input type="tel" class="form-control bg-c-bla">
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input bg-c-bla" type="checkbox" id="gridCheck">
                <label class="form-check-label " for="gridCheck">
                    Documento DNI
                </label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input bg-c-bla" type="checkbox" id="gridCheck">
                <label class="form-check-label " for="gridCheck">
                    Documento Titulo de Bachiller
                </label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-check">
                <input class="form-check-input bg-c-bla" type="checkbox" id="gridCheck">
                <label class="form-check-label " for="gridCheck">
                    Documento Certificado De Nacimiento
                </label>
            </div>
        </div>
        <div class="col-12 text-center  gap-3">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <button type="submit" class="btn btn-primary">Cancelar</button>
        </div>
        
    </form>
</section>
