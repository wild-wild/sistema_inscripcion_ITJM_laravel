@section('title', 'Registro')
<section class="contenido">
    <form class="row g-3 m-4 needs-validation" novalidate>
        <div class="col-md-12 text-center">
            <h2>REGISTRAR ESTUDIANTE</h2>
        </div>
        <div class="col-md-3">
            <label class="form-label">Numero Carnet</label>
            <input type="text" class="form-control form-control bg-c-bla" required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Nombres</label>
            <input type="text" class="form-control bg-c-bla" required>
        </div>
        
        <div class="col-md-2">
            <label class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control bg-c-bla" required>
        </div>
        <div class="col-md-2">
            <label class="form-label">Apellido Materno</label>
            <input type="text" class="form-control bg-c-bla" required>
        </div>
        <div class="col-md-2">
            <label class="form-label" >Genero</label>
            <select class="form-select bg-c-bla"required>
                <option selected disabled value="">--Seleccionar--</option>
                <option >Masculino</option>
                <option >Femenino</option>
            </select>
        </div>

        <div class="col-md-2">
            <label class="form-label">Nacionalidad</label>
            <input type="text" class="form-control bg-c-bla" required>
        </div>
        <div class="col-md-2">
            <label class="form-label">Lugar de Nacimiento</label>
            <input type="text" class="form-control bg-c-bla"required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Direccion</label>
            <input type="text" class="form-control bg-c-bla"required>
        </div>
        <div class="col-md-3">
            <label class="form-label">Correo Electronico</label>
            <input type="text" class="form-control bg-c-bla"required>
        </div>
        <div class="col-md-2">
            <label class="form-label">Telefono</label>
            <input type="tel" class="form-control bg-c-bla"required>
        </div>
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input bg-c-bla" type="checkbox">
                <label class="form-check-label " for="gridCheck">
                    Documento DNI
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input bg-c-bla" type="checkbox">
                <label class="form-check-label " for="gridCheck">
                    Documento Titulo de Bachiller
                </label>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-check">
                <input class="form-check-input bg-c-bla" type="checkbox">
                <label class="form-check-label " for="gridCheck">
                    Documento Certificado De Nacimiento
                </label>
            </div>
        </div>
        <div class="col-12 text-center">
            <button type="submit" class="btn bg-c-pri co-ne">Registrar</button>
            <button type="submit" class="btn bg-c-se co-bla">Cancelar</button>
        </div>
        <div class="col-12 text-center">
            
        </div>
        
    </form>
    
</section>
