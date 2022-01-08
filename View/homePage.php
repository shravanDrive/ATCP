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
              <!-- DataTable Code Start -->
      <div class="row my-3"></div>
        <table id="table_id" class="display" style="width:100%; font-size: small;">
            <thead>
                <tr>
                    <th>UIN</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Entry Year</th> 
                    <th>Program Status</th>
                    <th>Advisor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>676184632</td>
                    <td>Garfield</td>
                    <td>Andrew</td>
                    <td>2011</td>
                    <td>New Admit</td>
                    <td>Cochrane</td>
                </tr>
                <tr>
                    <td>686184645</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184646</td>
                    <td>Kristian</td>
                    <td>Cordova</td>
                    <td>2013</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184647</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184648</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184649</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>

                <tr>
                    <td>686184664</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184645</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184645</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184645</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184645</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184645</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184645</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184645</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184645</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>
                <tr>
                    <td>686184645</td>
                    <td>Toby</td>
                    <td>Macguire</td>
                    <td>2010</td>
                    <td>Completed</td>
                    <td>Politiano</td>
                </tr>

            </tbody>
        </table>


    <!-- DataTable Code End -->
    <!-- Content Page End -->

    <!-- Footer -->
    <?php include('footer.php') ?>

    <!-- JavaScript Extensions -->
    <?php include('./Helpers/jsExtensions.php') ?>
        <!-- Optional JavaScript -->
        <script>
        $(document).ready( function () {
            $('#table_id').DataTable({ 
                "scrollY": "300px",
                "scrollCollapse": true            
            });       
        } );
    </script>
  </body>
</html>