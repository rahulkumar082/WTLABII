<?php
        $state=intval($_GET['state']);

        $con=mysqli_connect('localhost:3306','rahul','','country');
        $sql="select cityID,cityName from city where stateID='$state';";
        $result=mysqli_query($con,$sql);
?>
<select name="city_name">
        <option>Select City</option>
<?php
        while($row=mysqli_fetch_array($result))
        { ?>
        <option value=<?php echo $row['cityID']?>><?php echo $row['cityName']?></option>
        <?php } ?>
</select>
