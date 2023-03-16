<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/static/img/logo.png">
    <style>
        body, html {
            height:100%
        }
    </style>
</head>
<body >
    <div id="loader" style="position:fixed;width:100%;height:100%;background-color:rgba(106, 17, 203, 1);z-index: 10000;top:0px;display: none;">
        <div class="spinner-border" style="color:#fff;position:fixed;top:48%;left:49%;" role="status">
          <span class="sr-only"></span>
        </div>
    </div>

    <section class="gradient-custom h-100">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card" style="border-radius: 1rem;background-color:#f9f9f9;">
                        <form onsubmit="document.getElementById('loader').style.display='block'" action="/form.php" method="POST" class="card-body p-4 text-center">
                            <h2 class="fw-bold mb-4 text-uppercase" style="font-weight:800;color:tomato">Admission Form</h2>
                            <select class="form-select mb-3" name="course" aria-label=".form-select-sm example" required>
                                <option selected disabled value="">Select Course</option>
                                <?php
                                    require("./admin/layout/db.php");
                                    $result = $conn->query("SELECT * FROM program WHERE sheet>0 ORDER BY id DESC");
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                ?>
                                <option value="<?php echo($row["program"]) ?>"><?php echo($row["program"]) ?></option>
                                <?php
                                        }
                                    }else{
                                ?>
                                    <option disabled>There is No Available Sheets</option>
                                <?php } ?>
                            </select><br>

                            <button class="btn btn-lg px-5 mb-2"  style="background-color: tomato;color:white;" type="submit">Next</button>
                        </div>
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