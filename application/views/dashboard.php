
        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="./css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="normalize.css">
    <title>Dashboard</title>
    <style>
        .main{
            border-radius: 10px;
            border-width: 5px;
            border-style: solid;
            padding: 20px;
            margin: 7% 20% 0 20%;
        }
        body{
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background-color: #222629;
    color: white;
}

.title{
    display: grid;
    grid-template-rows: 50px;
    grid-template-columns: 150px 1fr 150px;
    align-items: center;
    padding: 20px 0;
    text-align: center;
}
/* title grid */
.logo{
    width: 150px;
    height: auto;
}
.heading{
    font-size: 60px;
}


/*  */
.main{
    display: grid;
    align-items: center;
    font-size: 20px;
    padding-top: 80px;
}

.main p{
    margin: 0;
    font-size: 25px;
    font-family: monospace;
    letter-spacing: 3px;
    line-height: 3;
}


/* navigation bar */
ul{
    list-style-type: none;
    margin: 20px 0 0 0;
    padding: 0;
    display: flex;
    overflow: hidden;
    justify-content: space-evenly;
}


li a,.dropbtn{
    display: inline-block;
    text-decoration: none;
    color: white;
    height: 40px;
    display: flex;
    align-items: center;
    padding: 5px 50px;
}

li a:hover, .dropdown:hover {
    background-color: #61892f
}

li.dropdown {
    display: inline-block;
}

.dropdown-content{
    display: none;
    position: absolute;
    background-color:  #474b4f;
}

.dropdown-content a {
    color: white;
    text-decoration: none;
    display: flex;
    align-items: center;

}

.dropdown:hover .dropdown-content {
    display: block;
}

    </style>
</head>
<body>
        
    <div class="title">
        <a href="dashboard.php"><img src="./images/logo1.png" alt="" class="logo"></a>
        <span class="heading">Dashboard</span>
        <a href="<?php echo base_url()."index.php/Main/logout"; ?>" style="color: white"><span class="fa fa-sign-out fa-2x">Logout</span></a>
    </div>

    <div class="nav">
        <ul>
            <li class="dropdown" onclick="toggleDisplay('1')">
                <a href="" class="dropbtn">Classes &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="1">
                    <a href="<?php echo base_url()."index.php/Main/add_class"?>">Add Class</a>
                    <a href="<?php echo base_url()."index.php/Main/manage_class"?>">Manage Class</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('2')">
                <a href="#" class="dropbtn">Students &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="2">
                    <a href="<?php echo base_url()."index.php/Main/add_stud"; ?>">Add Students</a>
                    <a href="<?php echo base_url()."index.php/Main/manage"; ?>">Manage Students</a>
                </div>
            </li>
            <li class="dropdown" onclick="toggleDisplay('3')">
                <a href="#" class="dropbtn">Results &nbsp
                    <span class="fa fa-angle-down"></span>
                </a>
                <div class="dropdown-content" id="3">
                    <a href="<?php echo base_url()."index.php/Main/add_result"; ?>">Add Results</a>
                    <a href="<?php echo base_url()."index.php/Main/manage_results";?>">Manage Results</a>
                </div>
            </li>
        </ul>
    </div>

    <div class="main">
      
    </div>

    <div class="footer">
        <!-- <span>Designed & Coded By Jibin Thomas</span> -->
    </div>
</body>
</html>
