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
        <div class="row my-5">
            <div class="d-flex col justify-content-start">
                <div class="card" style="width: 50rem;">
                    <div class="card-header font-weight-bold">
                        Subject Statistics
                    </div>
                    <div class="card-body">
                        <table id="table_pe" class="display" style="width:100%; font-size: small;">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Year</th>
                                    <th>Term</th>
                                    <th>TotalA</th>
                                    <th>TotalB</th>
                                    <th>TotalC</th>
                                    <th>TotalD</th>
                                    <th>TotalF</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>DHD 440</td>
                                    <td>2020</td>
                                    <td>Fall</td>
                                    <td>15</td>
                                    <td>5</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>DHD 440</td>
                                    <td>2021</td>
                                    <td>Spring</td>
                                    <td>20</td>
                                    <td>7</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <td>DHD 451</td>
                                    <td>2022</td>
                                    <td>Spring</td>
                                    <td>22</td>
                                    <td>5</td>
                                    <td>4</td>
                                    <td>2</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
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
        $(document).ready( function () {

            $('#table_pe').DataTable({ 
                "scrollY": "300px",
                "scrollCollapse": true            
            });

        } );
    </script>

  </body>
</html>