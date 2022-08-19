<html>
    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    <body>
        <center><h2>Biodata</h2></center>
        <div>
            <form method=POST action="output.php">
                <label for="namalengkap">Nama Lengkap</label>
                <input type="text" id="namalengkap" name="namalengkap" placeholder="Nama Lengkap..">

                <label for="jeniskelamin">Jenis Kelamin</label>
                <select id="jeniskelamin" name="jeniskelamin">
                <option value="laki-laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
                </select>
                
                <label for="agama">Agama</label>
                <input type="text" id=" agama" name="agama" placeholder="Agama..">
                
                <label for="tempat">Tempat Lahir</label>
                <input type="text" id="tempatlahir" name="tempatlahir" placeholder="Tempat Lahir..">
                <br><br>
                <label for="tanggallahir">Tanggal Lahir</label>
                <input type="date" id="tanggallahir" name="tanggallahir" placeholder="Tanggal Lahir..">
                <br>
                <br>
                <label for="hobi">Hobi</label><br>
                <input type="checkbox" name="renang" value="renang">
                <label for="renang">Renang</label>
                <input type="checkbox" name="nyanyi" value="nyanyi">
                <label for="nyanyi">Nyanyi</label>
                <input type="checkbox" name="menggambar" value="menggambar">
                <label for="menggambar">Menggambar</label>
                <input type="checkbox" name="other" value="other">
                <label for="other">Other..</label> <br>
                <br>
                <label for="cita-cita">Cita-cita</label>
                <input type="text" id="cita-cita" name="cita-cita" placeholder="Cita-cita..">

                <label for="umur">Umur</label>
                <input type="text" id="umur" name="umur" placeholder="Umur..">

                <label for="asalsekolah">Asal Sekolah</label>
                <input type="text" id="asalsekolah" name="asalsekolah" placeholder="Asal Sekolah..">
                <input type="submit" value="Submit">
            </form>
        </div>

    </body>
</html>
