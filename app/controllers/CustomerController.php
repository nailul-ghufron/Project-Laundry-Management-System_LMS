<?php
class CustomerController extends Controller {
    public function create() {
        if (!isset($_SESSION['user_id'])) {
            $this->redirect('auth');
        }

        $data = [
            'title' => 'Pristine LMS - Tambah Pelanggan'
        ];

        $this->view('customer/create', $data);
    }

    public function store() {
        if (!isset($_SESSION['user_id']) || $_SERVER['REQUEST_METHOD'] !== 'POST') {
            $this->redirect('auth');
        }

        $nama = $_POST['nama_pelanggan'] ?? '';
        $nomor_telepon = $_POST['nomor_telepon'] ?? '';
        $alamat = $_POST['alamat'] ?? '';

        if (!empty($nama) && !empty($nomor_telepon)) {
            $pelangganModel = $this->model('Pelanggan');
            $pelangganModel->addPelanggan($nama, $nomor_telepon, $alamat);
            
            // Redirect back to new order or wherever appropriate
            $this->redirect('transaction/create');
        } else {
            $data = [
                'title' => 'Pristine LMS - Tambah Pelanggan',
                'error' => 'Nama dan Nomor Telepon wajib diisi.'
            ];
            $this->view('customer/create', $data);
        }
    }
}
