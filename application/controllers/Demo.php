<?php

class Demo extends CI_Controller{

	public function index() {
		$this->load->model("demo_model"); 
        $data = $this->demo_model->get_data();
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th><th>Name</th>";
        echo "</thead>";
        echo "<tbody>";
        foreach($data->result() as $e) {
            echo "<tr>";
            echo "<td>$e->id_jenis</td>";
            echo "<td>$e->nama</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
	}
}

?>