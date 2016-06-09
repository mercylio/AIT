<?php
    if (isset($_POST['Form'])) {
        import_request_variables("p", "z");
        $missingfields = array();
        $required = array("FName"=>"First Name", "LName"=>"Last Name");

        while (list($var, $val) = each($required)) {
            if (isset($zForm[$var]) && $zForm[$var] != '') {
                // check this value further here
            } else {
                $missingfields[$var] = $val;
            }
        }

        if (count($missingfields)) {
            print "You missed out one or more fields:<br />";

            while(list($var, $val) = each($missingfields)) {
                print $val . "<br />";
            }
        } else {
            print "Form passed!<br />";
            var_dump($zForm['Languages']);
            exit;
        }
    }
?>
<form method="post" action="array.php">
First Name: <input type="text" name="Form[FName]" /> (required)<br />
Last Name: <input type="text" name="Form[LName]" /> (required) <br />
Age: <input type="text" name="Form[Age]" /><br /><br />
Languages known:<br />
<input type="checkbox" name="Form[Languages][]" value="PHP" checked="checked"> PHP</input>
para><input type="checkbox" name="Form[Languages][]" value="CPP"> C++</input>
<input type="checkbox" name="Form[Languages][]" value="Delphi"> Delphi</input>
<input type="checkbox" name="Form[Languages][]" value="Java"> Java</input>
<input type="submit" />
</form>