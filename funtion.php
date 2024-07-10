<?php
$apaaja = mysqli_connect("localhost","root","","web_css");

function query($query) {
    global $apaaja;
    $result = mysqli_query($apaaja,$query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    $kategori_id = htmlspecialchars($data['kategori_id']);
    $data_kategori = htmlspecialchars($data['data_kategori']);
    $tanggal_css = htmlspecialchars($data['tanggal_css']);

    global $apaaja;
    $query="INSERT into kategori_css values('','$kategori_id','$data_kategori','$tanggal_css')";
    mysqli_query($apaaja,$query);
    return mysqli_affected_rows($apaaja);
}
function tambah2($data){
    $kategori_id = htmlspecialchars($data['kategori_id']);
    $list_css = htmlspecialchars($data['list_css']);
    $link_css = htmlspecialchars($data['link_css']);

    global $apaaja;
    $query="INSERT into list_css values('','$kategori_id','$list_css','$link_css')";
    mysqli_query($apaaja,$query);
    return mysqli_affected_rows($apaaja);
}
function hapus($id){
    global $apaaja;
    mysqli_query($apaaja,"DELETE FROM kategori_css WHERE id = $id");
    return mysqli_affected_rows($apaaja);
}
function hapus2($id){
    global $apaaja;
    mysqli_query($apaaja,"DELETE FROM list_css WHERE id = $id");
    return mysqli_affected_rows($apaaja);
}
function ubah($data){
   
    $id               =($data['id']);
    $kategori_id      = htmlspecialchars($data['kategori_id']);
    $data_kategori    = htmlspecialchars($data['data_kategori']);
    $tanggal_css      = htmlspecialchars($data['tanggal_css']);
    global $apaaja;
    $query="UPDATE kategori_css SET 
            kategori_id   = '$kategori_id',
            data_kategori = '$data_kategori',
            tanggal_css   = '$tanggal_css'
            WHERE id = $id
            ";
    mysqli_query($apaaja,$query);
    return mysqli_affected_rows($apaaja);
}
function ubah2($data){
   
    $id               =($data['id']);
    $kategori_id      = htmlspecialchars($data['kategori_id']);
    $list_css         = htmlspecialchars($data['list_css']);
    $link_css         = htmlspecialchars($data['link_css']);

    global $apaaja;
    $query="UPDATE list_css SET 
            kategori_id = '$kategori_id',
            list_css     = '$list_css',
            link_css     = '$link_css'
            WHERE id = $id
            ";
    mysqli_query($apaaja,$query);
    return mysqli_affected_rows($apaaja);
}

function registrasi($data){
    global $apaaja;

    $username = strtolower (stripslashes($data["username"]));
    $password = mysqli_real_escape_string($apaaja,$data["password"]) ;
    $password2 = mysqli_real_escape_string($apaaja,$data["password2"]) ;


    $result = mysqli_query($apaaja, "SELECT username FROM user 
                    WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar')
                </script>";
        return false;
    }


    if( $password !== $password2 ){
        echo "<script>
                alert('konfirmasi password tidak sesuai');
                </script>";
                return false;
    }
        
       mysqli_query($apaaja,"INSERT INTO user VALUES('','$username','$password')");

       return mysqli_affected_rows($apaaja);
}
?>
