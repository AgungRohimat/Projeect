<?php
    class Obat extends Database
    {

        public function index()
        {
            $obat = mysqli_query($this->koneksi, "select * from tb_obat");

            return $obat;
        }
        public function create($no,$jenis,$bentuk,$harga)
        {
            mysqli_query($this->koneksi,
                        "insert into tb_obat values (null,'$no','$jenis','$bentuk','$harga')"
                    );

        }
        public function show($id)
        {
            $obat = mysqli_query($this->koneksi, 
                        "select * from tb_obat where id='$id'"
                    );

            return $obat;
        }
        public function edit($id)
        {
            $obat = mysqli_query($this->koneksi, 
                        "select * from tb_obat  where id='$id'"
                    );

            return $obat;
        }
        public function update($id,$no,$jenis,$bentuk,$harga)
        {
            mysqli_query(
                $this->koneksi,
                "update tb_obat set nama_obat='$no',jenis_obat='$jenis',bentuk_obat='$bentuk',harga='$harga' where kd_obat='$id'"
            );
        }
        public function delete($id)
        {
            mysqli_query($this->koneksi, "delete from tb_obat where id='$id'"
                    );

        }
        
    }
?>