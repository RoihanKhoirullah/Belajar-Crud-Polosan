<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<body>

        Selamat Datang, {{ auth()->user()->name }}
        <br>
        <br>

        <form action="{{ route('simpan-mahasiswa') }}" method="post">
        @csrf
            <table>
                <tr>
                    <td>nim</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" id="nim" required>
                    </td>
                </tr>
                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama" onkeypress="return event.charCode <48 || event.charCode >57" required>
                    </td>
                </tr>
                <tr>
                    <td>fakultas</td>
                    <td>:</td>
                    <td>
                        <select name="fakultas" id="fakultas" required>
                        <option value="" >Pilih Fakultas</option>
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
                        <input type="text" name="jurusan" id="jurusan" required>
                    </td>
                </tr>
                <tr>
                    <td>ipk</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="ipk" id="ipk">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit">Simpan</button>
                    </td>
                </tr>
            </table>

            <table border="1" cellspacing="0" cellpadding="1" >
                <tr>
                    <td align="center">NO</td>
                    <td align="center">nim</td>
                    <td align="center">nama</td>
                    <td align="center">fakultas</td>
                    <td align="center">jurusan</td>
                    <td align="center">ipk</td>
                    <td align="center">aksi</td>
                </tr>
                @php
                $no = 1;
                @endphp
                @foreach ($mahasiswa as $item)
                    <td align="center">{{ $no++ }}</td>
                    <td align="center">{{ $item->nim }}</td>
                    <td align="center">{{ $item->nama }}</td>
                    <td align="center">{{ $item->fakultas }}</td>
                    <td align="center">{{ $item->jurusan }}</td>
                    <td align="center">{{ $item->ipk }}</td>
                    <td>

                    <a href="{{ route('edit-mahasiswa', $item->id) }}">edit</i> </a> 

                    <a href="{{ route('delete-mahasiswa', $item->id) }}">delete</i> </a> 

                    </td>
                    
                @endforeach
            </table>
        </form>
    
</body>
</html>