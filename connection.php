<?php
/**
 * Kelas untuk membuka koneksi ke Server dan mengakses database
 */
class SQL
{
	public $db_connection;			
	function __construct()
	{
		$this->servername = "10.100.70.70\\AKREDITASI2020";
		$this->username = "guestManPro";
		$this->password  = "Testing123";
		$this->dbname = "Akreditasi2020";
		$this->db_connection_info = array(
			"UID" => $this->username,
			"PWD" => $this->password,
			"Database" => $this->dbname
		);
	}
	/** 
	 * Function untuk memulai koneksi ke server untuk mengakses database
	 * @return	bool|(bool|mixed)[]	Kembalian berupa boolean true apabila koneksi berhasil tersambung, atau
	 * 									kembalian berupa array yang berisi boolean(false) dan pesan error
	 */
	function openConnection()
	{
		$this->db_connection = sqlsrv_connect($this->servername, $this->db_connection_info);
		$success = true;
		if ($this->db_connection) {
			//echo "Connection established.<br />";
			return $success;
		} else {
			// echo "Connection could not be established.<br />";
			// die(print_r(sqlsrv_errors(), true));
			return [$success, "message"=>sqlsrv_errors()];
		}
	}
	/** 
	 *Function untuk memanggil stored procedure yang ada pada Database
	 * 	@param	string	$query	Query eksekusi stored procedure yang ingin dijalankan
	 *	@param	array	$param	Parameter yang akan disertakan sesuai dengan query
	 *
	 *	@return array	Tabel hasil eksekusi query
	 */
	function executeStoredProcedure($query, $param)
	{
		$this->openConnection();
		$nocount = sqlsrv_query($this->db_connection, "SET NOCOUNT ON");
		$statement = sqlsrv_prepare($this->db_connection, $query, $param);
		$query_result = sqlsrv_execute($statement);
		$result = [];
		while ($row = sqlsrv_fetch_array($statement, SQLSRV_FETCH_BOTH)) {
			if ($row === false) {
				if (($errors = sqlsrv_errors()) != null) {
					foreach ($errors as $error) {
						echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
						echo "code: " . $error['code'] . "<br />";
						echo "message: " . $error['message'] . "<br />";
					}
				}
			}
			$result[] = $row;
		}
		sqlsrv_close($this->db_connection);
		return $result;
	}
	/**
	 * 	@param	string	$query	Query select yang akan dijalankan
	 *	@param	array	$param	Parameter yang akan disertakan sesuai dengan query
	 *
	 *	@return array	Tabel hasil eksekusi query 
	 */
	function executeSelectQuery($query, $param)
	{
		$this->openConnection();
		$statement = sqlsrv_prepare($this->db_connection, $query, $param);
		$query_result = sqlsrv_execute($statement);
		while ($row = sqlsrv_fetch_array($statement, SQLSRV_FETCH_NUMERIC)) {
			if ($row === false) {
				if (($errors = sqlsrv_errors()) != null) {
					foreach ($errors as $error) {
						echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
						echo "code: " . $error['code'] . "<br />";
						echo "message: " . $error['message'] . "<br />";
					}
				}
			}
			$result[] = $row;
		}
		sqlsrv_close($this->db_connection);
		return $result;
	}
}