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
                <div class="card" style="width: 30rem;">
                    <div class="card-header font-weight-bold">
                        Course Number and Name
                    </div>
                    <div class="card-body">
                        <table id="table_pe" class="display" style="width:100%; font-size: small;">
                            <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Team</th>
                                    <th>Student</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2021</td>
                                    <td>Fall</td>
                                    <td>Joe Smith</td>
                                </tr>
                                <tr>
                                    <td>2021</td>
                                    <td>Fall</td>
                                    <td>Jona Smith</td>
                                </tr>
                                <tr>
                                    <td>2021</td>
                                    <td>Spring</td>
                                    <td>Jana Doe</td>
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