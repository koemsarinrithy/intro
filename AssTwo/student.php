<?php 
    #Retrive student data from file studentForm
    #Retrive id, name, gender, score1, score2, score3, total, average

    # $total = $score1+...+$score3
    # $avg = $total/3;
    
    #show as Table
    $id = $_POST["txt-id"];
    $name =$_POST["txt-name"];
    $gender = $_POST["txt-gender"];
    $score1 = $_POST["txt-score1"];
    $score2 = $_POST["txt-score2"];
    $score3 = $_POST["txt-score3"];
    $total = $score1+$score2+$score3;
    $avg = $total/3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <div class="col-5 mx-auto mt-3">
        <table class="table table-hover table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Score1</th>
                <th>Score2</th>
                <th>Score3</th>
                <th>Total</th>
                <th>Average</th>

            </tr>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $gender ?></td>
                <td><?php echo $score1 ?></td>
                <td><?php echo $score2 ?></td>
                <td><?php echo $score3 ?></td>
                <td><?php echo $total ?></td>
                <td><?php echo $avg ?></td>

            </tr>
        </table>
    </div>
</body>
</html>

