
<html>
<body>
<?php foreach ($editFetchDatas as $editData ): ?>
    <form action="../index.php" method="post">
        <input name="editId"  value="<?= $editData->id;?>" type="number" hidden>
        <input name="editFirstNum"  value="<?= $editData->first_number;?>" type="number" placeholder="first_num">
        <input name="editSecondNum"  value="<?= $editData->second_number;?>" type="number"  placeholder="second_num">
        <select name="editOperator">
            <option value="+">Addition</option>
            <option value="-">Subtraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
        </select>
        <input name="result"  value="<?= $editData->result;?>" type="number"  placeholder="result">
        <input type="hidden" name="action" value="update">
        <button type="submit" name="update">Update</button>
    </form>
<?php endforeach; ?>
</body>
</html>
<?php
//include 'Model/userModel.php';
//?>