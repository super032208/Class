<!-- posts to the parent file which included it -->
<?php
    include_once "./functions/dbData.php";
?>
<form action="#" method="get">
    <fieldset>
        <legend>Form 1</legend>

        <label>Ascending</label>
        <!-- Note: the radio button name attributes are the same -->
        <input type="radio" name="corp" value="asc" />
        <label>Descending</label>
        <input type="radio" name="incorp_it" value="desc" />

        <label>Data 2</label>
        <!-- the selected option value is assigned
        to the attribute name of <select> -->
        <select name="datatwo">
            <option value="email">Email</option>
            <option value="phone">Phone</option>
        </select>

        <label>Dynamic Select</label>
        <select name="datathree">
        <?php
        // Get dynamic list of values from the function in dbData.php
        $groceries = getGroceries();
        // Populate the value and text of the <option> tag
        foreach($groceries as $grocery) {
        ?>
            <option value="<?php echo $grocery ?>"><?php echo $grocery ?></option>
        <?php
        } // end foreach
        ?>
        </select>
        <input type="hidden" name="action" value="sort" />
        <input type="submit" value="Submit1" />
    </fieldset>
</form>
