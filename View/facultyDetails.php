<!doctype html>
<html lang="en">
  <head>
    <?php include('./Helpers/cssExtensions.php') ?>
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
                        Faculty Details Screen
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <form>
                            <div class="form-group">
                              <label for="firstname1" style="font-size: 13px;">Faculty First Name</label>
                              <input type="firstname" class="form-control form-control-sm" id="firstname1" aria-describedby="firstname" placeholder="Michael" readonly>
                            </div>
                            <div class="form-group">
                              <label for="lastname1" style="font-size: 13px;">Faculty Last Name</label>
                              <input type="lastname" class="form-control form-control-sm" id="lastname1" placeholder="Choi" readonly>
                            </div>
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input my-2" id="exampleCheck1" checked onclick="return false;">
                              <label class="form-check-label" style="font-size: 13px;" for="exampleCheck1">Adjunct</label>
                            </div>
                            <div class="form-group my-2">
                                <label for="uicemail" style="font-size: 13px;">UIC Email</label>
                                <input type="lastname" class="form-control form-control-sm" id="uicemail" placeholder="mchoi@uic.edu" readonly>
                            </div>
                            <div class="form-group">
                                <label for="officephone" style="font-size: 13px;">Office Phone</label>
                                <input type="officephone" class="form-control form-control-sm" id="officephone" placeholder="+1 (312)776-4331" readonly>
                            </div>
                            <div class="form-group">
                                <label for="workcell" style="font-size: 13px;">Work Cell Phone</label>
                                <input type="workcell" class="form-control form-control-sm" id="workcell" placeholder="+1 (312)886-4551" readonly>
                            </div>
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                          </form>
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

  </body>
</html>