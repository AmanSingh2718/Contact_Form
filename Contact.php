<!DOCTYPE html>
<html>
  <head>
    <title>Thank you for Registration</title>
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
  </head>
  <style>
 body {
  background-image: url(Contact.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  margin-top: 5px;
}
  #thank-you-box {
    background-color: #fff; 
    border: 1px solid #ccc; 
    padding: 20px;
    max-width: 600px;
    margin: 50px auto; 
  }
  #thank-you-box h1 {
    font-size: 36px; 
    margin-bottom: 20px; 
  }
  #thank-you-box p {
    font-size: 24px; 
    margin-bottom: 10px; 
  }
      footer {
  background-color: rgb(255, 252, 252);
  width: 100%;
  position: absolute;
  bottom: 0;
}
.container {
  padding: 11px;
}
.social-icons {
  list-style: none;
  display: flex;
  justify-content: flex-end;
  margin: 0;
  padding: 0;
}
.social-icons li {
  margin-left: 10px;
}
.social-icons li:first-child {
  margin-left: 0;
}
.social-icons a {
  color: #141212;
  font-size: 30px;
  transition: all 0.3s ease;
}
.social-icons a:hover {
  color: #007bff;
}
button.btn.btn-lg.btn-success.btn-block {
  background-color: #d9dee3;
  border: none;
}
input {
  background-color: #ffffff;
}
.white-input {
  background-color: #ffffff;
}
</style>
<body>
    <button style="width: 100px; height: 50px; position: absolute; top: 10px; left: 10px;" onclick="redirectToSample()">HOME</button>

    <script>
      function redirectToSample() {
        window.location.href = "index1.html";
      }
    </script><center>
  <div id="thank-you-box">
    <h1>Register Done!</h1>
    <p>Name: <?php echo $_POST['UserName']; ?></p>
    <p>Email: <?php echo $_POST['email']; ?></p>
  </div></center>
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-md-6">			
                  <h4>Developed by Aman Singh</h4>
              </div>
              <div class="col-md-6">
                  <ul class="social-icons">
                      <h4>Connect with Us</h4>
                      <li><a href="https://github.com/AmanSingh2718" class="github"><i class="fab fa-github"></i></a></li>
                      <li><a href="https://www.linkedin.com/in/aman-singh-4120b7275/" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                  </ul>
              </div>
          </div>
      </div>
  </footer>
  <script src="https://unpkg.com/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
      AOS.init();
  </script>
</body>
</html>
