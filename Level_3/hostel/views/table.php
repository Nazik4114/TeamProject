<?php if(count($flats)): ?>
    <?php krsort($flats); ?>
    <table cellpadding="1" cellspacing="1" border="1">
        <?php foreach($flats as $floor => $rooms): ?>
            <tr>
                <td class="floorNumber"><?= $floor ?></td>
                <?php foreach($rooms as $room_number => $options): ?>
                    <td>
                        <?php $booked_css = ('booked' == $options['status'])? 'booked':'' ?>
                        <div class="cell <?= $booked_css ?>">
                            <?= $options['price'] ?>
                        </div>
                    </td>
                <?php endforeach ?>
            </tr>
        <?php endforeach ?>
    </table>
<?php else: ?>
    <p>No data found!</p>
<?php endif ?>