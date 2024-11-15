<?php 

function adminLogin()
{
    session_start();
    if(!(isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']==true)){
        header("location: index.php");
    }
}

function redirect($url)
{
    echo "<script>
    window.location.href='$url';
    </script>";
}

function alert($type, $msg)
{
    $bs_class = ($type == "sucess") ? "alert-sucess" : "alert-danger";
	 echo <<<alert
                <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                    <strong class="me-3">$msg</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            alert;
}

?>