

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Groups of Institution</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="../img/icon-ugi.png" type="image/x-icon">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <!-- JS only -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</head>
<style>
    body{
        background: url('../img/form1.jpg') no-repeat center/cover;
        color: white;
    }
    .container {
        width: 100%;
        height: 60rem;
        margin-top: 2rem;
        margin-top: 2rem;
        /* filter: drop-shadow(0px 0px 2px black); */
    }
</style>

<body><br>
    <center><h1><b>CONTACT US</b></h1><hr></center>
    <div class="container">
        <form action="../backend/contactfill.php"  method="post"  onsubmit="return fun()" >
            <div class="mb-3">
                <label for="name" class="form-label"><i class="bi bi-person-fill"></i> <b>Full Name</b></label>
                <input type="text" class="form-control" name="name" id="name">
            </div>        

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><i class="bi bi-envelope-fill"></i>
                    <b>Email</b></label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label"><i class="bi bi-telephone-fill"></i> <b>Phone</b></label>
                <input type="tel" class="form-control" name="phone" id="phone">
            </div>
             
             <div class="form-group mt-3">
             <label for="phone" class="form-label"><i class="bi bi-telephone-fill"></i> <b>Message</b></label>
            <textarea class="form-control" name="msg" rows="3" width="40%" data-rule="required"
              data-msg="Please write something for us" placeholder="Message"></textarea>

            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <br>
            <div class="d-grid gap-2">
            
                <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-check2-circle"></i> Register</button>
            </div>
        </form>
    </div>
    <script>
        function fun() {
          var x=document.getElementById("name").value;
          var y=document.getElementById("email").value;
          var z=document.getElementById("phone").value;
         
          
          
          if(x=="")
          {
            alert("name field should not be empty");
            return false;
          }
         
          
          else if(y=="")
          {
            alert("email should not be empty");
            return false;
          }
          else if(z.length>10||z.length<10)
          {
            alert("phone number should not be less than or greater than 10");
            return false;l
          }
          
          else{
            return true;
          }

        }
      </script>
</body>

</html>