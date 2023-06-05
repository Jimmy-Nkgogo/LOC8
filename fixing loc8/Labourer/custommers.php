<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>
<body>
        <!-- =============== Navigation ================ -->
        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="locate"></ion-icon>
                            </span>
                            <span class="title">LOC8</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="landing.php">
                            <span class="icon">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="custommers.php">
                            <span class="icon">
                                <ion-icon name="people-outline"></ion-icon>
                            </span>
                            <span class="title">Customers</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="#">
                            <span class="icon">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </span>
                            <span class="title">Messages</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="help.php">
                            <span class="icon">
                                <ion-icon name="help-outline"></ion-icon>
                            </span>
                            <span class="title">Help</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="update.php">
                            <span class="icon">
                                <ion-icon name="settings-outline"></ion-icon>
                            </span>
                            <span class="title">Settings</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="switch.php">
                            <span class="icon">
                                <ion-icon name="laptop"></ion-icon>
                            </span>
                            <span class="title">Switch Role</span>
                        </a>
                    </li>
    
                    <li>
                        <a href="../Chatapp/login.php">
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
    
            <!-- ========================= Main ==================== -->
            <div class="main">
                <div class="topbar">
                    <div class="toggle">
                        <ion-icon name="menu-outline"></ion-icon>
                    </div>
    
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>
                    </div>
    
                    <div class="user">
                        <img src="assets/imgs/customer01.jpg" alt="">
                    </div>
                </div>
    
              
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Customers</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                            <td>
                                <button class="a">Accept</button>
                                <button class="b">Decline</button>
                                <button class="start-job-button" style="display: none; background-color: purple; color: white;">Start Job</button>
                                <div class="counter" style="display: none;">
                                    <span id="minutes">0</span> minutes
                                    <button class="end-job-button" style="background-color: red; color: white;">End Job</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                            <td>
                                <button class="a">Accept</button>
                                <button class="b">Decline</button>
                                <button class="start-job-button" style="display: none; background-color: purple; color: white;">Start Job</button>
                                <div class="counter" style="display: none;">
                                    <span id="minutes">0</span> minutes
                                    <button class="end-job-button" style="background-color: red; color: white;">End Job</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                            <td>
                                <button class="a">Accept</button>
                                <button class="b">Decline</button>
                                <button class="start-job-button" style="display: none; background-color: purple; color: white;">Start Job</button>
                                <div class="counter" style="display: none;">
                                    <span id="minutes">0</span> minutes
                                    <button class="end-job-button" style="background-color: red; color: white;">End Job</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                            <td>
                                <button class="a">Accept</button>
                                <button class="b">Decline</button>
                                <button class="start-job-button" style="display: none; background-color: purple; color: white;">Start Job</button>
                                <div class="counter" style="display: none;">
                                    <span id="minutes">0</span> minutes
                                    <button class="end-job-button" style="background-color: red; color: white;">End Job</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                            <td>
                                <button class="a">Accept</button>
                                <button class="b">Decline</button>
                                <button class="start-job-button" style="display: none; background-color: purple; color: white;">Start Job</button>
                                <div class="counter" style="display: none;">
                                    <span id="minutes">0</span> minutes
                                    <button class="end-job-button" style="background-color: red; color: white;">End Job</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                            <td>
                                <button class="a">Accept</button>
                                <button class="b">Decline</button>
                                <button class="start-job-button" style="display: none; background-color: purple; color: white;">Start Job</button>
                                <div class="counter" style="display: none;">
                                    <span id="minutes">0</span> minutes
                                    <button class="end-job-button" style="background-color: red; color: white;">End Job</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                            <td>
                                <button class="a">Accept</button>
                                <button class="b">Decline</button>
                                <button class="start-job-button" style="display: none; background-color: purple; color: white;">Start Job</button>
                                <div class="counter" style="display: none;">
                                    <span id="minutes">0</span> minutes
                                    <button class="end-job-button" style="background-color: red; color: white;">End Job</button>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                            <td>
                                <button class="a">Accept</button>
                                <button class="b">Decline</button>
                                <button class="start-job-button" style="display: none; background-color: purple; color: white;">Start Job</button>
                                <div class="counter" style="display: none;">
                                    <span id="minutes">0</span> minutes
                                    <button class="end-job-button" style="background-color: red; color: white;">End Job</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                            <td>
                                <button class="a">Accept</button>
                            <button class="b">Decline</button>
                            <button class="start-job-button" style="display: none; background-color: purple; color: white;">Start Job</button>
                            <div class="counter" style="display: none;">
                                <span id="minutes">0</span> minutes
                                <button class="end-job-button" style="background-color: red; color: white;">End Job</button>
                            </div>
                            </td>
                        </tr>
                    </table>
                </div>
                  
    
    
    
    
    
    
    
    
    
    
    
    
               <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ======= Charts JS ====== -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="assets/js/chartsJS.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
   // Get all the accept buttons
var acceptButtons = document.getElementsByClassName("a");

// Add event listeners to each accept button
for (var i = 0; i < acceptButtons.length; i++) {
  acceptButtons[i].addEventListener("click", function() {
    var parentRow = this.parentNode.parentNode;
    var declineButton = parentRow.querySelector(".b");
    var startJobButton = parentRow.querySelector(".start-job-button");

    declineButton.style.display = "none";
    startJobButton.style.display = "none";
    parentRow.querySelector(".counter").style.display = "block";
  });
}

// Get all the decline buttons
var declineButtons = document.getElementsByClassName("b");

// Add event listeners to each decline button
for (var i = 0; i < declineButtons.length; i++) {
  declineButtons[i].addEventListener("click", function() {
    var parentRow = this.parentNode.parentNode;
    parentRow.parentNode.removeChild(parentRow);
  });
}

// Get all the start job buttons
var startJobButtons = document.getElementsByClassName("start-job-button");

// Add event listeners to each start job button
for (var i = 0; i < startJobButtons.length; i++) {
  startJobButtons[i].addEventListener("click", function() {
    var parentRow = this.parentNode.parentNode;
    var counter = parentRow.querySelector(".counter");
    var minutesSpan = parentRow.querySelector("#minutes");
    var secondsSpan = parentRow.querySelector("#seconds");
    var endJobButton = parentRow.querySelector(".end-job-button");

    counter.style.display = "none";
    this.style.display = "none";
    endJobButton.style.display = "block";
    var minutes = 0;
    var seconds = 0;
    var timer = setInterval(function() {
      seconds++;
      if (seconds === 60) {
        minutes++;
        seconds = 0;
      }
      minutesSpan.textContent = minutes;
      secondsSpan.textContent = seconds;
    }, 1000);

    endJobButton.addEventListener("click", function() {
      clearInterval(timer);
      minutesSpan.textContent = minutes;
      secondsSpan.textContent = seconds;
      endJobButton.style.display = "none";
    });
  });
}



    </script>

    
    </body>
</body>
</html>