<?php
class DONHANG{
	
	// Thêm đơn hàng mới, trả về khóa của dòng mới thêm
	public function themdonhang($nguoidung_id,$diachi_id,$tongtien){
		$db = DATABASE::connect();
		try{
			$sql = "INSERT INTO donhang(nguoidung_id, diachi_id, tongtien) 
					VALUES(:nguoidung_id,:diachi_id,:tongtien)";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':nguoidung_id',$nguoidung_id);			
			$cmd->bindValue(':diachi_id',$diachi_id);
			$cmd->bindValue(':tongtien',$tongtien);
			$cmd->execute();
			$id = $db->lastInsertId();
			return $id;
		}
		catch(PDOException $e){
			$error_message=$e->getMessage();
			echo "<p>Lỗi truy vấn: $error_message</p>";
			exit();
		}
	}
	// Đọc ds đơn hàng của 1 khách
	public function docdonhang($nguoidung_id ){
		$db = DATABASE::connect();
		try{
			$sql ="SELECT *, ct.id as idct FROM donhang dh, nguoidung nd, donhangct ct, diachi dc WHERE nd.id = dh.nguoidung_id and ct.donhang_id = dh.id and dc.id = dh.diachi_id and nd.email=:id  ORDER BY dh.id";
			$cmd = $db->prepare($sql);
            $cmd->bindValue(":id", $nguoidung_id);
            $cmd->execute();
            $result = $cmd->fetchAll();             
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
	public function xacnhandonhang($nguoidung_id,$id){
		$db = DATABASE::connect();
		try{
			var_dump($id);
			$sql ="UPDATE `donhangct` SET xacnhan= 1 WHERE id = :id";
			$cmd = $db->prepare($sql);
            $cmd->bindValue(":id", $id);
            $result =  $cmd->execute();            
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
			
    }
	public function doctatcadonhang(){
		$db = DATABASE::connect();
		try{
			$sql ="SELECT * ,ct.id as ctid,dh.id as dhid FROM nguoidung nd, donhang dh, donhangct ct, diachi dc WHERE nd.id = dh.nguoidung_id and ct.donhang_id = dh.id and dc.id = dh.diachi_id ORDER BY dh.id";
			$cmd = $db->prepare($sql);
            // $cmd->bindValue(":id", $nguoidung_id);
            $cmd->execute();
            $result = $cmd->fetchAll();             
            return $result;
        }
        catch(PDOException $e){
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }

}
?>
