<!DOCTYPE html>

<?php session_start(); ?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>

 <!-- Wrapper for content of the Submit page -->
 <div class="wrap-submit">
        <!-- Apply indent styling -->
        <div id="indent"></div>

        <!-- Content-specific definition -->
        <div class="submit-content">
            <h1>Write a Review</h1>

            <div class="submit-park">

                <!-- Submit attributes -->
                <form name="submitPark" enctype="multipart/form-data" action="/action_page.php" method="post">

                    <!-- Step 1) Enter the park to be submitted -->
                    <p>Name of Park:</p>

                    <!-- HTML validation - required specified for name field-->
                    <!-- Max length of park name input is set to 50 characters -->
                    <input required type="text" placeholder="Type a Park name" name="sname" maxlength="50">
                    <br>
                    <span style="font-size: 0.8em">
                        Enter the name of the park. E.g. Bruce Peninsula National Park
                    </span>
                    <br><br>
                    Rating:
                    <br>
                    <select required name="rating">
                        <option value="5">5 star</option>
                        <option value="4">4 star</option>
                        <option value="3">3 star</option>
                        <option value="2">2 star</option>
                        <option value="1">1 star</option>
                    </select>
                    <br><br>
                    Review:
                    <br>
                    <textarea required rows="3" cols="50" placeholder="Enter your review of the park" name="review"  maxlength="300"></textarea>
                    
                    <br><br>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </form>

                <br>
            </div>
        </div>

        <br><br><br><br>
    </div>

<?php include('footer.php'); ?>
