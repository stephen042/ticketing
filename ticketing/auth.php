<?php
require_once 'dbcon.php';
?>
<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$password = $regNo = $firstname = $lastname = '' ;
$passwordErr = $regNoErr = $firstnameErr = $lastnameErr = '' ;
$error = true;



// @DESC auth for sign in
if (isset($_POST['sign_in'])) {

    if (!empty($_POST['Reg_Number'])) {
        $regNo = test_input(strtoupper($_POST['Reg_Number']));

        if (!preg_match("~[0-9A-Za-z-/]+~", $regNo)) {
            $regNoErr = "Only letters and slashes are allowed";
        }
    } 


    if (!empty($_POST['password'])) {
        $password = sha1(test_input($_POST['password'])) ;

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        // $specialChars = preg_match('@[^\w]@', $password);

        if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
             $formadata['password'] = '<small> Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</small>';
        }

    }
}

// @DESC auth for sign up

if (isset($_POST['signup'])) {
    
    if (!empty($_POST['firstname'])) { 
        $firstname = test_input($_POST['firstname']);
        

        if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
            $firstname = "Only letters and white space allowed";
          }
    }

    if (!empty($_POST['lastname'])) { 
        $lastname = test_input($_POST['lastname']);
        $error = false;

        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
            $lastnameErr = "Only letters and white space allowed";
          }
    } 

    if (!empty($_POST['Reg_Number'])) {
        $regNo = test_input(strtoupper($_POST['Reg_Number']));
        $error = false;

        if (!preg_match("~[0-9A-Za-z-/]+~", $regNo)) {
            $regNoErr = "Only letters and slashes are allowed";
        }
    } 

    
    if (!empty($_POST['password'])) {
        $password = sha1(test_input($_POST['password']));
        $error = false;

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        // $specialChars = preg_match('@[^\w]@', $password);

        if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
             $passwordErr = '<small> Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.</small>';
        }

    }


    // insection of variable
    if ($error == false) {
        $stmt = $conn->prepare("INSERT INTO usertable (firstname, lastname, reg_number, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstnameinsect, $lastnameinsect, $regNoinsect, $passwordinsect);
    
        // set parameters and execute
        $firstnameinsect = $firstname;
        $lastnameinsect = $lastname;
        $regNoinsect = $regNo;
        $passwordinsect = $password;
        $stmt->execute();
    }

}

