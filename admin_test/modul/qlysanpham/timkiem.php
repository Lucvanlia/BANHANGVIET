<?php

$search = $_POST['search'];
if( $_POST['search'] == '')
{
    echo "
    <script>
        alert('Bạn chưa nhập thông tin tìm kiếm vui lòng quay lại');
    </script>
    ";
}
if(isset($_POST['tim']))
{
     $sql_timkiem = "SELECT * FROM xuatxu WHERE xuatxu.Tenxuatxu like '%".$search."%'";
     $query_timkiem = mysqli_query($link,$sql_timkiem);
}
?>
<div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form method="post">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <p class="h3" align="top"> Thông tin tìm: <?php echo $_POST['search']?></p>
                                    <thead>
                                    <tr>
                                            <th>STT</th>
                                            <th>Tên xuất xứ</th>
                                            <th>Chỉnh sửa </th>
                                            <th>Xóa</th>
                                        </tr>
                                    <?php
                                        $stt  = 0;
                                        while ($row=mysqli_fetch_array($query_timkiem)) 
                                        {
                                            $stt = $stt + 1;
                                        ?>                                      
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $stt ?></td>
                                            <td><?php echo $row['tenxuatxu']; ?></td>
                                            <td><a href="?action=quanlyxuatxu&query=sua&id=<?php echo $row['id_xuatxu'];?>" ><i class="fa-solid fa-pen-to-square"></i></a></td>
                                            <td><input name="chkmh[]" type="checkbox" value="<?php echo $row['id_xuatxu']; ?>"></td>
                                        </tr>
                                        <?php	
                                                }//kt while 
                                                ?>
                                                                <div class="form-group"><a class="btn btn-danger" href="index.php?action=quanlyxuatxu&query=them">Trở lại</a></div>
                                    </tbody>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
                
