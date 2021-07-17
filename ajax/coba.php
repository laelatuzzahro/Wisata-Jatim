  <table class="table table striped">
    <tr style="text-align: center; padding: 5px;">
        <th>NO </th>
        <th> Kategori </th>
        <th> Kota </th>
        <th> alamat </th>
        <th> Nama </th>
        <th> Gambar </th>
        <th>Tanggal Post</th>
        <th colspan="1"> Aksi </th>
    </tr>
    
    <?php
        $keyword=$_GET['keyword'];
        var_dump($keyword);
        $conn = new mysqli('localhost','root','','situs');
        $sql = mysqli_query($conn, "select * from data where kota like '%$keyword%'") or die (mysqli_error($conn));
        $query=mysqli_fetch_array($sql);
        
        while ($query=mysqli_fetch_array($sql)) 
        {
            ?>
                <tr>
                    <td> <?php echo $query['no']; ?> </td>
                    <td> <?php echo $query['kategori']; ?> </td>
                    <td> <?php echo $query['kota']; ?> </td>
                    <td> <?php echo $query['alamat']; ?> </td>
                    <td> <?php echo $query['nama']; ?> </td>
                    <td> <img src="<?php echo $query['gambar']; ?>" width = 100px height=50px> </td>
                    <td> <?php echo $query['post_tgl']; ?> </td>
                    <td><a href="edit.php?no=<?php echo $data['no']; ?>"><button class="btn btn-secondary" type="button" >Edit</button></a></td>
    				<td><a href="hapus.php?no=<?php echo $data['no']; ?>"><button class="btn btn-secondary" type="button" >Delete</button></a></td>
                </tr>
        <?php } ?>
    </table>