<style>
    #SecondPage, #ThirdPage{
        Display: none;
    }
    #description {
        width: 25em;
    }
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
        -webkit-appearance: none; 
        margin: 0; 
    }
    input[type=number] {
        -moz-appearance:textfield; /* Firefox */
    }
</style>

<section id="registerform">
    <!-- First form page -->
    <form action="../Projeto/upload/upload.php" method="post" enctype="multipart/form-data">
        <div id="FirstPage">
        <h1>Register your house</h1>
        <label><br>Title</label>
            <input type="text" name="title" maxlength="64" placeholder="Small title for your house..." required>
        <label><br>Daily Price</label>
            <input  id="daily_price" type="number" step="0.01" name="price" maxlength="5" required>
        <label><br>City</label>
            <input type="text" name="city" required>
        <label><br>State / Region</label>
            <input type="text" name="region" required>
        <label><br>Country</label> 
            <input type="text" name="country" required>
        <label><br>Street</label>
            <input type="text" name="street" required>
        <label><br>Door</label>
            <input type="text" name="door" required>
        <label><br>Floor</label>
            <input type="text" name="floor">
        <label><br>Postal Code</label>
            <input type="text" pattern = "\d{4}-\d{3}" name="postalcode" required>
        <br><input type="button" value="Continue" onclick="open_second_page()">

        </div>
        <!-- First form page -->
        <!-- Second form page -->
        <div id="SecondPage">
            <label><br>Description</label>
            <textarea name="description" id="description" maxlength="256" clos="50" rows="10" placeholder="Small description of your house..."></textarea>
            <label><br>Number of beds</label>
            <input type="number" name="bed_numb" min="1">
            <label>Upload image</label>
            <input type="text" name="image_title">
            <input type="file" name="image"  accept="image/jpg, image/jpeg" multiple required>
            <br><input type="button" value="Back" onclick="back_first_page()">
            <input type="button" value="Continue" class="continue"  onclick="open_third_page()">
        </div>
        <!-- Second form page -->
        <!-- Third form page -->
        <div id="ThirdPage">
        <label class="switch">Pet Friendly
            <input type="checkbox" name="Pet">
            <span class="slider round"></span>
        </label>
        <label class="switch">WIFI
            <input type="checkbox" name="Pet">
            <span class="slider round"></span>
        </label>
        <label class="switch">Washing Machine
            <input type="checkbox" name="Pet">
            <span class="slider round"></span>
        </label>
        <label class="switch">Pet Friendly
            <input type="checkbox" name="Pet">
            <span class="slider round"></span>
        </label>
        <br><input type="button" value="Back" onclick="back_second_page()"><br>
        <br><input type="submit" value="Register">
        </div>
    </form>
    <!-- Third form page -->
    </form>
</section>

<script>
    function open_second_page() {
        document.getElementById("FirstPage").style.display = "none";
        document.getElementById("SecondPage").style.display = "block";
    }
    function open_third_page() {
        document.getElementById("SecondPage").style.display = "none";
        document.getElementById("ThirdPage").style.display = "block";
    }
    function back_second_page() {
        document.getElementById("SecondPage").style.display = "block";
        document.getElementById("ThirdPage").style.display = "none";
    }
    function back_first_page() {
        document.getElementById("FirstPage").style.display = "block";
        document.getElementById("SecondPage").style.display = "none";
    }
</script>