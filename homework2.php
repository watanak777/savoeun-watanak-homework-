<!DOCTYPE html>
<html lang="km">
<head >
    <meta charset="UTF-8">
    <title>Khmer Date </title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light;" style="background-color: black;">
<div class="text-center" style="color:black">

    <h1 style="text-decoration: underline; font-size: 50px; font-style:inherit;" class="animated-text"> 
  
  កាលបរិច្ឆេទ
</h1>

<style>
.animated-text {
  color: wheat;
  display: inline;
  animation: fadeSlide 2s ease-in-out infinite alternate;
}

@keyframes fadeSlide {
  from {
    opacity: 0;
    transform: translateY(-20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>

</div>
<div class="container mt-5">
    <div class="card shadow-sm">
        <div  class="card-body text-center" style="background-color:teal;">
           
            <h1 style="color:wheat" class=" date" ><img src="dhzxulq-3d125734-4b18-4e66-8f2c-e15cc4e1d021.gif" alt="gif" width="100" style="vertical-align: middle;">
               

            <?php
            $date = date("l");
            
            
switch ($date) {
    case "Monday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃច័ន្ទ";
        break;

    case "Tuesday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃអង្គារ";
        break;

    case "Wednesday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃពុធ";
        break;

    case "Thursday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃព្រហស្បតិ៍";
        break;

    case "Friday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃសុក្រ";
        break;

    case "Saturday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃសៅរ៍";
        break;

    case "Sunday":
        echo "ថ្ងៃនេះគឺ ថ្ងៃអាទិត្យ";
        break;

    default:
        echo "មិនស្គាល់ថ្ងៃ";
            }

           
            ?>

        </div>
    </div>
</div>

        </h1>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>