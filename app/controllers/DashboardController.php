<?php
class DashboardController extends Controller {
    public function index() {
        if (!isset($_SESSION['user_id'])) {
            $this->redirect('auth');
        }

        $transaksiModel = $this->model('Transaksi');
        
        $data = [
            'role' => $_SESSION['role'],
            'username' => $_SESSION['username'],
            'recent_transactions' => $transaksiModel->getRecentTransactions(5)
        ];

        if ($_SESSION['role'] == 'Owner') {
            $data['total_pendapatan'] = $transaksiModel->getTotalPendapatan();
            $data['total_cucian_selesai'] = $transaksiModel->getTotalStatus('Selesai') + $transaksiModel->getTotalStatus('Diambil');
            $data['cucian_baru'] = $transaksiModel->getTotalStatus('Antre');
            $this->view('dashboard/owner', $data);
        } else {
            $data['cucian_baru'] = $transaksiModel->getTotalStatus('Antre');
            $data['sedang_diproses'] = $transaksiModel->getTotalStatus('Proses');
            $data['siap_diambil'] = $transaksiModel->getTotalStatus('Selesai');
            $this->view('dashboard/admin', $data);
        }
    }
}
