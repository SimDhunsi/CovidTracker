<?php
    include "logic.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--- Bootstrap Css --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <!--- Bootstrap JS --->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- adding google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- FontAWSLib --->
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymous"></script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <title>Covid-19 Tracker</title>

</head>
<body>

    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1>Covid-19 Tracker</h1>
        <h5 class="text-muted">This Website allows you to track the covid cases</h5>
    </div>
    <div class="container my-5">
        <div class="row text-center">
            <div class="col-4 text-warning" >
            <h5>Confirmed</h5>
            <?php echo number_format($total_confirmed)."<br>"; ?>
            </div>

            <div class="col-4 text-success">
            <h5>Recovered</h5>
            <?php echo number_format($total_recovered)."<br>"; ?>
            </div>

            <div class="col-4 text-danger">
            <h5>Deaths</h5>
            <?php echo number_format($total_deaths)."<br>"; ?>
            </div>
            
        </div>
    </div>

    <div class="container">
        <h5></h5>
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col pl-0.5">Countries</th>
                    <th scope="col">Confirmed</th>
                    <th scope="col">Recovered</th>
                    <th scope="col">Deaths</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data as $key => $value){
                        $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                ?>                
                    <tr>
                        <th><?php echo $key;?></th>
                        <td><?php $confirmed_cases = $value[$days_count]['confirmed'];
                        echo number_format($confirmed_cases)."<br>"; ?>
                            <?php if($increase != 0){?>
                                <small class="text-danger pl-5"><i class="fas fa-arrow-up"></i><?php echo number_format($increase)."<br>"; ?></small>
                            <?php } ?>
                            
                        </td>
                        <td><?php $recover_cases = $value[$days_count]['recovered'];
                        echo  number_format($recover_cases)."<br>"; ?></td>
                        <td><?php $death_cases = $value[$days_count]['deaths'];
                        echo  number_format($death_cases)."<br>"; ?></td>

                    </tr>


                <?php }?>


            </tbody>
        </table>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">Copyright &copy; 2021, Sim</span>
        </div>
        <div class="container text-center">
        <span class="text-muted">Made using <a href="https://github.com/pomber/covid19">Pomber API</a></span>
        </div>

        </div>


    </footer>
                          



</body>
</html>