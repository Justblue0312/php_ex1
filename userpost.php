<!DOCTYPE html>
<html>
<body>
    <h1>detail</h1>
    <table>
        <tr>
            <th>thumb</th>
            <th>desctiption</th>
        </tr>
        <td>
        </td>
        <?php foreach($result as $rows): ?>
        <tr>
            <td>
                <img style="width: 100px;" src="static/<?php echo $rows['image']; ?>">
            </td>
            <td><?php echo $rows['description']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>