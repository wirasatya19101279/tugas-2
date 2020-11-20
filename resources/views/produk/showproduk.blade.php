<!DOCTYPE html>
<html>
    <head>
        <title>Latihan view 04</title>
    </head>
    <body>
        
        @if(count($produk)==1)
            <p>{{ "Jumlah Data Adalah Satu" }}</p>
        @elseif(count($produk)>1)
            <p>{{ "Jumlah Data Lebih Dari Satu" }}</p>

            @for($i=0;$i<count($produk);$i++)

            <p>No: {{$i}}; Nama produk: {{ $produk[$i] }}</p>

            @endfor 

        @else
            <p>Tidak Ada Data</p>
        @endif
    </body>
</html>