<?php 
require '../model/dashboard.model.php';

class DashboardView extends DashboardModel{
    protected $data = array();

    public function dashboardData(){
        $result = $this->dashboard();

        foreach ($result as $inner) {
            if (isset($inner['step']) && $inner['step'] === 5) {
                $data[] = $inner;
            }
        }

        return $data;
    }
}
?>