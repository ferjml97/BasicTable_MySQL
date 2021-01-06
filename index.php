<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table | Connection and query to database</title>
    <!--    External resources  -->
    <link 
      rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <link 
      rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container my-3 text-center">
        <h1> Table | Ajax data source (arrays) | jQuery - PHP - MySQL</h1>
        <p >  Connection and query to database </p>
        <!-- Table preparation (columns)    -->
        <div class="mt-5">
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID Game</th>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Company</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID Game</th>
                        <th>Name</th>
                        <th>Year</th>
                        <th>Company</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <!--    Insert executables  -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script>
        //  Get records from table
		$(function() {			   
			$('#example').dataTable( {				
				"ajax": "funciones.php",					
                "columns": [
                { "data": "id_juego" },
                { "data": "nombre" },
                { "data": "anio" },
                { "data": "empresa" }
                ]
            });
        });
	</script>
</html>