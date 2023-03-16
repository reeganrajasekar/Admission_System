<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/static/img/logo.png">
</head>
<body >
    <div id="loader" style="position:fixed;width:100%;height:100%;background-color:rgba(106, 17, 203, 1);z-index: 10000;top:0px;display: none;">
        <div class="spinner-border" style="color:#fff;position:fixed;top:48%;left:49%;" role="status">
          <span class="sr-only"></span>
        </div>
    </div>

    <section class="gradient-custom py-5">
        <div class="container py-1">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="card" style="border-radius: 1rem;background-color:#f5f5f5;">
                        <form onsubmit="document.getElementById('loader').style.display='block'" action="/register.php" method="POST" class="card-body p-4 text-center" enctype="multipart/form-data">
                            <h2 class="fw-bold mb-4 text-uppercase" style="font-weight:800;color:tomato">Admission Form</h2>
                            <input type="hidden" name="course" value="<?php echo($_POST['course']) ?>">
                            <div class="form-floating mb-3">
                                <input required type="text" name="name" class="form-control" id="floatingInput" placeholder="Name of the Student">
                                <label for="floatingInput">Name of the Student</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="text" name="fname" class="form-control" id="floatingInput" placeholder="Father Name">
                                <label for="floatingInput">Father Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="text" name="mname" class="form-control" id="floatingInput" placeholder="Mother Name">
                                <label for="floatingInput">Mother Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="number" name="mobile" class="form-control" id="floatingInput" placeholder="Mobile No">
                                <label for="floatingInput">Mobile No</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="email" name="email" class="form-control" id="floatingInput" placeholder="Email">
                                <label for="floatingInput">Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="text" name="address" class="form-control" id="floatingInput" placeholder="Address">
                                <label for="floatingInput">Address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="text" name="sname" class="form-control" id="floatingInput" placeholder="School Name / College Name">
                                <label for="floatingInput">School Name / College Name</label>
                            </div>

                            <select class="form-select mb-3" name="com" aria-label=".form-select-sm example">
                                <option selected>Course Completed</option>
                                <option value="+2 (Maths, Biology)">+2 (Maths, Biology)</option>
                                <option value="+2 (Maths, Computer Science)">+2 (Maths, Computer Science)</option>
                            </select>

                            <div class="form-floating mb-3">
                                <input required type="file" name="img" class="form-control" id="floatingInput" placeholder="Photo">
                                <label for="floatingInput">Photo</label>
                            </div>

                            <div class="form-floating mb-5">
                                <input required type="file" name="sign" class="form-control" id="floatingInput" placeholder="Sign">
                                <label for="floatingInput">Sign</label>
                            </div>

                            <button class="btn btn-lg px-5 mb-2" style="background-color:tomato;color:white" type="submit">Register</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        body{
            background-image: url("./static/bg.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;

        }
    </style>
    <script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if(urlParams.get('err')){
        document.write("<div id='err' style='position:fixed;bottom:30px; right:30px;background-color:tomato;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("err").style.display="none"
    }, 5000)
    if(urlParams.get('msg')){
        document.write("<div id='msg' style='position:fixed;bottom:30px; right:30px;background-color:green;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("msg").style.display="none"
    }, 5000)
</script>
    
    <script src="/static/js/bootstrap.bundle.js"></script>
</body>
</html>