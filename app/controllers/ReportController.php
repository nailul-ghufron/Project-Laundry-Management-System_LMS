<?php
class ReportController extends Controller {
    public function index() {
        if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'Owner') {
            $this->redirect('auth');
        }

        $transaksiModel = $this->model('Transaksi');
        $data = [
            'title' => 'Pristine LMS - Laporan Pendapatan',
            'total_pendapatan' => $transaksiModel->getTotalPendapatan(),
            'transactions' => $transaksiModel->getRecentTransactions(100) 
        ];
        
        $this->view('report/index', $data);
    }
}
