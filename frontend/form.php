

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
    <center><h1><b>College Travelling Form</b></h1><hr></center>
    <div class="container">
        <form action="../backend/formfill.php"  method="post"  onsubmit="return fun()" >
            <div class="mb-3">
                <label for="name" class="form-label"><i class="bi bi-person-fill"></i> <b>Full Name</b></label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label"><i class="bi bi-person-fill"></i> <b>Father's Name</b></label>
                    <input type="text" class="form-control" name="fname" id="fname">
                </div>
                <div class="col">
                    <label for="name" class="form-label"><i class="bi bi-person-fill"></i> <b>Mother's Name</b></label>
                    <input type="text" class="form-control" name="mname" id="mname">
                </div>
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label"><i class="bi bi-person-check-fill"></i> <b>Gender</b></label>
                <div class="row">
                <div class="col">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="male" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1" value="male">Male</label>
                </div>
                <div class="col">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="female" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2" >Female</label>
                </div>
                <div class="col">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" value="other"id="flexRadioDefault3" checked>
                    <label class="form-check-label" for="flexRadioDefault3" >Other</label>
                </div>
                </div>
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

            <div class="mb-3">
                <label for="aadharcard" class="form-label"><i class="bi bi-credit-card-fill"></i> <b>Aadhar Card</b></label>
                <input type="number" class="form-control" name="aadhar" id="aadharcard">
            </div>

            <div class="mb-3">
                <label for="college" class="form-label"><b>College</b></label>
                <select class="form-select" aria-label="Default select example" name="college">
                    <option selected>United College of Engineering and Management</option>
                    <option value="1">United Institute of Technology</option>
                    <!-- <option value="2">United Institute of Management</option> -->
                    <option value="2">United College of Engineering Research</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="course" class="form-label"><i class="bi bi-book-fill"></i> <b>Course</b></label>
                <select id="course" class="form-select" name="course">
                    <option>Bachelor of Technology(B.Tech)</option>
                </select>
            </div>

            <div class="row row-cols-lg-auto g-3 align-items-center">
                <div class="mb-3">
                    <label for="branch" class="form-label"><i class="bi bi-book-fill"></i> <b>Branch</b></label>
                    <select id="branch" class="form-select" name="branch">
                        <option selected>Computer Science and Engineering(CSE)</option>
                        <option value="1">Electronics & Communication(EC)</option>
                        <option value="2">Electrical and Electronics Engineering(EEE)</option>
                        <option value="3">Mechanical Engineering(ME)</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label"><i class="bi bi-calendar-event-fill"></i> <b>Year</b></label>
                    <input type="number" min="1" max="4" class="form-control" id="year" name="year">
                </div>
                <div class="mb-3">
                    <label for="sem" class="form-label"><i class="bi bi-book-fill"></i> <b>Semester</b></label>
                    <input type="number" min="1" max="8" class="form-control" id="sem" name="semester">
                </div>
                <div class="mb-3">
                    <label for="collegeid" class="form-label"><i class="bi bi-book-fill"></i> <b>College ID</b></label>
                    <input type="varchar" maxlength="8" class="form-control" id="collegeid" name="collegeid">
                </div>
                <div class="mb-3">
                    <label for="universityrollno" class="form-label"><i class="bi bi-book-fill"></i> <b>University Rollno</b></label>
                    <input type="varchar" maxlength="13" class="form-control" id="universityrollno" name="rollno">
                </div>
            </div> <br>

            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <div class="d-grid gap-2">
                <button type="submit" name="submit" class="btn btn-primary"><i class="bi bi-check2-circle"></i> Register</button>
            </div>
        </form>
    </div>
    <script>
        function fun() {
          var x=document.getElementById("name").value;
          var a=document.getElementById("fname").value;
          var mn=document.getElementById("mname").value;
          var y=document.getElementById("email").value;
          var z=document.getElementById("phone").value;
          var em=document.getElementById("aadharcard").value;
          var ci=document.getElementById("collegeid").value;
          var crn=document.getElementById("universityrollno").value;
          
          
          
          if(x=="")
          {
            alert("name field should not be empty");
            return false;
          }
          else if(a=="")
          {
              alert("father name should not be empty");
              return false;
          }
          else if(mn=="")
          {
              alert("mother name should not be empty");
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
          else if(em=="")
          {
            alert("aadhar should not be empty");
            return false;
          }
          else if(ci=="")
          {
            alert("college id should not be empty");
            return false;
          }
          else if(crn=="")
          {
            alert("university roll number should not be empty");
            return false;
          }
          else{
            return true;
          }

        }
      </script>
</body>

</html>