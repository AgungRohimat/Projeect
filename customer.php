<?php
    class Customer extends Database
    {

        public function index()
        {
            $customer = mysqli_query($this->koneksi, "select * from tb_customer");

            return $customer;
        }
        public function create($nama,$alamat)
        {
            mysqli_query($this->koneksi,
                        "insert into tb_customer values (null,'$nama','$alamat')"
                    );

        }
        public function show($kd)
        {
            $customer = mysqli_query($this->koneksi, 
                        "select * from tb_customer where id='$kd'"
                    );

            return $customer;
        }
        public function edit($kd)
        {
            $customer = mysqli_query($this->koneksi, 
                        "select * from tb_custommer  where kd_customer='$kd'"
                    );

            return $customer;
        }
        public function update($kd,$nama,$alamat)
        {
            mysqli_query(
                $this->koneksi,
                "update tb_custommer set alamat='$alamat', nama='$nama'  where kd_customer='$kd'"
            );
        }
        public function delete($kd)
        {
            mysqli_query($this->koneksi, "delete from tb_customer where kd_customer='$kd'"
                    );

        }
        
    }
?>