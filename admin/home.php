<?php require("./layout/Header.php") ?>
<?php require("./layout/db.php") ?>

<div class="container mt-3">
    <div style="display:flex;flex-direction:row;justify-content:space-between">
        <h2 style="color:#2b74e2;font-weight:600">Students List</h2>
    </div>
    <br>  
    <div class="table-responsive">        
    <table class="table table-striped table-bordered">
        <thead style="text-align:center">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>Course Wanted</th>
                <th>Cource Completed</th>
                <th>Image</th>
                <th>Sign</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM student ORDER BY id DESC");
            if($result->num_rows > 0){
                $i=0;
                while($row = $result->fetch_assoc()){
                    $i++;
                    ?>
                        <tr>
                            <td style="text-align:center"><?php echo($i) ?></td>
                            <td><?php echo($row["name"]) ?></td>
                            <td><?php echo($row["fname"]) ?></td>
                            <td><?php echo($row["mname"]) ?></td>
                            <td><?php echo($row["mobile"]) ?></td>
                            <td><?php echo($row["email"]) ?></td>
                            <td><?php echo($row["address"]) ?></td>
                            <td><?php echo($row["com"]) ?></td>
                            <td><?php echo($row["course"]) ?></td>
                            <td><img src="/uploads/<?php echo($row["img"]) ?>" width="150px" alt=""></td>
                            <td><img src="/uploads/<?php echo($row["sign"]) ?>" width="150px" alt=""></td>
                        </tr>
                    <?php
                }
            }else{
            ?>
            <tr>
                <td style="text-align:center" colspan="10">Nothing Found</td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
    <br>
</div>


<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if(urlParams.get('err')){
      document.write("<div id='err' style='position:fixed;bottom:30px; right:30px;background-color:#FF0000;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("err").style.display="none"
    }, 3000)
</script>

<script>
    if(urlParams.get('msg')){
      document.write("<div id='msg' style='position:fixed;bottom:30px; right:30px;background-color:#4CAF50;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("msg").style.display="none"
    }, 3000)
</script>


<?php require("./layout/Footer.php") ?>