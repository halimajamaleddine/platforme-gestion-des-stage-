<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #success_message {
            display: none;
        }
    </style>

    <title>Document</title>
</head>

<body>
    <div class="container">

        <form class="well form-horizontal" action="/register" method="POST" id="contact_form">
            @csrf
            <fieldset>

                <!-- Form Name -->
                <legend>
                    <center>
                        <h2><b>Registration Form</b></h2>
                    </center>
                </legend><br>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">First Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="first_name" placeholder="First Name" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Last Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="last_name" placeholder="Last Name" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Department / Office</label>
                    <div class="col-md-4 selectContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                            <select name="department" class="form-control selectpicker">
                                <option value="">Select your Department/Office</option>
                                <option>Department of Engineering</option>
                                <option>Department of Agriculture</option>
                                <option>Accounting Office</option>
                                <option>Tresurer's Office</option>
                                <option>MPDC</option>
                                <option>MCTC</option>
                                <option>MCR</option>
                                <option>Mayor's Office</option>
                                <option>Tourism Office</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Username</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="user_name" placeholder="Username" class="form-control" type="text">
                        </div>
                    </div>
                </div>

                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label">Password</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="user_password" placeholder="Password" class="form-control" type="password">
                        </div>
                    </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label">E-Mail</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" placeholder="E-Mail Address" class="form-control" type="text">
                        </div>
                    </div>
                </div>


                <!-- Select Basic -->

                <!-- Success message -->
                <div class="alert alert-success" role="alert" id="success_message">Success <i
                        class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit"
                            class="btn btn-warning">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span
                                class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    </div><!-- /.container -->

</body>

</html>
