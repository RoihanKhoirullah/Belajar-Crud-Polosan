<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>

        <form action="{{ route('update-mahasiswa', $mahasiswa->id) }}" method="post">
        @csrf
            <table>
                <tr>
                    <td>nim</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" id="nim"  value="{{ $mahasiswa->nim}}" required>
                    </td>
                </tr>
                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama"  value="{{ $mahasiswa->nama}}" onkeypress="return event.charCode <48 || event.charCode >57" required>
                    </td>
                </tr>
                <tr>
                    <td>fakultas</td>
                    <td>:</td>
                    <td>
                        <select name="fakultas" id="fakultas">
                        <option required>{{ $mahasiswa->fakultas}}</option>
                            <option value="kedokteran">kedokteran</option>
                            <option value="ekonomi">ekonomi</option>
                            <option value="mipa">mipa</option>
                            <option value="teknik">teknik</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>jurusan</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="jurusan" id="jurusan"  value="{{ $mahasiswa->jurusan}}" required>
                    </td>
                </tr>
                <tr>
                    <td>ipk</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="ipk" id="ipk"  value="{{ $mahasiswa->ipk}}" required>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                    <button type="submit" class="btn btn-success">Update Data</button>
                    </td>
                </tr>
            </table>

          
        </form>
    
</body>
</html>