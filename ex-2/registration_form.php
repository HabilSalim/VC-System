<link href="css/mdb.min.css" rel="stylesheet" />
<script src="js/jquery.js"></script>
<script src="js/mdb.min.js"></script>

<section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Registration Form</h2>

                            <form action="process_registration_form.php" method="post"enctype="multipart/form-data">
                                <div class="form-outline mb-4">
                                    <input type="text" id="Name" name="Name" class="form-control form-control-lg"
                                        required />
                                    <label class="form-label" for="Name">Name</label>
                                </div>
                                <label id="name_verificator" clase="" style="margin-bottom:1vh !important"></label>

                                <div class="form-outline mb-4">
                                    <input type="email" id="Email" name="Email" class="form-control form-control-lg"
                                        required />
                                    <label class="form-label" for="Email">Email</label>
                                </div>

                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="Picture" 
                                        id="inputGroupFile02">
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="Password1" name="Password"
                                        class="form-control form-control-lg" required />
                                    <label class="form-label" for="Password1">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="CPassword1" name="CPassword"
                                        class="form-control form-control-lg" required />
                                    <label class="form-label" for="CPassword1">Repeat your password</label>
                                </div>
                                <label id="alert_password"></label>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg"
                                        required />
                                    <label class="form-check-label" for="form2Example3g">
                                        I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                service</u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" name="register" id="register1"
                                        class="btn btn-success btn-block btn-lg gradient-custom-4 disabled">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login_form.php"
                                        class="fw-bold text-body"><u>Login here</u></a></p>

                            </form>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript" src="mdb.min.js"></script>

<script>
    var t;
    $("#UName").on("input", function () {
        var name = $("#UName").val();
        t = name.length;
        if (t > 0 && t < 21) {
            $("#name_verificator").text("Acceptable name length!").addClass("text-success").removeClass("text-danger");
        } else {
            $("#name_verificator").text("Name length should not be less than 1 and more than 20 characters!").addClass("text-danger").removeClass("text-success");
        }
    });
    $('#CPassword1').keyup(function () {
        $('#alert_password').text('');
        if ((($('#Password1').val()) == '') || (($('#CPassword1').val()) == '')) {

        }
        else {
            if (($('#Password1').val()) === ($('#CPassword1').val())) {
                $('#alert_password').css('color', 'green');
                $('#alert_password').text('Identical passwords');
            } else {
                $('#alert_password').css('color', 'red');
                $('#alert_password').text('Password does not match!');
            }
            if (($('#Password1').val()) === ($('#CPassword1').val()) && (t < 11)) {
                $('#register1').removeClass('disabled');
            }
            else {
                $('#register1').addClass('disabled');
            }
        }
    });

</script>


