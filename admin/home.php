<?php require("./layout/Header.php") ?>
<?php require("./layout/db.php") ?>

<div class="container mt-3">
    <div style="display:flex;flex-direction:row;justify-content:space-between">
        <h2 style="color:#2b74e2;font-weight:600">Students List</h2>
    </div>
    <br>  
    <div class="accordion" id="accordionExample">
        <?php
        $result = $conn->query("SELECT * FROM student ORDER BY id DESC");
        if($result->num_rows > 0){
            $i=0;
            while($row = $result->fetch_assoc()){
                $i++;
                ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo($row["id"])?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo($row["id"])?>" aria-expanded="false" aria-controls="collapse<?php echo($row["id"])?>">
                    <?php echo($i) ?> . <?php echo($row["name"])?>
                    </button>
                    </h2>
                    <div id="collapse<?php echo($row["id"])?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo($row["id"])?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-6">
                                Name : <?php echo($row["name"]) ?>
                            </div>
                            <div class="col-6">
                                Course : <?php echo($row["course"]) ?>
                            </div>
                            <div class="col-6">
                                Father Name : <?php echo($row["fname"]) ?>
                            </div>
                            <div class="col-6">
                                Mother Name : <?php echo($row["mname"]) ?>
                            </div>
                            <div class="col-6">
                                Mobile : <?php echo($row["mobile"]) ?>
                            </div>
                            <div class="col-6">
                                Email : <?php echo($row["email"]) ?>
                            </div>
                            <div class="col-6">
                                Address : <?php echo($row["address"]) ?>
                            </div>
                            <div class="col-6">
                                Completed Course : <?php echo($row["com"]) ?>
                            </div>
                            <div class="col-6">
                                Profile : <br>
                                <img src="/uploads/<?php echo($row["img"]) ?>" width="150px" alt="">
                            </div>
                            <div class="col-6">
                                Sign : <br>
                                <img src="/uploads/<?php echo($row["sign"]) ?>" width="150px" alt="">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <?php
                }
            }else{
            ?>
        <p style="text-align:center" colspan="10">Nothing Found</p>
        <?php
        }
        ?>
        
    </div>

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