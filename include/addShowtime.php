
<div class="bottom">
            <div class="selected">
                <div class="hall">
                    <h3>Vega Hall</h3>
                </div>
                <div class='' name='showBlock'>
                    <div class='show'>
                        <?php echo $showTimeVega ?>
                    </div>
                    <button type="button" class='addShowBtn'>Add More</button>
                </div>
                <form class='showForm hide' action='CRUD/Shows/ADD.php' method="post">
                    <label for="date"><b>Date:</b></label>
                    <input type="date" name="date" id="date1">
                    <p><b>Time:</b></p>
                    <div class="time">
                        <div>
                            <label><input type="checkbox" name="time[]" value="01:00:00" > 1.00am</label><br>
                            <label><input type="checkbox" name="time[]" value="09:00:00"> 9.00am</label><br>
                            <label><input type="checkbox" name="time[]" value="12:00:00"> 12.00pm</label><br>
                        </div>
                        <div>
                            <label><input type="checkbox" name="time[]" value="18:00:00"> 6.00pm</label><br>
                            <label><input type="checkbox" name="time[]" value="21:00:00"> 9.00pm</label><br>
                            <label><input type="checkbox" name="time[]" value="15:00:00"> 3.00pm</label><br>
                        </div>
                    </div>
                    <label for="price"><b>Price:</b></label>
                    <input type="number" name="price" id="price1" required>
                    <input type="hidden" name="room" value="H-1">
                    <input type="hidden" name="id" value="<?php echo  $movieID?>">
                    <div class="submit"><button type='submit' onclick="validateForm(1)">Save</button></div>
                </form>
                
                
            </div>
            <div class="selected">
                <div class="hall">
                    <h3>Serius Hall</h3>
                </div>
                <div class='' name='showBlock'>
                    <div class='show'>
                        <?php echo $showTimeSerius ?>
                    </div>
                    <button type="button" class='addShowBtn'>Add More</button>
                </div>
                <form class='showForm hide' action='CRUD/Shows/ADD.php' method="post">
                    <label for="date"><b>Date:</b></label>
                    <input type="date" name="date" id="date2">
                    <p><b>Time:</b></p>
                    <div class="time">
                        <div>
                            <label><input type="checkbox" name="time[]" value="01:00:00"> 1.00am</label><br>
                            <label><input type="checkbox" name="time[]" value="09:00:00"> 9.00am</label><br>
                            <label><input type="checkbox" name="time[]" value="12:00:00"> 12.00pm</label><br>
                        </div>
                        <div>
                            <label><input type="checkbox" name="time[]" value="18:00:00"> 6.00pm</label><br>
                            <label><input type="checkbox" name="time[]" value="21:00:00"> 9.00pm</label><br>
                            <label><input type="checkbox" name="time[]" value="15:00:00"> 3.00pm</label><br>
                        </div>
                    </div>
                    <label for="price"><b>Price:</b></label>
                    <input type="number" name="price" id="price2" required>
                    <input type="hidden" name="room" value="H-2">
                    <input type="hidden" name="id" value="<?php echo  $movieID?>">
                    <div class="submit"><button type='submit' onclick="validateForm(2)">Save</button></div>
                </form>
            </div>
            <div class="selected">
                <div class="hall">
                    <h3>Polaris Hall</h3>
                </div>
                <div class='' name='showBlock'>
                    <div class='show'>
                        <?php echo $showTimePolaris ?>
                    </div>
                    <button type="button" class='addShowBtn'>Add More</button>
                </div>
                <form class='showForm hide' action='CRUD/Shows/ADD.php' method="post">
                    <label for="date"><b>Date:</b></label>
                    <input type="date" name="date" id="date3" required>
                    <p><b>Time:</b></p>
                    <div class="time">
                        <div>
                            <label><input type="checkbox" name="time[]" value="01:00:00"> 1.00am</label><br>
                            <label><input type="checkbox" name="time[]" value="09:00:00"> 9.00am</label><br>
                            <label><input type="checkbox" name="time[]" value="12:00:00"> 12.00pm</label><br>
                        </div>
                        <div>
                            <label><input type="checkbox" name="time[]" value="18:00:00"> 6.00pm</label><br>
                            <label><input type="checkbox" name="time[]" value="21:00:00"> 9.00pm</label><br>
                            <label><input type="checkbox" name="time[]" value="15:00:00"> 3.00pm</label><br>
                        </div>
                    </div>
                    <label for="price"><b>Price:</b></label>
                    <input type="number" name="price" id="price3" required>
                    <input type="hidden" name="room" value="H-3">
                    <input type="hidden" name="id" value="<?php echo  $movieID?>">
                    <div class="submit"><button type='submit' onclick="validateForm(3)">Save</button></div>
                </form>
            </div>
        </div>