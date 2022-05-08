<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="booking">Виберіть кімнату</label>
    <select name="booking" id="booking">
        <?php foreach ($flats as $floor => $rooms): ?>
            <optgroup label="поверх <?= $floor ?>">
                <?php foreach ($rooms as $room_name => $opt): ?>
                    <?php $disabled = ('booked' == $opt['status'])? "disabled":"free"; ?>
                    <option value="<?= "{$floor}|{$room_name}" ?>" class="<?= $disabled ?>" >
                        <?php echo "Кімната {$room_name} (Ціна: {$opt['price']})" ?>
                    </option>
                <?php endforeach ?>
            </optgroup>
        <?php endforeach  ?>
    </select>
    <br><br>
    <input type="submit" name="go" value="Зарезервувати">
    <input type="submit" name="go_out" value="Звільнити номер">
</form>