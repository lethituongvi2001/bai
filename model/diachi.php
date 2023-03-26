<?php
class DIACHI{
	
	// Thêm địa chỉ mới, trả về khóa của dòng mới thêm
	public function themdiachi($nguoidung_id,$diachi){
		$db = DATABASE::connect();
		try{
			$sql = "INSERT INTO diachi(nguoidung_id, diachi) VALUES(:nguoidung_id,:diachi)";
			$cmd = $db->prepare($sql);
			$cmd->bindValue(':nguoidung_id',$nguoidung_id);			
			$cmd->bindValue(':diachi',$diachi);			
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

}
?>
