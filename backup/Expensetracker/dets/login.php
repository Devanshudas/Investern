<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbluser where  Email='$email' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['detsuid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    $msg="Invalid Details.";
    }
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Investern - Login </title>
</head>   
</style>
<body style="background-color:#ffffff">
      <header class="text-black-600 body-font" style="background-color:#ffffff">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a href="index.php" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="img\logo.png" alt="investern logo" width="250" height="600">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
          </a>
          <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
            <a href="index.php" class="mr-5 hover:text-gray-900">Home</a>
            <a href="about.php" class="mr-5 hover:text-gray-900">About Us</a>
          </nav>
        </div>
      </header>
<div class="flex items-center min-h-screen bg-white dark:bg-gray-900">
  <div class="container mx-auto">
      <div class="max-w-md mx-auto my-10">
          <div class="text-center">
              <h1 class="my-3 text-3xl font-semibold text-black-700 dark:text-black-200">Sign in</h1>
              <p class="text-black-500 dark:text-black-400">Sign in to access your account</p>
          </div>
          <div class="m-7">
              <form role="form" action="" method="post" id="" name="login">
              <p style="font-size:16px; color:red"> <?php if($msg){
    echo $msg;
  }  ?>       </p>
                  <div class="mb-6">
                      <label for="email" class="block mb-2 text-sm text-black-600 dark:text-gray-400">Email Address</label>
                      <input type="email" name="email" id="email" placeholder="you@company.com" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                  </div>
                  <div class="mb-6">
                      <div class="flex justify-between mb-2">
                          <label for="password" class="text-sm text-black-600 dark:text-black-400">Password</label>
                          <a href="forgot-password.php" class="text-sm text-gray-400 focus:outline-none focus:text-blue-500 hover:text-blue-500 dark:hover:text-blue-300">Forgot password?</a>
                      </div>
                      <input type="password" name="password" id="password" placeholder="Your Password" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                  </div>
                  <div class="mb-6">
                  <button type="submit" value="login" name="login" class="btn btn-primary w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none" style="background-color:#339fdd">Sign in</button>
                  </div>
                  <p class="text-sm text-center text-black-400">Don&#x27;t have an account yet? <a href="register.php" class="text-blue-400 focus:outline-none focus:underline focus:text-blue-500 dark:focus:border-blue-800" >Sign up</a>.</p>
              </form>
          </div>
      </div>
  </div>
</div>
<footer class="text-black-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
      <span class="ml-3 text-xl">Investern</span>
    </a>
    <p class="text-sm text-black-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2021 Investern —
      <a href="https://twitter.com/investern.in" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@investern.in</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>>