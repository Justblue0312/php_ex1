<!DOCTYPE html>
<html>
<body>
    <h1>ListPost</h1>
    <table>
        <tr>
            <th>id</th>
            <th>thumb</th>
            <th>title</th>
        </tr>
        <td>
        </td>
        <?php foreach($result as $rows): ?>
        <tr >
            <td>#</td>
            <td>
                <img style="width: 100px;" src="static/<?php echo $rows['image']; ?>" >
            </td>
            <td style="text-align: center;">
                <a href="index.php?action=userpost&id=<?php echo $rows['id'] ?>"><?php echo $rows['title'] ?></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
        <form name="myform">
        <select name="select" onchange="formControler()">
        <option>Chọn</option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="50">50</option>
        <option value="100">All</option>
        </select>
        </form>
        <div class="pagination">
            <a href="index.php?action=user&page=<?php echo$page-1?>">&laquo;</a>

        <?php
            for ($i=1; $i <= $page; $i++) { 

        ?>
                <a href="index.php?action=user&page=<?php echo$i?>"><?php echo $i?></a> 
        <?php        
            }
        ?>
        
            <a href="index.php?action=user&page=<?php echo$page?>">&raquo;</a>
        </div>
</body>
</html>