
<html>

<head>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.js"></script>

<script type="text/javascript" src="http://legacy.datatables.net/extras/thirdparty/ColReorderWithResize/ColReorderWithResize.js"></script>


<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.15/sorting/date-de.js"></script>






<script >
	$(document).ready(function() {
    $('#example').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "datatables/scripts/server_processing.php",
        "sDom": "Rlfrtip",
        "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.15/i18n/German.json"
            },
            createdRow: function( row, data, dataIndex ) {
        // Set the data-status attribute, and add a class
        $( row ).find('td:eq(4)')
            .attr('data-sort', "2015-08-27")
           
    }

        
    } );

   
} );
</script>

</head>

<body>
<table id="example" class="display" cellspacing="0" width="100%">
       <thead>
        <tr>
         <th>ID</th>
            <th>Vorname</th>
            <th>Install Location</th>
            <th>Subscriber Name</th>
            <th>some data</th>
        </tr>
    </thead>
    </table>
</body>

<html>