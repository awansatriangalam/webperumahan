<?php
class Chart_model extends CI_Model {
 
	public function chart()
	{
		$sql= $this->db->query("SELECT ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=1)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'Januari',
		ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=2)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'Februari',
		ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=3)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'Maret',
		ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=4)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'April',
		ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=5)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'Mei',
		ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=6)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'Juni',
		ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=7)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'Juli',
		ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=8)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'Agustus',
		ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=9)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'September',
		ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=10)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'Oktober',
		ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=11)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'November',
		ifnull((SELECT count(id_pesan) FROM (transaksi) WHERE (status_transaksi=1) AND ((Month(tanggal_transaksi)=12)AND (YEAR(tanggal_transaksi)=2021))),0) AS 'Desember' from transaksi GROUP BY year(tanggal_transaksi)");
		
		return $sql;
	}
 
}