<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
    #message{
            /* position: absolute; */
            /* z-index:1; */
            /* width: 20%; */
            margin-top:30px;
            left: 0;
            top: 0;
            display: none;
        }
    #popup{
            z-index:100;
            background-color:black;
            width: 500px;
            height: auto;
            position: relative;
            top: 20%;
            left: 20%;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: end;
            font-weight: bold;

        }
    .hd{
           width:30px;
           margin-left:90%;
           margin-top:10px;
        }
    .add{
            margin-bottom:20px;
            margin-left:45%;
        }
    input{
            margin-top:20px;
            width:250px;
            margin-left:25%;
            margin-bottom:20px; 
        }
    label{
            margin-left:25%;
        }
    
    </style>
</head>


<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Content</th>
      <th scope="col">Response</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $connection = mysqli_connect('localhost','root','');
        mysqli_select_db($connection,"plugin");
        $query = "SELECT * FROM contactus order by id desc";
        $result = mysqli_query($connection, $query);
            while ($row = $result->fetch_assoc()) {
                echo '<tr ><td>'. $row["fullname"] . '</td><td>' . $row["email"] . '</td><td>' . $row["subjecte"] . '</td><td>' . $row["content"] . '</td><td><button class= "btn btn-sm btn-dark" onclick="affiche(`'.$row["email"].'`)"> Response </button></td></tr>';
            }
            ?>
  </tbody>
</table>

<div id="message">
        <div id="popup">
           <button class="hd btn btn-light" onclick="annuler()">X</button>
            
<form method="post" action="">
           
               <input type="hidden" id="email" name="email" ><br>
               <label for="name" class="text-white">message:</label><br><input name="message"  /><br>

              
           
            <button  type="submit"class="btn  btn-outline-light add" value="add" name="add" >Add</button>
</form>
        </div>
    </div>

    <?php
    if(isset($_POST['add'])){
    $to=$_POST['email'];
    $subject='message';
    $msg=$_POST['message'];
    wp_mail($to,$subject,$msg);
    }
    ?>



    <script>
 function affiche(val){
     document.getElementById("message").style="display:block";
     document.getElementById("email").value=val;
     
 }

 function annuler(){
   document.getElementById("message").style="display:none";
 }
</script>

