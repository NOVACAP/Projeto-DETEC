<form action="/ver-demandas" method= 'POST'>
    @csrf {{-- gera token de segurnaça a cada envio--}}
    <label>Data de entrada:</label>
    <input type="date" name="dateInput" > 
    <br><br>
    <label>Data de distribuição:</label>
    <input type="date"  name="dateDist"> 
    <br><br>
   
    <button type="submit">Salvar</button>
</form>
<br>

$table->bigIncrements('id');
$table->date('dateInput');
$table->date('dateDist');
$table->date('delivery');
$table->string('address');
$table->unsignedBigInteger('idThematicAreas');
$table->unsignedBigInteger('idEmployers');
$table->unsignedBigInteger('idProcess');
$table->unsignedBigInteger('idAdministrativeRegions');
$table->unsignedBigInteger('idActivitys');
$table->unsignedBigInteger('idDemandsEmployers');
$table->unsignedBigInteger('idInteresteds');
$table->unsignedBigInteger('idTechniqueAreas');