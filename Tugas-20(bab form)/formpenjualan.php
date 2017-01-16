<center><table border="5" width="300px" height="100"></center>
  <center>
      <form method="POST" action="data.php">
        <tr>
          <td style="background:#20B2AA"><center><h3> "PENJUALAN" <h3></center>
          <center><h3>~ MIT Productions ~ <h3></center></td>
        </tr>
        <tr>
          <td style="background:#00FFFF">  Nama Pelanggan : <br>
            <input type="text" name="nama" placeholder="Masukkan Nama Anda" style="width:100%;background:#E6E6FA"">
          </td>
        </tr>
        <tr>
          <td style="background:#00FFFF"> Status Pelanggan: <br>
            <select name="status" style="width:100%;background:#20B2AA">
             <option value="kosong"> </option>
             <option value="Member"> ~ Member </option>
             <option value="New costumer"> ~ New Costumer  </option>
            <select>
          </td>
        </tr>
        <tr>
          <td style="background:#00FFFF"> Nama Barang : <br>
            <select name="barang" style="width:100%;background:#20B2AA">
             <option value="kosong"> </option>
             <option value="jam tangan"> ~ Jam tangan </option>
             <option value="sepatu"> ~ Sepatu </option>
             <option value="baju koko"> ~ Baju koko </option>
           </select>
          </td>
        </tr>
        <tr>
          <td style="background:#00FFFF"> Harga Barang : <br>
            <input type="text" name="harga" placeholder="Barang Anda" style="width:100%;background:#E6E6FA"></input>
          </td>
        <tr>
          <td style="background:#00FFFF"> Quantity : <br>
            <input type="text" name="quantity" placeholder="Total belanja" style="width:100%;background:#E6E6FA""></input>
          </td>
        </tr>
        <tr>
          <td style="background:#00FFFF"> Pilih Kota Pengiriman : <br>
           <select name="kota" style="width:100%;background:#20B2AA">
            <option value="kosong"> </option>
            <option value="jakarta"> ~ Jakarta </option>
            <option value="bandung"> ~ Bandung </option>
            <option value="surabaya"> ~ Surabaya </option>
          <select>
          </td>
        </tr>
        <tr>
          <td style="background:#00FFFF">
            <center><button name="submit"> Lanjutkan Pembelian </button>
          </center></td>
        </tr>
      </center>
  </table>
