<?php
session_start();
$current_user = $_SESSION['id'];
// echo " hello";
// echo $_FILES['file']['name'];
$connect = mysqli_connect("localhost", "root", "", "ts_data"); //databse connectivity
if (isset($_POST["submit"])) {

    if ($_FILES['file']['name']) {
        $filename = explode(".", $_FILES['file']['name']);
        if ($filename[1] == 'csv') {
            $handle = fopen($_FILES['file']['tmp_name'], "r");
            while ($data = fgetcsv($handle)) //handling csv file 
            {
                $item1 = mysqli_real_escape_string($connect, $data[0]);
                $item2 = mysqli_real_escape_string($connect, $data[1]);
                $item3 = mysqli_real_escape_string($connect, $data[2]);
                $item4 = mysqli_real_escape_string($connect, $data[3]);
                $item5 = mysqli_real_escape_string($connect, $data[4]);
                $item6 = mysqli_real_escape_string($connect, $data[5]);
                $item7 = mysqli_real_escape_string($connect, $data[6]);
                $item8 = mysqli_real_escape_string($connect, $data[7]);
                $item9 = mysqli_real_escape_string($connect, $data[8]);
                $item10 = mysqli_real_escape_string($connect, $data[9]);
                $item11 = mysqli_real_escape_string($connect, $data[10]);
                //insert data from CSV file 
                // $duplicate_sql = "SELECT * FROM ts_excel WHERE uploadby = '$current_user' and applicant_id = '$item1' and department = '$item2'";
                // $isduplicate = mysqli_query($connect, $duplicate_sql);
                // if($isduplicate){
                //    echo "duplicate detected";
                // }else {
                    $query = "INSERT into ts_excel(applicant_id, department, career, sektor,sub_sektor, lokasi, daerah, bangsa, jantina, umur, skill, uploadby)
                    values('$item1','$item2', '$item3','$item4', '$item5','$item6','$item7','$item8', '$item9' , '$item10' , '$item11', '$current_user')";
                   mysqli_query($connect, $query);
                // }
               
            }
            if(fclose($handle)){
                // echo "File sucessfully imported";
                ?>
                <script> 
                 alert("Upload successful");
                // window.location.href = "profile_upload.php";</script>
                <?php
                // $url = "profile_upload.php";
                // header("Location: $url");  
            }else {
                echo "error";
            }
            
        }
    }
}
?>