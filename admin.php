
<!DOCTYPE html>
<html>
<body>
<?php
    $i=0;
?>

    <h1>Manage</h1>
    <div style="margin-bottom: 5px;"><a href="index.php?action=add">new</a></div>
    <table>
        <td></td>
        <tr>
            <th>id</th>
            <th>thumb</th>
            <th>title</th>
            <th>status</th>
            <th>action</th>
        </tr>
        <?php 
                foreach($result as $rows):  
        ?>
        <tr>
            <?php $i++ ?>
            <td><?php echo "$i";?></td>
            <td>
                <img style="width: 100px;" src="img/<?php echo $rows['image']; ?>">
            </td>
            <td><?php echo $rows['title']; ?></td>
            <td><?php
                if ($rows['status']==1) {
                    echo "enabled";
                }else{
                    echo "disabled";
                }
            ?>
            </td>
           <td style="text-align: center;">
                <a href="index.php?action=show&id=<?php echo $rows['id']; ?>">Show</a> |
                <a href="index.php?action=Edit&id=<?php echo $rows['id']; ?>">Edit</a> |
                <a href="index.php?action=delete&id=<?php echo $rows['id']; ?>">Delete</a>
            </td>
                
        </tr>
        <?php endforeach; ?>
    </table>
    
    <label id="lblmess"></label>
    <form id="myform">
        <select id="list" name="select" onchange="formControler()">
        <option>Chọn</option>
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="50">50</option>
        <option value="100">All</option>
        </select>
    </form>
    
    
    <div class="pagination">
        <a href="index.php?page=<?php echo$page?>">&laquo;</a>
        <?php
            for ($i=1; $i <= $page; $i++) { 

        ?>
                <a href="index.php?page=<?php echo$i?>"><?php echo $i?></a> 
        <?php        
            }
        ?>
        <a href="index.php?page=<?php echo$page?>">&raquo;</a>
    </div>

    <script src="js/main.js"></script>
</body>
</html>