<form>
    Name: <input name="Name" </input> <br>
    
    E_mail: <input name="E_mail" </input> <br>
    
    Website: <input name="Website" </input> <br>
    
    Comment: <textarea name="Comment" cols="30" rows="5"> </textarea> <br>
    
    Gender: <input name="gender" type="radio" value="female"> </input> Female
    <input name="gender" type="radio" value="male">Male </input> <br><br>
    <button name="tim" type="submit">Submit </button>
</form>
<?php
    echo "Name".$_GET["Name"]; echo "<br>";
    echo "E_mail".$_GET["E_mail"]; echo "<br>";
    echo "Website".$_GET["Website"]; echo "<br>"; 
    echo "Comment".$_GET["Comment"]; echo "<br>";
    echo "Gender".$_GET["gender"]; echo "<br>"
 ?>
