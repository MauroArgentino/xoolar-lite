<?php
$team =  TeamData::getById($_GET["id"]);
$alumns = AlumnTeamData::getAllByTeamId($_GET["id"]);
?>
<div class="row">
	<div class="col-md-12">
		<h1>Alumnos <small><?php echo $team->name;?></small></h1>
	<a href="index.php?view=newalumn&team_id=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-asterisk'></i> Nuevo Alumno</a>
	<?php if(count($alumns)>0):?>
	<a href="index.php?view=assistance&team_id=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-check'></i> Asistencia</a>
	<a href="index.php?view=behavior&team_id=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-smile-o'></i> Comportamiento</a>
	<a href="index.php?view=califications&team_id=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-tasks'></i> Calificaciones</a>
	<a href="index.php?view=blocks&team_id=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-th-large'></i> Bloques</a>
<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class='fa fa-th-list'></i> Listas <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="index.php?view=list&team_id=<?php echo $_GET["id"]; ?>">Asistencia</a></li>
    <li><a href="index.php?view=behaviorlist&team_id=<?php echo $_GET["id"]; ?>">Comportamiento</a></li>
    <li><a href="index.php?view=calificationlist&team_id=<?php echo $_GET["id"]; ?>">Calificaciones</a></li>
  </ul>
</div>
	<a href="report/team-word.php?team_id=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-file-word-o'></i></a>

	<a href="report/team-pdf.php?team_id=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-file-pdf-o'></i></a>
<?php endif; ?>
<!--	<a href="index.php?view=list&team_id=<?php echo $_GET["id"]; ?>" class="btn btn-default"><i class='fa fa-area-chart'></i> Estadisticas</a> -->


<br><br>
		<?php

		if(count($alumns)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Nombre</th>
			<th class="text-center">DNI</th>
			<th class="text-center">Acciones</th>
			</thead>
			<?php
			foreach($alumns as $al){
				$alumn = $al->getAlumn();
				?>
				<tr>
				<td><?php echo $alumn->lastname.", ".$alumn->name; ?></td>
				<td class="text-right" style="width:160px;"><?php echo $alumn->dni; ?></td>
				<td class="text-center" style="width:160px;"><a href="index.php?view=openalumn&id=<?php echo $alumn->id;?>&tid=<?php echo $team->id;?>" class="btn btn-default glyphicon glyphicon-eye-open"></a> <a href="index.php?view=editalumn&id=<?php echo $alumn->id;?>&tid=<?php echo $team->id;?>" class="btn btn-warning glyphicon glyphicon-edit"></a> <a href="index.php?action=delalumn&id=<?php echo $alumn->id;?>&tid=<?php echo $team->id;?>" class="btn btn-danger glyphicon glyphicon-trash"></a></td>
				</tr>
				<?php

			}

echo "</table>";

		}else{
			echo "<p class='alert alert-danger'>No hay Alumnos</p>";
		}


		?>


	</div>
</div>