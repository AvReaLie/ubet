<?php
$admin_fun = new Adminfunction();

if ($_POST) {
    if(isset($_POST['email']) && $_POST['password']){

    $user = $admin_fun->htmlvalidation($_POST['email']);
    $pass = $admin_fun->htmlvalidation($_POST['password']);

    $condition0['email'] = $user;
    $select_pre = $admin_fun->select_assoc("admin", $condition0);

    if($select_pre['email'] == $user && $select_pre['password'] == $pass){
		$_SESSION['log_adm'] = True;

        $_SESSION['adm_name'] = $select_pre['name'];
        $_SESSION['adm_id'] = $select_pre['id'];
        $_SESSION['adm_email'] = $select_pre['email'];
    
        echo "<script type='text/javascript'>document.location='dashboard'</script>";
    } else {
        echo "<script type='text/javascript'>alert('Login Gagal, Email Dan Password Tidak Valid');document.location='$admin_url'</script>";
    }
}
}
?>
