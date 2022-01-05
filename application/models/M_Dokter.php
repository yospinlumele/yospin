<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDokter extends CI_Model{
    
    public function addDokter($username, $gender, $specialist, $bio, $telp, $email, $nama_dokter, $password, $picture){
        $query = "INSERT INTO dokter (nama_dokter, jk, spesialisasi, bio, no_telp, email, username, password, gambar) 
                        VALUES(?,?,?,?,?,?,?,?,?)"; // Seseuiakan dengan query yg dibuat
         $hasil = $this->db->query($query, array($nama_dokter, $gender, $specialist, $bio, $telp, $email, $username, $password, $picture));
        return $hasil;
    }
    public function addDokterWithoutPicture($username, $gender, $specialist, $bio, $telp, $email, $nama_dokter, $password){
        $query = "INSERT INTO dokter (nama_dokter, jk, spesialisasi, bio, no_telp, email, username, password)
                    VALUES (?,?,?,?,?,?,?,?)";
        $hasil = $this->db->query($query, array($nama_dokter, $gender, $specialist, $bio, $telp, $email, $username, $password));

        return $hasil;
    }
    public function editDokter($username, $gender, $specialist, $bio, $telp, $email, $nama_dokter, $password, $picture, $id){
        $query = "UPDATE dokter SET
                    nama_dokter = ?, 
                    jk = ?, 
                    spesialisasi = ?, 
                    bio = ?, 
                    no_telp = ?, 
                    email = ?, 
                    username = ?, 
                    password = ?,
                    gambar = ?
                    WHERE id_dokter = ?";
        $hasil = $this->db->query($query, array($nama_dokter, $gender, $specialist, $bio, $telp, $email, $username, $password, $picture, $id));
        return $hasil;
    }
    public function editDokterWithoutPicture($username, $gender, $specialist, $bio, $telp, $email, $nama_dokter, $password, $id){
        $query = "UPDATE dokter SET
                    nama_dokter = ?, 
                    jk = ?, 
                    spesialisasi = ?, 
                    bio = ?, 
                    no_telp = ?, 
                    email = ?, 
                    username = ?, 
                    password = ?
                    WHERE id_dokter = ?";
        $hasil = $this->db->query($query, array($nama_dokter, $gender, $specialist, $bio, $telp, $email, $username, $password, $id));
        return $hasil;
    }
    public function getDokter($id_dokter = null)
    {
        $this->db->select('*');
        $this->db->from('dokter');
        if ($id_dokter != null) {
            $this->db->where('id_dokter', $id_dokter);
        }
        $hasil = $this->db->get();
        return $hasil;
    }
    public function deleteDokter($id){
        $hasil = $this->db->query('DELETE FROM dokter WHERE id_dokter = ?', $id);
        return $hasil;
    }

}
© 2021 GitHub, Inc.
Terms
Privac