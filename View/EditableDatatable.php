<!doctype html>
<html lang="en">
  <head>
    <?php include('./Helpers/cssExtensions.php') ?>
    <style>
        [class*="dataTables_"]{
            font-size: small;
        }
    </style>
  </head>
  <body>
    <!-- Header -->
    <?php include('header.php') ?>
<div>    
    <table width="100%" id="dtExample" class="display " cellspacing="0">    
        <thead>    
            <tr>    
    
                <th>S.No</th>    
                <th style="display:none;">Id</th>    
                <th>Name</th>    
                <th>Age</th>    
                <th>City</th>    
                <th>State</th>    
                <th></th>    
                <th></th>    
            </tr>    
        </thead>    
    </table>    
</div>

    <!-- Footer -->
    <?php include('footer.php') ?>

    <!-- JavaScript Extensions -->
    <?php include('./Helpers/jsExtensions.php') ?>

<script>

    $(document).ready(function () {    
       fnLoadDataTableInstance()    
   })

   function fnLoadDataTableInstance() {    
       var dataSource = [    
           { id: '101', name: 'Gowtham', age: 28, city: 'Coimbatore', state: 'Tamil Nadu' },    
           { id: '102', name: 'Sudhan', age: 38, city: 'Ooty', state: 'Tamil Nadu' },    
           { id: '103', name: 'Vignesh', age: 34, city: 'Erode', state: 'Tamil Nadu' },    
           { id: '104', name: 'CSK', age: 34, city: 'Coimbatore', state: 'Tamil Nadu' },    
           { id: '105', name: 'Arvind', age: 28, city: 'Coimbatore', state: 'Tamil Nadu' },    
           { id: '106', name: 'Rahul', age: 38, city: 'Ooty', state: 'Tamil Nadu' },    
           { id: '107', name: 'Raji', age: 34, city: 'Erode', state: 'Tamil Nadu' },    
           { id: '108', name: 'Ananthi', age: 34, city: 'Coimbatore', state: 'Tamil Nadu' },     
       ]     
           
       $('#dtExample').DataTable({    
        dom: 'Bfrtip',    
        data: dataSource,    
        columns: [    
            {    
                render: function (data, type, row, meta) {    
                    return meta.row + meta.settings._iDisplayStart + 1;    
                }    
            },    
            { data: 'name', class: 'editable text' },    
            { data: 'age' },    
            { data: 'city' },    
            { data: 'state' },    
            {    
                //edit button creation    
                render: function (data, type, row) {    
                    return createButton('edit', row.id);    
                }    
            },    
            {    
                //delete button creation    
                render: function (data, type, row) {    
                    return createButton('delete', row.id);    
                }    
            }    
        ],    
        "searching": false,    
        "paging": true,    
        "info": true,    
        "language": {    
            "emptyTable": "No data available"    
        },

        "fnRowCallback": function (nRow, aData, iDisplayIndex) {    
            $("td:first", nRow).html(iDisplayIndex + 1);    
            return nRow;    
        },    
        })    
   }    
    
    
function createButton(buttonType, rowID) {    
    var buttonText = buttonType == "edit" ? "Edit" : "Delete";    
    return '<button class="' + buttonType + '" type="button">' + buttonText+'</button>';    
} 

$('#dtExample').on('click', 'tbody td .edit', function (e) {    
    fnResetControls();    
    var dataTable = $('#dtExample').DataTable();    
    var clickedRow = $($(this).closest('td')).closest('tr');    
    $(clickedRow).find('td').each(function () {    
        // do your cool stuff    
        if ($(this).hasClass('editable')) {    
            if ($(this).hasClass('text')) {    
                var html = fnCreateTextBox($(this).html(), 'name');    
                $(this).html($(html))    
            }    
        }    
    });     
    
    
    $('#dtExample tbody tr td .update').removeClass('update').addClass('edit').html('Edit');    
    $('#dtExample tbody tr td .cancel').removeClass('cancel').addClass('delete').html('Delete');    
    $(clickedRow).find('td .edit').removeClass('edit').addClass('update').html('Update');    
    $(clickedRow).find('td .delete').removeClass('delete').addClass('cancel').html('Cancel');    
    
});    
    
function fnCreateTextBox(value, fieldprop) {    
    return '<input data-field="' + fieldprop + '" type="text" value="' + value + '" ></input>';    
} 

$('#dtExample').on('click', 'tbody td .cancel', function (e) {    
        fnResetControls();    
        $('#dtExample tbody tr td .update').removeClass('update').addClass('edit').html('Edit');    
        $('#dtExample tbody tr td .cancel').removeClass('cancel').addClass('delete').html('Delete');    
    });    
    
    
    function fnResetControls() {    
        var openedTextBox = $('#dtExample').find('input');    
        $.each(openedTextBox, function (k, $cell) {    
            $(openedTextBox[k]).closest('td').html($cell.value);    
        })    
    }

$('#dtExample').on('click', 'tbody td .update', function (e) {    
    
       var openedTextBox = $('#dtExample').find('input');    
       $.each(openedTextBox, function (k, $cell) {    
           fnUpdateDataTableValue($cell, $cell.value);    
           $(openedTextBox[k]).closest('td').html($cell.value);    
       })    
    
       $('#dtExample tbody tr td .update').removeClass('update').addClass('edit').html('Edit');    
       $('#dtExample tbody tr td .cancel').removeClass('cancel').addClass('delete').html('Delete');    
   });    
    
function fnUpdateDataTableValue($inputCell, value) {    
       var dataTable = $('#dtExample').DataTable();    
       var rowIndex = dataTable.row($($inputCell).closest('tr')).index();    
       var fieldName = $($inputCell).attr('data-field');    
       dataTable.rows().data()[rowIndex][fieldName] = value;    
   }    
</script>

</body>
</html>