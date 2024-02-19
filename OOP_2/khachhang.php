---------khachhang.php-----------
<?php
include("connection.php");
class KhachHang
{
    public $makhach;
    public $tenkhach;
    public $tuoi;
    public $sodienthoai;

    public function __construct($mk, $tk, $t, $sdt)
    {
        $this->makhach = $mk;
        $this->tenkhach = $tk;
        $this->tuoi = $t;
        $this->sodienthoai = $sdt;
    }
    public function __destruct()
    {
        echo "Object destructed";
    }

    public static function Add(KhachHang $khach)
    {
        $success = false;
        $conn = DBConnection::Connect();
        $sql = "INSERT INTO tbkhachhang(makhach,tenkhach,tuoi,sodienthoai) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssis", $khach->makhach, $khach->tenkhach, $khach->tuoi, $khach->sodienthoai);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success;
    }
    public static function Edit(KhachHang $khach)
    {
        $success = false;
        $conn = DBConnection::Connect();
        $sql = "UPDATE tbkhachhang SET tenkhach=?,tuoi=? WHERE makhach=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sis", $khach->tenkhach, $khach->tuoi, $khach->makhach);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success;
    }

    public static function Delete(string $makhach)
    {
        $success = false;
        $conn = DBConnection::Connect();
        $sql = "DELETE FROM tbkhachhang WHERE makhach=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $makhach);
        $success = $stmt->execute();
        $stmt->close();
        $conn->close();
        return $success;
    }

    public static function GetAll()
    {
        $dsKhachHang = array();
        $conn = DBConnection::Connect();
        $sql = "SELECT * FROM tbkhachhang";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            $dsKhachHang[] = new KhachHang(
                $row["makhach"],
                $row["tenkhach"],
                $row["tuoi"],
                $row["sodienthoai"]
            );
        }
        $conn->close();
        return $dsKhachHang;
    }

    public static function Search(string $keyword)
    {
        $dsKhachHang = array();
        $conn = DBConnection::Connect();
        $sql = "SELECT * FROM tbkhachhang WHERE makhach like ? OR tenkhach like ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", "%" . $keyword . "%", "%" . $keyword . "%");
        $result = $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {

            $dsKhachHang[] = new KhachHang(
                $row["makhach"],
                $row["tenkhach"],
                $row["tuoi"],
                $row["sodienthoai"]
            );
        }
        $conn->close();
        return $dsKhachHang;
    }

    public static function Get(string $makhach)
    {
        $conn = DBConnection::Connect();
        $sql = "SELECT * FROM tbkhachhang WHERE makhach=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $makhach);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            $khachhang = new KhachHang(
                $row["makhach"],
                $row["tenkhach"],
                $row["tuoi"],
                $row["sodienthoai"]
            );
        }
        $stmt->close();
        $conn->close();
        return $khachhang;
    }
}
?>