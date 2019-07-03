<?php include 'head.php';?>
  <div id="content">
    <div id="order">
    <?php
    if(!empty($_POST)){
      $orderid = $_POST['orderid'];
      $bankAsal = $_POST['bankAsal'];
      $Nama = $_POST['Nama'];
      $bankTujuan = $_POST['bankTujuan'];
      $nominal = $_POST['nominal'];
      $catatan = $_POST['catatan'];

      $ins = "INSERT INTO `transfer`(`no`, `oederid`, `bankAsal`, `Nama`, `bankTujuan`, `nominal`, `catatan`)
      VALUES (NULL,'$orderid','$bankAsal','$Nama','$bankTujuan','$nominal','$catatan')";

       mysql_query($ins);
       header('Location:transfer.php');

    }else{
      ?>
      <center>
        <br/>
      <h1>Konfirmasi Pembayaran</h1>
      <hr/>
      <br/>

    </center>
      <form method="post" target="">
      <table align="center">
        <tr>
          <th>Order Id</th><td> : </td><td><input type="text" name="orderid" placeholder="0" size="3" /></td>
        </tr>
        <tr>
          <th>Bank Asal</th><td> : </td><td><input type="text" name="bankAsal" placeholder="Bank ..." /></td>
        </tr>
        <tr>
          <th>Atas Nama</th><td> : </td><td><input type="text" name="nama" placeholder="Atas Nama ..." /></td>
        </tr>
        <tr>
          <th>Bank Tujuan</th><td> : </td><td>
            <input type="radio" name="tujuan" value="Bank BNI" />Bank BNI
            <input type="radio" name="tujuan" value="Bank Mandiri" />Bank Mandiri
            </td>
        </tr>
        <tr>
          <th>Nominal</th><td> : </td><td>Rp. <input type="text" name="nominal" placeholder="0"/></td>
        </tr>
        <tr>
          <th>Catatan</th><td> : </td><td><textarea name="catatan" placeholder="Catatan ..." rows="2" cols="20"></textarea></td>
        </tr>
        <tr>
          <td colspan="3" align="center"><input type="submit" value="Konfirmasi !" name="konfirmasi" /></td>
        </tr>
      </table>
    </form>

      <?php } ?>
    </div>
  </div>
<?php include 'foot.php';?>
