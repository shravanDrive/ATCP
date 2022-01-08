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
    
    <!-- Content Page Start -->

    <div class="container">
        <div class="row">
            <div class="col-3">
                <label class="font-weight-bold" for="searchName" style="font-size: 13px;">Search By Name:</label>
                <input type="searchName" class="form-control form-control-sm" id="searchName1" aria-describedby="searchName">
            </div>
            <div class="col-2">
            <label class="font-weight-bold" for="searchName" style="font-size: 13px;"></label>
            <button type="submit" class="btn btn-dark form-control my-2 btn-sm">Search</button>
            </div>
            <div class="col-5"></div>
            <div class="col-2">
            <label class="font-weight-bold" for="searchName" style="font-size: 13px;"></label>
            <button type="submit" class="btn btn-dark form-control my-2 btn-sm">Submit</button>
            </div>
        </div>
        <div class="row my-4">
            <div class="d-flex col justify-content-start">
                <div class="card" style="width: 70rem;">
                    <div class="card-header font-weight-bold" style="font-size: small">
                        Student Firstname + Lastname (view only)
                    </div>
                    <div class="card-body">
                    <table id = "table_sm" class="table" style="font-size: small;">
                        <thead>
                            <tr>
                                <th>Course#</th>
                                <th>Credits</th>
                                <th>Year_Taken</th>
                                <th>Term_Taken</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="searchName" class="border-0" id="searchName1" aria-describedby="searchName" value="DHD 540"></td>
                                <td><input type="searchName" class="border-0" id="searchName1" aria-describedby="searchName" value="2021"></td>
                                <td><input type="searchName" class="border-0" id="searchName1" aria-describedby="searchName" value="Fall"></td>
                                <td><input type="searchName" class="border-0" id="searchName1" aria-describedby="searchName" value="A"></td>
                                <td><input type="searchName" class="border-0" id="searchName1" aria-describedby="searchName" value=""></td>
                            </tr>
                            <tr>
                            <td><input type="searchName" class="border-0" id="searchName1" aria-describedby="searchName" value="DHD 540"></td>
                                <td><input type="searchName" class="border-0" id="searchName1" aria-describedby="searchName" value="2021"></td>
                                <td><input type="searchName" class="border-0" id="searchName1" aria-describedby="searchName" value="Fall"></td>
                                <td><input type="searchName" class="border-0" id="searchName1" aria-describedby="searchName" value="A"></td>
                                <td><input type="searchName" class="border-0" id="searchName1" aria-describedby="searchName" value=""></td>
                            </tr>
                        </tbody>
                    </table>
                        <ul class="pagination mb-0 justify-content-center" style="font-size: small;">
                            <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                            <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
                        </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Content Page End -->

    <!-- Footer -->
    <?php include('footer.php') ?>

    <!-- JavaScript Extensions -->
    <?php include('./Helpers/jsExtensions.php') ?>

    <!-- Optional JavaScript -->
    <script>
        // $(document).ready( function () {
        //     $('#table_sm').DataTable({ 
        //         "scrollY": "300px",
        //         "scrollCollapse": true,           
        //     });       
        // } );

        var editor; // use a global for the submit and return data rendering in the examples
 
$(document).ready(function() {
    editor = new $.fn.dataTable.Editor( {
        // ajax: "../php/staff.php",
        table: "#table_sm",
        fields: [ {
                label: "Course #",
                name: "course#"
            }, {
                label: "Credits",
                name: "credits"
            }, {
                label: "Year_Taken",
                name: "year_taken"
            }, {
                label: "Term_Taken",
                name: "term_taken"
            }, {
                label: "Grade",
                name: "Grade"
            }
        ]
    } );
 
    // Activate an inline edit on click of a table cell
    $('#table_sm').on( 'click', 'tbody td.row-edit', function (e) {
        editor.inline( table.cells(this.parentNode, '*').nodes(), {
            submitTrigger: -2,
            submitHtml: '<i class="fa fa-play"/>'
        } );
    } );
 
    // Delete row
    $('#table_sm').on( 'click', 'tbody td.row-remove', function (e) {
        editor.remove( this.parentNode, {
            title: 'Delete record',
            message: 'Are you sure you wish to delete this record?',
            buttons: 'Delete'
        } );
    } );
 
    var table = $('#table_sm').DataTable( {
        dom: "Bfrtip",
        // ajax: "../php/staff.php",
        columns: [
            { data: "course#" },
            { data: "credits" },
            { data: "year_taken" },
            { data: "term_taken" },
            { data: "Grade" },
            {
                data: null,
                defaultContent: '<i class="fa fa-pencil"/>',
                className: 'row-edit dt-center',
                orderable: false
            },
            {
                data: null,
                defaultContent: '<i class="fa fa-trash"/>',
                className: 'row-remove dt-center',
                orderable: false
            },
        ],
        select: {
            style: 'os',
            selector: 'td:first-child'
        },
        buttons: [ {
            extend: "createInline",
            editor: editor,
            formOptions: {
                submitTrigger: -2,
                submitHtml: '<i class="fa fa-play"/>'
            }
        } ]
    } );
} );


    </script>

  </body>
</html>