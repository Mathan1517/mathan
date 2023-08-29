<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <div class="form-container">
        <form action="bb.php"  method="POST">
           <div class="input-box">
            <span>Location</span>
            <input type="search" name="loc" id="" placeholder="Search Places">
           </div>
           <div class="input-box">
            <span>Pick-Up Date</span>
            <input type="date" name="pdate" id="">
           </div>
           <div class="input-box">
            <span>Return Date</span>
            <input type="date" name="rdate" id="">
           </div>
           <input type="submit" name="submit" id="" class="btn">
        </form>
     </div>

     
     <script src="https://unpkg.com/scrollreveal"></script>
      

     <script src="main.js"></script>
</body>
</html>