<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Alumno</h1>
	<br>
		<form class="form-horizontal" method="post" id="addcategory" action="index.php?view=addalumn" role="form">


  <div class="form-group">
    <label for="inputName" class="col-lg-2 control-label">Nombres*</label>
    <div class="col-md-6">
      <input type="text" name="name" required class="form-control" id="name" placeholder="Nombres">
    </div>
  </div>

  <div class="form-group">
    <label for="inputApellidos" class="col-lg-2 control-label">Apellidos*</label>
    <div class="col-md-6">
      <input type="text" name="lastname" required class="form-control" id="name" placeholder="Apellidos">
    </div>
  </div>

<div class="form-group">
    <label for="inputDNI" class="col-lg-2 control-label">DNI*</label>
    <div class="col-md-6">
      <input type="text" name="dni"  class="form-control" id="name" placeholder="DNI">
    </div>
  </div>

  <div class="form-group">
    <label for="inputDomicilio" class="col-lg-2 control-label">Domicilio*</label>
    <div class="col-md-6">
      <input type="text" name="address"  class="form-control" id="name" placeholder="Domicilio">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email"  class="form-control" id="email" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="inputTelefono" class="col-lg-2 control-label">Teléfono*</label>
    <div class="col-md-6">
      <input type="text" name="phone"  class="form-control" id="telefono" placeholder="Teléfono">
    </div>
  </div>
<h2>Datos del Tutor</h2>

  <div class="form-group">
    <label for="inputNombreTutor" class="col-lg-2 control-label">Nombre completo*</label>
    <div class="col-md-6">
      <input type="text" name="c1_fullname" class="form-control" id="nombreTutor" placeholder="Nombre del Tutor">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Domicilio*</label>
    <div class="col-md-6">
      <input type="text" name="c1_address"  class="form-control" id="name" placeholder="Domicilio">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Telefono*</label>
    <div class="col-md-6">
      <input type="text" name="c1_phone"  class="form-control" id="name" placeholder="Telefono">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nota</label>
    <div class="col-md-6">
      <textarea name="c1_note"  class="form-control" placeholder="Nota"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="team_id" value="<?php echo $_GET["team_id"];?>">
      <button type="submit" class="btn btn-primary">Agregar Alumno</button>
    </div>
  </div>
</form>
	</div>
</div>