<!DOCTYPE html>
<html>
<head>
    <title>Tugas UTS</title>
</head>
<body>

    <h2><b>Isi Table TUGAS UTS</b></h2>
    <table border='1'>
    <thead>
        <tr>
            <th>No</th>
            <th>kategori</th>
            <th>keterangan</th>
          
        </tr>
    </thead>
    <tbody>
    @foreach($tugasuts as $i=>$p)
    <tr>
        <td>{{$i+1}}</td>
        <td>{{$p->kategori}}</td>
        <td>{{$p->keterangan}}</td>
        
    </tr>
    @endforeach
    </tbody>

    </table>

</body>
</html>