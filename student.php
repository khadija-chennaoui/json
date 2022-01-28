<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Page-3</title>
</head>
<body>
  <div class=" container-fluid bg-light" > 
    <div class="row flex-nowrap">
              <?php 
                  include('sidebar.php');
                ?>
          </div>
        <div class="col-9 container" >
                  <?php 
                    include('header.php');
                  ?>
        <div class="row">  
                    <div class="container">                   
                    <div class="d-flex justify-content-between bd-highlight mb-3 border-2 border-highlight border-bottom align-items-center" >
                            <h3 class="ms-4">Students List</h3>
                            <div class="p-2 bd-highlight d-flex align-items-center"> 
                                <i class="fal fa-sort me-3 fs-5 text-info" ></i>
                                <button type="button" class="btn btn-info btn-sm text-white">ADD NEW STUDENT</button>
                            </div>
                    </div >
      <div class="table-responsive px-4">
        <table class="table table-borderless align-middle"style="border-collapse:separate;border-spacing:0 15px;">
           <thead>
                        <tr style="color:#ACACAC;font-size:12px;">
                            <td>  </td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Enroll Number</td>
                            <td class="text-nowrap">Date of admission</td>
                            <td>  </td>
                            <td>  </td>
                        </tr>
            </thead>
            <tbody>
                <?php
                    for($i=0;$i<7;$i++){  
                        $Data=file_get_contents('student.json');
                        $p = json_decode($Data,true);           
                        foreach($p as $p){
                            echo' <tr class="bg-white">
                                <td> <img src="https://picsum.photos/'.$p['image'].'" class="rounded-circle"  alt="..."></td>
                                <td class="text-nowrap">'.$p['Name'].'</td>
                                <td class="text-nowrap">'.$p['Email'].'</td>
                                <td class="text-nowrap">'.$p['Phone'].'</td>
                                <td class="text-nowrap">'.$p['Enroll Number'].'</td>
                                <td class="text-nowrap">'.$p['Date of admission'].'</td>
                                <td><i class="fal fa-pen fs-5"style="color:#00C1FE;"></i></td>
                                <td><i class="far fa-trash fs-5" style="color:#00C1FE;"></i></td> 
                            </tr>';
                        }
                    }
                ?>
              
            </tbody>  
        </table>
            </div>
        </div>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>