  </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <script src="js/scripts.js"></script>


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
		var data = new google.visualization.DataTable();
		data.addColumn('string', 'Topping');
		data.addColumn('number', 'Slices');
		data.addRows([
		  ['Views', <?php echo $session->count; ?>],
		  ['Users', <?php echo User::count_record(); ?>],
		  ['Photos', <?php echo Photo::count_record(); ?>],
		  ['Comments', <?php echo Comment::count_record(); ?>]
		]);

		// Set chart options
		var options = {
			title:'How Much Pizza I Ate Last Night',
		    width:600,
		    height:600,
		    legend: 'none',
		    pieSliceText: 'label',
		    backgroundColor: 'transparent',
		};

		// Instantiate and draw our chart, passing in some options.
		var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		chart.draw(data, options);
		}
    </script>
</body>

</html>
