<html>
<h1> doc </h1>

           <?php

       if (isset($_GET['uploadsucces']))
     {
          if (isset($_GET['location'])) {
          $location = $_GET['location'];

}
        else{

          $location = null;
          }

          $arr = array_diff(scandir('uploads'),["." , ".."]);
          foreach ($arr as $a)
          {
              $arr2 = scandir('uploads/'.$a);
              $arr2 = array_diff($arr2,["." , ".."]);
              if (count($arr2)==0) continue;
              $folder = $a;
              if ($location != null && $folder != $location) continue;
              foreach ($arr2 as $f) {

                $file = "uploads/$folder/$f";
                $fileName = explode('.', $f);
                $fileActualExt = strtolower(end($fileName));

              
      echo "<br>";



                         //print_r($fileActualExt);
                      if ($fileActualExt == "doc" || $fileActualExt == "docx") {
                      echo "File: <a href=\"uploads/$folder/$f\">$f</a>\n<br>";


      }
        }
          }
            }
      ?>
