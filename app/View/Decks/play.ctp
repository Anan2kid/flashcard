<?php echo $deck['Deck']['name'] ?>
<?php foreach($deck['Card'] as $card): ?>
    <tr>
        <td>
            <?php echo $card['front']; ?>
        </td>
        <td>
            <?php echo $card['back']; ?>
        </td>

    </tr>
<?php endforeach; ?>