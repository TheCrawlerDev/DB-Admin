<?php

function mb_gb($num){
	if($num>1024){
		return number_format($num/1024,2).' GB';
	}else{
		return $num.' MB';
	}
}

?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        
	var data = google.visualization.arrayToDataTable([
          ['Table', 'Size(MB)'],
           <?php foreach($data['graficos_clientes'] as $d){ if(intval($d['size'])>0){?>
                <?php echo "['".$d['Table']."', {v:".intval($d['size']).",f:"."'".mb_gb(intval($d['size']))."'"."}],";?>
           <?php }}?>
        ]);

	// Set chart options
        var options = {'title':'Veja a distribuição dos dados do banco em MB',
                       'is3D':true,
		       'pieSliceText': 'label',
		       'width':800,
		       'legend': {position: 'right'},
		       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
</script>
<script>
	google.charts.load('current', {'packages':['table']});
      	google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Table');
        data.addColumn('number', 'Size');
        data.addRows([
          <?php foreach($data['graficos_clientes'] as $d){ if(intval($d['size'])>0){?>
                <?php echo "['".$d['Table']."', {v:".intval($d['size']).",f:"."'".mb_gb(intval($d['size']))."'"."}],";?>
           <?php }}?>
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

        table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
      }
</script>

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Tabelas do banco de dados</h4>
                                </div>
                                <div class="card-body ">
                                    <div id="chart_div"></div>
                                    <div id="table_div"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
